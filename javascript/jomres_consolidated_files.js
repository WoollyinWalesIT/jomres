/***
 *
 * Jomres Note
 * If you need to make any changes to the javascript in the file, please remember that you will need to minify the javascript afterwards. We use http://jscompress.com/ to minify this file.
 *
 */


/**
 * Copyright (c) 2005 - 2010, James Auldridge
 * All rights reserved.
 *
 * Licensed under the BSD, MIT, and GPL (your choice!) Licenses:
 *  http://code.google.com/p/cookies/wiki/License
 *
 */
var jaaulde = window.jaaulde || {};
jaaulde.utils = jaaulde.utils || {};
jaaulde.utils.cookies = (function () {
	var resolveOptions, assembleOptionsString, parseCookies, constructor, defaultOptions = {
		expiresAt: null,
		path: '/',
		domain: null,
		secure: false
	};
	/**
	 * resolveOptions - receive an options object and ensure all options are present and valid, replacing with defaults where necessary
	 *
	 * @access private
	 * @static
	 * @parameter Object options - optional options to start with
	 * @return Object complete and valid options object
	 */
	resolveOptions = function (options) {
		var returnValue, expireDate;

		if (typeof options !== 'object' || options === null) {
			returnValue = defaultOptions;
		}
		else {
			returnValue = {
				expiresAt: defaultOptions.expiresAt,
				path: defaultOptions.path,
				domain: defaultOptions.domain,
				secure: defaultOptions.secure
			};

			if (typeof options.expiresAt === 'object' && options.expiresAt instanceof Date) {
				returnValue.expiresAt = options.expiresAt;
			}
			else if (typeof options.hoursToLive === 'number' && options.hoursToLive !== 0) {
				expireDate = new Date();
				expireDate.setTime(expireDate.getTime() + ( options.hoursToLive * 60 * 60 * 1000 ));
				returnValue.expiresAt = expireDate;
			}

			if (typeof options.path === 'string' && options.path !== '') {
				returnValue.path = options.path;
			}

			if (typeof options.domain === 'string' && options.domain !== '') {
				returnValue.domain = options.domain;
			}

			if (options.secure === true) {
				returnValue.secure = options.secure;
			}
		}

		return returnValue;
	};
	/**
	 * assembleOptionsString - analyze options and assemble appropriate string for setting a cookie with those options
	 *
	 * @access private
	 * @static
	 * @parameter options OBJECT - optional options to start with
	 * @return STRING - complete and valid cookie setting options
	 */
	assembleOptionsString = function (options) {
		options = resolveOptions(options);

		return (
			( typeof options.expiresAt === 'object' && options.expiresAt instanceof Date ? '; expires=' + options.expiresAt.toGMTString() : '' ) +
				'; path=' + options.path +
				( typeof options.domain === 'string' ? '; domain=' + options.domain : '' ) +
				( options.secure === true ? '; secure' : '' )
			);
	};
	/**
	 * parseCookies - retrieve document.cookie string and break it into a hash with values decoded and unserialized
	 *
	 * @access private
	 * @static
	 * @return OBJECT - hash of cookies from document.cookie
	 */
	parseCookies = function () {
		var cookies = {}, i, pair, name, value, separated = document.cookie.split(';'), unparsedValue;
		for (i = 0; i < separated.length; i = i + 1) {
			pair = separated[i].split('=');
			name = pair[0].replace(/^\s*/, '').replace(/\s*$/, '');

			try {
				value = decodeURIComponent(pair[1]);
			}
			catch (e1) {
				value = pair[1];
			}

			if (typeof JSON === 'object' && JSON !== null && typeof JSON.parse === 'function') {
				try {
					unparsedValue = value;
					value = JSON.parse(value);
				}
				catch (e2) {
					value = unparsedValue;
				}
			}

			cookies[name] = value;
		}
		return cookies;
	};

	constructor = function () {
	};

	/**
	 * get - get one, several, or all cookies
	 *
	 * @access public
	 * @paramater Mixed cookieName - String:name of single cookie; Array:list of multiple cookie names; Void (no param):if you want all cookies
	 * @return Mixed - Value of cookie as set; Null:if only one cookie is requested and is not found; Object:hash of multiple or all cookies (if multiple or all requested);
	 */
	constructor.prototype.get = function (cookieName) {
		var returnValue, item, cookies = parseCookies();

		if (typeof cookieName === 'string') {
			returnValue = ( typeof cookies[cookieName] !== 'undefined' ) ? cookies[cookieName] : null;
		}
		else if (typeof cookieName === 'object' && cookieName !== null) {
			returnValue = {};
			for (item in cookieName) {
				if (typeof cookies[cookieName[item]] !== 'undefined') {
					returnValue[cookieName[item]] = cookies[cookieName[item]];
				}
				else {
					returnValue[cookieName[item]] = null;
				}
			}
		}
		else {
			returnValue = cookies;
		}

		return returnValue;
	};
	/**
	 * filter - get array of cookies whose names match the provided RegExp
	 *
	 * @access public
	 * @paramater Object RegExp - The regular expression to match against cookie names
	 * @return Mixed - Object:hash of cookies whose names match the RegExp
	 */
	constructor.prototype.filter = function (cookieNameRegExp) {
		var cookieName, returnValue = {}, cookies = parseCookies();

		if (typeof cookieNameRegExp === 'string') {
			cookieNameRegExp = new RegExp(cookieNameRegExp);
		}

		for (cookieName in cookies) {
			if (cookieName.match(cookieNameRegExp)) {
				returnValue[cookieName] = cookies[cookieName];
			}
		}

		return returnValue;
	};
	/**
	 * set - set or delete a cookie with desired options
	 *
	 * @access public
	 * @paramater String cookieName - name of cookie to set
	 * @paramater Mixed value - Any JS value. If not a string, will be JSON encoded (http://code.google.com/p/cookies/wiki/JSON); NULL to delete
	 * @paramater Object options - optional list of cookie options to specify
	 * @return void
	 */
	constructor.prototype.set = function (cookieName, value, options) {
		if (typeof options !== 'object' || options === null) {
			options = {};
		}

		if (typeof value === 'undefined' || value === null) {
			value = '';
			options.hoursToLive = -8760;
		}

		else if (typeof value !== 'string') {
			if (typeof JSON === 'object' && JSON !== null && typeof JSON.stringify === 'function') {
				value = JSON.stringify(value);
			}
			else {
				throw new Error('cookies.set() received non-string value and could not serialize.');
			}
		}


		var optionsString = assembleOptionsString(options);

		document.cookie = cookieName + '=' + encodeURIComponent(value) + optionsString;
	};
	/**
	 * del - delete a cookie (domain and path options must match those with which the cookie was set; this is really an alias for set() with parameters simplified for this use)
	 *
	 * @access public
	 * @paramater MIxed cookieName - String name of cookie to delete, or Bool true to delete all
	 * @paramater Object options - optional list of cookie options to specify ( path, domain )
	 * @return void
	 */
	constructor.prototype.del = function (cookieName, options) {
		var allCookies = {}, name;

		if (typeof options !== 'object' || options === null) {
			options = {};
		}

		if (typeof cookieName === 'boolean' && cookieName === true) {
			allCookies = this.get();
		}
		else if (typeof cookieName === 'string') {
			allCookies[cookieName] = true;
		}

		for (name in allCookies) {
			if (typeof name === 'string' && name !== '') {
				this.set(name, null, options);
			}
		}
	};
	/**
	 * test - test whether the browser is accepting cookies
	 *
	 * @access public
	 * @return Boolean
	 */
	constructor.prototype.test = function () {
		var returnValue = false, testName = 'cT', testValue = 'data';

		this.set(testName, testValue);

		if (this.get(testName) === testValue) {
			this.del(testName);
			returnValue = true;
		}

		return returnValue;
	};
	/**
	 * setOptions - set default options for calls to cookie methods
	 *
	 * @access public
	 * @param Object options - list of cookie options to specify
	 * @return void
	 */
	constructor.prototype.setOptions = function (options) {
		if (typeof options !== 'object') {
			options = null;
		}

		defaultOptions = resolveOptions(options);
	};

	return new constructor();
})();

(function () {
	if (window.jQuery) {
		(function ($) {
			$.cookies = jaaulde.utils.cookies;

			var extensions = {
				/**
				 * $( 'selector' ).cookify - set the value of an input field, or the innerHTML of an element, to a cookie by the name or id of the field or element
				 *                           (field or element MUST have name or id attribute)
				 *
				 * @access public
				 * @param options OBJECT - list of cookie options to specify
				 * @return jQuery
				 */
				cookify: function (options) {
					return this.each(function () {
						var i, nameAttrs = ['name', 'id'], name, $this = $(this), value;

						for (i in nameAttrs) {
							if (!isNaN(i)) {
								name = $this.attr(nameAttrs[ i ]);
								if (typeof name === 'string' && name !== '') {
									if ($this.is(':checkbox, :radio')) {
										if ($this.attr('checked')) {
											value = $this.val();
										}
									}
									else if ($this.is(':input')) {
										value = $this.val();
									}
									else {
										value = $this.html();
									}

									if (typeof value !== 'string' || value === '') {
										value = null;
									}

									$.cookies.set(name, value, options);

									break;
								}
							}
						}
					});
				},
				/**
				 * $( 'selector' ).cookieFill - set the value of an input field or the innerHTML of an element from a cookie by the name or id of the field or element
				 *
				 * @access public
				 * @return jQuery
				 */
				cookieFill: function () {
					return this.each(function () {
						var n, getN, nameAttrs = ['name', 'id'], name, $this = $(this), value;

						getN = function () {
							n = nameAttrs.pop();
							return !!n;
						};

						while (getN()) {
							name = $this.attr(n);
							if (typeof name === 'string' && name !== '') {
								value = $.cookies.get(name);
								if (value !== null) {
									if ($this.is(':checkbox, :radio')) {
										if ($this.val() === value) {
											$this.attr('checked', 'checked');
										}
										else {
											$this.removeAttr('checked');
										}
									}
									else if ($this.is(':input')) {
										$this.val(value);
									}
									else {
										$this.html(value);
									}
								}

								break;
							}
						}
					});
				},
				/**
				 * $( 'selector' ).cookieBind - call cookie fill on matching elements, and bind their change events to cookify()
				 *
				 * @access public
				 * @param options OBJECT - list of cookie options to specify
				 * @return jQuery
				 */
				cookieBind: function (options) {
					return this.each(function () {
						var $this = $(this);
						$this.cookieFill().change(function () {
							$this.cookify(options);
						});
					});
				}
			};

			$.each(extensions, function (i) {
				$.fn[i] = this;
			});

		})(window.jQuery);
	}
})();

/*jslint browser: true */ /*global jQuery: true */

/**
 * jQuery Cookie plugin
 *
 * Copyright (c) 2010 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

// TODO JsDoc

/**
 * Create a cookie with the given key and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String key The key of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given key.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String key The key of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function (key, value, options) {

	// key and value given, set cookie...
	if (arguments.length > 1 && (value === null || typeof value !== "object")) {
		options = jQuery.extend({}, options);

		if (value === null) {
			options.expires = -1;
		}

		if (typeof options.expires === 'number') {
			var days = options.expires, t = options.expires = new Date();
			t.setDate(t.getDate() + days);
		}

		return (document.cookie = [
			encodeURIComponent(key), '=',
			options.raw ? String(value) : encodeURIComponent(String(value)),
			options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
			options.path ? '; path=' + options.path : '',
			options.domain ? '; domain=' + options.domain : '',
			options.secure ? '; secure' : ''
		].join(''));
	}

	// key and possibly options given, get cookie...
	options = value || {};
	var result, decode = options.raw ? function (s) {
		return s;
	} : decodeURIComponent;
	return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

/*
 * jHeartbeat 0.3.0
 * (C)Alex Richards - http://www.ajtrichards.co.uk/
 */

jomresJquery.jheartbeat = {

	options: {
		url: "heartbeat_default.asp",
		delay: 10000,
		div_id: "test_div"
	},

	beatfunction: function () {

	},

	timeoutobj: {
		id: -1
	},

	set: function (options, onbeatfunction) {
		if (this.timeoutobj.id > -1) {
			clearTimeout(this.timeoutobj);
		}
		if (options) {
			jomresJquery.extend(this.options, options);
		}
		if (onbeatfunction) {
			this.beatfunction = onbeatfunction;
		}

		// Add the HeartBeatDIV to the page
		jomresJquery("body").append("<div id=\"" + this.options.div_id + "\" style=\"display: none;\"></div>");
		this.timeoutobj.id = setTimeout("jomresJquery.jheartbeat.beat();", this.options.delay);
	},

	beat: function () {
		jomresJquery.ajax({
			url: this.options.url,
			dataType: "html",
			type: "GET",
			error: function (e) {
				jomresJquery('#' + jomresJquery.jheartbeat.options.div_id).append("");
			},
			success: function (data) {
				jomresJquery('#' + jomresJquery.jheartbeat.options.div_id).html(data);
			}
		});
		this.timeoutobj.id = setTimeout("jomresJquery.jheartbeat.beat();", this.options.delay);
		this.beatfunction();
	}
};

/**
 * hoverIntent is similar to jQuery's built-in "hover" function except that
 * instead of firing the onMouseOver event immediately, hoverIntent checks
 * to see if the user's mouse has slowed down (beneath the sensitivity
 * threshold) before firing the onMouseOver event.
 *
 * hoverIntent r6 // 2011.02.26 // jQuery 1.5.1+
 * <http://cherne.net/brian/resources/jquery.hoverIntent.html>
 *
 * hoverIntent is currently available for use in all personal or commercial
 * projects under both MIT and GPL licenses. This means that you can choose
 * the license that best suits your project, and use it accordingly.
 *
 * // basic usage (just like .hover) receives onMouseOver and onMouseOut functions
 * $("ul li").hoverIntent( showNav , hideNav );
 *
 * // advanced usage receives configuration object only
 * $("ul li").hoverIntent({
*	sensitivity: 7, // number = sensitivity threshold (must be 1 or higher)
*	interval: 100,   // number = milliseconds of polling interval
*	over: showNav,  // function = onMouseOver callback (required)
*	timeout: 0,   // number = milliseconds delay before onMouseOut function call
*	out: hideNav    // function = onMouseOut callback (required)
* });
 *
 * @param  f  onMouseOver function || An object with configuration options
 * @param  g  onMouseOut function  || Nothing (use configuration options object)
 * @author    Brian Cherne brian(at)cherne(dot)net
 */
(function ($) {
	$.fn.hoverIntent = function (f, g) {
		// default configuration options
		var cfg = {
			sensitivity: 7,
			interval: 100,
			timeout: 0
		};
		// override configuration options with user supplied object
		cfg = $.extend(cfg, g ? { over: f, out: g } : f);

		// instantiate variables
		// cX, cY = current X and Y position of mouse, updated by mousemove event
		// pX, pY = previous X and Y position of mouse, set by mouseover and polling interval
		var cX, cY, pX, pY;

		// A private function for getting mouse position
		var track = function (ev) {
			cX = ev.pageX;
			cY = ev.pageY;
		};

		// A private function for comparing current and previous mouse position
		var compare = function (ev, ob) {
			ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
			// compare mouse positions to see if they've crossed the threshold
			if (( Math.abs(pX - cX) + Math.abs(pY - cY) ) < cfg.sensitivity) {
				$(ob).unbind("mousemove", track);
				// set hoverIntent state to true (so mouseOut can be called)
				ob.hoverIntent_s = 1;
				return cfg.over.apply(ob, [ev]);
			} else {
				// set previous coordinates for next time
				pX = cX;
				pY = cY;
				// use self-calling timeout, guarantees intervals are spaced out properly (avoids JavaScript timer bugs)
				ob.hoverIntent_t = setTimeout(function () {
					compare(ev, ob);
				}, cfg.interval);
			}
		};

		// A private function for delaying the mouseOut function
		var delay = function (ev, ob) {
			ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
			ob.hoverIntent_s = 0;
			return cfg.out.apply(ob, [ev]);
		};

		// A private function for handling mouse 'hovering'
		var handleHover = function (e) {
			// copy objects to be passed into t (required for event object to be passed in IE)
			var ev = jQuery.extend({}, e);
			var ob = this;

			// cancel hoverIntent timer if it exists
			if (ob.hoverIntent_t) {
				ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
			}

			// if e.type == "mouseenter"
			if (e.type == "mouseenter") {
				// set "previous" X and Y position based on initial entry point
				pX = ev.pageX;
				pY = ev.pageY;
				// update "current" X and Y position based on mousemove
				$(ob).bind("mousemove", track);
				// start polling interval (self-calling timeout) to compare mouse coordinates over time
				if (ob.hoverIntent_s != 1) {
					ob.hoverIntent_t = setTimeout(function () {
						compare(ev, ob);
					}, cfg.interval);
				}

				// else e.type == "mouseleave"
			} else {
				// unbind expensive mousemove event
				$(ob).unbind("mousemove", track);
				// if hoverIntent state is true, then call the mouseOut function after the specified delay
				if (ob.hoverIntent_s == 1) {
					ob.hoverIntent_t = setTimeout(function () {
						delay(ev, ob);
					}, cfg.timeout);
				}
			}
		};

		// bind the function to the two event listeners
		return this.bind('mouseenter', handleHover).bind('mouseleave', handleHover);
	};
})(jQuery);

/**
 * jQuery Validation Plugin 1.9.0
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright (c) 2006 - 2011 J�rn Zaefferer
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
/**
 * jQuery Validation Plugin 1.12.0pre
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright 2013 J�rn Zaefferer
 * Released under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

(function ($) {

	$.extend($.fn, {
		// http://docs.jquery.com/Plugins/Validation/validate
		validate: function (options) {

			// if nothing is selected, return nothing; can't chain anyway
			if (!this.length) {
				if (options && options.debug && window.console) {
					console.warn("Nothing selected, can't validate, returning nothing.");
				}
				return;
			}

			// check if a validator for this form was already created
			var validator = $.data(this[0], "validator");
			if (validator) {
				return validator;
			}

			// Add novalidate tag if HTML5.
			this.attr("novalidate", "novalidate");

			validator = new $.validator(options, this[0]);
			$.data(this[0], "validator", validator);

			if (validator.settings.onsubmit) {

				this.validateDelegate(":submit", "click", function (event) {
					if (validator.settings.submitHandler) {
						validator.submitButton = event.target;
					}
					// allow suppressing validation by adding a cancel class to the submit button
					if ($(event.target).hasClass("cancel")) {
						validator.cancelSubmit = true;
					}

					// allow suppressing validation by adding the html5 formnovalidate attribute to the submit button
					if ($(event.target).attr("formnovalidate") !== undefined) {
						validator.cancelSubmit = true;
					}
				});

				// validate the form on submit
				this.submit(function (event) {
					if (validator.settings.debug) {
						// prevent form submit to be able to see console output
						event.preventDefault();
					}
					function handle() {
						var hidden;
						if (validator.settings.submitHandler) {
							if (validator.submitButton) {
								// insert a hidden input as a replacement for the missing submit button
								hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val(validator.submitButton.value).appendTo(validator.currentForm);
							}
							validator.settings.submitHandler.call(validator, validator.currentForm, event);
							if (validator.submitButton) {
								// and clean up afterwards; thanks to no-block-scope, hidden can be referenced
								hidden.remove();
							}
							return false;
						}
						return true;
					}

					// prevent submit for invalid forms or custom submit handlers
					if (validator.cancelSubmit) {
						validator.cancelSubmit = false;
						return handle();
					}
					if (validator.form()) {
						if (validator.pendingRequest) {
							validator.formSubmitted = true;
							return false;
						}
						return handle();
					} else {
						validator.focusInvalid();
						return false;
					}
				});
			}

			return validator;
		},
		// http://docs.jquery.com/Plugins/Validation/valid
		valid: function () {
			if ($(this[0]).is("form")) {
				return this.validate().form();
			} else {
				var valid = true;
				var validator = $(this[0].form).validate();
				this.each(function () {
					valid &= validator.element(this);
				});
				return valid;
			}
		},
		// attributes: space seperated list of attributes to retrieve and remove
		removeAttrs: function (attributes) {
			var result = {},
				$element = this;
			$.each(attributes.split(/\s/), function (index, value) {
				result[value] = $element.attr(value);
				$element.removeAttr(value);
			});
			return result;
		},
		// http://docs.jquery.com/Plugins/Validation/rules
		rules: function (command, argument) {
			var element = this[0];

			if (command) {
				var settings = $.data(element.form, "validator").settings;
				var staticRules = settings.rules;
				var existingRules = $.validator.staticRules(element);
				switch (command) {
					case "add":
						$.extend(existingRules, $.validator.normalizeRule(argument));
						staticRules[element.name] = existingRules;
						if (argument.messages) {
							settings.messages[element.name] = $.extend(settings.messages[element.name], argument.messages);
						}
						break;
					case "remove":
						if (!argument) {
							delete staticRules[element.name];
							return existingRules;
						}
						var filtered = {};
						$.each(argument.split(/\s/), function (index, method) {
							filtered[method] = existingRules[method];
							delete existingRules[method];
						});
						return filtered;
				}
			}

			var data = $.validator.normalizeRules(
				$.extend(
					{},
					$.validator.classRules(element),
					$.validator.attributeRules(element),
					$.validator.dataRules(element),
					$.validator.staticRules(element)
				), element);

			// make sure required is at front
			if (data.required) {
				var param = data.required;
				delete data.required;
				data = $.extend({required: param}, data);
			}

			return data;
		}
	});

// Custom selectors
	$.extend($.expr[":"], {
		// http://docs.jquery.com/Plugins/Validation/blank
		blank: function (a) {
			return !$.trim("" + a.value);
		},
		// http://docs.jquery.com/Plugins/Validation/filled
		filled: function (a) {
			return !!$.trim("" + a.value);
		},
		// http://docs.jquery.com/Plugins/Validation/unchecked
		unchecked: function (a) {
			return !a.checked;
		}
	});

// constructor for validator
	$.validator = function (options, form) {
		this.settings = $.extend(true, {}, $.validator.defaults, options);
		this.currentForm = form;
		this.init();
	};

	$.validator.format = function (source, params) {
		if (arguments.length === 1) {
			return function () {
				var args = $.makeArray(arguments);
				args.unshift(source);
				return $.validator.format.apply(this, args);
			};
		}
		if (arguments.length > 2 && params.constructor !== Array) {
			params = $.makeArray(arguments).slice(1);
		}
		if (params.constructor !== Array) {
			params = [ params ];
		}
		$.each(params, function (i, n) {
			source = source.replace(new RegExp("\\{" + i + "\\}", "g"), function () {
				return n;
			});
		});
		return source;
	};

	$.extend($.validator, {

		defaults: {
			messages: {},
			groups: {},
			rules: {},
			errorClass: "error",
			validClass: "valid",
			errorElement: "label",
			focusInvalid: true,
			errorContainer: $([]),
			errorLabelContainer: $([]),
			onsubmit: true,
			ignore: ":hidden",
			ignoreTitle: false,
			onfocusin: function (element, event) {
				this.lastActive = element;

				// hide error label and remove error class on focus if enabled
				if (this.settings.focusCleanup && !this.blockFocusCleanup) {
					if (this.settings.unhighlight) {
						this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
					}
					this.addWrapper(this.errorsFor(element)).hide();
				}
			},
			onfocusout: function (element, event) {
				if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element))) {
					this.element(element);
				}
			},
			onkeyup: function (element, event) {
				if (event.which === 9 && this.elementValue(element) === "") {
					return;
				} else if (element.name in this.submitted || element === this.lastElement) {
					this.element(element);
				}
			},
			onclick: function (element, event) {
				// click on selects, radiobuttons and checkboxes
				if (element.name in this.submitted) {
					this.element(element);
				}
				// or option elements, check parent select in that case
				else if (element.parentNode.name in this.submitted) {
					this.element(element.parentNode);
				}
			},
			highlight: function (element, errorClass, validClass) {
				if (element.type === "radio") {
					this.findByName(element.name).addClass(errorClass).removeClass(validClass);
				} else {
					$(element).addClass(errorClass).removeClass(validClass);
				}
			},
			unhighlight: function (element, errorClass, validClass) {
				if (element.type === "radio") {
					this.findByName(element.name).removeClass(errorClass).addClass(validClass);
				} else {
					$(element).removeClass(errorClass).addClass(validClass);
				}
			}
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
		setDefaults: function (settings) {
			$.extend($.validator.defaults, settings);
		},

		messages: {
			required: "This field is required.",
			remote: "Please fix this field.",
			email: "Please enter a valid email address.",
			url: "Please enter a valid URL.",
			date: "Please enter a valid date.",
			dateISO: "Please enter a valid date (ISO).",
			number: "Please enter a valid number.",
			digits: "Please enter only digits.",
			creditcard: "Please enter a valid credit card number.",
			equalTo: "Please enter the same value again.",
			maxlength: $.validator.format("Please enter no more than {0} characters."),
			minlength: $.validator.format("Please enter at least {0} characters."),
			rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
			range: $.validator.format("Please enter a value between {0} and {1}."),
			max: $.validator.format("Please enter a value less than or equal to {0}."),
			min: $.validator.format("Please enter a value greater than or equal to {0}.")
		},

		autoCreateRanges: false,

		prototype: {

			init: function () {
				this.labelContainer = $(this.settings.errorLabelContainer);
				this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
				this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer);
				this.submitted = {};
				this.valueCache = {};
				this.pendingRequest = 0;
				this.pending = {};
				this.invalid = {};
				this.reset();

				var groups = (this.groups = {});
				$.each(this.settings.groups, function (key, value) {
					if (typeof value === "string") {
						value = value.split(/\s/);
					}
					$.each(value, function (index, name) {
						groups[name] = key;
					});
				});
				var rules = this.settings.rules;
				$.each(rules, function (key, value) {
					rules[key] = $.validator.normalizeRule(value);
				});

				function delegate(event) {
					var validator = $.data(this[0].form, "validator"),
						eventType = "on" + event.type.replace(/^validate/, "");
					if (validator.settings[eventType]) {
						validator.settings[eventType].call(validator, this[0], event);
					}
				}

				$(this.currentForm)
					.validateDelegate(":text, [type='password'], [type='file'], select, textarea, " +
						"[type='number'], [type='search'] ,[type='tel'], [type='url'], " +
						"[type='email'], [type='datetime'], [type='date'], [type='month'], " +
						"[type='week'], [type='time'], [type='datetime-local'], " +
						"[type='range'], [type='color'] ",
						"focusin focusout keyup", delegate)
					.validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", delegate);

				if (this.settings.invalidHandler) {
					$(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
				}
			},

			// http://docs.jquery.com/Plugins/Validation/Validator/form
			form: function () {
				this.checkForm();
				$.extend(this.submitted, this.errorMap);
				this.invalid = $.extend({}, this.errorMap);
				if (!this.valid()) {
					$(this.currentForm).triggerHandler("invalid-form", [this]);
				}
				this.showErrors();
				return this.valid();
			},

			checkForm: function () {
				this.prepareForm();
				for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
					this.check(elements[i]);
				}
				return this.valid();
			},

			// http://docs.jquery.com/Plugins/Validation/Validator/element
			element: function (element) {
				element = this.validationTargetFor(this.clean(element));
				this.lastElement = element;
				this.prepareElement(element);
				this.currentElements = $(element);
				var result = this.check(element) !== false;
				if (result) {
					delete this.invalid[element.name];
				} else {
					this.invalid[element.name] = true;
				}
				if (!this.numberOfInvalids()) {
					// Hide error containers on last error
					this.toHide = this.toHide.add(this.containers);
				}
				this.showErrors();
				return result;
			},

			// http://docs.jquery.com/Plugins/Validation/Validator/showErrors
			showErrors: function (errors) {
				if (errors) {
					// add items to error list and map
					$.extend(this.errorMap, errors);
					this.errorList = [];
					for (var name in errors) {
						this.errorList.push({
							message: errors[name],
							element: this.findByName(name)[0]
						});
					}
					// remove items from success list
					this.successList = $.grep(this.successList, function (element) {
						return !(element.name in errors);
					});
				}
				if (this.settings.showErrors) {
					this.settings.showErrors.call(this, this.errorMap, this.errorList);
				} else {
					this.defaultShowErrors();
				}
			},

			// http://docs.jquery.com/Plugins/Validation/Validator/resetForm
			resetForm: function () {
				if ($.fn.resetForm) {
					$(this.currentForm).resetForm();
				}
				this.submitted = {};
				this.lastElement = null;
				this.prepareForm();
				this.hideErrors();
				this.elements().removeClass(this.settings.errorClass).removeData("previousValue");
			},

			numberOfInvalids: function () {
				return this.objectLength(this.invalid);
			},

			objectLength: function (obj) {
				var count = 0;
				for (var i in obj) {
					count++;
				}
				return count;
			},

			hideErrors: function () {
				this.addWrapper(this.toHide).hide();
			},

			valid: function () {
				return this.size() === 0;
			},

			size: function () {
				return this.errorList.length;
			},

			focusInvalid: function () {
				if (this.settings.focusInvalid) {
					try {
						$(this.findLastActive() || this.errorList.length && this.errorList[0].element || [])
							.filter(":visible")
							.focus()
							// manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
							.trigger("focusin");
					} catch (e) {
						// ignore IE throwing errors when focusing hidden elements
					}
				}
			},

			findLastActive: function () {
				var lastActive = this.lastActive;
				return lastActive && $.grep(this.errorList,function (n) {
					return n.element.name === lastActive.name;
				}).length === 1 && lastActive;
			},

			elements: function () {
				var validator = this,
					rulesCache = {};

				// select all valid inputs inside the form (no submit or reset buttons)
				return $(this.currentForm)
					.find("input, select, textarea")
					.not(":submit, :reset, :image, [disabled]")
					.not(this.settings.ignore)
					.filter(function () {
						if (!this.name && validator.settings.debug && window.console) {
							console.error("%o has no name assigned", this);
						}

						// select only the first element for each name, and only those with rules specified
						if (this.name in rulesCache || !validator.objectLength($(this).rules())) {
							return false;
						}

						rulesCache[this.name] = true;
						return true;
					});
			},

			clean: function (selector) {
				return $(selector)[0];
			},

			errors: function () {
				var errorClass = this.settings.errorClass.replace(" ", ".");
				return $(this.settings.errorElement + "." + errorClass, this.errorContext);
			},

			reset: function () {
				this.successList = [];
				this.errorList = [];
				this.errorMap = {};
				this.toShow = $([]);
				this.toHide = $([]);
				this.currentElements = $([]);
			},

			prepareForm: function () {
				this.reset();
				this.toHide = this.errors().add(this.containers);
			},

			prepareElement: function (element) {
				this.reset();
				this.toHide = this.errorsFor(element);
			},

			elementValue: function (element) {
				var type = $(element).attr("type"),
					val = $(element).val();

				if (type === "radio" || type === "checkbox") {
					return $("input[name='" + $(element).attr("name") + "']:checked").val();
				}

				if (typeof val === "string") {
					return val.replace(/\r/g, "");
				}
				return val;
			},

			check: function (element) {
				element = this.validationTargetFor(this.clean(element));

				var rules = $(element).rules();
				var dependencyMismatch = false;
				var val = this.elementValue(element);
				var result;

				for (var method in rules) {
					var rule = { method: method, parameters: rules[method] };
					try {

						result = $.validator.methods[method].call(this, val, element, rule.parameters);

						// if a method indicates that the field is optional and therefore valid,
						// don't mark it as valid when there are no other rules
						if (result === "dependency-mismatch") {
							dependencyMismatch = true;
							continue;
						}
						dependencyMismatch = false;

						if (result === "pending") {
							this.toHide = this.toHide.not(this.errorsFor(element));
							return;
						}

						if (!result) {
							this.formatAndAdd(element, rule);
							return false;
						}
					} catch (e) {
						if (this.settings.debug && window.console) {
							console.log("Exception occured when checking element " + element.id + ", check the '" + rule.method + "' method.", e);
						}
						throw e;
					}
				}
				if (dependencyMismatch) {
					return;
				}
				if (this.objectLength(rules)) {
					this.successList.push(element);
				}
				return true;
			},

			// return the custom message for the given element and validation method
			// specified in the element's HTML5 data attribute
			customDataMessage: function (element, method) {
				return $(element).data("msg-" + method.toLowerCase()) || (element.attributes && $(element).attr("data-msg-" + method.toLowerCase()));
			},

			// return the custom message for the given element name and validation method
			customMessage: function (name, method) {
				var m = this.settings.messages[name];
				return m && (m.constructor === String ? m : m[method]);
			},

			// return the first defined argument, allowing empty strings
			findDefined: function () {
				for (var i = 0; i < arguments.length; i++) {
					if (arguments[i] !== undefined) {
						return arguments[i];
					}
				}
				return undefined;
			},

			defaultMessage: function (element, method) {
				return this.findDefined(
					this.customMessage(element.name, method),
					this.customDataMessage(element, method),
					// title is never undefined, so handle empty string as undefined
					!this.settings.ignoreTitle && element.title || undefined,
					$.validator.messages[method],
					"<strong>Warning: No message defined for " + element.name + "</strong>"
				);
			},

			formatAndAdd: function (element, rule) {
				var message = this.defaultMessage(element, rule.method),
					theregex = /\$?\{(\d+)\}/g;
				if (typeof message === "function") {
					message = message.call(this, rule.parameters, element);
				} else if (theregex.test(message)) {
					message = $.validator.format(message.replace(theregex, "{$1}"), rule.parameters);
				}
				this.errorList.push({
					message: message,
					element: element
				});

				this.errorMap[element.name] = message;
				this.submitted[element.name] = message;
			},

			addWrapper: function (toToggle) {
				if (this.settings.wrapper) {
					toToggle = toToggle.add(toToggle.parent(this.settings.wrapper));
				}
				return toToggle;
			},

			defaultShowErrors: function () {
				var i, elements;
				for (i = 0; this.errorList[i]; i++) {
					var error = this.errorList[i];
					if (this.settings.highlight) {
						this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
					}
					this.showLabel(error.element, error.message);
				}
				if (this.errorList.length) {
					this.toShow = this.toShow.add(this.containers);
				}
				if (this.settings.success) {
					for (i = 0; this.successList[i]; i++) {
						this.showLabel(this.successList[i]);
					}
				}
				if (this.settings.unhighlight) {
					for (i = 0, elements = this.validElements(); elements[i]; i++) {
						this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
					}
				}
				this.toHide = this.toHide.not(this.toShow);
				this.hideErrors();
				this.addWrapper(this.toShow).show();
			},

			validElements: function () {
				return this.currentElements.not(this.invalidElements());
			},

			invalidElements: function () {
				return $(this.errorList).map(function () {
					return this.element;
				});
			},

			showLabel: function (element, message) {
				var label = this.errorsFor(element);
				if (label.length) {
					// refresh error/success class
					label.removeClass(this.settings.validClass).addClass(this.settings.errorClass);
					// replace message on existing label
					label.html(message);
				} else {
					// create label
					label = $("<" + this.settings.errorElement + ">")
						.attr("for", this.idOrName(element))
						.addClass(this.settings.errorClass)
						.html(message || "");
					if (this.settings.wrapper) {
						// make sure the element is visible, even in IE
						// actually showing the wrapped element is handled elsewhere
						label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
					}
					if (!this.labelContainer.append(label).length) {
						if (this.settings.errorPlacement) {
							this.settings.errorPlacement(label, $(element));
						} else {
							label.insertAfter(element);
						}
					}
				}
				if (!message && this.settings.success) {
					label.text("");
					if (typeof this.settings.success === "string") {
						label.addClass(this.settings.success);
					} else {
						this.settings.success(label, element);
					}
				}
				this.toShow = this.toShow.add(label);
			},

			errorsFor: function (element) {
				var name = this.idOrName(element);
				return this.errors().filter(function () {
					return $(this).attr("for") === name;
				});
			},

			idOrName: function (element) {
				return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
			},

			validationTargetFor: function (element) {
				// if radio/checkbox, validate first element in group instead
				if (this.checkable(element)) {
					element = this.findByName(element.name).not(this.settings.ignore)[0];
				}
				return element;
			},

			checkable: function (element) {
				return (/radio|checkbox/i).test(element.type);
			},

			findByName: function (name) {
				return $(this.currentForm).find("[name='" + name + "']");
			},

			getLength: function (value, element) {
				switch (element.nodeName.toLowerCase()) {
					case "select":
						return $("option:selected", element).length;
					case "input":
						if (this.checkable(element)) {
							return this.findByName(element.name).filter(":checked").length;
						}
				}
				return value.length;
			},

			depend: function (param, element) {
				return this.dependTypes[typeof param] ? this.dependTypes[typeof param](param, element) : true;
			},

			dependTypes: {
				"boolean": function (param, element) {
					return param;
				},
				"string": function (param, element) {
					return !!$(param, element.form).length;
				},
				"function": function (param, element) {
					return param(element);
				}
			},

			optional: function (element) {
				var val = this.elementValue(element);
				return !$.validator.methods.required.call(this, val, element) && "dependency-mismatch";
			},

			startRequest: function (element) {
				if (!this.pending[element.name]) {
					this.pendingRequest++;
					this.pending[element.name] = true;
				}
			},

			stopRequest: function (element, valid) {
				this.pendingRequest--;
				// sometimes synchronization fails, make sure pendingRequest is never < 0
				if (this.pendingRequest < 0) {
					this.pendingRequest = 0;
				}
				delete this.pending[element.name];
				if (valid && this.pendingRequest === 0 && this.formSubmitted && this.form()) {
					$(this.currentForm).submit();
					this.formSubmitted = false;
				} else if (!valid && this.pendingRequest === 0 && this.formSubmitted) {
					$(this.currentForm).triggerHandler("invalid-form", [this]);
					this.formSubmitted = false;
				}
			},

			previousValue: function (element) {
				return $.data(element, "previousValue") || $.data(element, "previousValue", {
					old: null,
					valid: true,
					message: this.defaultMessage(element, "remote")
				});
			}

		},

		classRuleSettings: {
			required: {required: true},
			email: {email: true},
			url: {url: true},
			date: {date: true},
			dateISO: {dateISO: true},
			number: {number: true},
			digits: {digits: true},
			creditcard: {creditcard: true}
		},

		addClassRules: function (className, rules) {
			if (className.constructor === String) {
				this.classRuleSettings[className] = rules;
			} else {
				$.extend(this.classRuleSettings, className);
			}
		},

		classRules: function (element) {
			var rules = {};
			var classes = $(element).attr("class");
			if (classes) {
				$.each(classes.split(" "), function () {
					if (this in $.validator.classRuleSettings) {
						$.extend(rules, $.validator.classRuleSettings[this]);
					}
				});
			}
			return rules;
		},

		attributeRules: function (element) {
			var rules = {};
			var $element = $(element);

			for (var method in $.validator.methods) {
				var value;

				// support for <input required> in both html5 and older browsers
				if (method === "required") {
					value = $element.get(0).getAttribute(method);
					// Some browsers return an empty string for the required attribute
					// and non-HTML5 browsers might have required="" markup
					if (value === "") {
						value = true;
					}
					// force non-HTML5 browsers to return bool
					value = !!value;
				} else {
					value = $element.attr(method);
				}

				if (value) {
					rules[method] = value;
				} else if ($element[0].getAttribute("type") === method) {
					rules[method] = true;
				}
			}

			// maxlength may be returned as -1, 2147483647 (IE) and 524288 (safari) for text inputs
			if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
				delete rules.maxlength;
			}

			return rules;
		},

		dataRules: function (element) {
			var method, value,
				rules = {}, $element = $(element);
			for (method in $.validator.methods) {
				value = $element.data("rule-" + method.toLowerCase());
				if (value !== undefined) {
					rules[method] = value;
				}
			}
			return rules;
		},

		staticRules: function (element) {
			var rules = {};
			var validator = $.data(element.form, "validator");
			if (validator.settings.rules) {
				rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
			}
			return rules;
		},

		normalizeRules: function (rules, element) {
			// handle dependency check
			$.each(rules, function (prop, val) {
				// ignore rule when param is explicitly false, eg. required:false
				if (val === false) {
					delete rules[prop];
					return;
				}
				if (val.param || val.depends) {
					var keepRule = true;
					switch (typeof val.depends) {
						case "string":
							keepRule = !!$(val.depends, element.form).length;
							break;
						case "function":
							keepRule = val.depends.call(element, element);
							break;
					}
					if (keepRule) {
						rules[prop] = val.param !== undefined ? val.param : true;
					} else {
						delete rules[prop];
					}
				}
			});

			// evaluate parameters
			$.each(rules, function (rule, parameter) {
				rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
			});

			// clean number parameters
			$.each(['minlength', 'maxlength'], function () {
				if (rules[this]) {
					rules[this] = Number(rules[this]);
				}
			});
			$.each(['rangelength'], function () {
				var parts;
				if (rules[this]) {
					if ($.isArray(rules[this])) {
						rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
					} else if (typeof rules[this] === "string") {
						parts = rules[this].split(/[\s,]+/);
						rules[this] = [Number(parts[0]), Number(parts[1])];
					}
				}
			});

			if ($.validator.autoCreateRanges) {
				// auto-create ranges
				if (rules.min && rules.max) {
					rules.range = [rules.min, rules.max];
					delete rules.min;
					delete rules.max;
				}
				if (rules.minlength && rules.maxlength) {
					rules.rangelength = [rules.minlength, rules.maxlength];
					delete rules.minlength;
					delete rules.maxlength;
				}
			}

			return rules;
		},

		// Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
		normalizeRule: function (data) {
			if (typeof data === "string") {
				var transformed = {};
				$.each(data.split(/\s/), function () {
					transformed[this] = true;
				});
				data = transformed;
			}
			return data;
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/addMethod
		addMethod: function (name, method, message) {
			$.validator.methods[name] = method;
			$.validator.messages[name] = message !== undefined ? message : $.validator.messages[name];
			if (method.length < 3) {
				$.validator.addClassRules(name, $.validator.normalizeRule(name));
			}
		},

		methods: {

			// http://docs.jquery.com/Plugins/Validation/Methods/required
			required: function (value, element, param) {
				// check if dependency is met
				if (!this.depend(param, element)) {
					return "dependency-mismatch";
				}
				if (element.nodeName.toLowerCase() === "select") {
					// could be an array for select-multiple or a string, both are fine this way
					var val = $(element).val();
					return val && val.length > 0;
				}
				if (this.checkable(element)) {
					return this.getLength(value, element) > 0;
				}
				return $.trim(value).length > 0;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/remote
			remote: function (value, element, param) {
				if (this.optional(element)) {
					return "dependency-mismatch";
				}

				var previous = this.previousValue(element);
				if (!this.settings.messages[element.name]) {
					this.settings.messages[element.name] = {};
				}
				previous.originalMessage = this.settings.messages[element.name].remote;
				this.settings.messages[element.name].remote = previous.message;

				param = typeof param === "string" && {url: param} || param;

				if (previous.old === value) {
					return previous.valid;
				}

				previous.old = value;
				var validator = this;
				this.startRequest(element);
				var data = {};
				data[element.name] = value;
				$.ajax($.extend(true, {
					url: param,
					mode: "abort",
					port: "validate" + element.name,
					dataType: "json",
					data: data,
					success: function (response) {
						validator.settings.messages[element.name].remote = previous.originalMessage;
						var valid = response === true || response === "true";
						if (valid) {
							var submitted = validator.formSubmitted;
							validator.prepareElement(element);
							validator.formSubmitted = submitted;
							validator.successList.push(element);
							delete validator.invalid[element.name];
							validator.showErrors();
						} else {
							var errors = {};
							var message = response || validator.defaultMessage(element, "remote");
							errors[element.name] = previous.message = $.isFunction(message) ? message(value) : message;
							validator.invalid[element.name] = true;
							validator.showErrors(errors);
						}
						previous.valid = valid;
						validator.stopRequest(element, valid);
					}
				}, param));
				return "pending";
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/minlength
			minlength: function (value, element, param) {
				var length = $.isArray(value) ? value.length : this.getLength($.trim(value), element);
				return this.optional(element) || length >= param;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/maxlength
			maxlength: function (value, element, param) {
				var length = $.isArray(value) ? value.length : this.getLength($.trim(value), element);
				return this.optional(element) || length <= param;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/rangelength
			rangelength: function (value, element, param) {
				var length = $.isArray(value) ? value.length : this.getLength($.trim(value), element);
				return this.optional(element) || ( length >= param[0] && length <= param[1] );
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/min
			min: function (value, element, param) {
				return this.optional(element) || value >= param;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/max
			max: function (value, element, param) {
				return this.optional(element) || value <= param;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/range
			range: function (value, element, param) {
				return this.optional(element) || ( value >= param[0] && value <= param[1] );
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/email
			email: function (value, element) {
				// contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
				return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/url
			url: function (value, element) {
				// contributed by Scott Gonzalez: http://projects.scottsplayground.com/iri/
				return this.optional(element) || /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/date
			date: function (value, element) {
				return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/dateISO
			dateISO: function (value, element) {
				return this.optional(element) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(value);
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/number
			number: function (value, element) {
				return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(value);
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/digits
			digits: function (value, element) {
				return this.optional(element) || /^\d+$/.test(value);
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/creditcard
			// based on http://en.wikipedia.org/wiki/Luhn
			creditcard: function (value, element) {
				if (this.optional(element)) {
					return "dependency-mismatch";
				}
				// accept only spaces, digits and dashes
				if (/[^0-9 \-]+/.test(value)) {
					return false;
				}
				var nCheck = 0,
					nDigit = 0,
					bEven = false;

				value = value.replace(/\D/g, "");

				for (var n = value.length - 1; n >= 0; n--) {
					var cDigit = value.charAt(n);
					nDigit = parseInt(cDigit, 10);
					if (bEven) {
						if ((nDigit *= 2) > 9) {
							nDigit -= 9;
						}
					}
					nCheck += nDigit;
					bEven = !bEven;
				}

				return (nCheck % 10) === 0;
			},

			// http://docs.jquery.com/Plugins/Validation/Methods/equalTo
			equalTo: function (value, element, param) {
				// bind to the blur event of the target in order to revalidate whenever the target field is updated
				// TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
				var target = $(param);
				if (this.settings.onfocusout) {
					target.unbind(".validate-equalTo").bind("blur.validate-equalTo", function () {
						$(element).valid();
					});
				}
				return value === target.val();
			}

		}

	});

// deprecated, use $.validator.format instead
	$.format = $.validator.format;

}(jQuery));

// ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort()
(function ($) {
	var pendingRequests = {};
	// Use a prefilter if available (1.5+)
	if ($.ajaxPrefilter) {
		$.ajaxPrefilter(function (settings, _, xhr) {
			var port = settings.port;
			if (settings.mode === "abort") {
				if (pendingRequests[port]) {
					pendingRequests[port].abort();
				}
				pendingRequests[port] = xhr;
			}
		});
	} else {
		// Proxy ajax
		var ajax = $.ajax;
		$.ajax = function (settings) {
			var mode = ( "mode" in settings ? settings : $.ajaxSettings ).mode,
				port = ( "port" in settings ? settings : $.ajaxSettings ).port;
			if (mode === "abort") {
				if (pendingRequests[port]) {
					pendingRequests[port].abort();
				}
				return (pendingRequests[port] = ajax.apply(this, arguments));
			}
			return ajax.apply(this, arguments);
		};
	}
}(jQuery));

// provides delegate(type: String, delegate: Selector, handler: Callback) plugin for easier event delegation
// handler is only called when $(event.target).is(delegate), in the scope of the jquery-object for event.target
(function ($) {
	$.extend($.fn, {
		validateDelegate: function (delegate, type, handler) {
			return this.bind(type, function (event) {
				var target = $(event.target);
				if (target.is(delegate)) {
					return handler.apply(target, arguments);
				}
			});
		}
	});
}(jQuery));


// Copyright 2006 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//   http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.


// Known Issues:
//
// * Patterns are not implemented.
// * Radial gradient are not implemented. The VML version of these look very
//   different from the canvas one.
// * Clipping paths are not implemented.
// * Coordsize. The width and height attribute have higher priority than the
//   width and height style values which isn't correct.
// * Painting mode isn't implemented.
// * Canvas width/height should is using content-box by default. IE in
//   Quirks mode will draw the canvas using border-box. Either change your
//   doctype to HTML5
//   (http://www.whatwg.org/specs/web-apps/current-work/#the-doctype)
//   or use Box Sizing Behavior from WebFX
//   (http://webfx.eae.net/dhtml/boxsizing/boxsizing.html)
// * Non uniform scaling does not correctly scale strokes.
// * Optimize. There is always room for speed improvements.

// Only add this code if we do not already have a canvas implementation
if (!document.createElement('canvas').getContext) {

	(function () {

		// alias some functions to make (compiled) code shorter
		var m = Math;
		var mr = m.round;
		var ms = m.sin;
		var mc = m.cos;
		var abs = m.abs;
		var sqrt = m.sqrt;

		// this is used for sub pixel precision
		var Z = 10;
		var Z2 = Z / 2;

		/**
		 * This funtion is assigned to the <canvas> elements as element.getContext().
		 * @this {HTMLElement}
		 * @return {CanvasRenderingContext2D_}
		 */
		function getContext() {
			return this.context_ ||
				(this.context_ = new CanvasRenderingContext2D_(this));
		}

		var slice = Array.prototype.slice;

		/**
		 * Binds a function to an object. The returned function will always use the
		 * passed in {@code obj} as {@code this}.
		 *
		 * Example:
		 *
		 *   g = bind(f, obj, a, b)
		 *   g(c, d) // will do f.call(obj, a, b, c, d)
		 *
		 * @param {Function} f The function to bind the object to
		 * @param {Object} obj The object that should act as this when the function
		 *     is called
		 * @param {*} var_args Rest arguments that will be used as the initial
		 *     arguments when the function is called
		 * @return {Function} A new function that has bound this
		 */
		function bind(f, obj, var_args) {
			var a = slice.call(arguments, 2);
			return function () {
				return f.apply(obj, a.concat(slice.call(arguments)));
			};
		}

		var G_vmlCanvasManager_ = {
			init: function (opt_doc) {
				if (/MSIE/.test(navigator.userAgent) && !window.opera) {
					var doc = opt_doc || document;
					// Create a dummy element so that IE will allow canvas elements to be
					// recognized.
					doc.createElement('canvas');
					doc.attachEvent('onreadystatechange', bind(this.init_, this, doc));
				}
			},

			init_: function (doc) {
				// create xmlns
				if (!doc.namespaces['g_vml_']) {
					doc.namespaces.add('g_vml_', 'urn:schemas-microsoft-com:vml',
						'#default#VML');

				}
				if (!doc.namespaces['g_o_']) {
					doc.namespaces.add('g_o_', 'urn:schemas-microsoft-com:office:office',
						'#default#VML');
				}

				// Setup default CSS.  Only add one style sheet per document
				if (!doc.styleSheets['ex_canvas_']) {
					var ss = doc.createStyleSheet();
					ss.owningElement.id = 'ex_canvas_';
					ss.cssText = 'canvas{display:inline-block;overflow:hidden;' +
						// default size is 300x150 in Gecko and Opera
						'text-align:left;width:300px;height:150px}' +
						'g_vml_\\:*{behavior:url(#default#VML)}' +
						'g_o_\\:*{behavior:url(#default#VML)}';

				}

				// find all canvas elements
				var els = doc.getElementsByTagName('canvas');
				for (var i = 0; i < els.length; i++) {
					this.initElement(els[i]);
				}
			},

			/**
			 * Public initializes a canvas element so that it can be used as canvas
			 * element from now on. This is called automatically before the page is
			 * loaded but if you are creating elements using createElement you need to
			 * make sure this is called on the element.
			 * @param {HTMLElement} el The canvas element to initialize.
			 * @return {HTMLElement} the element that was created.
			 */
			initElement: function (el) {
				if (!el.getContext) {

					el.getContext = getContext;

					// Remove fallback content. There is no way to hide text nodes so we
					// just remove all childNodes. We could hide all elements and remove
					// text nodes but who really cares about the fallback content.
					el.innerHTML = '';

					// do not use inline function because that will leak memory
					el.attachEvent('onpropertychange', onPropertyChange);
					el.attachEvent('onresize', onResize);

					var attrs = el.attributes;
					if (attrs.width && attrs.width.specified) {
						// TODO: use runtimeStyle and coordsize
						// el.getContext().setWidth_(attrs.width.nodeValue);
						el.style.width = attrs.width.nodeValue + 'px';
					} else {
						el.width = el.clientWidth;
					}
					if (attrs.height && attrs.height.specified) {
						// TODO: use runtimeStyle and coordsize
						// el.getContext().setHeight_(attrs.height.nodeValue);
						el.style.height = attrs.height.nodeValue + 'px';
					} else {
						el.height = el.clientHeight;
					}
					//el.getContext().setCoordsize_()
				}
				return el;
			}
		};

		function onPropertyChange(e) {
			var el = e.srcElement;

			switch (e.propertyName) {
				case 'width':
					el.style.width = el.attributes.width.nodeValue + 'px';
					el.getContext().clearRect();
					break;
				case 'height':
					el.style.height = el.attributes.height.nodeValue + 'px';
					el.getContext().clearRect();
					break;
			}
		}

		function onResize(e) {
			var el = e.srcElement;
			if (el.firstChild) {
				el.firstChild.style.width = el.clientWidth + 'px';
				el.firstChild.style.height = el.clientHeight + 'px';
			}
		}

		G_vmlCanvasManager_.init();

		// precompute "00" to "FF"
		var dec2hex = [];
		for (var i = 0; i < 16; i++) {
			for (var j = 0; j < 16; j++) {
				dec2hex[i * 16 + j] = i.toString(16) + j.toString(16);
			}
		}

		function createMatrixIdentity() {
			return [
				[1, 0, 0],
				[0, 1, 0],
				[0, 0, 1]
			];
		}

		function matrixMultiply(m1, m2) {
			var result = createMatrixIdentity();

			for (var x = 0; x < 3; x++) {
				for (var y = 0; y < 3; y++) {
					var sum = 0;

					for (var z = 0; z < 3; z++) {
						sum += m1[x][z] * m2[z][y];
					}

					result[x][y] = sum;
				}
			}
			return result;
		}

		function copyState(o1, o2) {
			o2.fillStyle = o1.fillStyle;
			o2.lineCap = o1.lineCap;
			o2.lineJoin = o1.lineJoin;
			o2.lineWidth = o1.lineWidth;
			o2.miterLimit = o1.miterLimit;
			o2.shadowBlur = o1.shadowBlur;
			o2.shadowColor = o1.shadowColor;
			o2.shadowOffsetX = o1.shadowOffsetX;
			o2.shadowOffsetY = o1.shadowOffsetY;
			o2.strokeStyle = o1.strokeStyle;
			o2.globalAlpha = o1.globalAlpha;
			o2.arcScaleX_ = o1.arcScaleX_;
			o2.arcScaleY_ = o1.arcScaleY_;
			o2.lineScale_ = o1.lineScale_;
		}

		function processStyle(styleString) {
			var str, alpha = 1;

			styleString = String(styleString);
			if (styleString.substring(0, 3) == 'rgb') {
				var start = styleString.indexOf('(', 3);
				var end = styleString.indexOf(')', start + 1);
				var guts = styleString.substring(start + 1, end).split(',');

				str = '#';
				for (var i = 0; i < 3; i++) {
					str += dec2hex[Number(guts[i])];
				}

				if (guts.length == 4 && styleString.substr(3, 1) == 'a') {
					alpha = guts[3];
				}
			} else {
				str = styleString;
			}

			return {color: str, alpha: alpha};
		}

		function processLineCap(lineCap) {
			switch (lineCap) {
				case 'butt':
					return 'flat';
				case 'round':
					return 'round';
				case 'square':
				default:
					return 'square';
			}
		}

		/**
		 * This class implements CanvasRenderingContext2D interface as described by
		 * the WHATWG.
		 * @param {HTMLElement} surfaceElement The element that the 2D context should
		 * be associated with
		 */
		function CanvasRenderingContext2D_(surfaceElement) {
			this.m_ = createMatrixIdentity();

			this.mStack_ = [];
			this.aStack_ = [];
			this.currentPath_ = [];

			// Canvas context properties
			this.strokeStyle = '#000';
			this.fillStyle = '#000';

			this.lineWidth = 1;
			this.lineJoin = 'miter';
			this.lineCap = 'butt';
			this.miterLimit = Z * 1;
			this.globalAlpha = 1;
			this.canvas = surfaceElement;

			var el = surfaceElement.ownerDocument.createElement('div');
			el.style.width = surfaceElement.clientWidth + 'px';
			el.style.height = surfaceElement.clientHeight + 'px';
			el.style.overflow = 'hidden';
			el.style.position = 'absolute';
			surfaceElement.appendChild(el);

			this.element_ = el;
			this.arcScaleX_ = 1;
			this.arcScaleY_ = 1;
			this.lineScale_ = 1;
		}

		var contextPrototype = CanvasRenderingContext2D_.prototype;
		contextPrototype.clearRect = function () {
			this.element_.innerHTML = '';
		};

		contextPrototype.beginPath = function () {
			// TODO: Branch current matrix so that save/restore has no effect
			//       as per safari docs.
			this.currentPath_ = [];
		};

		contextPrototype.moveTo = function (aX, aY) {
			var p = this.getCoords_(aX, aY);
			this.currentPath_.push({type: 'moveTo', x: p.x, y: p.y});
			this.currentX_ = p.x;
			this.currentY_ = p.y;
		};

		contextPrototype.lineTo = function (aX, aY) {
			var p = this.getCoords_(aX, aY);
			this.currentPath_.push({type: 'lineTo', x: p.x, y: p.y});

			this.currentX_ = p.x;
			this.currentY_ = p.y;
		};

		contextPrototype.bezierCurveTo = function (aCP1x, aCP1y, aCP2x, aCP2y, aX, aY) {
			var p = this.getCoords_(aX, aY);
			var cp1 = this.getCoords_(aCP1x, aCP1y);
			var cp2 = this.getCoords_(aCP2x, aCP2y);
			bezierCurveTo(this, cp1, cp2, p);
		};

		// Helper function that takes the already fixed cordinates.
		function bezierCurveTo(self, cp1, cp2, p) {
			self.currentPath_.push({
				type: 'bezierCurveTo',
				cp1x: cp1.x,
				cp1y: cp1.y,
				cp2x: cp2.x,
				cp2y: cp2.y,
				x: p.x,
				y: p.y
			});
			self.currentX_ = p.x;
			self.currentY_ = p.y;
		}

		contextPrototype.quadraticCurveTo = function (aCPx, aCPy, aX, aY) {
			// the following is lifted almost directly from
			// http://developer.mozilla.org/en/docs/Canvas_tutorial:Drawing_shapes

			var cp = this.getCoords_(aCPx, aCPy);
			var p = this.getCoords_(aX, aY);

			var cp1 = {
				x: this.currentX_ + 2.0 / 3.0 * (cp.x - this.currentX_),
				y: this.currentY_ + 2.0 / 3.0 * (cp.y - this.currentY_)
			};
			var cp2 = {
				x: cp1.x + (p.x - this.currentX_) / 3.0,
				y: cp1.y + (p.y - this.currentY_) / 3.0
			};

			bezierCurveTo(this, cp1, cp2, p);
		};

		contextPrototype.arc = function (aX, aY, aRadius, aStartAngle, aEndAngle, aClockwise) {
			aRadius *= Z;
			var arcType = aClockwise ? 'at' : 'wa';

			var xStart = aX + mc(aStartAngle) * aRadius - Z2;
			var yStart = aY + ms(aStartAngle) * aRadius - Z2;

			var xEnd = aX + mc(aEndAngle) * aRadius - Z2;
			var yEnd = aY + ms(aEndAngle) * aRadius - Z2;

			// IE won't render arches drawn counter clockwise if xStart == xEnd.
			if (xStart == xEnd && !aClockwise) {
				xStart += 0.125; // Offset xStart by 1/80 of a pixel. Use something
				// that can be represented in binary
			}

			var p = this.getCoords_(aX, aY);
			var pStart = this.getCoords_(xStart, yStart);
			var pEnd = this.getCoords_(xEnd, yEnd);

			this.currentPath_.push({type: arcType,
				x: p.x,
				y: p.y,
				radius: aRadius,
				xStart: pStart.x,
				yStart: pStart.y,
				xEnd: pEnd.x,
				yEnd: pEnd.y});

		};

		contextPrototype.rect = function (aX, aY, aWidth, aHeight) {
			this.moveTo(aX, aY);
			this.lineTo(aX + aWidth, aY);
			this.lineTo(aX + aWidth, aY + aHeight);
			this.lineTo(aX, aY + aHeight);
			this.closePath();
		};

		contextPrototype.strokeRect = function (aX, aY, aWidth, aHeight) {
			var oldPath = this.currentPath_;
			this.beginPath();

			this.moveTo(aX, aY);
			this.lineTo(aX + aWidth, aY);
			this.lineTo(aX + aWidth, aY + aHeight);
			this.lineTo(aX, aY + aHeight);
			this.closePath();
			this.stroke();

			this.currentPath_ = oldPath;
		};

		contextPrototype.fillRect = function (aX, aY, aWidth, aHeight) {
			var oldPath = this.currentPath_;
			this.beginPath();

			this.moveTo(aX, aY);
			this.lineTo(aX + aWidth, aY);
			this.lineTo(aX + aWidth, aY + aHeight);
			this.lineTo(aX, aY + aHeight);
			this.closePath();
			this.fill();

			this.currentPath_ = oldPath;
		};

		contextPrototype.createLinearGradient = function (aX0, aY0, aX1, aY1) {
			var gradient = new CanvasGradient_('gradient');
			gradient.x0_ = aX0;
			gradient.y0_ = aY0;
			gradient.x1_ = aX1;
			gradient.y1_ = aY1;
			return gradient;
		};

		contextPrototype.createRadialGradient = function (aX0, aY0, aR0, aX1, aY1, aR1) {
			var gradient = new CanvasGradient_('gradientradial');
			gradient.x0_ = aX0;
			gradient.y0_ = aY0;
			gradient.r0_ = aR0;
			gradient.x1_ = aX1;
			gradient.y1_ = aY1;
			gradient.r1_ = aR1;
			return gradient;
		};

		contextPrototype.drawImage = function (image, var_args) {
			var dx, dy, dw, dh, sx, sy, sw, sh;

			// to find the original width we overide the width and height
			var oldRuntimeWidth = image.runtimeStyle.width;
			var oldRuntimeHeight = image.runtimeStyle.height;
			image.runtimeStyle.width = 'auto';
			image.runtimeStyle.height = 'auto';

			// get the original size
			var w = image.width;
			var h = image.height;

			// and remove overides
			image.runtimeStyle.width = oldRuntimeWidth;
			image.runtimeStyle.height = oldRuntimeHeight;

			if (arguments.length == 3) {
				dx = arguments[1];
				dy = arguments[2];
				sx = sy = 0;
				sw = dw = w;
				sh = dh = h;
			} else if (arguments.length == 5) {
				dx = arguments[1];
				dy = arguments[2];
				dw = arguments[3];
				dh = arguments[4];
				sx = sy = 0;
				sw = w;
				sh = h;
			} else if (arguments.length == 9) {
				sx = arguments[1];
				sy = arguments[2];
				sw = arguments[3];
				sh = arguments[4];
				dx = arguments[5];
				dy = arguments[6];
				dw = arguments[7];
				dh = arguments[8];
			} else {
				throw Error('Invalid number of arguments');
			}

			var d = this.getCoords_(dx, dy);

			var w2 = sw / 2;
			var h2 = sh / 2;

			var vmlStr = [];

			var W = 10;
			var H = 10;

			// For some reason that I've now forgotten, using divs didn't work
			vmlStr.push(' <g_vml_:group',
				' coordsize="', Z * W, ',', Z * H, '"',
				' coordorigin="0,0"',
				' style="width:', W, 'px;height:', H, 'px;position:absolute;');

			// If filters are necessary (rotation exists), create them
			// filters are bog-slow, so only create them if abbsolutely necessary
			// The following check doesn't account for skews (which don't exist
			// in the canvas spec (yet) anyway.

			if (this.m_[0][0] != 1 || this.m_[0][1]) {
				var filter = [];

				// Note the 12/21 reversal
				filter.push('M11=', this.m_[0][0], ',',
					'M12=', this.m_[1][0], ',',
					'M21=', this.m_[0][1], ',',
					'M22=', this.m_[1][1], ',',
					'Dx=', mr(d.x / Z), ',',
					'Dy=', mr(d.y / Z), '');

				// Bounding box calculation (need to minimize displayed area so that
				// filters don't waste time on unused pixels.
				var max = d;
				var c2 = this.getCoords_(dx + dw, dy);
				var c3 = this.getCoords_(dx, dy + dh);
				var c4 = this.getCoords_(dx + dw, dy + dh);

				max.x = m.max(max.x, c2.x, c3.x, c4.x);
				max.y = m.max(max.y, c2.y, c3.y, c4.y);

				vmlStr.push('padding:0 ', mr(max.x / Z), 'px ', mr(max.y / Z),
					'px 0;filter:progid:DXImageTransform.Microsoft.Matrix(',
					filter.join(''), ", sizingmethod='clip');")
			} else {
				vmlStr.push('top:', mr(d.y / Z), 'px;left:', mr(d.x / Z), 'px;');
			}

			vmlStr.push(' ">',
				'<g_vml_:image src="', image.src, '"',
				' style="width:', Z * dw, 'px;',
				' height:', Z * dh, 'px;"',
				' cropleft="', sx / w, '"',
				' croptop="', sy / h, '"',
				' cropright="', (w - sx - sw) / w, '"',
				' cropbottom="', (h - sy - sh) / h, '"',
				' />',
				'</g_vml_:group>');

			this.element_.insertAdjacentHTML('BeforeEnd',
				vmlStr.join(''));
		};

		contextPrototype.stroke = function (aFill) {
			var lineStr = [];
			var lineOpen = false;
			var a = processStyle(aFill ? this.fillStyle : this.strokeStyle);
			var color = a.color;
			var opacity = a.alpha * this.globalAlpha;

			var W = 10;
			var H = 10;

			lineStr.push('<g_vml_:shape',
				' filled="', !!aFill, '"',
				' style="position:absolute;width:', W, 'px;height:', H, 'px;"',
				' coordorigin="0 0" coordsize="', Z * W, ' ', Z * H, '"',
				' stroked="', !aFill, '"',
				' path="');

			var newSeq = false;
			var min = {x: null, y: null};
			var max = {x: null, y: null};

			for (var i = 0; i < this.currentPath_.length; i++) {
				var p = this.currentPath_[i];
				var c;

				switch (p.type) {
					case 'moveTo':
						c = p;
						lineStr.push(' m ', mr(p.x), ',', mr(p.y));
						break;
					case 'lineTo':
						lineStr.push(' l ', mr(p.x), ',', mr(p.y));
						break;
					case 'close':
						lineStr.push(' x ');
						p = null;
						break;
					case 'bezierCurveTo':
						lineStr.push(' c ',
							mr(p.cp1x), ',', mr(p.cp1y), ',',
							mr(p.cp2x), ',', mr(p.cp2y), ',',
							mr(p.x), ',', mr(p.y));
						break;
					case 'at':
					case 'wa':
						lineStr.push(' ', p.type, ' ',
							mr(p.x - this.arcScaleX_ * p.radius), ',',
							mr(p.y - this.arcScaleY_ * p.radius), ' ',
							mr(p.x + this.arcScaleX_ * p.radius), ',',
							mr(p.y + this.arcScaleY_ * p.radius), ' ',
							mr(p.xStart), ',', mr(p.yStart), ' ',
							mr(p.xEnd), ',', mr(p.yEnd));
						break;
				}


				// TODO: Following is broken for curves due to
				//       move to proper paths.

				// Figure out dimensions so we can do gradient fills
				// properly
				if (p) {
					if (min.x == null || p.x < min.x) {
						min.x = p.x;
					}
					if (max.x == null || p.x > max.x) {
						max.x = p.x;
					}
					if (min.y == null || p.y < min.y) {
						min.y = p.y;
					}
					if (max.y == null || p.y > max.y) {
						max.y = p.y;
					}
				}
			}
			lineStr.push(' ">');

			if (!aFill) {
				var lineWidth = this.lineScale_ * this.lineWidth;

				// VML cannot correctly render a line if the width is less than 1px.
				// In that case, we dilute the color to make the line look thinner.
				if (lineWidth < 1) {
					opacity *= lineWidth;
				}

				lineStr.push(
					'<g_vml_:stroke',
					' opacity="', opacity, '"',
					' joinstyle="', this.lineJoin, '"',
					' miterlimit="', this.miterLimit, '"',
					' endcap="', processLineCap(this.lineCap), '"',
					' weight="', lineWidth, 'px"',
					' color="', color, '" />'
				);
			} else if (typeof this.fillStyle == 'object') {
				var fillStyle = this.fillStyle;
				var angle = 0;
				var focus = {x: 0, y: 0};

				// additional offset
				var shift = 0;
				// scale factor for offset
				var expansion = 1;

				if (fillStyle.type_ == 'gradient') {
					var x0 = fillStyle.x0_ / this.arcScaleX_;
					var y0 = fillStyle.y0_ / this.arcScaleY_;
					var x1 = fillStyle.x1_ / this.arcScaleX_;
					var y1 = fillStyle.y1_ / this.arcScaleY_;
					var p0 = this.getCoords_(x0, y0);
					var p1 = this.getCoords_(x1, y1);
					var dx = p1.x - p0.x;
					var dy = p1.y - p0.y;
					angle = Math.atan2(dx, dy) * 180 / Math.PI;

					// The angle should be a non-negative number.
					if (angle < 0) {
						angle += 360;
					}

					// Very small angles produce an unexpected result because they are
					// converted to a scientific notation string.
					if (angle < 1e-6) {
						angle = 0;
					}
				} else {
					var p0 = this.getCoords_(fillStyle.x0_, fillStyle.y0_);
					var width = max.x - min.x;
					var height = max.y - min.y;
					focus = {
						x: (p0.x - min.x) / width,
						y: (p0.y - min.y) / height
					};

					width /= this.arcScaleX_ * Z;
					height /= this.arcScaleY_ * Z;
					var dimension = m.max(width, height);
					shift = 2 * fillStyle.r0_ / dimension;
					expansion = 2 * fillStyle.r1_ / dimension - shift;
				}

				// We need to sort the color stops in ascending order by offset,
				// otherwise IE won't interpret it correctly.
				var stops = fillStyle.colors_;
				stops.sort(function (cs1, cs2) {
					return cs1.offset - cs2.offset;
				});

				var length = stops.length;
				var color1 = stops[0].color;
				var color2 = stops[length - 1].color;
				var opacity1 = stops[0].alpha * this.globalAlpha;
				var opacity2 = stops[length - 1].alpha * this.globalAlpha;

				var colors = [];
				for (var i = 0; i < length; i++) {
					var stop = stops[i];
					colors.push(stop.offset * expansion + shift + ' ' + stop.color);
				}

				// When colors attribute is used, the meanings of opacity and o:opacity2
				// are reversed.
				lineStr.push('<g_vml_:fill type="', fillStyle.type_, '"',
					' method="none" focus="100%"',
					' color="', color1, '"',
					' color2="', color2, '"',
					' colors="', colors.join(','), '"',
					' opacity="', opacity2, '"',
					' g_o_:opacity2="', opacity1, '"',
					' angle="', angle, '"',
					' focusposition="', focus.x, ',', focus.y, '" />');
			} else {
				lineStr.push('<g_vml_:fill color="', color, '" opacity="', opacity,
					'" />');
			}

			lineStr.push('</g_vml_:shape>');

			this.element_.insertAdjacentHTML('beforeEnd', lineStr.join(''));
		};

		contextPrototype.fill = function () {
			this.stroke(true);
		}

		contextPrototype.closePath = function () {
			this.currentPath_.push({type: 'close'});
		};

		/**
		 * @private
		 */
		contextPrototype.getCoords_ = function (aX, aY) {
			var m = this.m_;
			return {
				x: Z * (aX * m[0][0] + aY * m[1][0] + m[2][0]) - Z2,
				y: Z * (aX * m[0][1] + aY * m[1][1] + m[2][1]) - Z2
			}
		};

		contextPrototype.save = function () {
			var o = {};
			copyState(this, o);
			this.aStack_.push(o);
			this.mStack_.push(this.m_);
			this.m_ = matrixMultiply(createMatrixIdentity(), this.m_);
		};

		contextPrototype.restore = function () {
			copyState(this.aStack_.pop(), this);
			this.m_ = this.mStack_.pop();
		};

		function matrixIsFinite(m) {
			for (var j = 0; j < 3; j++) {
				for (var k = 0; k < 2; k++) {
					if (!isFinite(m[j][k]) || isNaN(m[j][k])) {
						return false;
					}
				}
			}
			return true;
		}

		function setM(ctx, m, updateLineScale) {
			if (!matrixIsFinite(m)) {
				return;
			}
			ctx.m_ = m;

			if (updateLineScale) {
				// Get the line scale.
				// Determinant of this.m_ means how much the area is enlarged by the
				// transformation. So its square root can be used as a scale factor
				// for width.
				var det = m[0][0] * m[1][1] - m[0][1] * m[1][0];
				ctx.lineScale_ = sqrt(abs(det));
			}
		}

		contextPrototype.translate = function (aX, aY) {
			var m1 = [
				[1, 0, 0],
				[0, 1, 0],
				[aX, aY, 1]
			];

			setM(this, matrixMultiply(m1, this.m_), false);
		};

		contextPrototype.rotate = function (aRot) {
			var c = mc(aRot);
			var s = ms(aRot);

			var m1 = [
				[c, s, 0],
				[-s, c, 0],
				[0, 0, 1]
			];

			setM(this, matrixMultiply(m1, this.m_), false);
		};

		contextPrototype.scale = function (aX, aY) {
			this.arcScaleX_ *= aX;
			this.arcScaleY_ *= aY;
			var m1 = [
				[aX, 0, 0],
				[0, aY, 0],
				[0, 0, 1]
			];

			setM(this, matrixMultiply(m1, this.m_), true);
		};

		contextPrototype.transform = function (m11, m12, m21, m22, dx, dy) {
			var m1 = [
				[m11, m12, 0],
				[m21, m22, 0],
				[dx, dy, 1]
			];

			setM(this, matrixMultiply(m1, this.m_), true);
		};

		contextPrototype.setTransform = function (m11, m12, m21, m22, dx, dy) {
			var m = [
				[m11, m12, 0],
				[m21, m22, 0],
				[dx, dy, 1]
			];

			setM(this, m, true);
		};

		/******** STUBS ********/
		contextPrototype.clip = function () {
			// TODO: Implement
		};

		contextPrototype.arcTo = function () {
			// TODO: Implement
		};

		contextPrototype.createPattern = function () {
			return new CanvasPattern_;
		};

		// Gradient / Pattern Stubs
		function CanvasGradient_(aType) {
			this.type_ = aType;
			this.x0_ = 0;
			this.y0_ = 0;
			this.r0_ = 0;
			this.x1_ = 0;
			this.y1_ = 0;
			this.r1_ = 0;
			this.colors_ = [];
		}

		CanvasGradient_.prototype.addColorStop = function (aOffset, aColor) {
			aColor = processStyle(aColor);
			this.colors_.push({offset: aOffset,
				color: aColor.color,
				alpha: aColor.alpha});
		};

		function CanvasPattern_() {
		}

		// set up externs
		G_vmlCanvasManager = G_vmlCanvasManager_;
		CanvasRenderingContext2D = CanvasRenderingContext2D_;
		CanvasGradient = CanvasGradient_;
		CanvasPattern = CanvasPattern_;

	})();

} // if

/**
 *    Chained Selects for jQuery
 *    Copyright (C) 2008 Ziadin Givan www.CodeAssembly.com
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see http://www.gnu.org/licenses/
 *
 *
 *   settings = { usePost : true, before:function() {}, after: function() {}, default: null, parameters : { parameter1 : 'value1', parameter2 : 'value2'} }
 *   if usePost is true, then the form will use POST to pass the parameters to the target, otherwise will use GET
 *   "before" function is called before the ajax request and "after" function is called after the ajax request.
 *   If defaultValue is not null then the specified option will be selected.
 *   You can specify additional parameters to be sent to the the server in settings.parameters.
 *
 */
jomresJquery.fn.chainSelect = function (target, url, settings) {
	return this.each(function () {
		jomresJquery(this).change(function () {
			settings = jomresJquery.extend(
				{
					after: null,
					before: null,
					usePost: false,
					defaultValue: null,
					parameters: {'_id': jomresJquery(this).attr('id'), '_name': jomresJquery(this).attr('name')}
				}, settings);

			settings.parameters._value = jomresJquery(this).val();

			if (settings.before != null) {
				settings.before(target);
			}

			ajaxCallback = function (data, textStatus) {
				jomresJquery(target).html("");//clear old options
				data = eval(data);//get json array

				for (i = 0; i < data.length; i++)//iterate over all options
				{

					for (key in data[i])//get key => value
					{
						//  How on earth this is happening, I don't know. Probably down to something that mootools does, but as I know nothing about mootools, I don't know how to switch it off. Therefore, we'll just check for the keys that are returned by mootools and exclude them.
						// copy remove contains associate extend merge include getRandom getLast each test rgbToHext hexToRgb rgbToHsb hsbToRgb $family clean link combine erase empty flatten
						if (-1 == data[i][key].toString().toLowerCase().lastIndexOf('object') && -1 == data[i][key].toString().toLowerCase().lastIndexOf('function'))
							jomresJquery(target).get(0).add(new Option(data[i][key], [key]), document.all ? i : null);
					}
				}

				if (settings.defaultValue != null) {
					jomresJquery(target).val(settings.defaultValue);//select default value
				} else {
					jomresJquery("option:first", target).attr("selected", "selected");//select first option
				}

				if (settings.after != null) {
					settings.after(target);
				}

				jomresJquery(target).change();//call next chain
			};

			if (settings.usePost == true) {
				jomresJquery.post(url, settings.parameters, ajaxCallback);
			} else {
				jomresJquery.get(url, settings.parameters, ajaxCallback);
			}
		});
	});
};

/*
 * jQuery Easing Compatibility v1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Adds compatibility for applications that use the pre 1.2 easing names
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

jQuery.extend(jQuery.easing,
	{
		easeIn: function (x, t, b, c, d) {
			return jQuery.easing.easeInQuad(x, t, b, c, d);
		},
		easeOut: function (x, t, b, c, d) {
			return jQuery.easing.easeOutQuad(x, t, b, c, d);
		},
		easeInOut: function (x, t, b, c, d) {
			return jQuery.easing.easeInOutQuad(x, t, b, c, d);
		},
		expoin: function (x, t, b, c, d) {
			return jQuery.easing.easeInExpo(x, t, b, c, d);
		},
		expoout: function (x, t, b, c, d) {
			return jQuery.easing.easeOutExpo(x, t, b, c, d);
		},
		expoinout: function (x, t, b, c, d) {
			return jQuery.easing.easeInOutExpo(x, t, b, c, d);
		},
		bouncein: function (x, t, b, c, d) {
			return jQuery.easing.easeInBounce(x, t, b, c, d);
		},
		bounceout: function (x, t, b, c, d) {
			return jQuery.easing.easeOutBounce(x, t, b, c, d);
		},
		bounceinout: function (x, t, b, c, d) {
			return jQuery.easing.easeInOutBounce(x, t, b, c, d);
		},
		elasin: function (x, t, b, c, d) {
			return jQuery.easing.easeInElastic(x, t, b, c, d);
		},
		elasout: function (x, t, b, c, d) {
			return jQuery.easing.easeOutElastic(x, t, b, c, d);
		},
		elasinout: function (x, t, b, c, d) {
			return jQuery.easing.easeInOutElastic(x, t, b, c, d);
		},
		backin: function (x, t, b, c, d) {
			return jQuery.easing.easeInBack(x, t, b, c, d);
		},
		backout: function (x, t, b, c, d) {
			return jQuery.easing.easeOutBack(x, t, b, c, d);
		},
		backinout: function (x, t, b, c, d) {
			return jQuery.easing.easeInOutBack(x, t, b, c, d);
		}
	});

	/**
 * jGrowl 1.2.12
 *
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Written by Stan Lemon <stosh1985@gmail.com>
 * Last updated: 2013.02.14
 *
 * jGrowl is a jQuery plugin implementing unobtrusive userland notifications.  These
 * notifications function similarly to the Growl Framework available for
 * Mac OS X (http://growl.info).
 *
 * To Do:
 * - Move library settings to containers and allow them to be changed per container
 *
 * Changes in 1.2.13
 * - Fixed clearing interval when the container shuts down
 *
 * Changes in 1.2.12
 * - Added compressed versions using UglifyJS and Sqwish
 * - Improved README with configuration options explanation
 * - Added a source map
 *
 * Changes in 1.2.11
 * - Fix artifacts left behind by the shutdown method and text-cleanup
 *
 * Changes in 1.2.10
 * - Fix beforeClose to be called in click event
 *
 * Changes in 1.2.9
 * - Fixed BC break in jQuery 2.0 beta
 *
 * Changes in 1.2.8
 * - Fixes for jQuery 1.9 and the MSIE6 check, note that with jQuery 2.0 support
 *   jGrowl intends to drop support for IE6 altogether
 *
 * Changes in 1.2.6
 * - Fixed js error when a notification is opening and closing at the same time
 *
 * Changes in 1.2.5
 * - Changed wrapper jGrowl's options usage to "o" instead of $.jGrowl.defaults
 * - Added themeState option to control 'highlight' or 'error' for jQuery UI
 * - Ammended some CSS to provide default positioning for nested usage.
 * - Changed some CSS to be prefixed with jGrowl- to prevent namespacing issues
 * - Added two new options - openDuration and closeDuration to allow
 *   better control of notification open and close speeds, respectively
 *   Patch contributed by Jesse Vincet.
 * - Added afterOpen callback.  Patch contributed by Russel Branca.
 *
 * Changes in 1.2.4
 * - Fixed IE bug with the close-all button
 * - Fixed IE bug with the filter CSS attribute (special thanks to gotwic)
 * - Update IE opacity CSS
 * - Changed font sizes to use "em", and only set the base style
 *
 * Changes in 1.2.3
 * - The callbacks no longer use the container as context, instead they use the actual notification
 * - The callbacks now receive the container as a parameter after the options parameter
 * - beforeOpen and beforeClose now check the return value, if it's false - the notification does
 *   not continue.  The open callback will also halt execution if it returns false.
 * - Fixed bug where containers would get confused
 * - Expanded the pause functionality to pause an entire container.
 *
 * Changes in 1.2.2
 * - Notification can now be theme rolled for jQuery UI, special thanks to Jeff Chan!
 *
 * Changes in 1.2.1
 * - Fixed instance where the interval would fire the close method multiple times.
 * - Added CSS to hide from print media
 * - Fixed issue with closer button when div { position: relative } is set
 * - Fixed leaking issue with multiple containers.  Special thanks to Matthew Hanlon!
 *
 * Changes in 1.2.0
 * - Added message pooling to limit the number of messages appearing at a given time.
 * - Closing a notification is now bound to the notification object and triggered by the close button.
 *
 * Changes in 1.1.2
 * - Added iPhone styled example
 * - Fixed possible IE7 bug when determining if the ie6 class shoudl be applied.
 * - Added template for the close button, so that it's content could be customized.
 *
 * Changes in 1.1.1
 * - Fixed CSS styling bug for ie6 caused by a mispelling
 * - Changes height restriction on default notifications to min-height
 * - Added skinned examples using a variety of images
 * - Added the ability to customize the content of the [close all] box
 * - Added jTweet, an example of using jGrowl + Twitter
 *
 * Changes in 1.1.0
 * - Multiple container and instances.
 * - Standard $.jGrowl() now wraps $.fn.jGrowl() by first establishing a generic jGrowl container.
 * - Instance methods of a jGrowl container can be called by $.fn.jGrowl(methodName)
 * - Added glue preferenced, which allows notifications to be inserted before or after nodes in the container
 * - Added new log callback which is called before anything is done for the notification
 * - Corner's attribute are now applied on an individual notification basis.
 *
 * Changes in 1.0.4
 * - Various CSS fixes so that jGrowl renders correctly in IE6.
 *
 * Changes in 1.0.3
 * - Fixed bug with options persisting across notifications
 * - Fixed theme application bug
 * - Simplified some selectors and manipulations.
 * - Added beforeOpen and beforeClose callbacks
 * - Reorganized some lines of code to be more readable
 * - Removed unnecessary this.defaults context
 * - If corners plugin is present, it's now customizable.
 * - Customizable open animation.
 * - Customizable close animation.
 * - Customizable animation easing.
 * - Added customizable positioning (top-left, top-right, bottom-left, bottom-right, center)
 *
 * Changes in 1.0.2
 * - All CSS styling is now external.
 * - Added a theme parameter which specifies a secondary class for styling, such
 *   that notifications can be customized in appearance on a per message basis.
 * - Notification life span is now customizable on a per message basis.
 * - Added the ability to disable the global closer, enabled by default.
 * - Added callbacks for when a notification is opened or closed.
 * - Added callback for the global closer.
 * - Customizable animation speed.
 * - jGrowl now set itself up and tears itself down.
 *
 * Changes in 1.0.1:
 * - Removed dependency on metadata plugin in favor of .data()
 * - Namespaced all events
 */
(function ($) {
	/** Compatibility holdover for 1.9 to check IE6 **/
	var $ie6 = (function () {
		return false === $.support.boxModel && $.support.objectAll && $.support.leadingWhitespace;
	})();

	/** jGrowl Wrapper - Establish a base jGrowl Container for compatibility with older releases. **/
	$.jGrowl = function (m, o) {
		// To maintain compatibility with older version that only supported one instance we'll create the base container.
		if ($('#jGrowl').size() == 0)
			$('<div id="jGrowl"></div>').addClass((o && o.position) ? o.position : $.jGrowl.defaults.position).appendTo('body');

		// Create a notification on the container.
		$('#jGrowl').jGrowl(m, o);
	};


	/** Raise jGrowl Notification on a jGrowl Container **/
	$.fn.jGrowl = function (m, o) {
		if ($.isFunction(this.each)) {
			var args = arguments;

			return this.each(function () {
				/** Create a jGrowl Instance on the Container if it does not exist **/
				if ($(this).data('jGrowl.instance') == undefined) {
					$(this).data('jGrowl.instance', $.extend(new $.fn.jGrowl(), { notifications: [], element: null, interval: null }));
					$(this).data('jGrowl.instance').startup(this);
				}

				/** Optionally call jGrowl instance methods, or just raise a normal notification **/
				if ($.isFunction($(this).data('jGrowl.instance')[m])) {
					$(this).data('jGrowl.instance')[m].apply($(this).data('jGrowl.instance'), $.makeArray(args).slice(1));
				} else {
					$(this).data('jGrowl.instance').create(m, o);
				}
			});
		}
		;
	};

	$.extend($.fn.jGrowl.prototype, {

		/** Default JGrowl Settings **/
		defaults: {
			pool: 0,
			header: '',
			group: '',
			sticky: false,
			position: 'top-right',
			glue: 'after',
			theme: 'default',
			themeState: 'highlight',
			corners: '10px',
			check: 250,
			life: 3000,
			closeDuration: 'normal',
			openDuration: 'normal',
			easing: 'swing',
			closer: true,
			closeTemplate: '&times;',
			closerTemplate: '<div>[ close all ]</div>',
			log: function () {
			},
			beforeOpen: function () {
			},
			afterOpen: function () {
			},
			open: function () {
			},
			beforeClose: function () {
			},
			close: function () {
			},
			animateOpen: {
				opacity: 'show'
			},
			animateClose: {
				opacity: 'hide'
			}
		},

		notifications: [],

		/** jGrowl Container Node **/
		element: null,

		/** Interval Function **/
		interval: null,

		/** Create a Notification **/
		create: function (message, o) {
			var o = $.extend({}, this.defaults, o);

			/* To keep backward compatibility with 1.24 and earlier, honor 'speed' if the user has set it */
			if (typeof o.speed !== 'undefined') {
				o.openDuration = o.speed;
				o.closeDuration = o.speed;
			}

			this.notifications.push({ message: message, options: o });

			o.log.apply(this.element, [this.element, message, o]);
		},

		render: function (notification) {
			var self = this;
			var message = notification.message;
			var o = notification.options;

			// Support for jQuery theme-states, if this is not used it displays a widget header
			o.themeState = (o.themeState == '') ? '' : 'ui-state-' + o.themeState;

			var notification = $('<div/>')
				.addClass('jGrowl-notification ' + o.themeState + ' ui-corner-all' + ((o.group != undefined && o.group != '') ? ' ' + o.group : ''))
				.append($('<div/>').addClass('jGrowl-close').html(o.closeTemplate))
				.append($('<div/>').addClass('jGrowl-header').html(o.header))
				.append($('<div/>').addClass('jGrowl-message').html(message))
				.data("jGrowl", o).addClass(o.theme).children('div.jGrowl-close').bind("click.jGrowl", function () {
					$(this).parent().trigger('jGrowl.beforeClose');
				})
				.parent();


			/** Notification Actions **/
			$(notification).bind("mouseover.jGrowl",function () {
				$('div.jGrowl-notification', self.element).data("jGrowl.pause", true);
			}).bind("mouseout.jGrowl",function () {
					$('div.jGrowl-notification', self.element).data("jGrowl.pause", false);
				}).bind('jGrowl.beforeOpen',function () {
					if (o.beforeOpen.apply(notification, [notification, message, o, self.element]) !== false) {
						$(this).trigger('jGrowl.open');
					}
				}).bind('jGrowl.open',function () {
					if (o.open.apply(notification, [notification, message, o, self.element]) !== false) {
						if (o.glue == 'after') {
							$('div.jGrowl-notification:last', self.element).after(notification);
						} else {
							$('div.jGrowl-notification:first', self.element).before(notification);
						}

						$(this).animate(o.animateOpen, o.openDuration, o.easing, function () {
							// Fixes some anti-aliasing issues with IE filters.
							if ($.support.opacity === false)
								this.style.removeAttribute('filter');

							if ($(this).data("jGrowl") !== null) // Happens when a notification is closing before it's open.
								$(this).data("jGrowl").created = new Date();

							$(this).trigger('jGrowl.afterOpen');
						});
					}
				}).bind('jGrowl.afterOpen',function () {
					o.afterOpen.apply(notification, [notification, message, o, self.element]);
				}).bind('jGrowl.beforeClose',function () {
					if (o.beforeClose.apply(notification, [notification, message, o, self.element]) !== false)
						$(this).trigger('jGrowl.close');
				}).bind('jGrowl.close',function () {
					// Pause the notification, lest during the course of animation another close event gets called.
					$(this).data('jGrowl.pause', true);
					$(this).animate(o.animateClose, o.closeDuration, o.easing, function () {
						if ($.isFunction(o.close)) {
							if (o.close.apply(notification, [notification, message, o, self.element]) !== false)
								$(this).remove();
						} else {
							$(this).remove();
						}
					});
				}).trigger('jGrowl.beforeOpen');

			/** Optional Corners Plugin **/
			if (o.corners != '' && $.fn.corner != undefined) $(notification).corner(o.corners);

			/** Add a Global Closer if more than one notification exists **/
			if ($('div.jGrowl-notification:parent', self.element).size() > 1 &&
				$('div.jGrowl-closer', self.element).size() == 0 && this.defaults.closer !== false) {
				$(this.defaults.closerTemplate).addClass('jGrowl-closer ' + this.defaults.themeState + ' ui-corner-all').addClass(this.defaults.theme)
					.appendTo(self.element).animate(this.defaults.animateOpen, this.defaults.speed, this.defaults.easing)
					.bind("click.jGrowl", function () {
						$(this).siblings().trigger("jGrowl.beforeClose");

						if ($.isFunction(self.defaults.closer)) {
							self.defaults.closer.apply($(this).parent()[0], [$(this).parent()[0]]);
						}
					});
			}
			;
		},

		/** Update the jGrowl Container, removing old jGrowl notifications **/
		update: function () {
			$(this.element).find('div.jGrowl-notification:parent').each(function () {
				if ($(this).data("jGrowl") != undefined && $(this).data("jGrowl").created !== undefined &&
					($(this).data("jGrowl").created.getTime() + parseInt($(this).data("jGrowl").life)) < (new Date()).getTime() &&
					$(this).data("jGrowl").sticky !== true &&
					($(this).data("jGrowl.pause") == undefined || $(this).data("jGrowl.pause") !== true)) {

					// Pause the notification, lest during the course of animation another close event gets called.
					$(this).trigger('jGrowl.beforeClose');
				}
			});

			if (this.notifications.length > 0 &&
				(this.defaults.pool == 0 || $(this.element).find('div.jGrowl-notification:parent').size() < this.defaults.pool))
				this.render(this.notifications.shift());

			if ($(this.element).find('div.jGrowl-notification:parent').size() < 2) {
				$(this.element).find('div.jGrowl-closer').animate(this.defaults.animateClose, this.defaults.speed, this.defaults.easing, function () {
					$(this).remove();
				});
			}
		},

		/** Setup the jGrowl Notification Container **/
		startup: function (e) {
			this.element = $(e).addClass('jGrowl').append('<div class="jGrowl-notification"></div>');
			this.interval = setInterval(function () {
				$(e).data('jGrowl.instance').update();
			}, parseInt(this.defaults.check));

			if ($ie6) {
				$(this.element).addClass('ie6');
			}
		},

		/** Shutdown jGrowl, removing it and clearing the interval **/
		shutdown: function () {
			$(this.element).removeClass('jGrowl')
				.find('div.jGrowl-notification').trigger('jGrowl.close')
				.parent().empty()

			clearInterval(this.interval);
		},

		close: function () {
			$(this.element).find('div.jGrowl-notification').each(function () {
				$(this).trigger('jGrowl.beforeClose');
			});
		}
	});

	/** Reference the Defaults Object for compatibility with older versions of jGrowl **/
	$.jGrowl.defaults = $.fn.jGrowl.prototype.defaults;

})(jQuery);

/*! Copyright (c) 2008 Brandon Aaron (http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.0.3
 * Requires jQuery 1.1.3+
 * Docs: http://docs.jquery.com/Plugins/livequery
 */

(function ($) {

	$.extend($.fn, {
		livequery: function (type, fn, fn2) {
			var self = this, q;

			// Handle different call patterns
			if ($.isFunction(type))
				fn2 = fn, fn = type, type = undefined;

			// See if Live Query already exists
			$.each($.livequery.queries, function (i, query) {
				if (self.selector == query.selector && self.context == query.context &&
					type == query.type && (!fn || fn.$lqguid == query.fn.$lqguid) && (!fn2 || fn2.$lqguid == query.fn2.$lqguid))
				// Found the query, exit the each loop
					return (q = query) && false;
			});

			// Create new Live Query if it wasn't found
			q = q || new $.livequery(this.selector, this.context, type, fn, fn2);

			// Make sure it is running
			q.stopped = false;

			// Run it immediately for the first time
			q.run();

			// Contnue the chain
			return this;
		},

		expire: function (type, fn, fn2) {
			var self = this;

			// Handle different call patterns
			if ($.isFunction(type))
				fn2 = fn, fn = type, type = undefined;

			// Find the Live Query based on arguments and stop it
			$.each($.livequery.queries, function (i, query) {
				if (self.selector == query.selector && self.context == query.context &&
					(!type || type == query.type) && (!fn || fn.$lqguid == query.fn.$lqguid) && (!fn2 || fn2.$lqguid == query.fn2.$lqguid) && !this.stopped)
					$.livequery.stop(query.id);
			});

			// Continue the chain
			return this;
		}
	});

	$.livequery = function (selector, context, type, fn, fn2) {
		this.selector = selector;
		this.context = context || document;
		this.type = type;
		this.fn = fn;
		this.fn2 = fn2;
		this.elements = [];
		this.stopped = false;

		// The id is the index of the Live Query in $.livequery.queries
		this.id = $.livequery.queries.push(this) - 1;

		// Mark the functions for matching later on
		fn.$lqguid = fn.$lqguid || $.livequery.guid++;
		if (fn2) fn2.$lqguid = fn2.$lqguid || $.livequery.guid++;

		// Return the Live Query
		return this;
	};

	$.livequery.prototype = {
		stop: function () {
			var query = this;

			if (this.type)
			// Unbind all bound events
				this.elements.unbind(this.type, this.fn);
			else if (this.fn2)
			// Call the second function for all matched elements
				this.elements.each(function (i, el) {
					query.fn2.apply(el);
				});

			// Clear out matched elements
			this.elements = [];

			// Stop the Live Query from running until restarted
			this.stopped = true;
		},

		run: function () {
			// Short-circuit if stopped
			if (this.stopped) return;
			var query = this;

			var oEls = this.elements,
				els = $(this.selector, this.context),
				nEls = els.not(oEls);

			// Set elements to the latest set of matched elements
			this.elements = els;

			if (this.type) {
				// Bind events to newly matched elements
				nEls.bind(this.type, this.fn);

				// Unbind events to elements no longer matched
				if (oEls.length > 0)
					$.each(oEls, function (i, el) {
						if ($.inArray(el, els) < 0)
							$.event.remove(el, query.type, query.fn);
					});
			}
			else {
				// Call the first function for newly matched elements
				nEls.each(function () {
					query.fn.apply(this);
				});

				// Call the second function for elements no longer matched
				if (this.fn2 && oEls.length > 0)
					$.each(oEls, function (i, el) {
						if ($.inArray(el, els) < 0)
							query.fn2.apply(el);
					});
			}
		}
	};

	$.extend($.livequery, {
		guid: 0,
		queries: [],
		queue: [],
		running: false,
		timeout: null,

		checkQueue: function () {
			if ($.livequery.running && $.livequery.queue.length) {
				var length = $.livequery.queue.length;
				// Run each Live Query currently in the queue
				while (length--)
					$.livequery.queries[ $.livequery.queue.shift() ].run();
			}
		},

		pause: function () {
			// Don't run anymore Live Queries until restarted
			$.livequery.running = false;
		},

		play: function () {
			// Restart Live Queries
			$.livequery.running = true;
			// Request a run of the Live Queries
			$.livequery.run();
		},

		registerPlugin: function () {
			$.each(arguments, function (i, n) {
				// Short-circuit if the method doesn't exist
				if (!$.fn[n]) return;

				// Save a reference to the original method
				var old = $.fn[n];

				// Create a new method
				$.fn[n] = function () {
					// Call the original method
					var r = old.apply(this, arguments);

					// Request a run of the Live Queries
					$.livequery.run();

					// Return the original methods result
					return r;
				}
			});
		},

		run: function (id) {
			if (id != undefined) {
				// Put the particular Live Query in the queue if it doesn't already exist
				if ($.inArray(id, $.livequery.queue) < 0)
					$.livequery.queue.push(id);
			}
			else
			// Put each Live Query in the queue if it doesn't already exist
				$.each($.livequery.queries, function (id) {
					if ($.inArray(id, $.livequery.queue) < 0)
						$.livequery.queue.push(id);
				});

			// Clear timeout if it already exists
			if ($.livequery.timeout) clearTimeout($.livequery.timeout);
			// Create a timeout to check the queue and actually run the Live Queries
			$.livequery.timeout = setTimeout($.livequery.checkQueue, 20);
		},

		stop: function (id) {
			if (id != undefined)
			// Stop are particular Live Query
				$.livequery.queries[ id ].stop();
			else
			// Stop all Live Queries
				$.each($.livequery.queries, function (id) {
					$.livequery.queries[ id ].stop();
				});
		}
	});

// Register core DOM manipulation methods
	$.livequery.registerPlugin('append', 'prepend', 'after', 'before', 'wrap', 'attr', 'removeAttr', 'addClass', 'removeClass', 'toggleClass', 'empty', 'remove');

// Run Live Queries when the Document is ready
	$(function () {
		$.livequery.play();
	});


// Save a reference to the original init method
	var init = $.prototype.init;

// Create a new init method that exposes two new properties: selector and context
	$.prototype.init = function (a, c) {
		// Call the original init and save the result
		var r = init.apply(this, arguments);

		// Copy over properties if they exist already
		if (a && a.selector)
			r.context = a.context, r.selector = a.selector;

		// Set properties
		if (typeof a == 'string')
			r.context = c || document, r.selector = a;

		// Return the result
		return r;
	};

// Give the init function the jQuery prototype for later instantiation (needed after Rev 4091)
	$.prototype.init.prototype = $.prototype;

})(jQuery);

// tipsy, facebook style tooltips for jquery
// version 1.0.0a
// (c) 2008-2010 jason frame [jason@onehackoranother.com]
// released under the MIT license

(function ($) {

	function maybeCall(thing, ctx) {
		return (typeof thing == 'function') ? (thing.call(ctx)) : thing;
	};

	function isElementInDOM(ele) {
		while (ele = ele.parentNode) {
			if (ele == document) return true;
		}
		return false;
	};

	function Tipsy(element, options) {
		this.$element = $(element);
		this.options = options;
		this.enabled = true;
		this.fixTitle();
	};

	Tipsy.prototype = {
		show: function () {
			var title = this.getTitle();
			if (title && this.enabled) {
				var $tip = this.tip();

				$tip.find('.tipsy-inner')[this.options.html ? 'html' : 'text'](title);
				$tip[0].className = 'tipsy'; // reset classname in case of dynamic gravity
				$tip.remove().css({top: 0, left: 0, visibility: 'hidden', display: 'block'}).prependTo(document.body);

				var pos = $.extend({}, this.$element.offset(), {
					width: this.$element[0].offsetWidth,
					height: this.$element[0].offsetHeight
				});

				var actualWidth = $tip[0].offsetWidth,
					actualHeight = $tip[0].offsetHeight,
					gravity = maybeCall(this.options.gravity, this.$element[0]);

				var tp;
				switch (gravity.charAt(0)) {
					case 'n':
						tp = {top: pos.top + pos.height + this.options.offset, left: pos.left + pos.width / 2 - actualWidth / 2};
						break;
					case 's':
						tp = {top: pos.top - actualHeight - this.options.offset, left: pos.left + pos.width / 2 - actualWidth / 2};
						break;
					case 'e':
						tp = {top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth - this.options.offset};
						break;
					case 'w':
						tp = {top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width + this.options.offset};
						break;
				}

				if (gravity.length == 2) {
					if (gravity.charAt(1) == 'w') {
						tp.left = pos.left + pos.width / 2 - 15;
					} else {
						tp.left = pos.left + pos.width / 2 - actualWidth + 15;
					}
				}

				$tip.css(tp).addClass('tipsy-' + gravity);
				$tip.find('.tipsy-arrow')[0].className = 'tipsy-arrow tipsy-arrow-' + gravity.charAt(0);
				if (this.options.className) {
					$tip.addClass(maybeCall(this.options.className, this.$element[0]));
				}

				if (this.options.fade) {
					$tip.stop().css({opacity: 0, display: 'block', visibility: 'visible'}).animate({opacity: this.options.opacity});
				} else {
					$tip.css({visibility: 'visible', opacity: this.options.opacity});
				}
			}
		},

		hide: function () {
			if (this.options.fade) {
				this.tip().stop().fadeOut(function () {
					$(this).remove();
				});
			} else {
				this.tip().remove();
			}
		},

		fixTitle: function () {
			var $e = this.$element;
			if ($e.attr('title') || typeof($e.attr('original-title')) != 'string') {
				$e.attr('original-title', $e.attr('title') || '').removeAttr('title');
			}
		},

		getTitle: function () {
			var title, $e = this.$element, o = this.options;
			this.fixTitle();
			var title, o = this.options;
			if (typeof o.title == 'string') {
				title = $e.attr(o.title == 'title' ? 'original-title' : o.title);
			} else if (typeof o.title == 'function') {
				title = o.title.call($e[0]);
			}
			title = ('' + title).replace(/(^\s*|\s*$)/, "");
			return title || o.fallback;
		},

		tip: function () {
			if (!this.$tip) {
				this.$tip = $('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"></div>');
				this.$tip.data('tipsy-pointee', this.$element[0]);
			}
			return this.$tip;
		},

		validate: function () {
			if (!this.$element[0].parentNode) {
				this.hide();
				this.$element = null;
				this.options = null;
			}
		},

		enable: function () {
			this.enabled = true;
		},
		disable: function () {
			this.enabled = false;
		},
		toggleEnabled: function () {
			this.enabled = !this.enabled;
		}
	};

	$.fn.tipsy = function (options) {

		if (options === true) {
			return this.data('tipsy');
		} else if (typeof options == 'string') {
			var tipsy = this.data('tipsy');
			if (tipsy) tipsy[options]();
			return this;
		}

		options = $.extend({}, $.fn.tipsy.defaults, options);

		function get(ele) {
			var tipsy = $.data(ele, 'tipsy');
			if (!tipsy) {
				tipsy = new Tipsy(ele, $.fn.tipsy.elementOptions(ele, options));
				$.data(ele, 'tipsy', tipsy);
			}
			return tipsy;
		}

		function enter() {
			var tipsy = get(this);
			tipsy.hoverState = 'in';
			if (options.delayIn == 0) {
				tipsy.show();
			} else {
				tipsy.fixTitle();
				setTimeout(function () {
					if (tipsy.hoverState == 'in') tipsy.show();
				}, options.delayIn);
			}
		};

		function leave() {
			var tipsy = get(this);
			tipsy.hoverState = 'out';
			if (options.delayOut == 0) {
				tipsy.hide();
			} else {
				setTimeout(function () {
					if (tipsy.hoverState == 'out') tipsy.hide();
				}, options.delayOut);
			}
		};

		if (!options.live) this.each(function () {
			get(this);
		});

		if (options.trigger != 'manual') {
			var binder = options.live ? 'live' : 'bind',
				eventIn = options.trigger == 'hover' ? 'mouseenter' : 'focus',
				eventOut = options.trigger == 'hover' ? 'mouseleave' : 'blur';
			this[binder](eventIn, enter)[binder](eventOut, leave);
		}

		return this;

	};

	$.fn.tipsy.defaults = {
		className: null,
		delayIn: 0,
		delayOut: 0,
		fade: false,
		fallback: '',
		gravity: 'n',
		html: false,
		live: false,
		offset: 0,
		opacity: 0.8,
		title: 'title',
		trigger: 'hover'
	};

	$.fn.tipsy.revalidate = function () {
		$('.tipsy').each(function () {
			var pointee = $.data(this, 'tipsy-pointee');
			if (!pointee || !isElementInDOM(pointee)) {
				$(this).remove();
			}
		});
	};

	// Overwrite this method to provide options on a per-element basis.
	// For example, you could store the gravity in a 'tipsy-gravity' attribute:
	// return $.extend({}, options, {gravity: $(ele).attr('tipsy-gravity') || 'n' });
	// (remember - do not modify 'options' in place!)
	$.fn.tipsy.elementOptions = function (ele, options) {
		return $.metadata ? $.extend({}, options, $(ele).metadata()) : options;
	};

	$.fn.tipsy.autoNS = function () {
		return $(this).offset().top > ($(document).scrollTop() + $(window).height() / 2) ? 's' : 'n';
	};

	$.fn.tipsy.autoWE = function () {
		return $(this).offset().left > ($(document).scrollLeft() + $(window).width() / 2) ? 'e' : 'w';
	};

	/**
	 * yields a closure of the supplied parameters, producing a function that takes
	 * no arguments and is suitable for use as an autogravity function like so:
	 *
	 * @param margin (int) - distance from the viewable region edge that an
	 *        element should be before setting its tooltip's gravity to be away
	 *        from that edge.
	 * @param prefer (string, e.g. 'n', 'sw', 'w') - the direction to prefer
	 *        if there are no viewable region edges effecting the tooltip's
	 *        gravity. It will try to vary from this minimally, for example,
	 *        if 'sw' is preferred and an element is near the right viewable
	 *        region edge, but not the top edge, it will set the gravity for
	 *        that element's tooltip to be 'se', preserving the southern
	 *        component.
	 */
	$.fn.tipsy.autoBounds = function (margin, prefer) {
		return function () {
			var dir = {ns: prefer[0], ew: (prefer.length > 1 ? prefer[1] : false)},
				boundTop = $(document).scrollTop() + margin,
				boundLeft = $(document).scrollLeft() + margin,
				$this = $(this);

			if ($this.offset().top < boundTop) dir.ns = 'n';
			if ($this.offset().left < boundLeft) dir.ew = 'w';
			if ($(window).width() + $(document).scrollLeft() - $this.offset().left < margin) dir.ew = 'e';
			if ($(window).height() + $(document).scrollTop() - $this.offset().top < margin) dir.ns = 's';

			return dir.ns + (dir.ew ? dir.ew : '');
		}
	};

})(jQuery);

/*
 * File:        jquery.dataTables.min.js
 * Version:     1.9.4
 * Author:      Allan Jardine (www.sprymedia.co.uk)
 * Info:        www.datatables.net
 * 
 * Copyright 2008-2012 Allan Jardine, all rights reserved.
 *
 * This source file is free software, under either the GPL v2 license or a
 * BSD style license, available at:
 *   http://datatables.net/license_gpl2
 *   http://datatables.net/license_bsd
 * 
 * This source file is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 */
(function (X, l, n) {
	var L = function (h) {
		var j = function (e) {
			function o(a, b) {
				var c = j.defaults.columns, d = a.aoColumns.length, c = h.extend({}, j.models.oColumn, c, {sSortingClass: a.oClasses.sSortable, sSortingClassJUI: a.oClasses.sSortJUI, nTh: b ? b : l.createElement("th"), sTitle: c.sTitle ? c.sTitle : b ? b.innerHTML : "", aDataSort: c.aDataSort ? c.aDataSort : [d], mData: c.mData ? c.oDefaults : d});
				a.aoColumns.push(c);
				if (a.aoPreSearchCols[d] === n || null === a.aoPreSearchCols[d])a.aoPreSearchCols[d] = h.extend({}, j.models.oSearch); else if (c = a.aoPreSearchCols[d],
					c.bRegex === n && (c.bRegex = !0), c.bSmart === n && (c.bSmart = !0), c.bCaseInsensitive === n)c.bCaseInsensitive = !0;
				m(a, d, null)
			}

			function m(a, b, c) {
				var d = a.aoColumns[b];
				c !== n && null !== c && (c.mDataProp && !c.mData && (c.mData = c.mDataProp), c.sType !== n && (d.sType = c.sType, d._bAutoType = !1), h.extend(d, c), p(d, c, "sWidth", "sWidthOrig"), c.iDataSort !== n && (d.aDataSort = [c.iDataSort]), p(d, c, "aDataSort"));
				var i = d.mRender ? Q(d.mRender) : null, f = Q(d.mData);
				d.fnGetData = function (a, b) {
					var c = f(a, b);
					return d.mRender && b && "" !== b ? i(c, b, a) : c
				};
				d.fnSetData =
					L(d.mData);
				a.oFeatures.bSort || (d.bSortable = !1);
				!d.bSortable || -1 == h.inArray("asc", d.asSorting) && -1 == h.inArray("desc", d.asSorting) ? (d.sSortingClass = a.oClasses.sSortableNone, d.sSortingClassJUI = "") : -1 == h.inArray("asc", d.asSorting) && -1 == h.inArray("desc", d.asSorting) ? (d.sSortingClass = a.oClasses.sSortable, d.sSortingClassJUI = a.oClasses.sSortJUI) : -1 != h.inArray("asc", d.asSorting) && -1 == h.inArray("desc", d.asSorting) ? (d.sSortingClass = a.oClasses.sSortableAsc, d.sSortingClassJUI = a.oClasses.sSortJUIAscAllowed) : -1 ==
					h.inArray("asc", d.asSorting) && -1 != h.inArray("desc", d.asSorting) && (d.sSortingClass = a.oClasses.sSortableDesc, d.sSortingClassJUI = a.oClasses.sSortJUIDescAllowed)
			}

			function k(a) {
				if (!1 === a.oFeatures.bAutoWidth)return!1;
				da(a);
				for (var b = 0, c = a.aoColumns.length; b < c; b++)a.aoColumns[b].nTh.style.width = a.aoColumns[b].sWidth
			}

			function G(a, b) {
				var c = r(a, "bVisible");
				return"number" === typeof c[b] ? c[b] : null
			}

			function R(a, b) {
				var c = r(a, "bVisible"), c = h.inArray(b, c);
				return-1 !== c ? c : null
			}

			function t(a) {
				return r(a, "bVisible").length
			}

			function r(a, b) {
				var c = [];
				h.map(a.aoColumns, function (a, i) {
					a[b] && c.push(i)
				});
				return c
			}

			function B(a) {
				for (var b = j.ext.aTypes, c = b.length, d = 0; d < c; d++) {
					var i = b[d](a);
					if (null !== i)return i
				}
				return"string"
			}

			function u(a, b) {
				for (var c = b.split(","), d = [], i = 0, f = a.aoColumns.length; i < f; i++)for (var g = 0; g < f; g++)if (a.aoColumns[i].sName == c[g]) {
					d.push(g);
					break
				}
				return d
			}

			function M(a) {
				for (var b = "", c = 0, d = a.aoColumns.length; c < d; c++)b += a.aoColumns[c].sName + ",";
				return b.length == d ? "" : b.slice(0, -1)
			}

			function ta(a, b, c, d) {
				var i, f,
					g, e, w;
				if (b)for (i = b.length - 1; 0 <= i; i--) {
					var j = b[i].aTargets;
					h.isArray(j) || D(a, 1, "aTargets must be an array of targets, not a " + typeof j);
					f = 0;
					for (g = j.length; f < g; f++)if ("number" === typeof j[f] && 0 <= j[f]) {
						for (; a.aoColumns.length <= j[f];)o(a);
						d(j[f], b[i])
					} else if ("number" === typeof j[f] && 0 > j[f])d(a.aoColumns.length + j[f], b[i]); else if ("string" === typeof j[f]) {
						e = 0;
						for (w = a.aoColumns.length; e < w; e++)("_all" == j[f] || h(a.aoColumns[e].nTh).hasClass(j[f])) && d(e, b[i])
					}
				}
				if (c) {
					i = 0;
					for (a = c.length; i < a; i++)d(i, c[i])
				}
			}

			function H(a, b) {
				var c;
				c = h.isArray(b) ? b.slice() : h.extend(!0, {}, b);
				var d = a.aoData.length, i = h.extend(!0, {}, j.models.oRow);
				i._aData = c;
				a.aoData.push(i);
				for (var f, i = 0, g = a.aoColumns.length; i < g; i++)c = a.aoColumns[i], "function" === typeof c.fnRender && c.bUseRendered && null !== c.mData ? F(a, d, i, S(a, d, i)) : F(a, d, i, v(a, d, i)), c._bAutoType && "string" != c.sType && (f = v(a, d, i, "type"), null !== f && "" !== f && (f = B(f), null === c.sType ? c.sType = f : c.sType != f && "html" != c.sType && (c.sType = "string")));
				a.aiDisplayMaster.push(d);
				a.oFeatures.bDeferRender || ea(a,
					d);
				return d
			}

			function ua(a) {
				var b, c, d, i, f, g, e;
				if (a.bDeferLoading || null === a.sAjaxSource)for (b = a.nTBody.firstChild; b;) {
					if ("TR" == b.nodeName.toUpperCase()) {
						c = a.aoData.length;
						b._DT_RowIndex = c;
						a.aoData.push(h.extend(!0, {}, j.models.oRow, {nTr: b}));
						a.aiDisplayMaster.push(c);
						f = b.firstChild;
						for (d = 0; f;) {
							g = f.nodeName.toUpperCase();
							if ("TD" == g || "TH" == g)F(a, c, d, h.trim(f.innerHTML)), d++;
							f = f.nextSibling
						}
					}
					b = b.nextSibling
				}
				i = T(a);
				d = [];
				b = 0;
				for (c = i.length; b < c; b++)for (f = i[b].firstChild; f;)g = f.nodeName.toUpperCase(), ("TD" ==
					g || "TH" == g) && d.push(f), f = f.nextSibling;
				c = 0;
				for (i = a.aoColumns.length; c < i; c++) {
					e = a.aoColumns[c];
					null === e.sTitle && (e.sTitle = e.nTh.innerHTML);
					var w = e._bAutoType, o = "function" === typeof e.fnRender, k = null !== e.sClass, n = e.bVisible, m, p;
					if (w || o || k || !n) {
						g = 0;
						for (b = a.aoData.length; g < b; g++)f = a.aoData[g], m = d[g * i + c], w && "string" != e.sType && (p = v(a, g, c, "type"), "" !== p && (p = B(p), null === e.sType ? e.sType = p : e.sType != p && "html" != e.sType && (e.sType = "string"))), e.mRender ? m.innerHTML = v(a, g, c, "display") : e.mData !== c && (m.innerHTML = v(a,
							g, c, "display")), o && (p = S(a, g, c), m.innerHTML = p, e.bUseRendered && F(a, g, c, p)), k && (m.className += " " + e.sClass), n ? f._anHidden[c] = null : (f._anHidden[c] = m, m.parentNode.removeChild(m)), e.fnCreatedCell && e.fnCreatedCell.call(a.oInstance, m, v(a, g, c, "display"), f._aData, g, c)
					}
				}
				if (0 !== a.aoRowCreatedCallback.length) {
					b = 0;
					for (c = a.aoData.length; b < c; b++)f = a.aoData[b], A(a, "aoRowCreatedCallback", null, [f.nTr, f._aData, b])
				}
			}

			function I(a, b) {
				return b._DT_RowIndex !== n ? b._DT_RowIndex : null
			}

			function fa(a, b, c) {
				for (var b = J(a, b), d = 0, a =
					a.aoColumns.length; d < a; d++)if (b[d] === c)return d;
				return-1
			}

			function Y(a, b, c, d) {
				for (var i = [], f = 0, g = d.length; f < g; f++)i.push(v(a, b, d[f], c));
				return i
			}

			function v(a, b, c, d) {
				var i = a.aoColumns[c];
				if ((c = i.fnGetData(a.aoData[b]._aData, d)) === n)return a.iDrawError != a.iDraw && null === i.sDefaultContent && (D(a, 0, "Requested unknown parameter " + ("function" == typeof i.mData ? "{mData function}" : "'" + i.mData + "'") + " from the data source for row " + b), a.iDrawError = a.iDraw), i.sDefaultContent;
				if (null === c && null !== i.sDefaultContent)c =
					i.sDefaultContent; else if ("function" === typeof c)return c();
				return"display" == d && null === c ? "" : c
			}

			function F(a, b, c, d) {
				a.aoColumns[c].fnSetData(a.aoData[b]._aData, d)
			}

			function Q(a) {
				if (null === a)return function () {
					return null
				};
				if ("function" === typeof a)return function (b, d, i) {
					return a(b, d, i)
				};
				if ("string" === typeof a && (-1 !== a.indexOf(".") || -1 !== a.indexOf("["))) {
					var b = function (a, d, i) {
						var f = i.split("."), g;
						if ("" !== i) {
							var e = 0;
							for (g = f.length; e < g; e++) {
								if (i = f[e].match(U)) {
									f[e] = f[e].replace(U, "");
									"" !== f[e] && (a = a[f[e]]);
									g = [];
									f.splice(0, e + 1);
									for (var f = f.join("."), e = 0, h = a.length; e < h; e++)g.push(b(a[e], d, f));
									a = i[0].substring(1, i[0].length - 1);
									a = "" === a ? g : g.join(a);
									break
								}
								if (null === a || a[f[e]] === n)return n;
								a = a[f[e]]
							}
						}
						return a
					};
					return function (c, d) {
						return b(c, d, a)
					}
				}
				return function (b) {
					return b[a]
				}
			}

			function L(a) {
				if (null === a)return function () {
				};
				if ("function" === typeof a)return function (b, d) {
					a(b, "set", d)
				};
				if ("string" === typeof a && (-1 !== a.indexOf(".") || -1 !== a.indexOf("["))) {
					var b = function (a, d, i) {
						var i = i.split("."), f, g, e = 0;
						for (g =
								 i.length - 1; e < g; e++) {
							if (f = i[e].match(U)) {
								i[e] = i[e].replace(U, "");
								a[i[e]] = [];
								f = i.slice();
								f.splice(0, e + 1);
								g = f.join(".");
								for (var h = 0, j = d.length; h < j; h++)f = {}, b(f, d[h], g), a[i[e]].push(f);
								return
							}
							if (null === a[i[e]] || a[i[e]] === n)a[i[e]] = {};
							a = a[i[e]]
						}
						a[i[i.length - 1].replace(U, "")] = d
					};
					return function (c, d) {
						return b(c, d, a)
					}
				}
				return function (b, d) {
					b[a] = d
				}
			}

			function Z(a) {
				for (var b = [], c = a.aoData.length, d = 0; d < c; d++)b.push(a.aoData[d]._aData);
				return b
			}

			function ga(a) {
				a.aoData.splice(0, a.aoData.length);
				a.aiDisplayMaster.splice(0,
					a.aiDisplayMaster.length);
				a.aiDisplay.splice(0, a.aiDisplay.length);
				y(a)
			}

			function ha(a, b) {
				for (var c = -1, d = 0, i = a.length; d < i; d++)a[d] == b ? c = d : a[d] > b && a[d]--;
				-1 != c && a.splice(c, 1)
			}

			function S(a, b, c) {
				var d = a.aoColumns[c];
				return d.fnRender({iDataRow: b, iDataColumn: c, oSettings: a, aData: a.aoData[b]._aData, mDataProp: d.mData}, v(a, b, c, "display"))
			}

			function ea(a, b) {
				var c = a.aoData[b], d;
				if (null === c.nTr) {
					c.nTr = l.createElement("tr");
					c.nTr._DT_RowIndex = b;
					c._aData.DT_RowId && (c.nTr.id = c._aData.DT_RowId);
					c._aData.DT_RowClass &&
					(c.nTr.className = c._aData.DT_RowClass);
					for (var i = 0, f = a.aoColumns.length; i < f; i++) {
						var g = a.aoColumns[i];
						d = l.createElement(g.sCellType);
						d.innerHTML = "function" === typeof g.fnRender && (!g.bUseRendered || null === g.mData) ? S(a, b, i) : v(a, b, i, "display");
						null !== g.sClass && (d.className = g.sClass);
						g.bVisible ? (c.nTr.appendChild(d), c._anHidden[i] = null) : c._anHidden[i] = d;
						g.fnCreatedCell && g.fnCreatedCell.call(a.oInstance, d, v(a, b, i, "display"), c._aData, b, i)
					}
					A(a, "aoRowCreatedCallback", null, [c.nTr, c._aData, b])
				}
			}

			function va(a) {
				var b,
					c, d;
				if (0 !== h("th, td", a.nTHead).length) {
					b = 0;
					for (d = a.aoColumns.length; b < d; b++)if (c = a.aoColumns[b].nTh, c.setAttribute("role", "columnheader"), a.aoColumns[b].bSortable && (c.setAttribute("tabindex", a.iTabIndex), c.setAttribute("aria-controls", a.sTableId)), null !== a.aoColumns[b].sClass && h(c).addClass(a.aoColumns[b].sClass), a.aoColumns[b].sTitle != c.innerHTML)c.innerHTML = a.aoColumns[b].sTitle
				} else {
					var i = l.createElement("tr");
					b = 0;
					for (d = a.aoColumns.length; b < d; b++)c = a.aoColumns[b].nTh, c.innerHTML = a.aoColumns[b].sTitle,
						c.setAttribute("tabindex", "0"), null !== a.aoColumns[b].sClass && h(c).addClass(a.aoColumns[b].sClass), i.appendChild(c);
					h(a.nTHead).html("")[0].appendChild(i);
					V(a.aoHeader, a.nTHead)
				}
				h(a.nTHead).children("tr").attr("role", "row");
				if (a.bJUI) {
					b = 0;
					for (d = a.aoColumns.length; b < d; b++) {
						c = a.aoColumns[b].nTh;
						i = l.createElement("div");
						i.className = a.oClasses.sSortJUIWrapper;
						h(c).contents().appendTo(i);
						var f = l.createElement("span");
						f.className = a.oClasses.sSortIcon;
						i.appendChild(f);
						c.appendChild(i)
					}
				}
				if (a.oFeatures.bSort)for (b =
											   0; b < a.aoColumns.length; b++)!1 !== a.aoColumns[b].bSortable ? ia(a, a.aoColumns[b].nTh, b) : h(a.aoColumns[b].nTh).addClass(a.oClasses.sSortableNone);
				"" !== a.oClasses.sFooterTH && h(a.nTFoot).children("tr").children("th").addClass(a.oClasses.sFooterTH);
				if (null !== a.nTFoot) {
					c = N(a, null, a.aoFooter);
					b = 0;
					for (d = a.aoColumns.length; b < d; b++)c[b] && (a.aoColumns[b].nTf = c[b], a.aoColumns[b].sClass && h(c[b]).addClass(a.aoColumns[b].sClass))
				}
			}

			function W(a, b, c) {
				var d, i, f, g = [], e = [], h = a.aoColumns.length, j;
				c === n && (c = !1);
				d = 0;
				for (i =
						 b.length; d < i; d++) {
					g[d] = b[d].slice();
					g[d].nTr = b[d].nTr;
					for (f = h - 1; 0 <= f; f--)!a.aoColumns[f].bVisible && !c && g[d].splice(f, 1);
					e.push([])
				}
				d = 0;
				for (i = g.length; d < i; d++) {
					if (a = g[d].nTr)for (; f = a.firstChild;)a.removeChild(f);
					f = 0;
					for (b = g[d].length; f < b; f++)if (j = h = 1, e[d][f] === n) {
						a.appendChild(g[d][f].cell);
						for (e[d][f] = 1; g[d + h] !== n && g[d][f].cell == g[d + h][f].cell;)e[d + h][f] = 1, h++;
						for (; g[d][f + j] !== n && g[d][f].cell == g[d][f + j].cell;) {
							for (c = 0; c < h; c++)e[d + c][f + j] = 1;
							j++
						}
						g[d][f].cell.rowSpan = h;
						g[d][f].cell.colSpan = j
					}
				}
			}

			function x(a) {
				var b =
					A(a, "aoPreDrawCallback", "preDraw", [a]);
				if (-1 !== h.inArray(!1, b))E(a, !1); else {
					var c, d, b = [], i = 0, f = a.asStripeClasses.length;
					c = a.aoOpenRows.length;
					a.bDrawing = !0;
					a.iInitDisplayStart !== n && -1 != a.iInitDisplayStart && (a._iDisplayStart = a.oFeatures.bServerSide ? a.iInitDisplayStart : a.iInitDisplayStart >= a.fnRecordsDisplay() ? 0 : a.iInitDisplayStart, a.iInitDisplayStart = -1, y(a));
					if (a.bDeferLoading)a.bDeferLoading = !1, a.iDraw++; else if (a.oFeatures.bServerSide) {
						if (!a.bDestroying && !wa(a))return
					} else a.iDraw++;
					if (0 !== a.aiDisplay.length) {
						var g =
							a._iDisplayStart;
						d = a._iDisplayEnd;
						a.oFeatures.bServerSide && (g = 0, d = a.aoData.length);
						for (; g < d; g++) {
							var e = a.aoData[a.aiDisplay[g]];
							null === e.nTr && ea(a, a.aiDisplay[g]);
							var j = e.nTr;
							if (0 !== f) {
								var o = a.asStripeClasses[i % f];
								e._sRowStripe != o && (h(j).removeClass(e._sRowStripe).addClass(o), e._sRowStripe = o)
							}
							A(a, "aoRowCallback", null, [j, a.aoData[a.aiDisplay[g]]._aData, i, g]);
							b.push(j);
							i++;
							if (0 !== c)for (e = 0; e < c; e++)if (j == a.aoOpenRows[e].nParent) {
								b.push(a.aoOpenRows[e].nTr);
								break
							}
						}
					} else b[0] = l.createElement("tr"), a.asStripeClasses[0] &&
						(b[0].className = a.asStripeClasses[0]), c = a.oLanguage, f = c.sZeroRecords, 1 == a.iDraw && null !== a.sAjaxSource && !a.oFeatures.bServerSide ? f = c.sLoadingRecords : c.sEmptyTable && 0 === a.fnRecordsTotal() && (f = c.sEmptyTable), c = l.createElement("td"), c.setAttribute("valign", "top"), c.colSpan = t(a), c.className = a.oClasses.sRowEmpty, c.innerHTML = ja(a, f), b[i].appendChild(c);
					A(a, "aoHeaderCallback", "header", [h(a.nTHead).children("tr")[0], Z(a), a._iDisplayStart, a.fnDisplayEnd(), a.aiDisplay]);
					A(a, "aoFooterCallback", "footer", [h(a.nTFoot).children("tr")[0],
						Z(a), a._iDisplayStart, a.fnDisplayEnd(), a.aiDisplay]);
					i = l.createDocumentFragment();
					c = l.createDocumentFragment();
					if (a.nTBody) {
						f = a.nTBody.parentNode;
						c.appendChild(a.nTBody);
						if (!a.oScroll.bInfinite || !a._bInitComplete || a.bSorted || a.bFiltered)for (; c = a.nTBody.firstChild;)a.nTBody.removeChild(c);
						c = 0;
						for (d = b.length; c < d; c++)i.appendChild(b[c]);
						a.nTBody.appendChild(i);
						null !== f && f.appendChild(a.nTBody)
					}
					A(a, "aoDrawCallback", "draw", [a]);
					a.bSorted = !1;
					a.bFiltered = !1;
					a.bDrawing = !1;
					a.oFeatures.bServerSide && (E(a, !1),
						a._bInitComplete || $(a))
				}
			}

			function aa(a) {
				a.oFeatures.bSort ? O(a, a.oPreviousSearch) : a.oFeatures.bFilter ? K(a, a.oPreviousSearch) : (y(a), x(a))
			}

			function xa(a) {
				var b = h("<div></div>")[0];
				a.nTable.parentNode.insertBefore(b, a.nTable);
				a.nTableWrapper = h('<div id="' + a.sTableId + '_wrapper" class="' + a.oClasses.sWrapper + '" role="grid"></div>')[0];
				a.nTableReinsertBefore = a.nTable.nextSibling;
				for (var c = a.nTableWrapper, d = a.sDom.split(""), i, f, g, e, w, o, k, m = 0; m < d.length; m++) {
					f = 0;
					g = d[m];
					if ("<" == g) {
						e = h("<div></div>")[0];
						w = d[m +
							1];
						if ("'" == w || '"' == w) {
							o = "";
							for (k = 2; d[m + k] != w;)o += d[m + k], k++;
							"H" == o ? o = a.oClasses.sJUIHeader : "F" == o && (o = a.oClasses.sJUIFooter);
							-1 != o.indexOf(".") ? (w = o.split("."), e.id = w[0].substr(1, w[0].length - 1), e.className = w[1]) : "#" == o.charAt(0) ? e.id = o.substr(1, o.length - 1) : e.className = o;
							m += k
						}
						c.appendChild(e);
						c = e
					} else if (">" == g)c = c.parentNode; else if ("l" == g && a.oFeatures.bPaginate && a.oFeatures.bLengthChange)i = ya(a), f = 1; else if ("f" == g && a.oFeatures.bFilter)i = za(a), f = 1; else if ("r" == g && a.oFeatures.bProcessing)i = Aa(a), f =
						1; else if ("t" == g)i = Ba(a), f = 1; else if ("i" == g && a.oFeatures.bInfo)i = Ca(a), f = 1; else if ("p" == g && a.oFeatures.bPaginate)i = Da(a), f = 1; else if (0 !== j.ext.aoFeatures.length) {
						e = j.ext.aoFeatures;
						k = 0;
						for (w = e.length; k < w; k++)if (g == e[k].cFeature) {
							(i = e[k].fnInit(a)) && (f = 1);
							break
						}
					}
					1 == f && null !== i && ("object" !== typeof a.aanFeatures[g] && (a.aanFeatures[g] = []), a.aanFeatures[g].push(i), c.appendChild(i))
				}
				b.parentNode.replaceChild(a.nTableWrapper, b)
			}

			function V(a, b) {
				var c = h(b).children("tr"), d, i, f, g, e, j, o, k, m, p;
				a.splice(0, a.length);
				f = 0;
				for (j = c.length; f < j; f++)a.push([]);
				f = 0;
				for (j = c.length; f < j; f++) {
					d = c[f];
					for (i = d.firstChild; i;) {
						if ("TD" == i.nodeName.toUpperCase() || "TH" == i.nodeName.toUpperCase()) {
							k = 1 * i.getAttribute("colspan");
							m = 1 * i.getAttribute("rowspan");
							k = !k || 0 === k || 1 === k ? 1 : k;
							m = !m || 0 === m || 1 === m ? 1 : m;
							g = 0;
							for (e = a[f]; e[g];)g++;
							o = g;
							p = 1 === k ? !0 : !1;
							for (e = 0; e < k; e++)for (g = 0; g < m; g++)a[f + g][o + e] = {cell: i, unique: p}, a[f + g].nTr = d
						}
						i = i.nextSibling
					}
				}
			}

			function N(a, b, c) {
				var d = [];
				c || (c = a.aoHeader, b && (c = [], V(c, b)));
				for (var b = 0, i = c.length; b < i; b++)for (var f =
					0, g = c[b].length; f < g; f++)if (c[b][f].unique && (!d[f] || !a.bSortCellsTop))d[f] = c[b][f].cell;
				return d
			}

			function wa(a) {
				if (a.bAjaxDataGet) {
					a.iDraw++;
					E(a, !0);
					var b = Ea(a);
					ka(a, b);
					a.fnServerData.call(a.oInstance, a.sAjaxSource, b, function (b) {
						Fa(a, b)
					}, a);
					return!1
				}
				return!0
			}

			function Ea(a) {
				var b = a.aoColumns.length, c = [], d, i, f, g;
				c.push({name: "sEcho", value: a.iDraw});
				c.push({name: "iColumns", value: b});
				c.push({name: "sColumns", value: M(a)});
				c.push({name: "iDisplayStart", value: a._iDisplayStart});
				c.push({name: "iDisplayLength",
					value: !1 !== a.oFeatures.bPaginate ? a._iDisplayLength : -1});
				for (f = 0; f < b; f++)d = a.aoColumns[f].mData, c.push({name: "mDataProp_" + f, value: "function" === typeof d ? "function" : d});
				if (!1 !== a.oFeatures.bFilter) {
					c.push({name: "sSearch", value: a.oPreviousSearch.sSearch});
					c.push({name: "bRegex", value: a.oPreviousSearch.bRegex});
					for (f = 0; f < b; f++)c.push({name: "sSearch_" + f, value: a.aoPreSearchCols[f].sSearch}), c.push({name: "bRegex_" + f, value: a.aoPreSearchCols[f].bRegex}), c.push({name: "bSearchable_" + f, value: a.aoColumns[f].bSearchable})
				}
				if (!1 !==
					a.oFeatures.bSort) {
					var e = 0;
					d = null !== a.aaSortingFixed ? a.aaSortingFixed.concat(a.aaSorting) : a.aaSorting.slice();
					for (f = 0; f < d.length; f++) {
						i = a.aoColumns[d[f][0]].aDataSort;
						for (g = 0; g < i.length; g++)c.push({name: "iSortCol_" + e, value: i[g]}), c.push({name: "sSortDir_" + e, value: d[f][1]}), e++
					}
					c.push({name: "iSortingCols", value: e});
					for (f = 0; f < b; f++)c.push({name: "bSortable_" + f, value: a.aoColumns[f].bSortable})
				}
				return c
			}

			function ka(a, b) {
				A(a, "aoServerParams", "serverParams", [b])
			}

			function Fa(a, b) {
				if (b.sEcho !== n) {
					if (1 * b.sEcho <
						a.iDraw)return;
					a.iDraw = 1 * b.sEcho
				}
				(!a.oScroll.bInfinite || a.oScroll.bInfinite && (a.bSorted || a.bFiltered)) && ga(a);
				a._iRecordsTotal = parseInt(b.iTotalRecords, 10);
				a._iRecordsDisplay = parseInt(b.iTotalDisplayRecords, 10);
				var c = M(a), c = b.sColumns !== n && "" !== c && b.sColumns != c, d;
				c && (d = u(a, b.sColumns));
				for (var i = Q(a.sAjaxDataProp)(b), f = 0, g = i.length; f < g; f++)if (c) {
					for (var e = [], h = 0, j = a.aoColumns.length; h < j; h++)e.push(i[f][d[h]]);
					H(a, e)
				} else H(a, i[f]);
				a.aiDisplay = a.aiDisplayMaster.slice();
				a.bAjaxDataGet = !1;
				x(a);
				a.bAjaxDataGet = !0;
				E(a, !1)
			}

			function za(a) {
				var b = a.oPreviousSearch, c = a.oLanguage.sSearch, c = -1 !== c.indexOf("_INPUT_") ? c.replace("_INPUT_", '<input type="text" />') : "" === c ? '<input type="text" />' : c + ' <input type="text" />', d = l.createElement("div");
				d.className = a.oClasses.sFilter;
				d.innerHTML = "<label>" + c + "</label>";
				a.aanFeatures.f || (d.id = a.sTableId + "_filter");
				c = h('input[type="text"]', d);
				d._DT_Input = c[0];
				c.val(b.sSearch.replace('"', "&quot;"));
				c.bind("keyup.DT", function () {
					for (var c = a.aanFeatures.f, d = this.value === "" ? "" : this.value,
							 g = 0, e = c.length; g < e; g++)c[g] != h(this).parents("div.dataTables_filter")[0] && h(c[g]._DT_Input).val(d);
					d != b.sSearch && K(a, {sSearch: d, bRegex: b.bRegex, bSmart: b.bSmart, bCaseInsensitive: b.bCaseInsensitive})
				});
				c.attr("aria-controls", a.sTableId).bind("keypress.DT", function (a) {
					if (a.keyCode == 13)return false
				});
				return d
			}

			function K(a, b, c) {
				var d = a.oPreviousSearch, i = a.aoPreSearchCols, f = function (a) {
					d.sSearch = a.sSearch;
					d.bRegex = a.bRegex;
					d.bSmart = a.bSmart;
					d.bCaseInsensitive = a.bCaseInsensitive
				};
				if (a.oFeatures.bServerSide)f(b);
				else {
					Ga(a, b.sSearch, c, b.bRegex, b.bSmart, b.bCaseInsensitive);
					f(b);
					for (b = 0; b < a.aoPreSearchCols.length; b++)Ha(a, i[b].sSearch, b, i[b].bRegex, i[b].bSmart, i[b].bCaseInsensitive);
					Ia(a)
				}
				a.bFiltered = !0;
				h(a.oInstance).trigger("filter", a);
				a._iDisplayStart = 0;
				y(a);
				x(a);
				la(a, 0)
			}

			function Ia(a) {
				for (var b = j.ext.afnFiltering, c = r(a, "bSearchable"), d = 0, i = b.length; d < i; d++)for (var f = 0, g = 0, e = a.aiDisplay.length; g < e; g++) {
					var h = a.aiDisplay[g - f];
					b[d](a, Y(a, h, "filter", c), h) || (a.aiDisplay.splice(g - f, 1), f++)
				}
			}

			function Ha(a, b, c, d, i, f) {
				if ("" !== b)for (var g = 0, b = ma(b, d, i, f), d = a.aiDisplay.length - 1; 0 <= d; d--)i = Ja(v(a, a.aiDisplay[d], c, "filter"), a.aoColumns[c].sType), b.test(i) || (a.aiDisplay.splice(d, 1), g++)
			}

			function Ga(a, b, c, d, i, f) {
				d = ma(b, d, i, f);
				i = a.oPreviousSearch;
				c || (c = 0);
				0 !== j.ext.afnFiltering.length && (c = 1);
				if (0 >= b.length)a.aiDisplay.splice(0, a.aiDisplay.length), a.aiDisplay = a.aiDisplayMaster.slice(); else if (a.aiDisplay.length == a.aiDisplayMaster.length || i.sSearch.length > b.length || 1 == c || 0 !== b.indexOf(i.sSearch)) {
					a.aiDisplay.splice(0,
						a.aiDisplay.length);
					la(a, 1);
					for (b = 0; b < a.aiDisplayMaster.length; b++)d.test(a.asDataSearch[b]) && a.aiDisplay.push(a.aiDisplayMaster[b])
				} else for (b = c = 0; b < a.asDataSearch.length; b++)d.test(a.asDataSearch[b]) || (a.aiDisplay.splice(b - c, 1), c++)
			}

			function la(a, b) {
				if (!a.oFeatures.bServerSide) {
					a.asDataSearch = [];
					for (var c = r(a, "bSearchable"), d = 1 === b ? a.aiDisplayMaster : a.aiDisplay, i = 0, f = d.length; i < f; i++)a.asDataSearch[i] = na(a, Y(a, d[i], "filter", c))
				}
			}

			function na(a, b) {
				var c = b.join("  ");
				-1 !== c.indexOf("&") && (c = h("<div>").html(c).text());
				return c.replace(/[\n\r]/g, " ")
			}

			function ma(a, b, c, d) {
				if (c)return a = b ? a.split(" ") : oa(a).split(" "), a = "^(?=.*?" + a.join(")(?=.*?") + ").*$", RegExp(a, d ? "i" : "");
				a = b ? a : oa(a);
				return RegExp(a, d ? "i" : "")
			}

			function Ja(a, b) {
				return"function" === typeof j.ext.ofnSearch[b] ? j.ext.ofnSearch[b](a) : null === a ? "" : "html" == b ? a.replace(/[\r\n]/g, " ").replace(/<.*?>/g, "") : "string" === typeof a ? a.replace(/[\r\n]/g, " ") : a
			}

			function oa(a) {
				return a.replace(RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\|\\$|\\^|\\-)", "g"),
					"\\$1")
			}

			function Ca(a) {
				var b = l.createElement("div");
				b.className = a.oClasses.sInfo;
				a.aanFeatures.i || (a.aoDrawCallback.push({fn: Ka, sName: "information"}), b.id = a.sTableId + "_info");
				a.nTable.setAttribute("aria-describedby", a.sTableId + "_info");
				return b
			}

			function Ka(a) {
				if (a.oFeatures.bInfo && 0 !== a.aanFeatures.i.length) {
					var b = a.oLanguage, c = a._iDisplayStart + 1, d = a.fnDisplayEnd(), i = a.fnRecordsTotal(), f = a.fnRecordsDisplay(), g;
					g = 0 === f ? b.sInfoEmpty : b.sInfo;
					f != i && (g += " " + b.sInfoFiltered);
					g += b.sInfoPostFix;
					g = ja(a, g);
					null !== b.fnInfoCallback && (g = b.fnInfoCallback.call(a.oInstance, a, c, d, i, f, g));
					a = a.aanFeatures.i;
					b = 0;
					for (c = a.length; b < c; b++)h(a[b]).html(g)
				}
			}

			function ja(a, b) {
				var c = a.fnFormatNumber(a._iDisplayStart + 1), d = a.fnDisplayEnd(), d = a.fnFormatNumber(d), i = a.fnRecordsDisplay(), i = a.fnFormatNumber(i), f = a.fnRecordsTotal(), f = a.fnFormatNumber(f);
				a.oScroll.bInfinite && (c = a.fnFormatNumber(1));
				return b.replace(/_START_/g, c).replace(/_END_/g, d).replace(/_TOTAL_/g, i).replace(/_MAX_/g, f)
			}

			function ba(a) {
				var b, c, d = a.iInitDisplayStart;
				if (!1 === a.bInitialised)setTimeout(function () {
					ba(a)
				}, 200); else {
					xa(a);
					va(a);
					W(a, a.aoHeader);
					a.nTFoot && W(a, a.aoFooter);
					E(a, !0);
					a.oFeatures.bAutoWidth && da(a);
					b = 0;
					for (c = a.aoColumns.length; b < c; b++)null !== a.aoColumns[b].sWidth && (a.aoColumns[b].nTh.style.width = q(a.aoColumns[b].sWidth));
					a.oFeatures.bSort ? O(a) : a.oFeatures.bFilter ? K(a, a.oPreviousSearch) : (a.aiDisplay = a.aiDisplayMaster.slice(), y(a), x(a));
					null !== a.sAjaxSource && !a.oFeatures.bServerSide ? (c = [], ka(a, c), a.fnServerData.call(a.oInstance, a.sAjaxSource,
						c, function (c) {
							var f = a.sAjaxDataProp !== "" ? Q(a.sAjaxDataProp)(c) : c;
							for (b = 0; b < f.length; b++)H(a, f[b]);
							a.iInitDisplayStart = d;
							if (a.oFeatures.bSort)O(a); else {
								a.aiDisplay = a.aiDisplayMaster.slice();
								y(a);
								x(a)
							}
							E(a, false);
							$(a, c)
						}, a)) : a.oFeatures.bServerSide || (E(a, !1), $(a))
				}
			}

			function $(a, b) {
				a._bInitComplete = !0;
				A(a, "aoInitComplete", "init", [a, b])
			}

			function pa(a) {
				var b = j.defaults.oLanguage;
				!a.sEmptyTable && (a.sZeroRecords && "No data available in table" === b.sEmptyTable) && p(a, a, "sZeroRecords", "sEmptyTable");
				!a.sLoadingRecords &&
					(a.sZeroRecords && "Loading..." === b.sLoadingRecords) && p(a, a, "sZeroRecords", "sLoadingRecords")
			}

			function ya(a) {
				if (a.oScroll.bInfinite)return null;
				var b = '<select size="1" ' + ('name="' + a.sTableId + '_length"') + ">", c, d, i = a.aLengthMenu;
				if (2 == i.length && "object" === typeof i[0] && "object" === typeof i[1]) {
					c = 0;
					for (d = i[0].length; c < d; c++)b += '<option value="' + i[0][c] + '">' + i[1][c] + "</option>"
				} else {
					c = 0;
					for (d = i.length; c < d; c++)b += '<option value="' + i[c] + '">' + i[c] + "</option>"
				}
				b += "</select>";
				i = l.createElement("div");
				a.aanFeatures.l ||
				(i.id = a.sTableId + "_length");
				i.className = a.oClasses.sLength;
				i.innerHTML = "<label>" + a.oLanguage.sLengthMenu.replace("_MENU_", b) + "</label>";
				h('select option[value="' + a._iDisplayLength + '"]', i).attr("selected", !0);
				h("select", i).bind("change.DT", function () {
					var b = h(this).val(), i = a.aanFeatures.l;
					c = 0;
					for (d = i.length; c < d; c++)i[c] != this.parentNode && h("select", i[c]).val(b);
					a._iDisplayLength = parseInt(b, 10);
					y(a);
					if (a.fnDisplayEnd() == a.fnRecordsDisplay()) {
						a._iDisplayStart = a.fnDisplayEnd() - a._iDisplayLength;
						if (a._iDisplayStart <
							0)a._iDisplayStart = 0
					}
					if (a._iDisplayLength == -1)a._iDisplayStart = 0;
					x(a)
				});
				h("select", i).attr("aria-controls", a.sTableId);
				return i
			}

			function y(a) {
				a._iDisplayEnd = !1 === a.oFeatures.bPaginate ? a.aiDisplay.length : a._iDisplayStart + a._iDisplayLength > a.aiDisplay.length || -1 == a._iDisplayLength ? a.aiDisplay.length : a._iDisplayStart + a._iDisplayLength
			}

			function Da(a) {
				if (a.oScroll.bInfinite)return null;
				var b = l.createElement("div");
				b.className = a.oClasses.sPaging + a.sPaginationType;
				j.ext.oPagination[a.sPaginationType].fnInit(a,
					b, function (a) {
						y(a);
						x(a)
					});
				a.aanFeatures.p || a.aoDrawCallback.push({fn: function (a) {
					j.ext.oPagination[a.sPaginationType].fnUpdate(a, function (a) {
						y(a);
						x(a)
					})
				}, sName: "pagination"});
				return b
			}

			function qa(a, b) {
				var c = a._iDisplayStart;
				if ("number" === typeof b)a._iDisplayStart = b * a._iDisplayLength, a._iDisplayStart > a.fnRecordsDisplay() && (a._iDisplayStart = 0); else if ("first" == b)a._iDisplayStart = 0; else if ("previous" == b)a._iDisplayStart = 0 <= a._iDisplayLength ? a._iDisplayStart - a._iDisplayLength : 0, 0 > a._iDisplayStart && (a._iDisplayStart =
					0); else if ("next" == b)0 <= a._iDisplayLength ? a._iDisplayStart + a._iDisplayLength < a.fnRecordsDisplay() && (a._iDisplayStart += a._iDisplayLength) : a._iDisplayStart = 0; else if ("last" == b)if (0 <= a._iDisplayLength) {
					var d = parseInt((a.fnRecordsDisplay() - 1) / a._iDisplayLength, 10) + 1;
					a._iDisplayStart = (d - 1) * a._iDisplayLength
				} else a._iDisplayStart = 0; else D(a, 0, "Unknown paging action: " + b);
				h(a.oInstance).trigger("page", a);
				return c != a._iDisplayStart
			}

			function Aa(a) {
				var b = l.createElement("div");
				a.aanFeatures.r || (b.id = a.sTableId +
					"_processing");
				b.innerHTML = a.oLanguage.sProcessing;
				b.className = a.oClasses.sProcessing;
				a.nTable.parentNode.insertBefore(b, a.nTable);
				return b
			}

			function E(a, b) {
				if (a.oFeatures.bProcessing)for (var c = a.aanFeatures.r, d = 0, i = c.length; d < i; d++)c[d].style.visibility = b ? "visible" : "hidden";
				h(a.oInstance).trigger("processing", [a, b])
			}

			function Ba(a) {
				if ("" === a.oScroll.sX && "" === a.oScroll.sY)return a.nTable;
				var b = l.createElement("div"), c = l.createElement("div"), d = l.createElement("div"), i = l.createElement("div"), f = l.createElement("div"),
					g = l.createElement("div"), e = a.nTable.cloneNode(!1), j = a.nTable.cloneNode(!1), o = a.nTable.getElementsByTagName("thead")[0], k = 0 === a.nTable.getElementsByTagName("tfoot").length ? null : a.nTable.getElementsByTagName("tfoot")[0], m = a.oClasses;
				c.appendChild(d);
				f.appendChild(g);
				i.appendChild(a.nTable);
				b.appendChild(c);
				b.appendChild(i);
				d.appendChild(e);
				e.appendChild(o);
				null !== k && (b.appendChild(f), g.appendChild(j), j.appendChild(k));
				b.className = m.sScrollWrapper;
				c.className = m.sScrollHead;
				d.className = m.sScrollHeadInner;
				i.className = m.sScrollBody;
				f.className = m.sScrollFoot;
				g.className = m.sScrollFootInner;
				a.oScroll.bAutoCss && (c.style.overflow = "hidden", c.style.position = "relative", f.style.overflow = "hidden", i.style.overflow = "auto");
				c.style.border = "0";
				c.style.width = "100%";
				f.style.border = "0";
				d.style.width = "" !== a.oScroll.sXInner ? a.oScroll.sXInner : "100%";
				e.removeAttribute("id");
				e.style.marginLeft = "0";
				a.nTable.style.marginLeft = "0";
				null !== k && (j.removeAttribute("id"), j.style.marginLeft = "0");
				d = h(a.nTable).children("caption");
				0 <
					d.length && (d = d[0], "top" === d._captionSide ? e.appendChild(d) : "bottom" === d._captionSide && k && j.appendChild(d));
				"" !== a.oScroll.sX && (c.style.width = q(a.oScroll.sX), i.style.width = q(a.oScroll.sX), null !== k && (f.style.width = q(a.oScroll.sX)), h(i).scroll(function () {
					c.scrollLeft = this.scrollLeft;
					if (k !== null)f.scrollLeft = this.scrollLeft
				}));
				"" !== a.oScroll.sY && (i.style.height = q(a.oScroll.sY));
				a.aoDrawCallback.push({fn: La, sName: "scrolling"});
				a.oScroll.bInfinite && h(i).scroll(function () {
					if (!a.bDrawing && h(this).scrollTop() !==
						0 && h(this).scrollTop() + h(this).height() > h(a.nTable).height() - a.oScroll.iLoadGap && a.fnDisplayEnd() < a.fnRecordsDisplay()) {
						qa(a, "next");
						y(a);
						x(a)
					}
				});
				a.nScrollHead = c;
				a.nScrollFoot = f;
				return b
			}

			function La(a) {
				var b = a.nScrollHead.getElementsByTagName("div")[0], c = b.getElementsByTagName("table")[0], d = a.nTable.parentNode, i, f, g, e, j, o, k, m, p = [], n = [], l = null !== a.nTFoot ? a.nScrollFoot.getElementsByTagName("div")[0] : null, R = null !== a.nTFoot ? l.getElementsByTagName("table")[0] : null, r = a.oBrowser.bScrollOversize, s = function (a) {
					k =
						a.style;
					k.paddingTop = "0";
					k.paddingBottom = "0";
					k.borderTopWidth = "0";
					k.borderBottomWidth = "0";
					k.height = 0
				};
				h(a.nTable).children("thead, tfoot").remove();
				i = h(a.nTHead).clone()[0];
				a.nTable.insertBefore(i, a.nTable.childNodes[0]);
				g = a.nTHead.getElementsByTagName("tr");
				e = i.getElementsByTagName("tr");
				null !== a.nTFoot && (j = h(a.nTFoot).clone()[0], a.nTable.insertBefore(j, a.nTable.childNodes[1]), o = a.nTFoot.getElementsByTagName("tr"), j = j.getElementsByTagName("tr"));
				"" === a.oScroll.sX && (d.style.width = "100%", b.parentNode.style.width =
					"100%");
				var t = N(a, i);
				i = 0;
				for (f = t.length; i < f; i++)m = G(a, i), t[i].style.width = a.aoColumns[m].sWidth;
				null !== a.nTFoot && C(function (a) {
					a.style.width = ""
				}, j);
				a.oScroll.bCollapse && "" !== a.oScroll.sY && (d.style.height = d.offsetHeight + a.nTHead.offsetHeight + "px");
				i = h(a.nTable).outerWidth();
				if ("" === a.oScroll.sX) {
					if (a.nTable.style.width = "100%", r && (h("tbody", d).height() > d.offsetHeight || "scroll" == h(d).css("overflow-y")))a.nTable.style.width = q(h(a.nTable).outerWidth() - a.oScroll.iBarWidth)
				} else"" !== a.oScroll.sXInner ? a.nTable.style.width =
					q(a.oScroll.sXInner) : i == h(d).width() && h(d).height() < h(a.nTable).height() ? (a.nTable.style.width = q(i - a.oScroll.iBarWidth), h(a.nTable).outerWidth() > i - a.oScroll.iBarWidth && (a.nTable.style.width = q(i))) : a.nTable.style.width = q(i);
				i = h(a.nTable).outerWidth();
				C(s, e);
				C(function (a) {
					p.push(q(h(a).width()))
				}, e);
				C(function (a, b) {
					a.style.width = p[b]
				}, g);
				h(e).height(0);
				null !== a.nTFoot && (C(s, j), C(function (a) {
					n.push(q(h(a).width()))
				}, j), C(function (a, b) {
					a.style.width = n[b]
				}, o), h(j).height(0));
				C(function (a, b) {
					a.innerHTML =
						"";
					a.style.width = p[b]
				}, e);
				null !== a.nTFoot && C(function (a, b) {
					a.innerHTML = "";
					a.style.width = n[b]
				}, j);
				if (h(a.nTable).outerWidth() < i) {
					g = d.scrollHeight > d.offsetHeight || "scroll" == h(d).css("overflow-y") ? i + a.oScroll.iBarWidth : i;
					if (r && (d.scrollHeight > d.offsetHeight || "scroll" == h(d).css("overflow-y")))a.nTable.style.width = q(g - a.oScroll.iBarWidth);
					d.style.width = q(g);
					a.nScrollHead.style.width = q(g);
					null !== a.nTFoot && (a.nScrollFoot.style.width = q(g));
					"" === a.oScroll.sX ? D(a, 1, "The table cannot fit into the current element which will cause column misalignment. The table has been drawn at its minimum possible width.") :
						"" !== a.oScroll.sXInner && D(a, 1, "The table cannot fit into the current element which will cause column misalignment. Increase the sScrollXInner value or remove it to allow automatic calculation")
				} else d.style.width = q("100%"), a.nScrollHead.style.width = q("100%"), null !== a.nTFoot && (a.nScrollFoot.style.width = q("100%"));
				"" === a.oScroll.sY && r && (d.style.height = q(a.nTable.offsetHeight + a.oScroll.iBarWidth));
				"" !== a.oScroll.sY && a.oScroll.bCollapse && (d.style.height = q(a.oScroll.sY), r = "" !== a.oScroll.sX && a.nTable.offsetWidth >
					d.offsetWidth ? a.oScroll.iBarWidth : 0, a.nTable.offsetHeight < d.offsetHeight && (d.style.height = q(a.nTable.offsetHeight + r)));
				r = h(a.nTable).outerWidth();
				c.style.width = q(r);
				b.style.width = q(r);
				c = h(a.nTable).height() > d.clientHeight || "scroll" == h(d).css("overflow-y");
				b.style.paddingRight = c ? a.oScroll.iBarWidth + "px" : "0px";
				null !== a.nTFoot && (R.style.width = q(r), l.style.width = q(r), l.style.paddingRight = c ? a.oScroll.iBarWidth + "px" : "0px");
				h(d).scroll();
				if (a.bSorted || a.bFiltered)d.scrollTop = 0
			}

			function C(a, b, c) {
				for (var d =
					0, i = 0, f = b.length, g, e; i < f;) {
					g = b[i].firstChild;
					for (e = c ? c[i].firstChild : null; g;)1 === g.nodeType && (c ? a(g, e, d) : a(g, d), d++), g = g.nextSibling, e = c ? e.nextSibling : null;
					i++
				}
			}

			function Ma(a, b) {
				if (!a || null === a || "" === a)return 0;
				b || (b = l.body);
				var c, d = l.createElement("div");
				d.style.width = q(a);
				b.appendChild(d);
				c = d.offsetWidth;
				b.removeChild(d);
				return c
			}

			function da(a) {
				var b = 0, c, d = 0, i = a.aoColumns.length, f, e, j = h("th", a.nTHead), o = a.nTable.getAttribute("width");
				e = a.nTable.parentNode;
				for (f = 0; f < i; f++)a.aoColumns[f].bVisible &&
				(d++, null !== a.aoColumns[f].sWidth && (c = Ma(a.aoColumns[f].sWidthOrig, e), null !== c && (a.aoColumns[f].sWidth = q(c)), b++));
				if (i == j.length && 0 === b && d == i && "" === a.oScroll.sX && "" === a.oScroll.sY)for (f = 0; f < a.aoColumns.length; f++)c = h(j[f]).width(), null !== c && (a.aoColumns[f].sWidth = q(c)); else {
					b = a.nTable.cloneNode(!1);
					f = a.nTHead.cloneNode(!0);
					d = l.createElement("tbody");
					c = l.createElement("tr");
					b.removeAttribute("id");
					b.appendChild(f);
					null !== a.nTFoot && (b.appendChild(a.nTFoot.cloneNode(!0)), C(function (a) {
						a.style.width =
							""
					}, b.getElementsByTagName("tr")));
					b.appendChild(d);
					d.appendChild(c);
					d = h("thead th", b);
					0 === d.length && (d = h("tbody tr:eq(0)>td", b));
					j = N(a, f);
					for (f = d = 0; f < i; f++) {
						var k = a.aoColumns[f];
						k.bVisible && null !== k.sWidthOrig && "" !== k.sWidthOrig ? j[f - d].style.width = q(k.sWidthOrig) : k.bVisible ? j[f - d].style.width = "" : d++
					}
					for (f = 0; f < i; f++)a.aoColumns[f].bVisible && (d = Na(a, f), null !== d && (d = d.cloneNode(!0), "" !== a.aoColumns[f].sContentPadding && (d.innerHTML += a.aoColumns[f].sContentPadding), c.appendChild(d)));
					e.appendChild(b);
					"" !== a.oScroll.sX && "" !== a.oScroll.sXInner ? b.style.width = q(a.oScroll.sXInner) : "" !== a.oScroll.sX ? (b.style.width = "", h(b).width() < e.offsetWidth && (b.style.width = q(e.offsetWidth))) : "" !== a.oScroll.sY ? b.style.width = q(e.offsetWidth) : o && (b.style.width = q(o));
					b.style.visibility = "hidden";
					Oa(a, b);
					i = h("tbody tr:eq(0)", b).children();
					0 === i.length && (i = N(a, h("thead", b)[0]));
					if ("" !== a.oScroll.sX) {
						for (f = d = e = 0; f < a.aoColumns.length; f++)a.aoColumns[f].bVisible && (e = null === a.aoColumns[f].sWidthOrig ? e + h(i[d]).outerWidth() :
							e + (parseInt(a.aoColumns[f].sWidth.replace("px", ""), 10) + (h(i[d]).outerWidth() - h(i[d]).width())), d++);
						b.style.width = q(e);
						a.nTable.style.width = q(e)
					}
					for (f = d = 0; f < a.aoColumns.length; f++)a.aoColumns[f].bVisible && (e = h(i[d]).width(), null !== e && 0 < e && (a.aoColumns[f].sWidth = q(e)), d++);
					i = h(b).css("width");
					a.nTable.style.width = -1 !== i.indexOf("%") ? i : q(h(b).outerWidth());
					b.parentNode.removeChild(b)
				}
				o && (a.nTable.style.width = q(o))
			}

			function Oa(a, b) {
				"" === a.oScroll.sX && "" !== a.oScroll.sY ? (h(b).width(), b.style.width = q(h(b).outerWidth() -
					a.oScroll.iBarWidth)) : "" !== a.oScroll.sX && (b.style.width = q(h(b).outerWidth()))
			}

			function Na(a, b) {
				var c = Pa(a, b);
				if (0 > c)return null;
				if (null === a.aoData[c].nTr) {
					var d = l.createElement("td");
					d.innerHTML = v(a, c, b, "");
					return d
				}
				return J(a, c)[b]
			}

			function Pa(a, b) {
				for (var c = -1, d = -1, i = 0; i < a.aoData.length; i++) {
					var e = v(a, i, b, "display") + "", e = e.replace(/<.*?>/g, "");
					e.length > c && (c = e.length, d = i)
				}
				return d
			}

			function q(a) {
				if (null === a)return"0px";
				if ("number" == typeof a)return 0 > a ? "0px" : a + "px";
				var b = a.charCodeAt(a.length - 1);
				return 48 > b || 57 < b ? a : a + "px"
			}

			function Qa() {
				var a = l.createElement("p"), b = a.style;
				b.width = "100%";
				b.height = "200px";
				b.padding = "0px";
				var c = l.createElement("div"), b = c.style;
				b.position = "absolute";
				b.top = "0px";
				b.left = "0px";
				b.visibility = "hidden";
				b.width = "200px";
				b.height = "150px";
				b.padding = "0px";
				b.overflow = "hidden";
				c.appendChild(a);
				l.body.appendChild(c);
				b = a.offsetWidth;
				c.style.overflow = "scroll";
				a = a.offsetWidth;
				b == a && (a = c.clientWidth);
				l.body.removeChild(c);
				return b - a
			}

			function O(a, b) {
				var c, d, i, e, g, k, o = [], m = [], p =
					j.ext.oSort, l = a.aoData, q = a.aoColumns, G = a.oLanguage.oAria;
				if (!a.oFeatures.bServerSide && (0 !== a.aaSorting.length || null !== a.aaSortingFixed)) {
					o = null !== a.aaSortingFixed ? a.aaSortingFixed.concat(a.aaSorting) : a.aaSorting.slice();
					for (c = 0; c < o.length; c++)if (d = o[c][0], i = R(a, d), e = a.aoColumns[d].sSortDataType, j.ext.afnSortData[e])if (g = j.ext.afnSortData[e].call(a.oInstance, a, d, i), g.length === l.length) {
						i = 0;
						for (e = l.length; i < e; i++)F(a, i, d, g[i])
					} else D(a, 0, "Returned data sort array (col " + d + ") is the wrong length");
					c =
						0;
					for (d = a.aiDisplayMaster.length; c < d; c++)m[a.aiDisplayMaster[c]] = c;
					var r = o.length, s;
					c = 0;
					for (d = l.length; c < d; c++)for (i = 0; i < r; i++) {
						s = q[o[i][0]].aDataSort;
						g = 0;
						for (k = s.length; g < k; g++)e = q[s[g]].sType, e = p[(e ? e : "string") + "-pre"], l[c]._aSortData[s[g]] = e ? e(v(a, c, s[g], "sort")) : v(a, c, s[g], "sort")
					}
					a.aiDisplayMaster.sort(function (a, b) {
						var c, d, e, i, f;
						for (c = 0; c < r; c++) {
							f = q[o[c][0]].aDataSort;
							d = 0;
							for (e = f.length; d < e; d++)if (i = q[f[d]].sType, i = p[(i ? i : "string") + "-" + o[c][1]](l[a]._aSortData[f[d]], l[b]._aSortData[f[d]]), 0 !==
								i)return i
						}
						return p["numeric-asc"](m[a], m[b])
					})
				}
				(b === n || b) && !a.oFeatures.bDeferRender && P(a);
				c = 0;
				for (d = a.aoColumns.length; c < d; c++)e = q[c].sTitle.replace(/<.*?>/g, ""), i = q[c].nTh, i.removeAttribute("aria-sort"), i.removeAttribute("aria-label"), q[c].bSortable ? 0 < o.length && o[0][0] == c ? (i.setAttribute("aria-sort", "asc" == o[0][1] ? "ascending" : "descending"), i.setAttribute("aria-label", e + ("asc" == (q[c].asSorting[o[0][2] + 1] ? q[c].asSorting[o[0][2] + 1] : q[c].asSorting[0]) ? G.sSortAscending : G.sSortDescending))) : i.setAttribute("aria-label",
					e + ("asc" == q[c].asSorting[0] ? G.sSortAscending : G.sSortDescending)) : i.setAttribute("aria-label", e);
				a.bSorted = !0;
				h(a.oInstance).trigger("sort", a);
				a.oFeatures.bFilter ? K(a, a.oPreviousSearch, 1) : (a.aiDisplay = a.aiDisplayMaster.slice(), a._iDisplayStart = 0, y(a), x(a))
			}

			function ia(a, b, c, d) {
				Ra(b, {}, function (b) {
					if (!1 !== a.aoColumns[c].bSortable) {
						var e = function () {
							var d, e;
							if (b.shiftKey) {
								for (var f = !1, h = 0; h < a.aaSorting.length; h++)if (a.aaSorting[h][0] == c) {
									f = !0;
									d = a.aaSorting[h][0];
									e = a.aaSorting[h][2] + 1;
									a.aoColumns[d].asSorting[e] ?
										(a.aaSorting[h][1] = a.aoColumns[d].asSorting[e], a.aaSorting[h][2] = e) : a.aaSorting.splice(h, 1);
									break
								}
								!1 === f && a.aaSorting.push([c, a.aoColumns[c].asSorting[0], 0])
							} else 1 == a.aaSorting.length && a.aaSorting[0][0] == c ? (d = a.aaSorting[0][0], e = a.aaSorting[0][2] + 1, a.aoColumns[d].asSorting[e] || (e = 0), a.aaSorting[0][1] = a.aoColumns[d].asSorting[e], a.aaSorting[0][2] = e) : (a.aaSorting.splice(0, a.aaSorting.length), a.aaSorting.push([c, a.aoColumns[c].asSorting[0], 0]));
							O(a)
						};
						a.oFeatures.bProcessing ? (E(a, !0), setTimeout(function () {
							e();
							a.oFeatures.bServerSide || E(a, !1)
						}, 0)) : e();
						"function" == typeof d && d(a)
					}
				})
			}

			function P(a) {
				var b, c, d, e, f, g = a.aoColumns.length, j = a.oClasses;
				for (b = 0; b < g; b++)a.aoColumns[b].bSortable && h(a.aoColumns[b].nTh).removeClass(j.sSortAsc + " " + j.sSortDesc + " " + a.aoColumns[b].sSortingClass);
				c = null !== a.aaSortingFixed ? a.aaSortingFixed.concat(a.aaSorting) : a.aaSorting.slice();
				for (b = 0; b < a.aoColumns.length; b++)if (a.aoColumns[b].bSortable) {
					f = a.aoColumns[b].sSortingClass;
					e = -1;
					for (d = 0; d < c.length; d++)if (c[d][0] == b) {
						f = "asc" == c[d][1] ?
							j.sSortAsc : j.sSortDesc;
						e = d;
						break
					}
					h(a.aoColumns[b].nTh).addClass(f);
					a.bJUI && (f = h("span." + j.sSortIcon, a.aoColumns[b].nTh), f.removeClass(j.sSortJUIAsc + " " + j.sSortJUIDesc + " " + j.sSortJUI + " " + j.sSortJUIAscAllowed + " " + j.sSortJUIDescAllowed), f.addClass(-1 == e ? a.aoColumns[b].sSortingClassJUI : "asc" == c[e][1] ? j.sSortJUIAsc : j.sSortJUIDesc))
				} else h(a.aoColumns[b].nTh).addClass(a.aoColumns[b].sSortingClass);
				f = j.sSortColumn;
				if (a.oFeatures.bSort && a.oFeatures.bSortClasses) {
					a = J(a);
					e = [];
					for (b = 0; b < g; b++)e.push("");
					b = 0;
					for (d = 1; b < c.length; b++)j = parseInt(c[b][0], 10), e[j] = f + d, 3 > d && d++;
					f = RegExp(f + "[123]");
					var o;
					b = 0;
					for (c = a.length; b < c; b++)j = b % g, d = a[b].className, o = e[j], j = d.replace(f, o), j != d ? a[b].className = h.trim(j) : 0 < o.length && -1 == d.indexOf(o) && (a[b].className = d + " " + o)
				}
			}

			function ra(a) {
				if (a.oFeatures.bStateSave && !a.bDestroying) {
					var b, c;
					b = a.oScroll.bInfinite;
					var d = {iCreate: (new Date).getTime(), iStart: b ? 0 : a._iDisplayStart, iEnd: b ? a._iDisplayLength : a._iDisplayEnd, iLength: a._iDisplayLength, aaSorting: h.extend(!0, [], a.aaSorting),
						oSearch: h.extend(!0, {}, a.oPreviousSearch), aoSearchCols: h.extend(!0, [], a.aoPreSearchCols), abVisCols: []};
					b = 0;
					for (c = a.aoColumns.length; b < c; b++)d.abVisCols.push(a.aoColumns[b].bVisible);
					A(a, "aoStateSaveParams", "stateSaveParams", [a, d]);
					a.fnStateSave.call(a.oInstance, a, d)
				}
			}

			function Sa(a, b) {
				if (a.oFeatures.bStateSave) {
					var c = a.fnStateLoad.call(a.oInstance, a);
					if (c) {
						var d = A(a, "aoStateLoadParams", "stateLoadParams", [a, c]);
						if (-1 === h.inArray(!1, d)) {
							a.oLoadedState = h.extend(!0, {}, c);
							a._iDisplayStart = c.iStart;
							a.iInitDisplayStart =
								c.iStart;
							a._iDisplayEnd = c.iEnd;
							a._iDisplayLength = c.iLength;
							a.aaSorting = c.aaSorting.slice();
							a.saved_aaSorting = c.aaSorting.slice();
							h.extend(a.oPreviousSearch, c.oSearch);
							h.extend(!0, a.aoPreSearchCols, c.aoSearchCols);
							b.saved_aoColumns = [];
							for (d = 0; d < c.abVisCols.length; d++)b.saved_aoColumns[d] = {}, b.saved_aoColumns[d].bVisible = c.abVisCols[d];
							A(a, "aoStateLoaded", "stateLoaded", [a, c])
						}
					}
				}
			}

			function s(a) {
				for (var b = 0; b < j.settings.length; b++)if (j.settings[b].nTable === a)return j.settings[b];
				return null
			}

			function T(a) {
				for (var b =
					[], a = a.aoData, c = 0, d = a.length; c < d; c++)null !== a[c].nTr && b.push(a[c].nTr);
				return b
			}

			function J(a, b) {
				var c = [], d, e, f, g, h, j;
				e = 0;
				var o = a.aoData.length;
				b !== n && (e = b, o = b + 1);
				for (f = e; f < o; f++)if (j = a.aoData[f], null !== j.nTr) {
					e = [];
					for (d = j.nTr.firstChild; d;)g = d.nodeName.toLowerCase(), ("td" == g || "th" == g) && e.push(d), d = d.nextSibling;
					g = d = 0;
					for (h = a.aoColumns.length; g < h; g++)a.aoColumns[g].bVisible ? c.push(e[g - d]) : (c.push(j._anHidden[g]), d++)
				}
				return c
			}

			function D(a, b, c) {
				a = null === a ? "DataTables warning: " + c : "DataTables warning (table id = '" +
					a.sTableId + "'): " + c;
				if (0 === b)if ("alert" == j.ext.sErrMode)alert(a); else throw Error(a); else X.console && console.log && console.log(a)
			}

			function p(a, b, c, d) {
				d === n && (d = c);
				b[c] !== n && (a[d] = b[c])
			}

			function Ta(a, b) {
				var c, d;
				for (d in b)b.hasOwnProperty(d) && (c = b[d], "object" === typeof e[d] && null !== c && !1 === h.isArray(c) ? h.extend(!0, a[d], c) : a[d] = c);
				return a
			}

			function Ra(a, b, c) {
				h(a).bind("click.DT", b,function (b) {
					a.blur();
					c(b)
				}).bind("keypress.DT", b,function (a) {
						13 === a.which && c(a)
					}).bind("selectstart.DT", function () {
						return!1
					})
			}

			function z(a, b, c, d) {
				c && a[b].push({fn: c, sName: d})
			}

			function A(a, b, c, d) {
				for (var b = a[b], e = [], f = b.length - 1; 0 <= f; f--)e.push(b[f].fn.apply(a.oInstance, d));
				null !== c && h(a.oInstance).trigger(c, d);
				return e
			}

			function Ua(a) {
				var b = h('<div style="position:absolute; top:0; left:0; height:1px; width:1px; overflow:hidden"><div style="position:absolute; top:1px; left:1px; width:100px; overflow:scroll;"><div id="DT_BrowserTest" style="width:100%; height:10px;"></div></div></div>')[0];
				l.body.appendChild(b);
				a.oBrowser.bScrollOversize =
					100 === h("#DT_BrowserTest", b)[0].offsetWidth ? !0 : !1;
				l.body.removeChild(b)
			}

			function Va(a) {
				return function () {
					var b = [s(this[j.ext.iApiIndex])].concat(Array.prototype.slice.call(arguments));
					return j.ext.oApi[a].apply(this, b)
				}
			}

			var U = /\[.*?\]$/, Wa = X.JSON ? JSON.stringify : function (a) {
				var b = typeof a;
				if ("object" !== b || null === a)return"string" === b && (a = '"' + a + '"'), a + "";
				var c, d, e = [], f = h.isArray(a);
				for (c in a)d = a[c], b = typeof d, "string" === b ? d = '"' + d + '"' : "object" === b && null !== d && (d = Wa(d)), e.push((f ? "" : '"' + c + '":') + d);
				return(f ?
					"[" : "{") + e + (f ? "]" : "}")
			};
			this.$ = function (a, b) {
				var c, d, e = [], f;
				d = s(this[j.ext.iApiIndex]);
				var g = d.aoData, o = d.aiDisplay, k = d.aiDisplayMaster;
				b || (b = {});
				b = h.extend({}, {filter: "none", order: "current", page: "all"}, b);
				if ("current" == b.page) {
					c = d._iDisplayStart;
					for (d = d.fnDisplayEnd(); c < d; c++)(f = g[o[c]].nTr) && e.push(f)
				} else if ("current" == b.order && "none" == b.filter) {
					c = 0;
					for (d = k.length; c < d; c++)(f = g[k[c]].nTr) && e.push(f)
				} else if ("current" == b.order && "applied" == b.filter) {
					c = 0;
					for (d = o.length; c < d; c++)(f = g[o[c]].nTr) && e.push(f)
				} else if ("original" ==
					b.order && "none" == b.filter) {
					c = 0;
					for (d = g.length; c < d; c++)(f = g[c].nTr) && e.push(f)
				} else if ("original" == b.order && "applied" == b.filter) {
					c = 0;
					for (d = g.length; c < d; c++)f = g[c].nTr, -1 !== h.inArray(c, o) && f && e.push(f)
				} else D(d, 1, "Unknown selection options");
				e = h(e);
				c = e.filter(a);
				e = e.find(a);
				return h([].concat(h.makeArray(c), h.makeArray(e)))
			};
			this._ = function (a, b) {
				var c = [], d, e, f = this.$(a, b);
				d = 0;
				for (e = f.length; d < e; d++)c.push(this.fnGetData(f[d]));
				return c
			};
			this.fnAddData = function (a, b) {
				if (0 === a.length)return[];
				var c = [],
					d, e = s(this[j.ext.iApiIndex]);
				if ("object" === typeof a[0] && null !== a[0])for (var f = 0; f < a.length; f++) {
					d = H(e, a[f]);
					if (-1 == d)return c;
					c.push(d)
				} else {
					d = H(e, a);
					if (-1 == d)return c;
					c.push(d)
				}
				e.aiDisplay = e.aiDisplayMaster.slice();
				(b === n || b) && aa(e);
				return c
			};
			this.fnAdjustColumnSizing = function (a) {
				var b = s(this[j.ext.iApiIndex]);
				k(b);
				a === n || a ? this.fnDraw(!1) : ("" !== b.oScroll.sX || "" !== b.oScroll.sY) && this.oApi._fnScrollDraw(b)
			};
			this.fnClearTable = function (a) {
				var b = s(this[j.ext.iApiIndex]);
				ga(b);
				(a === n || a) && x(b)
			};
			this.fnClose =
				function (a) {
					for (var b = s(this[j.ext.iApiIndex]), c = 0; c < b.aoOpenRows.length; c++)if (b.aoOpenRows[c].nParent == a)return(a = b.aoOpenRows[c].nTr.parentNode) && a.removeChild(b.aoOpenRows[c].nTr), b.aoOpenRows.splice(c, 1), 0;
					return 1
				};
			this.fnDeleteRow = function (a, b, c) {
				var d = s(this[j.ext.iApiIndex]), e, f, a = "object" === typeof a ? I(d, a) : a, g = d.aoData.splice(a, 1);
				e = 0;
				for (f = d.aoData.length; e < f; e++)null !== d.aoData[e].nTr && (d.aoData[e].nTr._DT_RowIndex = e);
				e = h.inArray(a, d.aiDisplay);
				d.asDataSearch.splice(e, 1);
				ha(d.aiDisplayMaster,
					a);
				ha(d.aiDisplay, a);
				"function" === typeof b && b.call(this, d, g);
				d._iDisplayStart >= d.fnRecordsDisplay() && (d._iDisplayStart -= d._iDisplayLength, 0 > d._iDisplayStart && (d._iDisplayStart = 0));
				if (c === n || c)y(d), x(d);
				return g
			};
			this.fnDestroy = function (a) {
				var b = s(this[j.ext.iApiIndex]), c = b.nTableWrapper.parentNode, d = b.nTBody, i, f, a = a === n ? !1 : a;
				b.bDestroying = !0;
				A(b, "aoDestroyCallback", "destroy", [b]);
				if (!a) {
					i = 0;
					for (f = b.aoColumns.length; i < f; i++)!1 === b.aoColumns[i].bVisible && this.fnSetColumnVis(i, !0)
				}
				h(b.nTableWrapper).find("*").andSelf().unbind(".DT");
				h("tbody>tr>td." + b.oClasses.sRowEmpty, b.nTable).parent().remove();
				b.nTable != b.nTHead.parentNode && (h(b.nTable).children("thead").remove(), b.nTable.appendChild(b.nTHead));
				b.nTFoot && b.nTable != b.nTFoot.parentNode && (h(b.nTable).children("tfoot").remove(), b.nTable.appendChild(b.nTFoot));
				b.nTable.parentNode.removeChild(b.nTable);
				h(b.nTableWrapper).remove();
				b.aaSorting = [];
				b.aaSortingFixed = [];
				P(b);
				h(T(b)).removeClass(b.asStripeClasses.join(" "));
				h("th, td", b.nTHead).removeClass([b.oClasses.sSortable, b.oClasses.sSortableAsc,
					b.oClasses.sSortableDesc, b.oClasses.sSortableNone].join(" "));
				b.bJUI && (h("th span." + b.oClasses.sSortIcon + ", td span." + b.oClasses.sSortIcon, b.nTHead).remove(), h("th, td", b.nTHead).each(function () {
					var a = h("div." + b.oClasses.sSortJUIWrapper, this), c = a.contents();
					h(this).append(c);
					a.remove()
				}));
				!a && b.nTableReinsertBefore ? c.insertBefore(b.nTable, b.nTableReinsertBefore) : a || c.appendChild(b.nTable);
				i = 0;
				for (f = b.aoData.length; i < f; i++)null !== b.aoData[i].nTr && d.appendChild(b.aoData[i].nTr);
				!0 === b.oFeatures.bAutoWidth &&
				(b.nTable.style.width = q(b.sDestroyWidth));
				if (f = b.asDestroyStripes.length) {
					a = h(d).children("tr");
					for (i = 0; i < f; i++)a.filter(":nth-child(" + f + "n + " + i + ")").addClass(b.asDestroyStripes[i])
				}
				i = 0;
				for (f = j.settings.length; i < f; i++)j.settings[i] == b && j.settings.splice(i, 1);
				e = b = null
			};
			this.fnDraw = function (a) {
				var b = s(this[j.ext.iApiIndex]);
				!1 === a ? (y(b), x(b)) : aa(b)
			};
			this.fnFilter = function (a, b, c, d, e, f) {
				var g = s(this[j.ext.iApiIndex]);
				if (g.oFeatures.bFilter) {
					if (c === n || null === c)c = !1;
					if (d === n || null === d)d = !0;
					if (e === n || null ===
						e)e = !0;
					if (f === n || null === f)f = !0;
					if (b === n || null === b) {
						if (K(g, {sSearch: a + "", bRegex: c, bSmart: d, bCaseInsensitive: f}, 1), e && g.aanFeatures.f) {
							b = g.aanFeatures.f;
							c = 0;
							for (d = b.length; c < d; c++)try {
								b[c]._DT_Input != l.activeElement && h(b[c]._DT_Input).val(a)
							} catch (o) {
								h(b[c]._DT_Input).val(a)
							}
						}
					} else h.extend(g.aoPreSearchCols[b], {sSearch: a + "", bRegex: c, bSmart: d, bCaseInsensitive: f}), K(g, g.oPreviousSearch, 1)
				}
			};
			this.fnGetData = function (a, b) {
				var c = s(this[j.ext.iApiIndex]);
				if (a !== n) {
					var d = a;
					if ("object" === typeof a) {
						var e = a.nodeName.toLowerCase();
						"tr" === e ? d = I(c, a) : "td" === e && (d = I(c, a.parentNode), b = fa(c, d, a))
					}
					return b !== n ? v(c, d, b, "") : c.aoData[d] !== n ? c.aoData[d]._aData : null
				}
				return Z(c)
			};
			this.fnGetNodes = function (a) {
				var b = s(this[j.ext.iApiIndex]);
				return a !== n ? b.aoData[a] !== n ? b.aoData[a].nTr : null : T(b)
			};
			this.fnGetPosition = function (a) {
				var b = s(this[j.ext.iApiIndex]), c = a.nodeName.toUpperCase();
				return"TR" == c ? I(b, a) : "TD" == c || "TH" == c ? (c = I(b, a.parentNode), a = fa(b, c, a), [c, R(b, a), a]) : null
			};
			this.fnIsOpen = function (a) {
				for (var b = s(this[j.ext.iApiIndex]), c = 0; c <
					b.aoOpenRows.length; c++)if (b.aoOpenRows[c].nParent == a)return!0;
				return!1
			};
			this.fnOpen = function (a, b, c) {
				var d = s(this[j.ext.iApiIndex]), e = T(d);
				if (-1 !== h.inArray(a, e)) {
					this.fnClose(a);
					var e = l.createElement("tr"), f = l.createElement("td");
					e.appendChild(f);
					f.className = c;
					f.colSpan = t(d);
					"string" === typeof b ? f.innerHTML = b : h(f).html(b);
					b = h("tr", d.nTBody);
					-1 != h.inArray(a, b) && h(e).insertAfter(a);
					d.aoOpenRows.push({nTr: e, nParent: a});
					return e
				}
			};
			this.fnPageChange = function (a, b) {
				var c = s(this[j.ext.iApiIndex]);
				qa(c, a);
				y(c);
				(b === n || b) && x(c)
			};
			this.fnSetColumnVis = function (a, b, c) {
				var d = s(this[j.ext.iApiIndex]), e, f, g = d.aoColumns, h = d.aoData, o, m;
				if (g[a].bVisible != b) {
					if (b) {
						for (e = f = 0; e < a; e++)g[e].bVisible && f++;
						m = f >= t(d);
						if (!m)for (e = a; e < g.length; e++)if (g[e].bVisible) {
							o = e;
							break
						}
						e = 0;
						for (f = h.length; e < f; e++)null !== h[e].nTr && (m ? h[e].nTr.appendChild(h[e]._anHidden[a]) : h[e].nTr.insertBefore(h[e]._anHidden[a], J(d, e)[o]))
					} else {
						e = 0;
						for (f = h.length; e < f; e++)null !== h[e].nTr && (o = J(d, e)[a], h[e]._anHidden[a] = o, o.parentNode.removeChild(o))
					}
					g[a].bVisible =
						b;
					W(d, d.aoHeader);
					d.nTFoot && W(d, d.aoFooter);
					e = 0;
					for (f = d.aoOpenRows.length; e < f; e++)d.aoOpenRows[e].nTr.colSpan = t(d);
					if (c === n || c)k(d), x(d);
					ra(d)
				}
			};
			this.fnSettings = function () {
				return s(this[j.ext.iApiIndex])
			};
			this.fnSort = function (a) {
				var b = s(this[j.ext.iApiIndex]);
				b.aaSorting = a;
				O(b)
			};
			this.fnSortListener = function (a, b, c) {
				ia(s(this[j.ext.iApiIndex]), a, b, c)
			};
			this.fnUpdate = function (a, b, c, d, e) {
				var f = s(this[j.ext.iApiIndex]), b = "object" === typeof b ? I(f, b) : b;
				if (h.isArray(a) && c === n) {
					f.aoData[b]._aData = a.slice();
					for (c = 0; c < f.aoColumns.length; c++)this.fnUpdate(v(f, b, c), b, c, !1, !1)
				} else if (h.isPlainObject(a) && c === n) {
					f.aoData[b]._aData = h.extend(!0, {}, a);
					for (c = 0; c < f.aoColumns.length; c++)this.fnUpdate(v(f, b, c), b, c, !1, !1)
				} else {
					F(f, b, c, a);
					var a = v(f, b, c, "display"), g = f.aoColumns[c];
					null !== g.fnRender && (a = S(f, b, c), g.bUseRendered && F(f, b, c, a));
					null !== f.aoData[b].nTr && (J(f, b)[c].innerHTML = a)
				}
				c = h.inArray(b, f.aiDisplay);
				f.asDataSearch[c] = na(f, Y(f, b, "filter", r(f, "bSearchable")));
				(e === n || e) && k(f);
				(d === n || d) && aa(f);
				return 0
			};
			this.fnVersionCheck = j.ext.fnVersionCheck;
			this.oApi = {_fnExternApiFunc: Va, _fnInitialise: ba, _fnInitComplete: $, _fnLanguageCompat: pa, _fnAddColumn: o, _fnColumnOptions: m, _fnAddData: H, _fnCreateTr: ea, _fnGatherData: ua, _fnBuildHead: va, _fnDrawHead: W, _fnDraw: x, _fnReDraw: aa, _fnAjaxUpdate: wa, _fnAjaxParameters: Ea, _fnAjaxUpdateDraw: Fa, _fnServerParams: ka, _fnAddOptionsHtml: xa, _fnFeatureHtmlTable: Ba, _fnScrollDraw: La, _fnAdjustColumnSizing: k, _fnFeatureHtmlFilter: za, _fnFilterComplete: K, _fnFilterCustom: Ia, _fnFilterColumn: Ha,
				_fnFilter: Ga, _fnBuildSearchArray: la, _fnBuildSearchRow: na, _fnFilterCreateSearch: ma, _fnDataToSearch: Ja, _fnSort: O, _fnSortAttachListener: ia, _fnSortingClasses: P, _fnFeatureHtmlPaginate: Da, _fnPageChange: qa, _fnFeatureHtmlInfo: Ca, _fnUpdateInfo: Ka, _fnFeatureHtmlLength: ya, _fnFeatureHtmlProcessing: Aa, _fnProcessingDisplay: E, _fnVisibleToColumnIndex: G, _fnColumnIndexToVisible: R, _fnNodeToDataIndex: I, _fnVisbleColumns: t, _fnCalculateEnd: y, _fnConvertToWidth: Ma, _fnCalculateColumnWidths: da, _fnScrollingWidthAdjust: Oa, _fnGetWidestNode: Na,
				_fnGetMaxLenString: Pa, _fnStringToCss: q, _fnDetectType: B, _fnSettingsFromNode: s, _fnGetDataMaster: Z, _fnGetTrNodes: T, _fnGetTdNodes: J, _fnEscapeRegex: oa, _fnDeleteIndex: ha, _fnReOrderIndex: u, _fnColumnOrdering: M, _fnLog: D, _fnClearTable: ga, _fnSaveState: ra, _fnLoadState: Sa, _fnCreateCookie: function (a, b, c, d, e) {
					var f = new Date;
					f.setTime(f.getTime() + 1E3 * c);
					var c = X.location.pathname.split("/"), a = a + "_" + c.pop().replace(/[\/:]/g, "").toLowerCase(), g;
					null !== e ? (g = "function" === typeof h.parseJSON ? h.parseJSON(b) : eval("(" + b + ")"),
						b = e(a, g, f.toGMTString(), c.join("/") + "/")) : b = a + "=" + encodeURIComponent(b) + "; expires=" + f.toGMTString() + "; path=" + c.join("/") + "/";
					a = l.cookie.split(";");
					e = b.split(";")[0].length;
					f = [];
					if (4096 < e + l.cookie.length + 10) {
						for (var j = 0, o = a.length; j < o; j++)if (-1 != a[j].indexOf(d)) {
							var k = a[j].split("=");
							try {
								(g = eval("(" + decodeURIComponent(k[1]) + ")")) && g.iCreate && f.push({name: k[0], time: g.iCreate})
							} catch (m) {
							}
						}
						for (f.sort(function (a, b) {
							return b.time - a.time
						}); 4096 < e + l.cookie.length + 10;) {
							if (0 === f.length)return;
							d = f.pop();
							l.cookie =
								d.name + "=; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=" + c.join("/") + "/"
						}
					}
					l.cookie = b
				}, _fnReadCookie: function (a) {
					for (var b = X.location.pathname.split("/"), a = a + "_" + b[b.length - 1].replace(/[\/:]/g, "").toLowerCase() + "=", b = l.cookie.split(";"), c = 0; c < b.length; c++) {
						for (var d = b[c]; " " == d.charAt(0);)d = d.substring(1, d.length);
						if (0 === d.indexOf(a))return decodeURIComponent(d.substring(a.length, d.length))
					}
					return null
				}, _fnDetectHeader: V, _fnGetUniqueThs: N, _fnScrollBarWidth: Qa, _fnApplyToChildren: C, _fnMap: p, _fnGetRowData: Y,
				_fnGetCellData: v, _fnSetCellData: F, _fnGetObjectDataFn: Q, _fnSetObjectDataFn: L, _fnApplyColumnDefs: ta, _fnBindAction: Ra, _fnExtend: Ta, _fnCallbackReg: z, _fnCallbackFire: A, _fnJsonString: Wa, _fnRender: S, _fnNodeToColumnIndex: fa, _fnInfoMacros: ja, _fnBrowserDetect: Ua, _fnGetColumns: r};
			h.extend(j.ext.oApi, this.oApi);
			for (var sa in j.ext.oApi)sa && (this[sa] = Va(sa));
			var ca = this;
			this.each(function () {
				var a = 0, b, c, d;
				c = this.getAttribute("id");
				var i = !1, f = !1;
				if ("table" != this.nodeName.toLowerCase())D(null, 0, "Attempted to initialise DataTables on a node which is not a table: " +
					this.nodeName); else {
					a = 0;
					for (b = j.settings.length; a < b; a++) {
						if (j.settings[a].nTable == this) {
							if (e === n || e.bRetrieve)return j.settings[a].oInstance;
							if (e.bDestroy) {
								j.settings[a].oInstance.fnDestroy();
								break
							} else {
								D(j.settings[a], 0, "Cannot reinitialise DataTable.\n\nTo retrieve the DataTables object for this table, pass no arguments or see the docs for bRetrieve and bDestroy");
								return
							}
						}
						if (j.settings[a].sTableId == this.id) {
							j.settings.splice(a, 1);
							break
						}
					}
					if (null === c || "" === c)this.id = c = "DataTables_Table_" + j.ext._oExternConfig.iNextUnique++;
					var g = h.extend(!0, {}, j.models.oSettings, {nTable: this, oApi: ca.oApi, oInit: e, sDestroyWidth: h(this).width(), sInstance: c, sTableId: c});
					j.settings.push(g);
					g.oInstance = 1 === ca.length ? ca : h(this).dataTable();
					e || (e = {});
					e.oLanguage && pa(e.oLanguage);
					e = Ta(h.extend(!0, {}, j.defaults), e);
					p(g.oFeatures, e, "bPaginate");
					p(g.oFeatures, e, "bLengthChange");
					p(g.oFeatures, e, "bFilter");
					p(g.oFeatures, e, "bSort");
					p(g.oFeatures, e, "bInfo");
					p(g.oFeatures, e, "bProcessing");
					p(g.oFeatures, e, "bAutoWidth");
					p(g.oFeatures, e, "bSortClasses");
					p(g.oFeatures, e, "bServerSide");
					p(g.oFeatures, e, "bDeferRender");
					p(g.oScroll, e, "sScrollX", "sX");
					p(g.oScroll, e, "sScrollXInner", "sXInner");
					p(g.oScroll, e, "sScrollY", "sY");
					p(g.oScroll, e, "bScrollCollapse", "bCollapse");
					p(g.oScroll, e, "bScrollInfinite", "bInfinite");
					p(g.oScroll, e, "iScrollLoadGap", "iLoadGap");
					p(g.oScroll, e, "bScrollAutoCss", "bAutoCss");
					p(g, e, "asStripeClasses");
					p(g, e, "asStripClasses", "asStripeClasses");
					p(g, e, "fnServerData");
					p(g, e, "fnFormatNumber");
					p(g, e, "sServerMethod");
					p(g, e, "aaSorting");
					p(g,
						e, "aaSortingFixed");
					p(g, e, "aLengthMenu");
					p(g, e, "sPaginationType");
					p(g, e, "sAjaxSource");
					p(g, e, "sAjaxDataProp");
					p(g, e, "iCookieDuration");
					p(g, e, "sCookiePrefix");
					p(g, e, "sDom");
					p(g, e, "bSortCellsTop");
					p(g, e, "iTabIndex");
					p(g, e, "oSearch", "oPreviousSearch");
					p(g, e, "aoSearchCols", "aoPreSearchCols");
					p(g, e, "iDisplayLength", "_iDisplayLength");
					p(g, e, "bJQueryUI", "bJUI");
					p(g, e, "fnCookieCallback");
					p(g, e, "fnStateLoad");
					p(g, e, "fnStateSave");
					p(g.oLanguage, e, "fnInfoCallback");
					z(g, "aoDrawCallback", e.fnDrawCallback, "user");
					z(g, "aoServerParams", e.fnServerParams, "user");
					z(g, "aoStateSaveParams", e.fnStateSaveParams, "user");
					z(g, "aoStateLoadParams", e.fnStateLoadParams, "user");
					z(g, "aoStateLoaded", e.fnStateLoaded, "user");
					z(g, "aoRowCallback", e.fnRowCallback, "user");
					z(g, "aoRowCreatedCallback", e.fnCreatedRow, "user");
					z(g, "aoHeaderCallback", e.fnHeaderCallback, "user");
					z(g, "aoFooterCallback", e.fnFooterCallback, "user");
					z(g, "aoInitComplete", e.fnInitComplete, "user");
					z(g, "aoPreDrawCallback", e.fnPreDrawCallback, "user");
					g.oFeatures.bServerSide &&
						g.oFeatures.bSort && g.oFeatures.bSortClasses ? z(g, "aoDrawCallback", P, "server_side_sort_classes") : g.oFeatures.bDeferRender && z(g, "aoDrawCallback", P, "defer_sort_classes");
					e.bJQueryUI ? (h.extend(g.oClasses, j.ext.oJUIClasses), e.sDom === j.defaults.sDom && "lfrtip" === j.defaults.sDom && (g.sDom = '<"H"lfr>t<"F"ip>')) : h.extend(g.oClasses, j.ext.oStdClasses);
					h(this).addClass(g.oClasses.sTable);
					if ("" !== g.oScroll.sX || "" !== g.oScroll.sY)g.oScroll.iBarWidth = Qa();
					g.iInitDisplayStart === n && (g.iInitDisplayStart = e.iDisplayStart,
						g._iDisplayStart = e.iDisplayStart);
					e.bStateSave && (g.oFeatures.bStateSave = !0, Sa(g, e), z(g, "aoDrawCallback", ra, "state_save"));
					null !== e.iDeferLoading && (g.bDeferLoading = !0, a = h.isArray(e.iDeferLoading), g._iRecordsDisplay = a ? e.iDeferLoading[0] : e.iDeferLoading, g._iRecordsTotal = a ? e.iDeferLoading[1] : e.iDeferLoading);
					null !== e.aaData && (f = !0);
					"" !== e.oLanguage.sUrl ? (g.oLanguage.sUrl = e.oLanguage.sUrl, h.getJSON(g.oLanguage.sUrl, null, function (a) {
						pa(a);
						h.extend(true, g.oLanguage, e.oLanguage, a);
						ba(g)
					}), i = !0) : h.extend(!0,
						g.oLanguage, e.oLanguage);
					null === e.asStripeClasses && (g.asStripeClasses = [g.oClasses.sStripeOdd, g.oClasses.sStripeEven]);
					b = g.asStripeClasses.length;
					g.asDestroyStripes = [];
					if (b) {
						c = !1;
						d = h(this).children("tbody").children("tr:lt(" + b + ")");
						for (a = 0; a < b; a++)d.hasClass(g.asStripeClasses[a]) && (c = !0, g.asDestroyStripes.push(g.asStripeClasses[a]));
						c && d.removeClass(g.asStripeClasses.join(" "))
					}
					c = [];
					a = this.getElementsByTagName("thead");
					0 !== a.length && (V(g.aoHeader, a[0]), c = N(g));
					if (null === e.aoColumns) {
						d = [];
						a = 0;
						for (b =
								 c.length; a < b; a++)d.push(null)
					} else d = e.aoColumns;
					a = 0;
					for (b = d.length; a < b; a++)e.saved_aoColumns !== n && e.saved_aoColumns.length == b && (null === d[a] && (d[a] = {}), d[a].bVisible = e.saved_aoColumns[a].bVisible), o(g, c ? c[a] : null);
					ta(g, e.aoColumnDefs, d, function (a, b) {
						m(g, a, b)
					});
					a = 0;
					for (b = g.aaSorting.length; a < b; a++) {
						g.aaSorting[a][0] >= g.aoColumns.length && (g.aaSorting[a][0] = 0);
						var k = g.aoColumns[g.aaSorting[a][0]];
						g.aaSorting[a][2] === n && (g.aaSorting[a][2] = 0);
						e.aaSorting === n && g.saved_aaSorting === n && (g.aaSorting[a][1] =
							k.asSorting[0]);
						c = 0;
						for (d = k.asSorting.length; c < d; c++)if (g.aaSorting[a][1] == k.asSorting[c]) {
							g.aaSorting[a][2] = c;
							break
						}
					}
					P(g);
					Ua(g);
					a = h(this).children("caption").each(function () {
						this._captionSide = h(this).css("caption-side")
					});
					b = h(this).children("thead");
					0 === b.length && (b = [l.createElement("thead")], this.appendChild(b[0]));
					g.nTHead = b[0];
					b = h(this).children("tbody");
					0 === b.length && (b = [l.createElement("tbody")], this.appendChild(b[0]));
					g.nTBody = b[0];
					g.nTBody.setAttribute("role", "alert");
					g.nTBody.setAttribute("aria-live",
						"polite");
					g.nTBody.setAttribute("aria-relevant", "all");
					b = h(this).children("tfoot");
					if (0 === b.length && 0 < a.length && ("" !== g.oScroll.sX || "" !== g.oScroll.sY))b = [l.createElement("tfoot")], this.appendChild(b[0]);
					0 < b.length && (g.nTFoot = b[0], V(g.aoFooter, g.nTFoot));
					if (f)for (a = 0; a < e.aaData.length; a++)H(g, e.aaData[a]); else ua(g);
					g.aiDisplay = g.aiDisplayMaster.slice();
					g.bInitialised = !0;
					!1 === i && ba(g)
				}
			});
			ca = null;
			return this
		};
		j.fnVersionCheck = function (e) {
			for (var h = function (e, h) {
					for (; e.length < h;)e += "0";
					return e
				}, m = j.ext.sVersion.split("."),
					 e = e.split("."), k = "", n = "", l = 0, t = e.length; l < t; l++)k += h(m[l], 3), n += h(e[l], 3);
			return parseInt(k, 10) >= parseInt(n, 10)
		};
		j.fnIsDataTable = function (e) {
			for (var h = j.settings, m = 0; m < h.length; m++)if (h[m].nTable === e || h[m].nScrollHead === e || h[m].nScrollFoot === e)return!0;
			return!1
		};
		j.fnTables = function (e) {
			var o = [];
			jQuery.each(j.settings, function (j, k) {
				(!e || !0 === e && h(k.nTable).is(":visible")) && o.push(k.nTable)
			});
			return o
		};
		j.version = "1.9.4";
		j.settings = [];
		j.models = {};
		j.models.ext = {afnFiltering: [], afnSortData: [], aoFeatures: [],
			aTypes: [], fnVersionCheck: j.fnVersionCheck, iApiIndex: 0, ofnSearch: {}, oApi: {}, oStdClasses: {}, oJUIClasses: {}, oPagination: {}, oSort: {}, sVersion: j.version, sErrMode: "alert", _oExternConfig: {iNextUnique: 0}};
		j.models.oSearch = {bCaseInsensitive: !0, sSearch: "", bRegex: !1, bSmart: !0};
		j.models.oRow = {nTr: null, _aData: [], _aSortData: [], _anHidden: [], _sRowStripe: ""};
		j.models.oColumn = {aDataSort: null, asSorting: null, bSearchable: null, bSortable: null, bUseRendered: null, bVisible: null, _bAutoType: !0, fnCreatedCell: null, fnGetData: null,
			fnRender: null, fnSetData: null, mData: null, mRender: null, nTh: null, nTf: null, sClass: null, sContentPadding: null, sDefaultContent: null, sName: null, sSortDataType: "std", sSortingClass: null, sSortingClassJUI: null, sTitle: null, sType: null, sWidth: null, sWidthOrig: null};
		j.defaults = {aaData: null, aaSorting: [
			[0, "asc"]
		], aaSortingFixed: null, aLengthMenu: [10, 25, 50, 100], aoColumns: null, aoColumnDefs: null, aoSearchCols: [], asStripeClasses: null, bAutoWidth: !0, bDeferRender: !1, bDestroy: !1, bFilter: !0, bInfo: !0, bJQueryUI: !1, bLengthChange: !0,
			bPaginate: !0, bProcessing: !1, bRetrieve: !1, bScrollAutoCss: !0, bScrollCollapse: !1, bScrollInfinite: !1, bServerSide: !1, bSort: !0, bSortCellsTop: !1, bSortClasses: !0, bStateSave: !1, fnCookieCallback: null, fnCreatedRow: null, fnDrawCallback: null, fnFooterCallback: null, fnFormatNumber: function (e) {
				if (1E3 > e)return e;
				for (var h = e + "", e = h.split(""), j = "", h = h.length, k = 0; k < h; k++)0 === k % 3 && 0 !== k && (j = this.oLanguage.sInfoThousands + j), j = e[h - k - 1] + j;
				return j
			}, fnHeaderCallback: null, fnInfoCallback: null, fnInitComplete: null, fnPreDrawCallback: null,
			fnRowCallback: null, fnServerData: function (e, j, m, k) {
				k.jqXHR = h.ajax({url: e, data: j, success: function (e) {
					e.sError && k.oApi._fnLog(k, 0, e.sError);
					h(k.oInstance).trigger("xhr", [k, e]);
					m(e)
				}, dataType: "json", cache: !1, type: k.sServerMethod, error: function (e, h) {
					"parsererror" == h && k.oApi._fnLog(k, 0, "DataTables warning: JSON data from server could not be parsed. This is caused by a JSON formatting error.")
				}})
			}, fnServerParams: null, fnStateLoad: function (e) {
				var e = this.oApi._fnReadCookie(e.sCookiePrefix + e.sInstance), j;
				try {
					j =
						"function" === typeof h.parseJSON ? h.parseJSON(e) : eval("(" + e + ")")
				} catch (m) {
					j = null
				}
				return j
			}, fnStateLoadParams: null, fnStateLoaded: null, fnStateSave: function (e, h) {
				this.oApi._fnCreateCookie(e.sCookiePrefix + e.sInstance, this.oApi._fnJsonString(h), e.iCookieDuration, e.sCookiePrefix, e.fnCookieCallback)
			}, fnStateSaveParams: null, iCookieDuration: 7200, iDeferLoading: null, iDisplayLength: 10, iDisplayStart: 0, iScrollLoadGap: 100, iTabIndex: 0, oLanguage: {oAria: {sSortAscending: ": activate to sort column ascending", sSortDescending: ": activate to sort column descending"},
				oPaginate: {sFirst: "First", sLast: "Last", sNext: "Next", sPrevious: "Previous"}, sEmptyTable: "No data available in table", sInfo: "Showing _START_ to _END_ of _TOTAL_ entries", sInfoEmpty: "Showing 0 to 0 of 0 entries", sInfoFiltered: "(filtered from _MAX_ total entries)", sInfoPostFix: "", sInfoThousands: ",", sLengthMenu: "Show _MENU_ entries", sLoadingRecords: "Loading...", sProcessing: "Processing...", sSearch: "Search:", sUrl: "", sZeroRecords: "No matching records found"}, oSearch: h.extend({}, j.models.oSearch), sAjaxDataProp: "aaData",
			sAjaxSource: null, sCookiePrefix: "SpryMedia_DataTables_", sDom: "lfrtip", sPaginationType: "two_button", sScrollX: "", sScrollXInner: "", sScrollY: "", sServerMethod: "GET"};
		j.defaults.columns = {aDataSort: null, asSorting: ["asc", "desc"], bSearchable: !0, bSortable: !0, bUseRendered: !0, bVisible: !0, fnCreatedCell: null, fnRender: null, iDataSort: -1, mData: null, mRender: null, sCellType: "td", sClass: "", sContentPadding: "", sDefaultContent: null, sName: "", sSortDataType: "std", sTitle: null, sType: null, sWidth: null};
		j.models.oSettings = {oFeatures: {bAutoWidth: null,
			bDeferRender: null, bFilter: null, bInfo: null, bLengthChange: null, bPaginate: null, bProcessing: null, bServerSide: null, bSort: null, bSortClasses: null, bStateSave: null}, oScroll: {bAutoCss: null, bCollapse: null, bInfinite: null, iBarWidth: 0, iLoadGap: null, sX: null, sXInner: null, sY: null}, oLanguage: {fnInfoCallback: null}, oBrowser: {bScrollOversize: !1}, aanFeatures: [], aoData: [], aiDisplay: [], aiDisplayMaster: [], aoColumns: [], aoHeader: [], aoFooter: [], asDataSearch: [], oPreviousSearch: {}, aoPreSearchCols: [], aaSorting: null, aaSortingFixed: null,
			asStripeClasses: null, asDestroyStripes: [], sDestroyWidth: 0, aoRowCallback: [], aoHeaderCallback: [], aoFooterCallback: [], aoDrawCallback: [], aoRowCreatedCallback: [], aoPreDrawCallback: [], aoInitComplete: [], aoStateSaveParams: [], aoStateLoadParams: [], aoStateLoaded: [], sTableId: "", nTable: null, nTHead: null, nTFoot: null, nTBody: null, nTableWrapper: null, bDeferLoading: !1, bInitialised: !1, aoOpenRows: [], sDom: null, sPaginationType: "two_button", iCookieDuration: 0, sCookiePrefix: "", fnCookieCallback: null, aoStateSave: [], aoStateLoad: [],
			oLoadedState: null, sAjaxSource: null, sAjaxDataProp: null, bAjaxDataGet: !0, jqXHR: null, fnServerData: null, aoServerParams: [], sServerMethod: null, fnFormatNumber: null, aLengthMenu: null, iDraw: 0, bDrawing: !1, iDrawError: -1, _iDisplayLength: 10, _iDisplayStart: 0, _iDisplayEnd: 10, _iRecordsTotal: 0, _iRecordsDisplay: 0, bJUI: null, oClasses: {}, bFiltered: !1, bSorted: !1, bSortCellsTop: null, oInit: null, aoDestroyCallback: [], fnRecordsTotal: function () {
				return this.oFeatures.bServerSide ? parseInt(this._iRecordsTotal, 10) : this.aiDisplayMaster.length
			},
			fnRecordsDisplay: function () {
				return this.oFeatures.bServerSide ? parseInt(this._iRecordsDisplay, 10) : this.aiDisplay.length
			}, fnDisplayEnd: function () {
				return this.oFeatures.bServerSide ? !1 === this.oFeatures.bPaginate || -1 == this._iDisplayLength ? this._iDisplayStart + this.aiDisplay.length : Math.min(this._iDisplayStart + this._iDisplayLength, this._iRecordsDisplay) : this._iDisplayEnd
			}, oInstance: null, sInstance: null, iTabIndex: 0, nScrollHead: null, nScrollFoot: null};
		j.ext = h.extend(!0, {}, j.models.ext);
		h.extend(j.ext.oStdClasses,
			{sTable: "dataTable", sPagePrevEnabled: "paginate_enabled_previous", sPagePrevDisabled: "paginate_disabled_previous", sPageNextEnabled: "paginate_enabled_next", sPageNextDisabled: "paginate_disabled_next", sPageJUINext: "", sPageJUIPrev: "", sPageButton: "paginate_button", sPageButtonActive: "paginate_active", sPageButtonStaticDisabled: "paginate_button paginate_button_disabled", sPageFirst: "first", sPagePrevious: "previous", sPageNext: "next", sPageLast: "last", sStripeOdd: "odd", sStripeEven: "even", sRowEmpty: "dataTables_empty",
				sWrapper: "dataTables_wrapper", sFilter: "dataTables_filter", sInfo: "dataTables_info", sPaging: "dataTables_paginate paging_", sLength: "dataTables_length", sProcessing: "dataTables_processing", sSortAsc: "sorting_asc", sSortDesc: "sorting_desc", sSortable: "sorting", sSortableAsc: "sorting_asc_disabled", sSortableDesc: "sorting_desc_disabled", sSortableNone: "sorting_disabled", sSortColumn: "sorting_", sSortJUIAsc: "", sSortJUIDesc: "", sSortJUI: "", sSortJUIAscAllowed: "", sSortJUIDescAllowed: "", sSortJUIWrapper: "", sSortIcon: "",
				sScrollWrapper: "dataTables_scroll", sScrollHead: "dataTables_scrollHead", sScrollHeadInner: "dataTables_scrollHeadInner", sScrollBody: "dataTables_scrollBody", sScrollFoot: "dataTables_scrollFoot", sScrollFootInner: "dataTables_scrollFootInner", sFooterTH: "", sJUIHeader: "", sJUIFooter: ""});
		h.extend(j.ext.oJUIClasses, j.ext.oStdClasses, {sPagePrevEnabled: "fg-button ui-button ui-state-default ui-corner-left", sPagePrevDisabled: "fg-button ui-button ui-state-default ui-corner-left ui-state-disabled", sPageNextEnabled: "fg-button ui-button ui-state-default ui-corner-right",
			sPageNextDisabled: "fg-button ui-button ui-state-default ui-corner-right ui-state-disabled", sPageJUINext: "ui-icon ui-icon-circle-arrow-e", sPageJUIPrev: "ui-icon ui-icon-circle-arrow-w", sPageButton: "fg-button ui-button ui-state-default", sPageButtonActive: "fg-button ui-button ui-state-default ui-state-disabled", sPageButtonStaticDisabled: "fg-button ui-button ui-state-default ui-state-disabled", sPageFirst: "first ui-corner-tl ui-corner-bl", sPageLast: "last ui-corner-tr ui-corner-br", sPaging: "dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_",
			sSortAsc: "ui-state-default", sSortDesc: "ui-state-default", sSortable: "ui-state-default", sSortableAsc: "ui-state-default", sSortableDesc: "ui-state-default", sSortableNone: "ui-state-default", sSortJUIAsc: "css_right ui-icon ui-icon-triangle-1-n", sSortJUIDesc: "css_right ui-icon ui-icon-triangle-1-s", sSortJUI: "css_right ui-icon ui-icon-carat-2-n-s", sSortJUIAscAllowed: "css_right ui-icon ui-icon-carat-1-n", sSortJUIDescAllowed: "css_right ui-icon ui-icon-carat-1-s", sSortJUIWrapper: "DataTables_sort_wrapper", sSortIcon: "DataTables_sort_icon",
			sScrollHead: "dataTables_scrollHead ui-state-default", sScrollFoot: "dataTables_scrollFoot ui-state-default", sFooterTH: "ui-state-default", sJUIHeader: "fg-toolbar ui-toolbar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix", sJUIFooter: "fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix"});
		h.extend(j.ext.oPagination, {two_button: {fnInit: function (e, j, m) {
			var k = e.oLanguage.oPaginate, n = function (h) {
				e.oApi._fnPageChange(e, h.data.action) && m(e)
			}, k = !e.bJUI ? '<a class="' +
				e.oClasses.sPagePrevDisabled + '" tabindex="' + e.iTabIndex + '" role="button">' + k.sPrevious + '</a><a class="' + e.oClasses.sPageNextDisabled + '" tabindex="' + e.iTabIndex + '" role="button">' + k.sNext + "</a>" : '<a class="' + e.oClasses.sPagePrevDisabled + '" tabindex="' + e.iTabIndex + '" role="button"><span class="' + e.oClasses.sPageJUIPrev + '"></span></a><a class="' + e.oClasses.sPageNextDisabled + '" tabindex="' + e.iTabIndex + '" role="button"><span class="' + e.oClasses.sPageJUINext + '"></span></a>';
			h(j).append(k);
			var l = h("a", j),
				k = l[0], l = l[1];
			e.oApi._fnBindAction(k, {action: "previous"}, n);
			e.oApi._fnBindAction(l, {action: "next"}, n);
			e.aanFeatures.p || (j.id = e.sTableId + "_paginate", k.id = e.sTableId + "_previous", l.id = e.sTableId + "_next", k.setAttribute("aria-controls", e.sTableId), l.setAttribute("aria-controls", e.sTableId))
		}, fnUpdate: function (e) {
			if (e.aanFeatures.p)for (var h = e.oClasses, j = e.aanFeatures.p, k, l = 0, n = j.length; l < n; l++)if (k = j[l].firstChild)k.className = 0 === e._iDisplayStart ? h.sPagePrevDisabled : h.sPagePrevEnabled, k = k.nextSibling,
				k.className = e.fnDisplayEnd() == e.fnRecordsDisplay() ? h.sPageNextDisabled : h.sPageNextEnabled
		}}, iFullNumbersShowPages: 5, full_numbers: {fnInit: function (e, j, m) {
			var k = e.oLanguage.oPaginate, l = e.oClasses, n = function (h) {
				e.oApi._fnPageChange(e, h.data.action) && m(e)
			};
			h(j).append('<a  tabindex="' + e.iTabIndex + '" class="' + l.sPageButton + " " + l.sPageFirst + '">' + k.sFirst + '</a><a  tabindex="' + e.iTabIndex + '" class="' + l.sPageButton + " " + l.sPagePrevious + '">' + k.sPrevious + '</a><span></span><a tabindex="' + e.iTabIndex + '" class="' +
				l.sPageButton + " " + l.sPageNext + '">' + k.sNext + '</a><a tabindex="' + e.iTabIndex + '" class="' + l.sPageButton + " " + l.sPageLast + '">' + k.sLast + "</a>");
			var t = h("a", j), k = t[0], l = t[1], r = t[2], t = t[3];
			e.oApi._fnBindAction(k, {action: "first"}, n);
			e.oApi._fnBindAction(l, {action: "previous"}, n);
			e.oApi._fnBindAction(r, {action: "next"}, n);
			e.oApi._fnBindAction(t, {action: "last"}, n);
			e.aanFeatures.p || (j.id = e.sTableId + "_paginate", k.id = e.sTableId + "_first", l.id = e.sTableId + "_previous", r.id = e.sTableId + "_next", t.id = e.sTableId + "_last")
		},
			fnUpdate: function (e, o) {
				if (e.aanFeatures.p) {
					var m = j.ext.oPagination.iFullNumbersShowPages, k = Math.floor(m / 2), l = Math.ceil(e.fnRecordsDisplay() / e._iDisplayLength), n = Math.ceil(e._iDisplayStart / e._iDisplayLength) + 1, t = "", r, B = e.oClasses, u, M = e.aanFeatures.p, L = function (h) {
						e.oApi._fnBindAction(this, {page: h + r - 1}, function (h) {
							e.oApi._fnPageChange(e, h.data.page);
							o(e);
							h.preventDefault()
						})
					};
					-1 === e._iDisplayLength ? n = k = r = 1 : l < m ? (r = 1, k = l) : n <= k ? (r = 1, k = m) : n >= l - k ? (r = l - m + 1, k = l) : (r = n - Math.ceil(m / 2) + 1, k = r + m - 1);
					for (m = r; m <= k; m++)t +=
						n !== m ? '<a tabindex="' + e.iTabIndex + '" class="' + B.sPageButton + '">' + e.fnFormatNumber(m) + "</a>" : '<a tabindex="' + e.iTabIndex + '" class="' + B.sPageButtonActive + '">' + e.fnFormatNumber(m) + "</a>";
					m = 0;
					for (k = M.length; m < k; m++)u = M[m], u.hasChildNodes() && (h("span:eq(0)", u).html(t).children("a").each(L), u = u.getElementsByTagName("a"), u = [u[0], u[1], u[u.length - 2], u[u.length - 1]], h(u).removeClass(B.sPageButton + " " + B.sPageButtonActive + " " + B.sPageButtonStaticDisabled), h([u[0], u[1]]).addClass(1 == n ? B.sPageButtonStaticDisabled :
						B.sPageButton), h([u[2], u[3]]).addClass(0 === l || n === l || -1 === e._iDisplayLength ? B.sPageButtonStaticDisabled : B.sPageButton))
				}
			}}});
		h.extend(j.ext.oSort, {"string-pre": function (e) {
			"string" != typeof e && (e = null !== e && e.toString ? e.toString() : "");
			return e.toLowerCase()
		}, "string-asc": function (e, h) {
			return e < h ? -1 : e > h ? 1 : 0
		}, "string-desc": function (e, h) {
			return e < h ? 1 : e > h ? -1 : 0
		}, "html-pre": function (e) {
			return e.replace(/<.*?>/g, "").toLowerCase()
		}, "html-asc": function (e, h) {
			return e < h ? -1 : e > h ? 1 : 0
		}, "html-desc": function (e, h) {
			return e <
				h ? 1 : e > h ? -1 : 0
		}, "date-pre": function (e) {
			e = Date.parse(e);
			if (isNaN(e) || "" === e)e = Date.parse("01/01/1970 00:00:00");
			return e
		}, "date-asc": function (e, h) {
			return e - h
		}, "date-desc": function (e, h) {
			return h - e
		}, "numeric-pre": function (e) {
			return"-" == e || "" === e ? 0 : 1 * e
		}, "numeric-asc": function (e, h) {
			return e - h
		}, "numeric-desc": function (e, h) {
			return h - e
		}});
		h.extend(j.ext.aTypes, [function (e) {
			if ("number" === typeof e)return"numeric";
			if ("string" !== typeof e)return null;
			var h, j = !1;
			h = e.charAt(0);
			if (-1 == "0123456789-".indexOf(h))return null;
			for (var k = 1; k < e.length; k++) {
				h = e.charAt(k);
				if (-1 == "0123456789.".indexOf(h))return null;
				if ("." == h) {
					if (j)return null;
					j = !0
				}
			}
			return"numeric"
		}, function (e) {
			var h = Date.parse(e);
			return null !== h && !isNaN(h) || "string" === typeof e && 0 === e.length ? "date" : null
		}, function (e) {
			return"string" === typeof e && -1 != e.indexOf("<") && -1 != e.indexOf(">") ? "html" : null
		}]);
		h.fn.DataTable = j;
		h.fn.dataTable = j;
		h.fn.dataTableSettings = j.settings;
		h.fn.dataTableExt = j.ext
	};
	"function" === typeof define && define.amd ? define(["jquery"], L) : jQuery && !jQuery.fn.dataTable &&
		L(jQuery)
})(window, document);

// Simple Set Clipboard System
// Author: Joseph Huckaby
var ZeroClipboard_TableTools = {version: "1.0.4-TableTools2", clients: {}, moviePath: "", nextId: 1, $: function (a) {
	"string" == typeof a && (a = document.getElementById(a));
	a.addClass || (a.hide = function () {
		this.style.display = "none"
	}, a.show = function () {
		this.style.display = ""
	}, a.addClass = function (a) {
		this.removeClass(a);
		this.className += " " + a
	}, a.removeClass = function (a) {
		this.className = this.className.replace(RegExp("\\s*" + a + "\\s*"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
	}, a.hasClass = function (a) {
		return!!this.className.match(RegExp("\\s*" +
			a + "\\s*"))
	});
	return a
}, setMoviePath: function (a) {
	this.moviePath = a
}, dispatch: function (a, b, c) {
	(a = this.clients[a]) && a.receiveEvent(b, c)
}, register: function (a, b) {
	this.clients[a] = b
}, getDOMObjectPosition: function (a) {
	var b = {left: 0, top: 0, width: a.width ? a.width : a.offsetWidth, height: a.height ? a.height : a.offsetHeight};
	"" != a.style.width && (b.width = a.style.width.replace("px", ""));
	"" != a.style.height && (b.height = a.style.height.replace("px", ""));
	for (; a;)b.left += a.offsetLeft, b.top += a.offsetTop, a = a.offsetParent;
	return b
},
	Client: function (a) {
		this.handlers = {};
		this.id = ZeroClipboard_TableTools.nextId++;
		this.movieId = "ZeroClipboard_TableToolsMovie_" + this.id;
		ZeroClipboard_TableTools.register(this.id, this);
		a && this.glue(a)
	}};
ZeroClipboard_TableTools.Client.prototype = {id: 0, ready: !1, movie: null, clipText: "", fileName: "", action: "copy", handCursorEnabled: !0, cssEffects: !0, handlers: null, sized: !1, glue: function (a, b) {
	this.domElement = ZeroClipboard_TableTools.$(a);
	var c = 99;
	this.domElement.style.zIndex && (c = parseInt(this.domElement.style.zIndex) + 1);
	var d = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement);
	this.div = document.createElement("div");
	var e = this.div.style;
	e.position = "absolute";
	e.left = "0px";
	e.top = "0px";
	e.width = d.width +
		"px";
	e.height = d.height + "px";
	e.zIndex = c;
	"undefined" != typeof b && "" != b && (this.div.title = b);
	0 != d.width && 0 != d.height && (this.sized = !0);
	this.domElement && (this.domElement.appendChild(this.div), this.div.innerHTML = this.getHTML(d.width, d.height))
}, positionElement: function () {
	var a = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement), b = this.div.style;
	b.position = "absolute";
	b.width = a.width + "px";
	b.height = a.height + "px";
	0 != a.width && 0 != a.height && (this.sized = !0, b = this.div.childNodes[0], b.width = a.width, b.height =
		a.height)
}, getHTML: function (a, b) {
	var c = "", d = "id=" + this.id + "&width=" + a + "&height=" + b;
	if (navigator.userAgent.match(/MSIE/))var e = location.href.match(/^https/i) ? "https://" : "http://", c = c + ('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + e + 'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="' + a + '" height="' + b + '" id="' + this.movieId + '" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="' +
		ZeroClipboard_TableTools.moviePath + '" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="quality" value="best" /><param name="bgcolor" value="#ffffff" /><param name="flashvars" value="' + d + '"/><param name="wmode" value="transparent"/></object>'); else c += '<embed id="' + this.movieId + '" src="' + ZeroClipboard_TableTools.moviePath + '" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="' + a + '" height="' + b + '" name="' + this.movieId + '" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="' +
		d + '" wmode="transparent" />';
	return c
}, hide: function () {
	this.div && (this.div.style.left = "-2000px")
}, show: function () {
	this.reposition()
}, destroy: function () {
	if (this.domElement && this.div) {
		this.hide();
		this.div.innerHTML = "";
		var a = document.getElementsByTagName("body")[0];
		try {
			a.removeChild(this.div)
		} catch (b) {
		}
		this.div = this.domElement = null
	}
}, reposition: function (a) {
	a && ((this.domElement = ZeroClipboard_TableTools.$(a)) || this.hide());
	if (this.domElement && this.div) {
		var a = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement),
			b = this.div.style;
		b.left = "" + a.left + "px";
		b.top = "" + a.top + "px"
	}
}, clearText: function () {
	this.clipText = "";
	this.ready && this.movie.clearText()
}, appendText: function (a) {
	this.clipText += a;
	this.ready && this.movie.appendText(a)
}, setText: function (a) {
	this.clipText = a;
	this.ready && this.movie.setText(a)
}, setCharSet: function (a) {
	this.charSet = a;
	this.ready && this.movie.setCharSet(a)
}, setBomInc: function (a) {
	this.incBom = a;
	this.ready && this.movie.setBomInc(a)
}, setFileName: function (a) {
	this.fileName = a;
	this.ready && this.movie.setFileName(a)
},
	setAction: function (a) {
		this.action = a;
		this.ready && this.movie.setAction(a)
	}, addEventListener: function (a, b) {
		a = a.toString().toLowerCase().replace(/^on/, "");
		this.handlers[a] || (this.handlers[a] = []);
		this.handlers[a].push(b)
	}, setHandCursor: function (a) {
		this.handCursorEnabled = a;
		this.ready && this.movie.setHandCursor(a)
	}, setCSSEffects: function (a) {
		this.cssEffects = !!a
	}, receiveEvent: function (a, b) {
		a = a.toString().toLowerCase().replace(/^on/, "");
		switch (a) {
			case "load":
				this.movie = document.getElementById(this.movieId);
				if (!this.movie) {
					var c = this;
					setTimeout(function () {
						c.receiveEvent("load", null)
					}, 1);
					return
				}
				if (!this.ready && navigator.userAgent.match(/Firefox/) && navigator.userAgent.match(/Windows/)) {
					c = this;
					setTimeout(function () {
						c.receiveEvent("load", null)
					}, 100);
					this.ready = !0;
					return
				}
				this.ready = !0;
				this.movie.clearText();
				this.movie.appendText(this.clipText);
				this.movie.setFileName(this.fileName);
				this.movie.setAction(this.action);
				this.movie.setCharSet(this.charSet);
				this.movie.setBomInc(this.incBom);
				this.movie.setHandCursor(this.handCursorEnabled);
				break;
			case "mouseover":
				this.domElement && this.cssEffects && this.recoverActive && this.domElement.addClass("active");
				break;
			case "mouseout":
				this.domElement && this.cssEffects && (this.recoverActive = !1, this.domElement.hasClass("active") && (this.domElement.removeClass("active"), this.recoverActive = !0));
				break;
			case "mousedown":
				this.domElement && this.cssEffects && this.domElement.addClass("active");
				break;
			case "mouseup":
				this.domElement && this.cssEffects && (this.domElement.removeClass("active"), this.recoverActive = !1)
		}
		if (this.handlers[a])for (var d =
			0, e = this.handlers[a].length; d < e; d++) {
			var f = this.handlers[a][d];
			if ("function" == typeof f)f(this, b); else if ("object" == typeof f && 2 == f.length)f[0][f[1]](this, b); else if ("string" == typeof f)window[f](this, b)
		}
	}};


/*
 * File:        TableTools.min.js
 * Version:     2.1.4
 * Author:      Allan Jardine (www.sprymedia.co.uk)
 * 
 * Copyright 2009-2012 Allan Jardine, all rights reserved.
 *
 * This source file is free software, under either the GPL v2 license or a
 * BSD (3 point) style license, as supplied with this software.
 * 
 * This source file is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 */
var TableTools;
(function (f, n, g) {
	TableTools = function (a, b) {
		!this instanceof TableTools && alert("Warning: TableTools must be initialised with the keyword 'new'");
		this.s = {that: this, dt: a.fnSettings(), print: {saveStart: -1, saveLength: -1, saveScroll: -1, funcEnd: function () {
		}}, buttonCounter: 0, select: {type: "", selected: [], preRowSelect: null, postSelected: null, postDeselected: null, all: !1, selectedClass: ""}, custom: {}, swfPath: "", buttonSet: [], master: !1, tags: {}};
		this.dom = {container: null, table: null, print: {hidden: [], message: null}, collection: {collection: null,
			background: null}};
		this.classes = f.extend(!0, {}, TableTools.classes);
		this.s.dt.bJUI && f.extend(!0, this.classes, TableTools.classes_themeroller);
		this.fnSettings = function () {
			return this.s
		};
		"undefined" == typeof b && (b = {});
		this._fnConstruct(b);
		return this
	};
	TableTools.prototype = {fnGetSelected: function (a) {
		var b = [], c = this.s.dt.aoData, d = this.s.dt.aiDisplay, e;
		if (a) {
			a = 0;
			for (e = d.length; a < e; a++)c[d[a]]._DTTT_selected && b.push(c[d[a]].nTr)
		} else {
			a = 0;
			for (e = c.length; a < e; a++)c[a]._DTTT_selected && b.push(c[a].nTr)
		}
		return b
	},
		fnGetSelectedData: function () {
			var a = [], b = this.s.dt.aoData, c, d;
			c = 0;
			for (d = b.length; c < d; c++)b[c]._DTTT_selected && a.push(this.s.dt.oInstance.fnGetData(c));
			return a
		}, fnIsSelected: function (a) {
			a = this.s.dt.oInstance.fnGetPosition(a);
			return!0 === this.s.dt.aoData[a]._DTTT_selected ? !0 : !1
		}, fnSelectAll: function (a) {
			var b = this._fnGetMasterSettings();
			this._fnRowSelect(!0 === a ? b.dt.aiDisplay : b.dt.aoData)
		}, fnSelectNone: function (a) {
			this._fnGetMasterSettings();
			this._fnRowDeselect(this.fnGetSelected(a))
		}, fnSelect: function (a) {
			"single" ==
				this.s.select.type ? (this.fnSelectNone(), this._fnRowSelect(a)) : "multi" == this.s.select.type && this._fnRowSelect(a)
		}, fnDeselect: function (a) {
			this._fnRowDeselect(a)
		}, fnGetTitle: function (a) {
			var b = "";
			"undefined" != typeof a.sTitle && "" !== a.sTitle ? b = a.sTitle : (a = g.getElementsByTagName("title"), 0 < a.length && (b = a[0].innerHTML));
			return 4 > "\u00a1".toString().length ? b.replace(/[^a-zA-Z0-9_\u00A1-\uFFFF\.,\-_ !\(\)]/g, "") : b.replace(/[^a-zA-Z0-9_\.,\-_ !\(\)]/g, "")
		}, fnCalcColRatios: function (a) {
			var b = this.s.dt.aoColumns,
				a = this._fnColumnTargets(a.mColumns), c = [], d = 0, e = 0, f, g;
			f = 0;
			for (g = a.length; f < g; f++)a[f] && (d = b[f].nTh.offsetWidth, e += d, c.push(d));
			f = 0;
			for (g = c.length; f < g; f++)c[f] /= e;
			return c.join("\t")
		}, fnGetTableData: function (a) {
			if (this.s.dt)return this._fnGetDataTablesData(a)
		}, fnSetText: function (a, b) {
			this._fnFlashSetText(a, b)
		}, fnResizeButtons: function () {
			for (var a in ZeroClipboard_TableTools.clients)if (a) {
				var b = ZeroClipboard_TableTools.clients[a];
				"undefined" != typeof b.domElement && b.domElement.parentNode && b.positionElement()
			}
		},
		fnResizeRequired: function () {
			for (var a in ZeroClipboard_TableTools.clients)if (a) {
				var b = ZeroClipboard_TableTools.clients[a];
				if ("undefined" != typeof b.domElement && b.domElement.parentNode == this.dom.container && !1 === b.sized)return!0
			}
			return!1
		}, fnPrint: function (a, b) {
			void 0 === b && (b = {});
			void 0 === a || a ? this._fnPrintStart(b) : this._fnPrintEnd()
		}, fnInfo: function (a, b) {
			var c = g.createElement("div");
			c.className = this.classes.print.info;
			c.innerHTML = a;
			g.body.appendChild(c);
			setTimeout(function () {
					f(c).fadeOut("normal", function () {
						g.body.removeChild(c)
					})
				},
				b)
		}, _fnConstruct: function (a) {
			var b = this;
			this._fnCustomiseSettings(a);
			this.dom.container = g.createElement(this.s.tags.container);
			this.dom.container.className = this.classes.container;
			"none" != this.s.select.type && this._fnRowSelectConfig();
			this._fnButtonDefinations(this.s.buttonSet, this.dom.container);
			this.s.dt.aoDestroyCallback.push({sName: "TableTools", fn: function () {
				b.dom.container.innerHTML = ""
			}})
		}, _fnCustomiseSettings: function (a) {
			"undefined" == typeof this.s.dt._TableToolsInit && (this.s.master = !0, this.s.dt._TableToolsInit = !0);
			this.dom.table = this.s.dt.nTable;
			this.s.custom = f.extend({}, TableTools.DEFAULTS, a);
			this.s.swfPath = this.s.custom.sSwfPath;
			"undefined" != typeof ZeroClipboard_TableTools && (ZeroClipboard_TableTools.moviePath = this.s.swfPath);
			this.s.select.type = this.s.custom.sRowSelect;
			this.s.select.preRowSelect = this.s.custom.fnPreRowSelect;
			this.s.select.postSelected = this.s.custom.fnRowSelected;
			this.s.select.postDeselected = this.s.custom.fnRowDeselected;
			this.s.custom.sSelectedClass && (this.classes.select.row = this.s.custom.sSelectedClass);
			this.s.tags = this.s.custom.oTags;
			this.s.buttonSet = this.s.custom.aButtons
		}, _fnButtonDefinations: function (a, b) {
			for (var c, d = 0, e = a.length; d < e; d++) {
				if ("string" == typeof a[d]) {
					if ("undefined" == typeof TableTools.BUTTONS[a[d]]) {
						alert("TableTools: Warning - unknown button type: " + a[d]);
						continue
					}
					c = f.extend({}, TableTools.BUTTONS[a[d]], !0)
				} else {
					if ("undefined" == typeof TableTools.BUTTONS[a[d].sExtends]) {
						alert("TableTools: Warning - unknown button type: " + a[d].sExtends);
						continue
					}
					c = f.extend({}, TableTools.BUTTONS[a[d].sExtends],
						!0);
					c = f.extend(c, a[d], !0)
				}
				b.appendChild(this._fnCreateButton(c, f(b).hasClass(this.classes.collection.container)))
			}
		}, _fnCreateButton: function (a, b) {
			var c = this._fnButtonBase(a, b);
			a.sAction.match(/flash/) ? this._fnFlashConfig(c, a) : "text" == a.sAction ? this._fnTextConfig(c, a) : "div" == a.sAction ? this._fnTextConfig(c, a) : "collection" == a.sAction && (this._fnTextConfig(c, a), this._fnCollectionConfig(c, a));
			return c
		}, _fnButtonBase: function (a, b) {
			var c, d, e;
			b ? (c = "default" !== a.sTag ? a.sTag : this.s.tags.collection.button, d =
				"default" !== a.sLinerTag ? a.sLiner : this.s.tags.collection.liner, e = this.classes.collection.buttons.normal) : (c = "default" !== a.sTag ? a.sTag : this.s.tags.button, d = "default" !== a.sLinerTag ? a.sLiner : this.s.tags.liner, e = this.classes.buttons.normal);
			c = g.createElement(c);
			d = g.createElement(d);
			var f = this._fnGetMasterSettings();
			c.className = e + " " + a.sButtonClass;
			c.setAttribute("id", "ToolTables_" + this.s.dt.sInstance + "_" + f.buttonCounter);
			c.appendChild(d);
			d.innerHTML = a.sButtonText;
			f.buttonCounter++;
			return c
		}, _fnGetMasterSettings: function () {
			if (this.s.master)return this.s;
			for (var a = TableTools._aInstances, b = 0, c = a.length; b < c; b++)if (this.dom.table == a[b].s.dt.nTable)return a[b].s
		}, _fnCollectionConfig: function (a, b) {
			var c = g.createElement(this.s.tags.collection.container);
			c.style.display = "none";
			c.className = this.classes.collection.container;
			b._collection = c;
			g.body.appendChild(c);
			this._fnButtonDefinations(b.aButtons, c)
		}, _fnCollectionShow: function (a, b) {
			var c = this, d = f(a).offset(), e = b._collection, j = d.left, d = d.top + f(a).outerHeight(), m = f(n).height(), h = f(g).height(), k = f(n).width(),
				o = f(g).width();
			e.style.position = "absolute";
			e.style.left = j + "px";
			e.style.top = d + "px";
			e.style.display = "block";
			f(e).css("opacity", 0);
			var l = g.createElement("div");
			l.style.position = "absolute";
			l.style.left = "0px";
			l.style.top = "0px";
			l.style.height = (m > h ? m : h) + "px";
			l.style.width = (k > o ? k : o) + "px";
			l.className = this.classes.collection.background;
			f(l).css("opacity", 0);
			g.body.appendChild(l);
			g.body.appendChild(e);
			m = f(e).outerWidth();
			k = f(e).outerHeight();
			j + m > o && (e.style.left = o - m + "px");
			d + k > h && (e.style.top = d - k - f(a).outerHeight() +
				"px");
			this.dom.collection.collection = e;
			this.dom.collection.background = l;
			setTimeout(function () {
				f(e).animate({opacity: 1}, 500);
				f(l).animate({opacity: 0.25}, 500)
			}, 10);
			this.fnResizeButtons();
			f(l).click(function () {
				c._fnCollectionHide.call(c, null, null)
			})
		}, _fnCollectionHide: function (a, b) {
			!(null !== b && "collection" == b.sExtends) && null !== this.dom.collection.collection && (f(this.dom.collection.collection).animate({opacity: 0}, 500, function () {
				this.style.display = "none"
			}), f(this.dom.collection.background).animate({opacity: 0},
				500, function () {
					this.parentNode.removeChild(this)
				}), this.dom.collection.collection = null, this.dom.collection.background = null)
		}, _fnRowSelectConfig: function () {
			if (this.s.master) {
				var a = this, b = this.s.dt;
				f(b.nTable).addClass(this.classes.select.table);
				f("tr", b.nTBody).live("click", function (c) {
					this.parentNode == b.nTBody && null !== b.oInstance.fnGetData(this) && (a.fnIsSelected(this) ? a._fnRowDeselect(this, c) : "single" == a.s.select.type ? (a.fnSelectNone(), a._fnRowSelect(this, c)) : "multi" == a.s.select.type && a._fnRowSelect(this,
						c))
				});
				b.oApi._fnCallbackReg(b, "aoRowCreatedCallback", function (c, d, e) {
					b.aoData[e]._DTTT_selected && f(c).addClass(a.classes.select.row)
				}, "TableTools-SelectAll")
			}
		}, _fnRowSelect: function (a, b) {
			var c = this._fnSelectData(a), d = [], e, j;
			e = 0;
			for (j = c.length; e < j; e++)c[e].nTr && d.push(c[e].nTr);
			if (null === this.s.select.preRowSelect || this.s.select.preRowSelect.call(this, b, d, !0)) {
				e = 0;
				for (j = c.length; e < j; e++)c[e]._DTTT_selected = !0, c[e].nTr && f(c[e].nTr).addClass(this.classes.select.row);
				null !== this.s.select.postSelected &&
				this.s.select.postSelected.call(this, d);
				TableTools._fnEventDispatch(this, "select", d, !0)
			}
		}, _fnRowDeselect: function (a, b) {
			var c = this._fnSelectData(a), d = [], e, j;
			e = 0;
			for (j = c.length; e < j; e++)c[e].nTr && d.push(c[e].nTr);
			if (null === this.s.select.preRowSelect || this.s.select.preRowSelect.call(this, b, d, !1)) {
				e = 0;
				for (j = c.length; e < j; e++)c[e]._DTTT_selected = !1, c[e].nTr && f(c[e].nTr).removeClass(this.classes.select.row);
				null !== this.s.select.postDeselected && this.s.select.postDeselected.call(this, d);
				TableTools._fnEventDispatch(this,
					"select", d, !1)
			}
		}, _fnSelectData: function (a) {
			var b = [], c, d, e;
			if (a.nodeName)c = this.s.dt.oInstance.fnGetPosition(a), b.push(this.s.dt.aoData[c]); else if ("undefined" !== typeof a.length) {
				d = 0;
				for (e = a.length; d < e; d++)a[d].nodeName ? (c = this.s.dt.oInstance.fnGetPosition(a[d]), b.push(this.s.dt.aoData[c])) : "number" === typeof a[d] ? b.push(this.s.dt.aoData[a[d]]) : b.push(a[d])
			} else b.push(a);
			return b
		}, _fnTextConfig: function (a, b) {
			var c = this;
			null !== b.fnInit && b.fnInit.call(this, a, b);
			"" !== b.sToolTip && (a.title = b.sToolTip);
			f(a).hover(function () {
				b.fnMouseover !== null && b.fnMouseover.call(this, a, b, null)
			}, function () {
				b.fnMouseout !== null && b.fnMouseout.call(this, a, b, null)
			});
			null !== b.fnSelect && TableTools._fnEventListen(this, "select", function (d) {
				b.fnSelect.call(c, a, b, d)
			});
			f(a).click(function () {
				b.fnClick !== null && b.fnClick.call(c, a, b, null);
				b.fnComplete !== null && b.fnComplete.call(c, a, b, null, null);
				c._fnCollectionHide(a, b)
			})
		}, _fnFlashConfig: function (a, b) {
			var c = this, d = new ZeroClipboard_TableTools.Client;
			null !== b.fnInit && b.fnInit.call(this,
				a, b);
			d.setHandCursor(!0);
			"flash_save" == b.sAction ? (d.setAction("save"), d.setCharSet("utf16le" == b.sCharSet ? "UTF16LE" : "UTF8"), d.setBomInc(b.bBomInc), d.setFileName(b.sFileName.replace("*", this.fnGetTitle(b)))) : "flash_pdf" == b.sAction ? (d.setAction("pdf"), d.setFileName(b.sFileName.replace("*", this.fnGetTitle(b)))) : d.setAction("copy");
			d.addEventListener("mouseOver", function () {
				b.fnMouseover !== null && b.fnMouseover.call(c, a, b, d)
			});
			d.addEventListener("mouseOut", function () {
				b.fnMouseout !== null && b.fnMouseout.call(c,
					a, b, d)
			});
			d.addEventListener("mouseDown", function () {
				b.fnClick !== null && b.fnClick.call(c, a, b, d)
			});
			d.addEventListener("complete", function (e, f) {
				b.fnComplete !== null && b.fnComplete.call(c, a, b, d, f);
				c._fnCollectionHide(a, b)
			});
			this._fnFlashGlue(d, a, b.sToolTip)
		}, _fnFlashGlue: function (a, b, c) {
			var d = this, e = b.getAttribute("id");
			g.getElementById(e) ? a.glue(b, c) : setTimeout(function () {
				d._fnFlashGlue(a, b, c)
			}, 100)
		}, _fnFlashSetText: function (a, b) {
			var c = this._fnChunkData(b, 8192);
			a.clearText();
			for (var d = 0, e = c.length; d < e; d++)a.appendText(c[d])
		},
		_fnColumnTargets: function (a) {
			var b = [], c = this.s.dt;
			if ("object" == typeof a) {
				i = 0;
				for (iLen = c.aoColumns.length; i < iLen; i++)b.push(!1);
				i = 0;
				for (iLen = a.length; i < iLen; i++)b[a[i]] = !0
			} else if ("visible" == a) {
				i = 0;
				for (iLen = c.aoColumns.length; i < iLen; i++)b.push(c.aoColumns[i].bVisible ? !0 : !1)
			} else if ("hidden" == a) {
				i = 0;
				for (iLen = c.aoColumns.length; i < iLen; i++)b.push(c.aoColumns[i].bVisible ? !1 : !0)
			} else if ("sortable" == a) {
				i = 0;
				for (iLen = c.aoColumns.length; i < iLen; i++)b.push(c.aoColumns[i].bSortable ? !0 : !1)
			} else {
				i = 0;
				for (iLen = c.aoColumns.length; i <
					iLen; i++)b.push(!0)
			}
			return b
		}, _fnNewline: function (a) {
			return"auto" == a.sNewLine ? navigator.userAgent.match(/Windows/) ? "\r\n" : "\n" : a.sNewLine
		}, _fnGetDataTablesData: function (a) {
			var b, c, d, e, j, g = [], h = "", k = this.s.dt, o, l = RegExp(a.sFieldBoundary, "g"), n = this._fnColumnTargets(a.mColumns);
			d = "undefined" != typeof a.bSelectedOnly ? a.bSelectedOnly : !1;
			if (a.bHeader) {
				j = [];
				b = 0;
				for (c = k.aoColumns.length; b < c; b++)n[b] && (h = k.aoColumns[b].sTitle.replace(/\n/g, " ").replace(/<.*?>/g, "").replace(/^\s+|\s+$/g, ""), h = this._fnHtmlDecode(h),
					j.push(this._fnBoundData(h, a.sFieldBoundary, l)));
				g.push(j.join(a.sFieldSeperator))
			}
			var p = k.aiDisplay;
			e = this.fnGetSelected();
			if ("none" !== this.s.select.type && d && 0 !== e.length) {
				p = [];
				b = 0;
				for (c = e.length; b < c; b++)p.push(k.oInstance.fnGetPosition(e[b]))
			}
			d = 0;
			for (e = p.length; d < e; d++) {
				o = k.aoData[p[d]].nTr;
				j = [];
				b = 0;
				for (c = k.aoColumns.length; b < c; b++)n[b] && (h = k.oApi._fnGetCellData(k, p[d], b, "display"), a.fnCellRender ? h = a.fnCellRender(h, b, o, p[d]) + "" : "string" == typeof h ? (h = h.replace(/\n/g, " "), h = h.replace(/<img.*?\s+alt\s*=\s*(?:"([^"]+)"|'([^']+)'|([^\s>]+)).*?>/gi,
					"$1$2$3"), h = h.replace(/<.*?>/g, "")) : h += "", h = h.replace(/^\s+/, "").replace(/\s+$/, ""), h = this._fnHtmlDecode(h), j.push(this._fnBoundData(h, a.sFieldBoundary, l)));
				g.push(j.join(a.sFieldSeperator));
				a.bOpenRows && (b = f.grep(k.aoOpenRows, function (a) {
					return a.nParent === o
				}), 1 === b.length && (h = this._fnBoundData(f("td", b[0].nTr).html(), a.sFieldBoundary, l), g.push(h)))
			}
			if (a.bFooter && null !== k.nTFoot) {
				j = [];
				b = 0;
				for (c = k.aoColumns.length; b < c; b++)n[b] && null !== k.aoColumns[b].nTf && (h = k.aoColumns[b].nTf.innerHTML.replace(/\n/g,
					" ").replace(/<.*?>/g, ""), h = this._fnHtmlDecode(h), j.push(this._fnBoundData(h, a.sFieldBoundary, l)));
				g.push(j.join(a.sFieldSeperator))
			}
			return _sLastData = g.join(this._fnNewline(a))
		}, _fnBoundData: function (a, b, c) {
			return"" === b ? a : b + a.replace(c, b + b) + b
		}, _fnChunkData: function (a, b) {
			for (var c = [], d = a.length, e = 0; e < d; e += b)e + b < d ? c.push(a.substring(e, e + b)) : c.push(a.substring(e, d));
			return c
		}, _fnHtmlDecode: function (a) {
			if (-1 === a.indexOf("&"))return a;
			var b = g.createElement("div");
			return a.replace(/&([^\s]*);/g, function (a, d) {
				if ("#" === a.substr(1, 1))return String.fromCharCode(Number(d.substr(1)));
				b.innerHTML = a;
				return b.childNodes[0].nodeValue
			})
		}, _fnPrintStart: function (a) {
			var b = this, c = this.s.dt;
			this._fnPrintHideNodes(c.nTable);
			this.s.print.saveStart = c._iDisplayStart;
			this.s.print.saveLength = c._iDisplayLength;
			a.bShowAll && (c._iDisplayStart = 0, c._iDisplayLength = -1, c.oApi._fnCalculateEnd(c), c.oApi._fnDraw(c));
			if ("" !== c.oScroll.sX || "" !== c.oScroll.sY)this._fnPrintScrollStart(c), f(this.s.dt.nTable).bind("draw.DTTT_Print", function () {
				b._fnPrintScrollStart(c)
			});
			var d = c.aanFeatures, e;
			for (e in d)if ("i" != e && "t" != e && 1 == e.length)for (var j = 0, m = d[e].length; j < m; j++)this.dom.print.hidden.push({node: d[e][j], display: "block"}), d[e][j].style.display = "none";
			f(g.body).addClass(this.classes.print.body);
			"" !== a.sInfo && this.fnInfo(a.sInfo, 3E3);
			a.sMessage && (this.dom.print.message = g.createElement("div"), this.dom.print.message.className = this.classes.print.message, this.dom.print.message.innerHTML = a.sMessage, g.body.insertBefore(this.dom.print.message, g.body.childNodes[0]));
			this.s.print.saveScroll =
				f(n).scrollTop();
			n.scrollTo(0, 0);
			f(g).bind("keydown.DTTT", function (a) {
				if (a.keyCode == 27) {
					a.preventDefault();
					b._fnPrintEnd.call(b, a)
				}
			})
		}, _fnPrintEnd: function () {
			var a = this.s.dt, b = this.s.print, c = this.dom.print;
			this._fnPrintShowNodes();
			if ("" !== a.oScroll.sX || "" !== a.oScroll.sY)f(this.s.dt.nTable).unbind("draw.DTTT_Print"), this._fnPrintScrollEnd();
			n.scrollTo(0, b.saveScroll);
			null !== c.message && (g.body.removeChild(c.message), c.message = null);
			f(g.body).removeClass("DTTT_Print");
			a._iDisplayStart = b.saveStart;
			a._iDisplayLength =
				b.saveLength;
			a.oApi._fnCalculateEnd(a);
			a.oApi._fnDraw(a);
			f(g).unbind("keydown.DTTT")
		}, _fnPrintScrollStart: function () {
			var a = this.s.dt;
			a.nScrollHead.getElementsByTagName("div")[0].getElementsByTagName("table");
			var b = a.nTable.parentNode, c = a.nTable.getElementsByTagName("thead");
			0 < c.length && a.nTable.removeChild(c[0]);
			null !== a.nTFoot && (c = a.nTable.getElementsByTagName("tfoot"), 0 < c.length && a.nTable.removeChild(c[0]));
			c = a.nTHead.cloneNode(!0);
			a.nTable.insertBefore(c, a.nTable.childNodes[0]);
			null !== a.nTFoot &&
			(c = a.nTFoot.cloneNode(!0), a.nTable.insertBefore(c, a.nTable.childNodes[1]));
			"" !== a.oScroll.sX && (a.nTable.style.width = f(a.nTable).outerWidth() + "px", b.style.width = f(a.nTable).outerWidth() + "px", b.style.overflow = "visible");
			"" !== a.oScroll.sY && (b.style.height = f(a.nTable).outerHeight() + "px", b.style.overflow = "visible")
		}, _fnPrintScrollEnd: function () {
			var a = this.s.dt, b = a.nTable.parentNode;
			"" !== a.oScroll.sX && (b.style.width = a.oApi._fnStringToCss(a.oScroll.sX), b.style.overflow = "auto");
			"" !== a.oScroll.sY && (b.style.height =
				a.oApi._fnStringToCss(a.oScroll.sY), b.style.overflow = "auto")
		}, _fnPrintShowNodes: function () {
			for (var a = this.dom.print.hidden, b = 0, c = a.length; b < c; b++)a[b].node.style.display = a[b].display;
			a.splice(0, a.length)
		}, _fnPrintHideNodes: function (a) {
			for (var b = this.dom.print.hidden, c = a.parentNode, d = c.childNodes, e = 0, g = d.length; e < g; e++)if (d[e] != a && 1 == d[e].nodeType) {
				var m = f(d[e]).css("display");
				"none" != m && (b.push({node: d[e], display: m}), d[e].style.display = "none")
			}
			"BODY" != c.nodeName && this._fnPrintHideNodes(c)
		}};
	TableTools._aInstances =
		[];
	TableTools._aListeners = [];
	TableTools.fnGetMasters = function () {
		for (var a = [], b = 0, c = TableTools._aInstances.length; b < c; b++)TableTools._aInstances[b].s.master && a.push(TableTools._aInstances[b]);
		return a
	};
	TableTools.fnGetInstance = function (a) {
		"object" != typeof a && (a = g.getElementById(a));
		for (var b = 0, c = TableTools._aInstances.length; b < c; b++)if (TableTools._aInstances[b].s.master && TableTools._aInstances[b].dom.table == a)return TableTools._aInstances[b];
		return null
	};
	TableTools._fnEventListen = function (a, b, c) {
		TableTools._aListeners.push({that: a,
			type: b, fn: c})
	};
	TableTools._fnEventDispatch = function (a, b, c, d) {
		for (var e = TableTools._aListeners, f = 0, g = e.length; f < g; f++)a.dom.table == e[f].that.dom.table && e[f].type == b && e[f].fn(c, d)
	};
	TableTools.buttonBase = {sAction: "text", sTag: "default", sLinerTag: "default", sButtonClass: "DTTT_button_text", sButtonText: "Button text", sTitle: "", sToolTip: "", sCharSet: "utf8", bBomInc: !1, sFileName: "*.csv", sFieldBoundary: "", sFieldSeperator: "\t", sNewLine: "auto", mColumns: "all", bHeader: !0, bFooter: !0, bOpenRows: !1, bSelectedOnly: !1, fnMouseover: null,
		fnMouseout: null, fnClick: null, fnSelect: null, fnComplete: null, fnInit: null, fnCellRender: null};
	TableTools.BUTTONS = {csv: f.extend({}, TableTools.buttonBase, {sAction: "flash_save", sButtonClass: "DTTT_button_csv", sButtonText: "CSV", sFieldBoundary: '"', sFieldSeperator: ",", fnClick: function (a, b, c) {
		this.fnSetText(c, this.fnGetTableData(b))
	}}), xls: f.extend({}, TableTools.buttonBase, {sAction: "flash_save", sCharSet: "utf16le", bBomInc: !0, sButtonClass: "DTTT_button_xls", sButtonText: "Excel", fnClick: function (a, b, c) {
		this.fnSetText(c,
			this.fnGetTableData(b))
	}}), copy: f.extend({}, TableTools.buttonBase, {sAction: "flash_copy", sButtonClass: "DTTT_button_copy", sButtonText: "Copy", fnClick: function (a, b, c) {
		this.fnSetText(c, this.fnGetTableData(b))
	}, fnComplete: function (a, b, c, d) {
		a = d.split("\n").length;
		a = null === this.s.dt.nTFoot ? a - 1 : a - 2;
		this.fnInfo("<h6>Table copied</h6><p>Copied " + a + " row" + (1 == a ? "" : "s") + " to the clipboard.</p>", 1500)
	}}), pdf: f.extend({}, TableTools.buttonBase, {sAction: "flash_pdf", sNewLine: "\n", sFileName: "*.pdf", sButtonClass: "DTTT_button_pdf",
		sButtonText: "PDF", sPdfOrientation: "portrait", sPdfSize: "A4", sPdfMessage: "", fnClick: function (a, b, c) {
			this.fnSetText(c, "title:" + this.fnGetTitle(b) + "\nmessage:" + b.sPdfMessage + "\ncolWidth:" + this.fnCalcColRatios(b) + "\norientation:" + b.sPdfOrientation + "\nsize:" + b.sPdfSize + "\n--/TableToolsOpts--\n" + this.fnGetTableData(b))
		}}), print: f.extend({}, TableTools.buttonBase, {sInfo: "<h6>Print view</h6><p>Please use your browser's print function to print this table. Press escape when finished.", sMessage: null, bShowAll: !0,
		sToolTip: "View print view", sButtonClass: "DTTT_button_print", sButtonText: "Print", fnClick: function (a, b) {
			this.fnPrint(!0, b)
		}}), text: f.extend({}, TableTools.buttonBase), select: f.extend({}, TableTools.buttonBase, {sButtonText: "Select button", fnSelect: function (a) {
		0 !== this.fnGetSelected().length ? f(a).removeClass(this.classes.buttons.disabled) : f(a).addClass(this.classes.buttons.disabled)
	}, fnInit: function (a) {
		f(a).addClass(this.classes.buttons.disabled)
	}}), select_single: f.extend({}, TableTools.buttonBase, {sButtonText: "Select button",
		fnSelect: function (a) {
			1 == this.fnGetSelected().length ? f(a).removeClass(this.classes.buttons.disabled) : f(a).addClass(this.classes.buttons.disabled)
		}, fnInit: function (a) {
			f(a).addClass(this.classes.buttons.disabled)
		}}), select_all: f.extend({}, TableTools.buttonBase, {sButtonText: "Select all", fnClick: function () {
		this.fnSelectAll()
	}, fnSelect: function (a) {
		this.fnGetSelected().length == this.s.dt.fnRecordsDisplay() ? f(a).addClass(this.classes.buttons.disabled) : f(a).removeClass(this.classes.buttons.disabled)
	}}), select_none: f.extend({},
		TableTools.buttonBase, {sButtonText: "Deselect all", fnClick: function () {
			this.fnSelectNone()
		}, fnSelect: function (a) {
			0 !== this.fnGetSelected().length ? f(a).removeClass(this.classes.buttons.disabled) : f(a).addClass(this.classes.buttons.disabled)
		}, fnInit: function (a) {
			f(a).addClass(this.classes.buttons.disabled)
		}}), ajax: f.extend({}, TableTools.buttonBase, {sAjaxUrl: "/xhr.php", sButtonText: "Ajax button", fnClick: function (a, b) {
		var c = this.fnGetTableData(b);
		f.ajax({url: b.sAjaxUrl, data: [
			{name: "tableData", value: c}
		], success: b.fnAjaxComplete,
			dataType: "json", type: "POST", cache: !1, error: function () {
				alert("Error detected when sending table data to server")
			}})
	}, fnAjaxComplete: function () {
		alert("Ajax complete")
	}}), div: f.extend({}, TableTools.buttonBase, {sAction: "div", sTag: "div", sButtonClass: "DTTT_nonbutton", sButtonText: "Text button"}), collection: f.extend({}, TableTools.buttonBase, {sAction: "collection", sButtonClass: "DTTT_button_collection", sButtonText: "Collection", fnClick: function (a, b) {
		this._fnCollectionShow(a, b)
	}})};
	TableTools.classes = {container: "DTTT_container",
		buttons: {normal: "DTTT_button", disabled: "DTTT_disabled"}, collection: {container: "DTTT_collection", background: "DTTT_collection_background", buttons: {normal: "DTTT_button", disabled: "DTTT_disabled"}}, select: {table: "DTTT_selectable", row: "DTTT_selected"}, print: {body: "DTTT_Print", info: "DTTT_print_info", message: "DTTT_PrintMessage"}};
	TableTools.classes_themeroller = {container: "DTTT_container ui-buttonset ui-buttonset-multi", buttons: {normal: "DTTT_button ui-button ui-state-default"}, collection: {container: "DTTT_collection ui-buttonset ui-buttonset-multi"}};
	TableTools.DEFAULTS = {sSwfPath: "media/swf/copy_csv_xls_pdf.swf", sRowSelect: "none", sSelectedClass: null, fnPreRowSelect: null, fnRowSelected: null, fnRowDeselected: null, aButtons: ["copy", "csv", "xls", "pdf", "print"], oTags: {container: "div", button: "a", liner: "span", collection: {container: "div", button: "a", liner: "span"}}};
	TableTools.prototype.CLASS = "TableTools";
	TableTools.VERSION = "2.1.4";
	TableTools.prototype.VERSION = TableTools.VERSION;
	"function" == typeof f.fn.dataTable && "function" == typeof f.fn.dataTableExt.fnVersionCheck &&
		f.fn.dataTableExt.fnVersionCheck("1.9.0") ? f.fn.dataTableExt.aoFeatures.push({fnInit: function (a) {
		a = new TableTools(a.oInstance, "undefined" != typeof a.oInit.oTableTools ? a.oInit.oTableTools : {});
		TableTools._aInstances.push(a);
		return a.dom.container
	}, cFeature: "T", sFeature: "TableTools"}) : alert("Warning: TableTools 2 requires DataTables 1.9.0 or newer - www.datatables.net/download");
	f.fn.DataTable.TableTools = TableTools
})(jQuery, window, document);


