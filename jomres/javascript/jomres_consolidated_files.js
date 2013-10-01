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
