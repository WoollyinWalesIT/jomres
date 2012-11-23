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
jaaulde.utils.cookies = ( function()
{
	var resolveOptions, assembleOptionsString, parseCookies, constructor, defaultOptions = {
		expiresAt: null,
		path: '/',
		domain:  null,
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
	resolveOptions = function( options )
	{
		var returnValue, expireDate;

		if( typeof options !== 'object' || options === null )
		{
			returnValue = defaultOptions;
		}
		else
		{
			returnValue = {
				expiresAt: defaultOptions.expiresAt,
				path: defaultOptions.path,
				domain: defaultOptions.domain,
				secure: defaultOptions.secure
			};

			if( typeof options.expiresAt === 'object' && options.expiresAt instanceof Date )
			{
				returnValue.expiresAt = options.expiresAt;
			}
			else if( typeof options.hoursToLive === 'number' && options.hoursToLive !== 0 )
			{
				expireDate = new Date();
				expireDate.setTime( expireDate.getTime() + ( options.hoursToLive * 60 * 60 * 1000 ) );
				returnValue.expiresAt = expireDate;
			}

			if( typeof options.path === 'string' && options.path !== '' )
			{
				returnValue.path = options.path;
			}

			if( typeof options.domain === 'string' && options.domain !== '' )
			{
				returnValue.domain = options.domain;
			}

			if( options.secure === true )
			{
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
	assembleOptionsString = function( options )
	{
		options = resolveOptions( options );

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
	parseCookies = function()
	{
		var cookies = {}, i, pair, name, value, separated = document.cookie.split( ';' ), unparsedValue;
		for( i = 0; i < separated.length; i = i + 1 )
		{
			pair = separated[i].split( '=' );
			name = pair[0].replace( /^\s*/, '' ).replace( /\s*$/, '' );

			try
			{
				value = decodeURIComponent( pair[1] );
			}
			catch( e1 )
			{
				value = pair[1];
			}

			if( typeof JSON === 'object' && JSON !== null && typeof JSON.parse === 'function' )
			{
				try
				{
					unparsedValue = value;
					value = JSON.parse( value );
				}
				catch( e2 )
				{
					value = unparsedValue;
				}
			}

			cookies[name] = value;
		}
		return cookies;
	};

	constructor = function(){};

	/**
	 * get - get one, several, or all cookies
	 *
	 * @access public
	 * @paramater Mixed cookieName - String:name of single cookie; Array:list of multiple cookie names; Void (no param):if you want all cookies
	 * @return Mixed - Value of cookie as set; Null:if only one cookie is requested and is not found; Object:hash of multiple or all cookies (if multiple or all requested);
	 */
	constructor.prototype.get = function( cookieName )
	{
		var returnValue, item, cookies = parseCookies();

		if( typeof cookieName === 'string' )
		{
			returnValue = ( typeof cookies[cookieName] !== 'undefined' ) ? cookies[cookieName] : null;
		}
		else if( typeof cookieName === 'object' && cookieName !== null )
		{
			returnValue = {};
			for( item in cookieName )
			{
				if( typeof cookies[cookieName[item]] !== 'undefined' )
				{
					returnValue[cookieName[item]] = cookies[cookieName[item]];
				}
				else
				{
					returnValue[cookieName[item]] = null;
				}
			}
		}
		else
		{
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
	constructor.prototype.filter = function( cookieNameRegExp )
	{
		var cookieName, returnValue = {}, cookies = parseCookies();

		if( typeof cookieNameRegExp === 'string' )
		{
			cookieNameRegExp = new RegExp( cookieNameRegExp );
		}

		for( cookieName in cookies )
		{
			if( cookieName.match( cookieNameRegExp ) )
			{
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
	constructor.prototype.set = function( cookieName, value, options )
	{
		if( typeof options !== 'object' || options === null )
		{
			options = {};
		}

		if( typeof value === 'undefined' || value === null )
		{
			value = '';
			options.hoursToLive = -8760;
		}

		else if( typeof value !== 'string' )
		{
			if( typeof JSON === 'object' && JSON !== null && typeof JSON.stringify === 'function' )
			{
				value = JSON.stringify( value );
			}
			else
			{
				throw new Error( 'cookies.set() received non-string value and could not serialize.' );
			}
		}


		var optionsString = assembleOptionsString( options );

		document.cookie = cookieName + '=' + encodeURIComponent( value ) + optionsString;
	};
	/**
	 * del - delete a cookie (domain and path options must match those with which the cookie was set; this is really an alias for set() with parameters simplified for this use)
	 *
	 * @access public
	 * @paramater MIxed cookieName - String name of cookie to delete, or Bool true to delete all
	 * @paramater Object options - optional list of cookie options to specify ( path, domain )
	 * @return void
	 */
	constructor.prototype.del = function( cookieName, options )
	{
		var allCookies = {}, name;

		if( typeof options !== 'object' || options === null )
		{
			options = {};
		}

		if( typeof cookieName === 'boolean' && cookieName === true )
		{
			allCookies = this.get();
		}
		else if( typeof cookieName === 'string' )
		{
			allCookies[cookieName] = true;
		}

		for( name in allCookies )
		{
			if( typeof name === 'string' && name !== '' )
			{
				this.set( name, null, options );
			}
		}
	};
	/**
	 * test - test whether the browser is accepting cookies
	 *
	 * @access public
	 * @return Boolean
	 */
	constructor.prototype.test = function()
	{
		var returnValue = false, testName = 'cT', testValue = 'data';

		this.set( testName, testValue );

		if( this.get( testName ) === testValue )
		{
			this.del( testName );
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
	constructor.prototype.setOptions = function( options )
	{
		if( typeof options !== 'object' )
		{
			options = null;
		}

		defaultOptions = resolveOptions( options );
	};

	return new constructor();
} )();

( function()
{
	if( window.jQuery )
	{
		( function( $ )
		{
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
				cookify: function( options )
				{
					return this.each( function()
					{
						var i, nameAttrs = ['name', 'id'], name, $this = $( this ), value;

						for( i in nameAttrs )
						{
							if( ! isNaN( i ) )
							{
								name = $this.attr( nameAttrs[ i ] );
								if( typeof name === 'string' && name !== '' )
								{
									if( $this.is( ':checkbox, :radio' ) )
									{
										if( $this.attr( 'checked' ) )
										{
											value = $this.val();
										}
									}
									else if( $this.is( ':input' ) )
									{
										value = $this.val();
									}
									else
									{
										value = $this.html();
									}

									if( typeof value !== 'string' || value === '' )
									{
										value = null;
									}

									$.cookies.set( name, value, options );

									break;
								}
							}
						}
					} );
				},
				/**
				* $( 'selector' ).cookieFill - set the value of an input field or the innerHTML of an element from a cookie by the name or id of the field or element
				*
				* @access public
				* @return jQuery
				*/
				cookieFill: function()
				{
					return this.each( function()
					{
						var n, getN, nameAttrs = ['name', 'id'], name, $this = $( this ), value;

						getN = function()
						{
							n = nameAttrs.pop();
							return !! n;
						};

						while( getN() )
						{
							name = $this.attr( n );
							if( typeof name === 'string' && name !== '' )
							{
								value = $.cookies.get( name );
								if( value !== null )
								{
									if( $this.is( ':checkbox, :radio' ) )
									{
										if( $this.val() === value )
										{
											$this.attr( 'checked', 'checked' );
										}
										else
										{
											$this.removeAttr( 'checked' );
										}
									}
									else if( $this.is( ':input' ) )
									{
										$this.val( value );
									}
									else
									{
										$this.html( value );
									}
								}
								
								break;
							}
						}
					} );
				},
				/**
				* $( 'selector' ).cookieBind - call cookie fill on matching elements, and bind their change events to cookify()
				*
				* @access public
				* @param options OBJECT - list of cookie options to specify
				* @return jQuery
				*/
				cookieBind: function( options )
				{
					return this.each( function()
					{
						var $this = $( this );
						$this.cookieFill().change( function()
						{
							$this.cookify( options );
						} );
					} );
				}
			};

			$.each( extensions, function( i )
			{
				$.fn[i] = this;
			} );

		} )( window.jQuery );
	}
} )();

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
    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

jomresJquery.bt = {version: '0.9.5-rc1'};
;(function($) {

  jomresJquery.fn.bt = function(content, options) {

    if (typeof content != 'string') {
      var contentSelect = true;
      options = content;
      content = false;
    }
    else {
      var contentSelect = false;
    }

    if (jomresJquery.fn.hoverIntent && jomresJquery.bt.defaults.trigger == 'hover') {
      jomresJquery.bt.defaults.trigger = 'hoverIntent';
    }

    return this.each(function(index) {

      var opts = jomresJquery.extend(false, jomresJquery.bt.defaults, jomresJquery.bt.options, options);

      opts.spikeLength = numb(opts.spikeLength);
      opts.spikeGirth = numb(opts.spikeGirth);
      opts.overlap = numb(opts.overlap);

      var ajaxTimeout = false;

      if (opts.killTitle) {
        $(this).find('[title]').andSelf().each(function() {
          if (!$(this).attr('bt-xTitle')) {
            $(this).attr('bt-xTitle', $(this).attr('title')).attr('title', '');
          }
        });
      }

      if (typeof opts.trigger == 'string') {
        opts.trigger = [opts.trigger];
      }
      if (opts.trigger[0] == 'hoverIntent') {
        var hoverOpts = jomresJquery.extend(opts.hoverIntentOpts, {
          over: function() {
            this.btOn();
          },
          out: function() {
            this.btOff();
          }});
        $(this).hoverIntent(hoverOpts);

      }
      else if (opts.trigger[0] == 'hover') {
        $(this).hover(
          function() {
            this.btOn();
          },
          function() {
            this.btOff();
          }
        );
      }
      else if (opts.trigger[0] == 'now') {
        if ($(this).hasClass('bt-active')) {
          this.btOff();
        }
        else {
          this.btOn();
        }
      }
      else if (opts.trigger[0] == 'none') {
      }
      else if (opts.trigger.length > 1 && opts.trigger[0] != opts.trigger[1]) {
        $(this)
          .bind(opts.trigger[0], function() {
            this.btOn();
          })
          .bind(opts.trigger[1], function() {
            this.btOff();
          });
      }
      else {
        $(this).bind(opts.trigger[0], function() {
          if ($(this).hasClass('bt-active')) {
            this.btOff();
          }
          else {
            this.btOn();
          }
        });
      }


      this.btOn = function () {
        if (typeof $(this).data('bt-box') == 'object') {
          // if there's already a popup, remove it before creating a new one.
          this.btOff();
        }

        // trigger preBuild function
        // preBuild has no argument since the box hasn't been built yet
        opts.preBuild.apply(this);

        // turn off other tips
        $(jomresJquery.bt.vars.closeWhenOpenStack).btOff();

        // add the class to the target element (for hilighting, for example)
        // bt-active is always applied to all, but activeClass can apply another
        $(this).addClass('bt-active ' + opts.activeClass);

        if (contentSelect && opts.ajaxPath == null) {
          // bizarre, I know
          if (opts.killTitle) {
            // if we've killed the title attribute, it's been stored in 'bt-xTitle' so get it..
            $(this).attr('title', $(this).attr('bt-xTitle'));
          }
          // then evaluate the selector... title is now in place
          content = $.isFunction(opts.contentSelector) ? opts.contentSelector.apply(this) : eval(opts.contentSelector);
          if (opts.killTitle) {
            // now remove the title again, so we don't get double tips
            $(this).attr('title', '');
          }
        }

        if (opts.ajaxPath != null && content == false) {
          if (typeof opts.ajaxPath == 'object') {
            var url = eval(opts.ajaxPath[0]);
            url += opts.ajaxPath[1] ? ' ' + opts.ajaxPath[1] : '';
          }
          else {
            var url = opts.ajaxPath;
          }
          var off = url.indexOf(" ");
          if ( off >= 0 ) {
            var selector = url.slice(off, url.length);
            url = url.slice(0, off);
          }

          // load any data cached for the given ajax path
          var cacheData = opts.ajaxCache ? $(document.body).data('btCache-' + url.replace(/\./g, '')) : null;
          if (typeof cacheData == 'string') {
            content = selector ? $("<div/>").append(cacheData.replace(/<script(.|\s)*?\/script>/g, "")).find(selector) : cacheData;
          }
          else {
            var target = this;

            // set up the options
            var ajaxOpts = jomresJquery.extend(false,
            {
              type: opts.ajaxType,
              data: opts.ajaxData,
              cache: opts.ajaxCache,
              url: url,
              complete: function(XMLHttpRequest, textStatus) {
                if (textStatus == 'success' || textStatus == 'notmodified') {
                  if (opts.ajaxCache) {
                    $(document.body).data('btCache-' + url.replace(/\./g, ''), XMLHttpRequest.responseText);
                  }
                  ajaxTimeout = false;
                  content = selector ?
                    // Create a dummy div to hold the results
                    $("<div/>")
                      // inject the contents of the document in, removing the scripts
                      // to avoid any 'Permission Denied' errors in IE
                      .append(XMLHttpRequest.responseText.replace(/<script(.|\s)*?\/script>/g, ""))

                      // Locate the specified elements
                      .find(selector) :

                    // If not, just inject the full result
                    XMLHttpRequest.responseText;

                }
                else {
                  if (textStatus == 'timeout') {
                    // if there was a timeout, we don't cache the result
                    ajaxTimeout = true;
                  }
                  content = opts.ajaxError.replace(/%error/g, XMLHttpRequest.statusText);
                }
                if ($(target).hasClass('bt-active')) {
                  target.btOn();
                }
              }
            }, opts.ajaxOpts);
            jomresJquery.ajax(ajaxOpts);

            content = opts.ajaxLoading;
          }
        }


        var shadowMarginX = 0; // extra added to width to compensate for shadow
        var shadowMarginY = 0; // extra added to height
        var shadowShiftX = 0;  // amount to shift the tip horizontally to allow for shadow
        var shadowShiftY = 0;  // amount to shift vertical

        if (opts.shadow && !shadowSupport()) {
          opts.shadow = false;
          jomresJquery.extend(opts, opts.noShadowOpts);
        }

        if (opts.shadow) {
          if (opts.shadowBlur > Math.abs(opts.shadowOffsetX)) {
            shadowMarginX = opts.shadowBlur * 2;
          }
          else {
            shadowMarginX = opts.shadowBlur + Math.abs(opts.shadowOffsetX);
          }
          shadowShiftX = (opts.shadowBlur - opts.shadowOffsetX) > 0 ? opts.shadowBlur - opts.shadowOffsetX : 0;

          // now vertical
          if (opts.shadowBlur > Math.abs(opts.shadowOffsetY)) {
            shadowMarginY = opts.shadowBlur * 2;
          }
          else {
            shadowMarginY = opts.shadowBlur + Math.abs(opts.shadowOffsetY);
          }
          shadowShiftY = (opts.shadowBlur - opts.shadowOffsetY) > 0 ? opts.shadowBlur - opts.shadowOffsetY : 0;
        }

        if (opts.offsetParent){
          // if offsetParent is defined by user
          var offsetParent = $(opts.offsetParent);
          var offsetParentPos = offsetParent.offset();
          var pos = $(this).offset();
          var top = numb(pos.top) - numb(offsetParentPos.top) + numb($(this).css('margin-top')) - shadowShiftY; // IE can return 'auto' for margins
          var left = numb(pos.left) - numb(offsetParentPos.left) + numb($(this).css('margin-left')) - shadowShiftX;
        }
        else {
          // if the target element is absolutely positioned, use its parent's offsetParent instead of its own
          var offsetParent = ($(this).css('position') == 'absolute') ? $(this).parents().eq(0).offsetParent() : $(this).offsetParent();
          var pos = $(this).btPosition();
          var top = numb(pos.top) + numb($(this).css('margin-top')) - shadowShiftY; // IE can return 'auto' for margins
          var left = numb(pos.left) + numb($(this).css('margin-left')) - shadowShiftX;
        }

        var width = $(this).btOuterWidth();
        var height = $(this).outerHeight();

        if (typeof content == 'object') {
          // if content is a DOM object (as opposed to text)
          // use a clone, rather than removing the original element
          // and ensure that it's visible
          var original = content;
          var clone = $(original).clone(true).show();
          // also store a reference to the original object in the clone data
          // and a reference to the clone in the original
          var origClones = $(original).data('bt-clones') || [];
          origClones.push(clone);
          $(original).data('bt-clones', origClones);
          $(clone).data('bt-orig', original);
          $(this).data('bt-content-orig', {original: original, clone: clone});
          content = clone;
        }
        if (typeof content == 'null' || content == '') {
          // if content is empty, bail out...
          return;
        }

        // create the tip content div, populate it, and style it
        var $text = $('<div class="bt-content"></div>').append(content).css({padding: opts.padding, position: 'absolute', width: (opts.shrinkToFit ? 'auto' : opts.width), zIndex: opts.textzIndex, left: shadowShiftX, top: shadowShiftY}).css(opts.cssStyles);
        // create the wrapping box which contains text and canvas
        // put the content in it, style it, and append it to the same offset parent as the target
        var $box = $('<div class="bt-wrapper"></div>').append($text).addClass(opts.cssClass).css({position: 'absolute', width: opts.width, zIndex: opts.wrapperzIndex, visibility:'hidden'}).appendTo(offsetParent);

        // use bgiframe to get around z-index problems in IE6
        // http://plugins.jquery.com/project/bgiframe
        if (jomresJquery.fn.bgiframe) {
          $text.bgiframe();
          $box.bgiframe();
        }

        $(this).data('bt-box', $box);

        // see if the text box will fit in the various positions
        var scrollTop = numb($(document).scrollTop());
        var scrollLeft = numb($(document).scrollLeft());
        var docWidth = numb($(window).width());
        var docHeight = numb($(window).height());
        var winRight = scrollLeft + docWidth;
        var winBottom = scrollTop + docHeight;
        var space = new Object();
        var thisOffset = $(this).offset();
        space.top = thisOffset.top - scrollTop;
        space.bottom = docHeight - ((thisOffset + height) - scrollTop);
        space.left = thisOffset.left - scrollLeft;
        space.right = docWidth - ((thisOffset.left + width) - scrollLeft);
        var textOutHeight = numb($text.outerHeight());
        var textOutWidth = numb($text.btOuterWidth());
        if (opts.positions.constructor == String) {
          opts.positions = opts.positions.replace(/ /, '').split(',');
        }
        if (opts.positions[0] == 'most') {
          // figure out which is the largest
          var position = 'top'; // prime the pump
          for (var pig in space) {  //            <-------  pigs in space!
            position = space[pig] > space[position] ? pig : position;
          }
        }
        else {
          for (var x in opts.positions) {
            var position = opts.positions[x];
            // @todo: acommodate shadow space in the following lines...
            if ((position == 'left' || position == 'right') && space[position] > textOutWidth + opts.spikeLength) {
              break;
            }
            else if ((position == 'top' || position == 'bottom') && space[position] > textOutHeight + opts.spikeLength) {
              break;
            }
          }
        }

        // horizontal (left) offset for the box
        var horiz = left + ((width - textOutWidth) * .5);
        // vertical (top) offset for the box
        var vert = top + ((height - textOutHeight) * .5);
        var points = new Array();
        var textTop, textLeft, textRight, textBottom, textTopSpace, textBottomSpace, textLeftSpace, textRightSpace, crossPoint, textCenter, spikePoint;

        // Yes, yes, this next bit really could use to be condensed
        // each switch case is basically doing the same thing in slightly different ways
        switch(position) {

          // =================== TOP =======================
          case 'top':
            // spike on bottom
            $text.css('margin-bottom', opts.spikeLength + 'px');
            $box.css({top: (top - $text.outerHeight(true)) + opts.overlap, left: horiz});
            // move text left/right if extends out of window
            textRightSpace = (winRight - opts.windowMargin) - ($text.offset().left + $text.btOuterWidth(true));
            var xShift = shadowShiftX;
            if (textRightSpace < 0) {
              // shift it left
              $box.css('left', (numb($box.css('left')) + textRightSpace) + 'px');
              xShift -= textRightSpace;
            }
            // we test left space second to ensure that left of box is visible
            textLeftSpace = ($text.offset().left + numb($text.css('margin-left'))) - (scrollLeft + opts.windowMargin);
            if (textLeftSpace < 0) {
              // shift it right
              $box.css('left', (numb($box.css('left')) - textLeftSpace) + 'px');
              xShift += textLeftSpace;
            }
            textTop = $text.btPosition().top + numb($text.css('margin-top'));
            textLeft = $text.btPosition().left + numb($text.css('margin-left'));
            textRight = textLeft + $text.btOuterWidth();
            textBottom = textTop + $text.outerHeight();
            textCenter = {x: textLeft + ($text.btOuterWidth()*opts.centerPointX), y: textTop + ($text.outerHeight()*opts.centerPointY)};
            // points[points.length] = {x: x, y: y};
            points[points.length] = spikePoint = {y: textBottom + opts.spikeLength, x: ((textRight-textLeft) * .5) + xShift, type: 'spike'};
            crossPoint = findIntersectX(spikePoint.x, spikePoint.y, textCenter.x, textCenter.y, textBottom);
            // make sure that the crossPoint is not outside of text box boundaries
            crossPoint.x = crossPoint.x < textLeft + opts.spikeGirth/2 + opts.cornerRadius ? textLeft + opts.spikeGirth/2 + opts.cornerRadius : crossPoint.x;
            crossPoint.x =  crossPoint.x > (textRight - opts.spikeGirth/2) - opts.cornerRadius ? (textRight - opts.spikeGirth/2) - opts.CornerRadius : crossPoint.x;
            points[points.length] = {x: crossPoint.x - (opts.spikeGirth/2), y: textBottom, type: 'join'};
            points[points.length] = {x: textLeft, y: textBottom, type: 'corner'};  // left bottom corner
            points[points.length] = {x: textLeft, y: textTop, type: 'corner'};     // left top corner
            points[points.length] = {x: textRight, y: textTop, type: 'corner'};    // right top corner
            points[points.length] = {x: textRight, y: textBottom, type: 'corner'}; // right bottom corner
            points[points.length] = {x: crossPoint.x + (opts.spikeGirth/2), y: textBottom, type: 'join'};
            points[points.length] = spikePoint;
            break;

          // =================== LEFT =======================
          case 'left':
            // spike on right
            $text.css('margin-right', opts.spikeLength + 'px');
            $box.css({top: vert + 'px', left: ((left - $text.btOuterWidth(true)) + opts.overlap) + 'px'});
            // move text up/down if extends out of window
            textBottomSpace = (winBottom - opts.windowMargin) - ($text.offset().top + $text.outerHeight(true));
            var yShift = shadowShiftY;
            if (textBottomSpace < 0) {
              // shift it up
              $box.css('top', (numb($box.css('top')) + textBottomSpace) + 'px');
              yShift -= textBottomSpace;
            }
            // we ensure top space second to ensure that top of box is visible
            textTopSpace = ($text.offset().top + numb($text.css('margin-top'))) - (scrollTop + opts.windowMargin);
            if (textTopSpace < 0) {
              // shift it down
              $box.css('top', (numb($box.css('top')) - textTopSpace) + 'px');
              yShift += textTopSpace;
            }
            textTop = $text.btPosition().top + numb($text.css('margin-top'));
            textLeft = $text.btPosition().left + numb($text.css('margin-left'));
            textRight = textLeft + $text.btOuterWidth();
            textBottom = textTop + $text.outerHeight();
            textCenter = {x: textLeft + ($text.btOuterWidth()*opts.centerPointX), y: textTop + ($text.outerHeight()*opts.centerPointY)};
            points[points.length] = spikePoint = {x: textRight + opts.spikeLength, y: ((textBottom-textTop) * .5) + yShift, type: 'spike'};
            crossPoint = findIntersectY(spikePoint.x, spikePoint.y, textCenter.x, textCenter.y, textRight);
            // make sure that the crossPoint is not outside of text box boundaries
            crossPoint.y = crossPoint.y < textTop + opts.spikeGirth/2 + opts.cornerRadius ? textTop + opts.spikeGirth/2 + opts.cornerRadius : crossPoint.y;
            crossPoint.y =  crossPoint.y > (textBottom - opts.spikeGirth/2) - opts.cornerRadius ? (textBottom - opts.spikeGirth/2) - opts.cornerRadius : crossPoint.y;
            points[points.length] = {x: textRight, y: crossPoint.y + opts.spikeGirth/2, type: 'join'};
            points[points.length] = {x: textRight, y: textBottom, type: 'corner'}; // right bottom corner
            points[points.length] = {x: textLeft, y: textBottom, type: 'corner'};  // left bottom corner
            points[points.length] = {x: textLeft, y: textTop, type: 'corner'};     // left top corner
            points[points.length] = {x: textRight, y: textTop, type: 'corner'};    // right top corner
            points[points.length] = {x: textRight, y: crossPoint.y - opts.spikeGirth/2, type: 'join'};
            points[points.length] = spikePoint;
            break;

          // =================== BOTTOM =======================
          case 'bottom':
            // spike on top
            $text.css('margin-top', opts.spikeLength + 'px');
            $box.css({top: (top + height) - opts.overlap, left: horiz});
            // move text up/down if extends out of window
            textRightSpace = (winRight - opts.windowMargin) - ($text.offset().left + $text.btOuterWidth(true));
            var xShift = shadowShiftX;
            if (textRightSpace < 0) {
              // shift it left
              $box.css('left', (numb($box.css('left')) + textRightSpace) + 'px');
              xShift -= textRightSpace;
            }
            // we ensure left space second to ensure that left of box is visible
            textLeftSpace = ($text.offset().left + numb($text.css('margin-left')))  - (scrollLeft + opts.windowMargin);
            if (textLeftSpace < 0) {
              // shift it right
              $box.css('left', (numb($box.css('left')) - textLeftSpace) + 'px');
              xShift += textLeftSpace;
            }
            textTop = $text.btPosition().top + numb($text.css('margin-top'));
            textLeft = $text.btPosition().left + numb($text.css('margin-left'));
            textRight = textLeft + $text.btOuterWidth();
            textBottom = textTop + $text.outerHeight();
            textCenter = {x: textLeft + ($text.btOuterWidth()*opts.centerPointX), y: textTop + ($text.outerHeight()*opts.centerPointY)};
            points[points.length] = spikePoint = {x: ((textRight-textLeft) * .5) + xShift, y: shadowShiftY, type: 'spike'};
            crossPoint = findIntersectX(spikePoint.x, spikePoint.y, textCenter.x, textCenter.y, textTop);
            // make sure that the crossPoint is not outside of text box boundaries
            crossPoint.x = crossPoint.x < textLeft + opts.spikeGirth/2 + opts.cornerRadius ? textLeft + opts.spikeGirth/2 + opts.cornerRadius : crossPoint.x;
            crossPoint.x =  crossPoint.x > (textRight - opts.spikeGirth/2) - opts.cornerRadius ? (textRight - opts.spikeGirth/2) - opts.cornerRadius : crossPoint.x;
            points[points.length] = {x: crossPoint.x + opts.spikeGirth/2, y: textTop, type: 'join'};
            points[points.length] = {x: textRight, y: textTop, type: 'corner'};    // right top corner
            points[points.length] = {x: textRight, y: textBottom, type: 'corner'}; // right bottom corner
            points[points.length] = {x: textLeft, y: textBottom, type: 'corner'};  // left bottom corner
            points[points.length] = {x: textLeft, y: textTop, type: 'corner'};     // left top corner
            points[points.length] = {x: crossPoint.x - (opts.spikeGirth/2), y: textTop, type: 'join'};
            points[points.length] = spikePoint;
            break;

          // =================== RIGHT =======================
          case 'right':
            // spike on left
            $text.css('margin-left', (opts.spikeLength + 'px'));
            $box.css({top: vert + 'px', left: ((left + width) - opts.overlap) + 'px'});
            // move text up/down if extends out of window
            textBottomSpace = (winBottom - opts.windowMargin) - ($text.offset().top + $text.outerHeight(true));
            var yShift = shadowShiftY;
            if (textBottomSpace < 0) {
              // shift it up
              $box.css('top', (numb($box.css('top')) + textBottomSpace) + 'px');
              yShift -= textBottomSpace;
            }
            // we ensure top space second to ensure that top of box is visible
            textTopSpace = ($text.offset().top + numb($text.css('margin-top'))) - (scrollTop + opts.windowMargin);
            if (textTopSpace < 0) {
              // shift it down
              $box.css('top', (numb($box.css('top')) - textTopSpace) + 'px');
              yShift += textTopSpace;
            }
            textTop = $text.btPosition().top + numb($text.css('margin-top'));
            textLeft = $text.btPosition().left + numb($text.css('margin-left'));
            textRight = textLeft + $text.btOuterWidth();
            textBottom = textTop + $text.outerHeight();
            textCenter = {x: textLeft + ($text.btOuterWidth()*opts.centerPointX), y: textTop + ($text.outerHeight()*opts.centerPointY)};
            points[points.length] = spikePoint = {x: shadowShiftX, y: ((textBottom-textTop) * .5) + yShift, type: 'spike'};
            crossPoint = findIntersectY(spikePoint.x, spikePoint.y, textCenter.x, textCenter.y, textLeft);
            // make sure that the crossPoint is not outside of text box boundaries
            crossPoint.y = crossPoint.y < textTop + opts.spikeGirth/2 + opts.cornerRadius ? textTop + opts.spikeGirth/2 + opts.cornerRadius : crossPoint.y;
            crossPoint.y =  crossPoint.y > (textBottom - opts.spikeGirth/2) - opts.cornerRadius ? (textBottom - opts.spikeGirth/2) - opts.cornerRadius : crossPoint.y;
            points[points.length] = {x: textLeft, y: crossPoint.y - opts.spikeGirth/2, type: 'join'};
            points[points.length] = {x: textLeft, y: textTop, type: 'corner'};     // left top corner
            points[points.length] = {x: textRight, y: textTop, type: 'corner'};    // right top corner
            points[points.length] = {x: textRight, y: textBottom, type: 'corner'}; // right bottom corner
            points[points.length] = {x: textLeft, y: textBottom, type: 'corner'};  // left bottom corner
            points[points.length] = {x: textLeft, y: crossPoint.y + opts.spikeGirth/2, type: 'join'};
            points[points.length] = spikePoint;
            break;
        } // </ switch >

        var canvas = document.createElement('canvas');
        $(canvas).attr('width', (numb($text.btOuterWidth(true)) + opts.strokeWidth*2 + shadowMarginX)).attr('height', (numb($text.outerHeight(true)) + opts.strokeWidth*2 + shadowMarginY)).appendTo($box).css({position: 'absolute', zIndex: opts.boxzIndex});


        // if excanvas is set up, we need to initialize the new canvas element
        if (typeof G_vmlCanvasManager != 'undefined') {
          canvas = G_vmlCanvasManager.initElement(canvas);
        }

        if (opts.cornerRadius > 0) {
          // round the corners!
          var newPoints = new Array();
          var newPoint;
          for (var i=0; i<points.length; i++) {
            if (points[i].type == 'corner') {
              // create two new arc points
              // find point between this and previous (using modulo in case of ending)
              newPoint = betweenPoint(points[i], points[(i-1)%points.length], opts.cornerRadius);
              newPoint.type = 'arcStart';
              newPoints[newPoints.length] = newPoint;
              // the original corner point
              newPoints[newPoints.length] = points[i];
              // find point between this and next
              newPoint = betweenPoint(points[i], points[(i+1)%points.length], opts.cornerRadius);
              newPoint.type = 'arcEnd';
              newPoints[newPoints.length] = newPoint;
            }
            else {
              newPoints[newPoints.length] = points[i];
            }
          }
          // overwrite points with new version
          points = newPoints;
        }

        var ctx = canvas.getContext("2d");

        if (opts.shadow && opts.shadowOverlap !== true) {

          var shadowOverlap = numb(opts.shadowOverlap);

          // keep the shadow (and canvas) from overlapping the target element
          switch (position) {
            case 'top':
              if (opts.shadowOffsetX + opts.shadowBlur - shadowOverlap > 0) {
                $box.css('top', (numb($box.css('top')) - (opts.shadowOffsetX + opts.shadowBlur - shadowOverlap)));
              }
              break;
            case 'right':
              if (shadowShiftX - shadowOverlap > 0) {
                $box.css('left', (numb($box.css('left')) + shadowShiftX - shadowOverlap));
              }
              break;
            case 'bottom':
              if (shadowShiftY - shadowOverlap > 0) {
                $box.css('top', (numb($box.css('top')) + shadowShiftY - shadowOverlap));
              }
              break;
            case 'left':
              if (opts.shadowOffsetY + opts.shadowBlur - shadowOverlap > 0) {
                $box.css('left', (numb($box.css('left')) - (opts.shadowOffsetY + opts.shadowBlur - shadowOverlap)));
              }
              break;
          }
        }

        drawIt.apply(ctx, [points], opts.strokeWidth);
        ctx.fillStyle = opts.fill;
        if (opts.shadow) {
          ctx.shadowOffsetX = opts.shadowOffsetX;
          ctx.shadowOffsetY = opts.shadowOffsetY;
          ctx.shadowBlur = opts.shadowBlur;
          ctx.shadowColor =  opts.shadowColor;
        }
        ctx.closePath();
        ctx.fill();
        if (opts.strokeWidth > 0) {
          ctx.shadowColor = 'rgba(0, 0, 0, 0)'; //remove shadow from stroke
          ctx.lineWidth = opts.strokeWidth;
          ctx.strokeStyle = opts.strokeStyle;
          ctx.beginPath();
          drawIt.apply(ctx, [points], opts.strokeWidth);
          ctx.closePath();
          ctx.stroke();
        }

        // trigger preShow function
        // function receives the box element (the balloon wrapper div) as an argument
        opts.preShow.apply(this, [$box[0]]);

        // switch from visibility: hidden to display: none so we can run animations
        $box.css({display:'none', visibility: 'visible'});

        // Here's where we show the tip
        opts.showTip.apply(this, [$box[0]]);

        if (opts.overlay) {
          // EXPERIMENTAL AND FOR TESTING ONLY!!!!
          var overlay = $('<div class="bt-overlay"></div>').css({
              position: 'absolute',
              backgroundColor: 'blue',
              top: top,
              left: left,
              width: width,
              height: height,
              opacity: '.2'
            }).appendTo(offsetParent);
          $(this).data('overlay', overlay);
        }

        if ((opts.ajaxPath != null && opts.ajaxCache == false) || ajaxTimeout) {
          // if ajaxCache is not enabled or if there was a server timeout,
          // remove the content variable so it will be loaded again from server
          content = false;
        }

        // stick this element into the clickAnywhereToClose stack
        if (opts.clickAnywhereToClose) {
          jomresJquery.bt.vars.clickAnywhereStack.push(this);
          $(document).click(jomresJquery.bt.docClick);
        }

        // stick this element into the closeWhenOthersOpen stack
        if (opts.closeWhenOthersOpen) {
          jomresJquery.bt.vars.closeWhenOpenStack.push(this);
        }

        // trigger postShow function
        // function receives the box element (the balloon wrapper div) as an argument
        opts.postShow.apply(this, [$box[0]]);


      }; // </ turnOn() >

      this.btOff = function() {

        var box = $(this).data('bt-box');

        // trigger preHide function
        // function receives the box element (the balloon wrapper div) as an argument
        opts.preHide.apply(this, [box]);

        var i = this;

        // set up the stuff to happen AFTER the tip is hidden
        i.btCleanup = function(){
          var box = $(i).data('bt-box');
          var contentOrig = $(i).data('bt-content-orig');
          var overlay = $(i).data('bt-overlay');
          if (typeof box == 'object') {
            $(box).remove();
            $(i).removeData('bt-box');
          }
          if (typeof contentOrig == 'object') {
            var clones = $(contentOrig.original).data('bt-clones');
            $(contentOrig).data('bt-clones', arrayRemove(clones, contentOrig.clone));
          }
          if (typeof overlay == 'object') {
            $(overlay).remove();
            $(i).removeData('bt-overlay');
          }

          // remove this from the stacks
          jomresJquery.bt.vars.clickAnywhereStack = arrayRemove(jomresJquery.bt.vars.clickAnywhereStack, i);
          jomresJquery.bt.vars.closeWhenOpenStack = arrayRemove(jomresJquery.bt.vars.closeWhenOpenStack, i);

          // remove the 'bt-active' and activeClass classes from target
          $(i).removeClass('bt-active ' + opts.activeClass);

          // trigger postHide function
          // no box argument since it has been removed from the DOM
          opts.postHide.apply(i);

        }

        opts.hideTip.apply(this, [box, i.btCleanup]);

      }; // </ turnOff() >

      var refresh = this.btRefresh = function() {
        this.btOff();
        this.btOn();
      };

    }); // </ this.each() >


    function drawIt(points, strokeWidth) {
      this.moveTo(points[0].x, points[0].y);
      for (i=1;i<points.length;i++) {
        if (points[i-1].type == 'arcStart') {
          // if we're creating a rounded corner
          //ctx.arc(round5(points[i].x), round5(points[i].y), points[i].startAngle, points[i].endAngle, opts.cornerRadius, false);
          this.quadraticCurveTo(round5(points[i].x, strokeWidth), round5(points[i].y, strokeWidth), round5(points[(i+1)%points.length].x, strokeWidth), round5(points[(i+1)%points.length].y, strokeWidth));
          i++;
          //ctx.moveTo(round5(points[i].x), round5(points[i].y));
        }
        else {
          this.lineTo(round5(points[i].x, strokeWidth), round5(points[i].y, strokeWidth));
        }
      }
    }; // </ drawIt() >

    /**
     * For odd stroke widths, round to the nearest .5 pixel to avoid antialiasing
     * http://developer.mozilla.org/en/Canvas_tutorial/Applying_styles_and_colors
     */
    function round5(num, strokeWidth) {
      var ret;
      strokeWidth = numb(strokeWidth);
      if (strokeWidth%2) {
        ret = num;
      }
      else {
        ret = Math.round(num - .5) + .5;
      }
      return ret;
    }; // </ round5() >

    /**
     * Ensure that a number is a number... or zero
     */
    function numb(num) {
      return parseInt(num) || 0;
    }; // </ numb() >

    /**
     * Remove an element from an array
     */
    function arrayRemove(arr, elem) {
      var x, newArr = new Array();
      for (x in arr) {
        if (arr[x] != elem) {
          newArr.push(arr[x]);
        }
      }
      return newArr;
    }; // </ arrayRemove() >

    /**
     * Does the current browser support canvas?
     * This is a variation of http://code.google.com/p/browser-canvas-support/
     */
    function canvasSupport() {
      var canvas_compatible = false;
      try {
        canvas_compatible = !!(document.createElement('canvas').getContext('2d')); // S60
      } catch(e) {
        canvas_compatible = !!(document.createElement('canvas').getContext); // IE
      }
      return canvas_compatible;
    }

    /**
     * Does the current browser support canvas drop shadows?
     */
    function shadowSupport() {

      // to test for drop shadow support in the current browser, uncomment the next line
      // return true;

      // until a good feature-detect is found, we have to look at user agents
      try {
        var userAgent = navigator.userAgent.toLowerCase();
        if (/webkit/.test(userAgent)) {
          // WebKit.. let's go!
          return true;
        }
        else if (/gecko|mozilla/.test(userAgent) && parseFloat(userAgent.match(/firefox\/(\d+(?:\.\d+)+)/)[1]) >= 3.1){
          // Mozilla 3.1 or higher
          return true;
        }
      }
      catch(err) {
        // if there's an error, just keep going, we'll assume that drop shadows are not supported
      }

      return false;

    } // </ shadowSupport() >

    /**
     * Given two points, find a point which is dist pixels from point1 on a line to point2
     */
    function betweenPoint(point1, point2, dist) {
      // figure out if we're horizontal or vertical
      var y, x;
      if (point1.x == point2.x) {
        // vertical
        y = point1.y < point2.y ? point1.y + dist : point1.y - dist;
        return {x: point1.x, y: y};
      }
      else if (point1.y == point2.y) {
        // horizontal
        x = point1.x < point2.x ? point1.x + dist : point1.x - dist;
        return {x:x, y: point1.y};
      }
    }; // </ betweenPoint() >

    function centerPoint(arcStart, corner, arcEnd) {
      var x = corner.x == arcStart.x ? arcEnd.x : arcStart.x;
      var y = corner.y == arcStart.y ? arcEnd.y : arcStart.y;
      var startAngle, endAngle;
      if (arcStart.x < arcEnd.x) {
        if (arcStart.y > arcEnd.y) {
          // arc is on upper left
          startAngle = (Math.PI/180)*180;
          endAngle = (Math.PI/180)*90;
        }
        else {
          // arc is on upper right
          startAngle = (Math.PI/180)*90;
          endAngle = 0;
        }
      }
      else {
        if (arcStart.y > arcEnd.y) {
          // arc is on lower left
          startAngle = (Math.PI/180)*270;
          endAngle = (Math.PI/180)*180;
        }
        else {
          // arc is on lower right
          startAngle = 0;
          endAngle = (Math.PI/180)*270;
        }
      }
      return {x: x, y: y, type: 'center', startAngle: startAngle, endAngle: endAngle};
    }; // </ centerPoint() >

    /**
     * Find the intersection point of two lines, each defined by two points
     * arguments are x1, y1 and x2, y2 for r1 (line 1) and r2 (line 2)
     * It's like an algebra party!!!
     */
    function findIntersect(r1x1, r1y1, r1x2, r1y2, r2x1, r2y1, r2x2, r2y2) {

      if (r2x1 == r2x2) {
        return findIntersectY(r1x1, r1y1, r1x2, r1y2, r2x1);
      }
      if (r2y1 == r2y2) {
        return findIntersectX(r1x1, r1y1, r1x2, r1y2, r2y1);
      }

      // m = (y1 - y2) / (x1 - x2)  // <-- how to find the slope
      // y = mx + b                 // the 'classic' linear equation
      // b = y - mx                 // how to find b (the y-intersect)
      // x = (y - b)/m              // how to find x
      var r1m = (r1y1 - r1y2) / (r1x1 - r1x2);
      var r1b = r1y1 - (r1m * r1x1);
      var r2m = (r2y1 - r2y2) / (r2x1 - r2x2);
      var r2b = r2y1 - (r2m * r2x1);

      var x = (r2b - r1b) / (r1m - r2m);
      var y = r1m * x + r1b;

      return {x: x, y: y};
    }; // </ findIntersect() >

    /**
     * Find the y intersection point of a line and given x vertical
     */
    function findIntersectY(r1x1, r1y1, r1x2, r1y2, x) {
      if (r1y1 == r1y2) {
        return {x: x, y: r1y1};
      }
      var r1m = (r1y1 - r1y2) / (r1x1 - r1x2);
      var r1b = r1y1 - (r1m * r1x1);

      var y = r1m * x + r1b;

      return {x: x, y: y};
    }; // </ findIntersectY() >

    /**
     * Find the x intersection point of a line and given y horizontal
     */
    function findIntersectX(r1x1, r1y1, r1x2, r1y2, y) {
      if (r1x1 == r1x2) {
        return {x: r1x1, y: y};
      }
      var r1m = (r1y1 - r1y2) / (r1x1 - r1x2);
      var r1b = r1y1 - (r1m * r1x1);

      // y = mx + b     // your old friend, linear equation
      // x = (y - b)/m  // linear equation solved for x
      var x = (y - r1b) / r1m;

      return {x: x, y: y};

    }; // </ findIntersectX() >

  }; // </ jomresJquery.fn.bt() >

  /**
   * jomresJquery's compat.js (used in Drupal's jomresJquery upgrade module, overrides the $().position() function
   *  this is a copy of that function to allow the plugin to work when compat.js is present
   *  once compat.js is fixed to not override existing functions, this function can be removed
   *  and .btPosion() can be replaced with .position() above...
   */
  jomresJquery.fn.btPosition = function() {

    function num(elem, prop) {
      return elem[0] && parseInt( jomresJquery.curCSS(elem[0], prop, true), 10 ) || 0;
    };

    var left = 0, top = 0, results;

    if ( this[0] ) {
      // Get *real* offsetParent
      var offsetParent = this.offsetParent(),

      // Get correct offsets
      offset       = this.offset(),
      parentOffset = /^body|html$/i.test(offsetParent[0].tagName) ? { top: 0, left: 0 } : offsetParent.offset();

      // Subtract element margins
      // note: when an element has margin: auto the offsetLeft and marginLeft
      // are the same in Safari causing offset.left to incorrectly be 0
      offset.top  -= num( this, 'marginTop' );
      offset.left -= num( this, 'marginLeft' );

      // Add offsetParent borders
      parentOffset.top  += num( offsetParent, 'borderTopWidth' );
      parentOffset.left += num( offsetParent, 'borderLeftWidth' );

      // Subtract the two offsets
      results = {
        top:  offset.top  - parentOffset.top,
        left: offset.left - parentOffset.left
      };
    }

    return results;
  }; // </ jomresJquery.fn.btPosition() >


  /**
  * jomresJquery's dimensions.js overrides the $().btOuterWidth() function
  *  this is a copy of original jomresJquery's outerWidth() function to
  *  allow the plugin to work when dimensions.js is present
  */
  jomresJquery.fn.btOuterWidth = function(margin) {

      function num(elem, prop) {
          return elem[0] && parseInt(jomresJquery.curCSS(elem[0], prop, true), 10) || 0;
      };

      return this["innerWidth"]()
      + num(this, "borderLeftWidth")
      + num(this, "borderRightWidth")
      + (margin ? num(this, "marginLeft")
      + num(this, "marginRight") : 0);

  }; // </ jomresJquery.fn.btOuterWidth() >

  /**
   * A convenience function to run btOn() (if available)
   * for each selected item
   */
  jomresJquery.fn.btOn = function() {
    return this.each(function(index){
      if (jomresJquery.isFunction(this.btOn)) {
        this.btOn();
      }
    });
  }; // </ $().btOn() >

  /**
   *
   * A convenience function to run btOff() (if available)
   * for each selected item
   */
  jomresJquery.fn.btOff = function() {
    return this.each(function(index){
      if (jomresJquery.isFunction(this.btOff)) {
        this.btOff();
      }
    });
  }; // </ $().btOff() >

  jomresJquery.bt.vars = {clickAnywhereStack: [], closeWhenOpenStack: []};

  /**
   * This function gets bound to the document's click event
   * It turns off all of the tips in the click-anywhere-to-close stack
   */
  jomresJquery.bt.docClick = function(e) {
    if (!e) {
      var e = window.event;
    };
    // if clicked element is a child of neither a tip NOR a target
    // and there are tips in the stack
    if (!$(e.target).parents().andSelf().filter('.bt-wrapper, .bt-active').length && jomresJquery.bt.vars.clickAnywhereStack.length) {
      // if clicked element isn't inside tip, close tips in stack
      $(jomresJquery.bt.vars.clickAnywhereStack).btOff();
      $(document).unbind('click', jomresJquery.bt.docClick);
    }
  }; // </ docClick() >

  /**
   * Defaults for the beauty tips
   *
   * Note this is a variable definition and not a function. So defaults can be
   * written for an entire page by simply redefining attributes like so:
   *
   *   jomresJquery.bt.options.width = 400;
   *
   * Be sure to use *jomresJquery.bt.options* and not jomresJquery.bt.defaults when overriding
   *
   * This would make all Beauty Tips boxes 400px wide.
   *
   * Each of these options may also be overridden during
   *
   * Can be overriden globally or at time of call.
   *
   */
  jomresJquery.bt.defaults = {
    trigger:         'hover',                // trigger to show/hide tip
                                             // use [on, off] to define separate on/off triggers
                                             // also use space character to allow multiple  to trigger
                                             // examples:
                                             //   ['focus', 'blur'] // focus displays, blur hides
                                             //   'dblclick'        // dblclick toggles on/off
                                             //   ['focus mouseover', 'blur mouseout'] // multiple triggers
                                             //   'now'             // shows/hides tip without event
                                             //   'none'            // use $('#selector').btOn(); and ...btOff();
                                             //   'hoverIntent'     // hover using hoverIntent plugin (settings below)
                                             // note:
                                             //   hoverIntent becomes default if available

    clickAnywhereToClose: true,              // clicking anywhere outside of the tip will close it
    closeWhenOthersOpen: false,              // tip will be closed before another opens - stop >= 2 tips being on

    shrinkToFit:      false,                 // should short single-line content get a narrower balloon?
    width:            '200px',               // width of tooltip box

    padding:          '10px',                // padding for content (get more fine grained with cssStyles)
    spikeGirth:       10,                    // width of spike
    spikeLength:      15,                    // length of spike
    overlap:          0,                     // spike overlap (px) onto target (can cause problems with 'hover' trigger)
    overlay:          false,                 // display overlay on target (use CSS to style) -- BUGGY!
    killTitle:        true,                  // kill title tags to avoid double tooltips

    textzIndex:       9999,                  // z-index for the text
    boxzIndex:        9998,                  // z-index for the "talk" box (should always be less than textzIndex)
    wrapperzIndex:    9997,
    offsetParent:     null,                  // DOM node to append the tooltip into.
                                             // Must be positioned relative or absolute. Can be selector or object
    positions:        ['most'],              // preference of positions for tip (will use first with available space)
                                             // possible values 'top', 'bottom', 'left', 'right' as an array in order of
                                             // preference. Last value will be used if others don't have enough space.
                                             // or use 'most' to use the area with the most space
    fill:             "rgb(255, 255, 102)",  // fill color for the tooltip box, you can use any CSS-style color definition method
                                             // http://www.w3.org/TR/css3-color/#numerical - not all methods have been tested

    windowMargin:     10,                    // space (px) to leave between text box and browser edge

    strokeWidth:      1,                     // width of stroke around box, **set to 0 for no stroke**
    strokeStyle:      "#000",                // color/alpha of stroke

    cornerRadius:     5,                     // radius of corners (px), set to 0 for square corners

                      // following values are on a scale of 0 to 1 with .5 being centered

    centerPointX:     .5,                    // the spike extends from center of the target edge to this point
    centerPointY:     .5,                    // defined by percentage horizontal (x) and vertical (y)

    shadow:           false,                 // use drop shadow? (only displays in Safari and FF 3.1) - experimental
    shadowOffsetX:    2,                     // shadow offset x (px)
    shadowOffsetY:    2,                     // shadow offset y (px)
    shadowBlur:       3,                     // shadow blur (px)
    shadowColor:      "#000",                // shadow color/alpha
    shadowOverlap:   false,                  // when shadows overlap the target element it can cause problem with hovering
                                             // set this to true to overlap or set to a numeric value to define the amount of overlap
    noShadowOpts:     {strokeStyle: '#999'},  // use this to define 'fall-back' options for browsers which don't support drop shadows

    cssClass:         '',                    // CSS class to add to the box wrapper div (of the TIP)
    cssStyles:        {},                    // styles to add the text box
                                             //   example: {fontFamily: 'Georgia, Times, serif', fontWeight: 'bold'}

    activeClass:      'bt-active',           // class added to TARGET element when its BeautyTip is active

    contentSelector:  "$(this).attr('title')", // if there is no content argument, use this selector to retrieve the title
                                             // a function which returns the content may also be passed here

    ajaxPath:         null,                  // if using ajax request for content, this contains url and (opt) selector
                                             // this will override content and contentSelector
                                             // examples (see jomresJquery load() function):
                                             //   '/demo.html'
                                             //   '/help/ajax/snip'
                                             //   '/help/existing/full div#content'

                                             // ajaxPath can also be defined as an array
                                             // in which case, the first value will be parsed as a jomresJquery selector
                                             // the result of which will be used as the ajaxPath
                                             // the second (optional) value is the content selector as above
                                             // examples:
                                             //    ["$(this).attr('href')", 'div#content']
                                             //    ["$(this).parents('.wrapper').find('.title').attr('href')"]
                                             //    ["$('#some-element').val()"]

    ajaxError:        '<strong>ERROR:</strong> <em>%error</em>',
                                             // error text, use "%error" to insert error from server
    ajaxLoading:     '<blink>Loading...</blink>',  // yes folks, it's the blink tag!
    ajaxData:         {},                    // key/value pairs
    ajaxType:         'GET',                 // 'GET' or 'POST'
    ajaxCache:        true,                  // cache ajax results and do not send request to same url multiple times
    ajaxOpts:         {},                    // any other ajax options - timeout, passwords, processing functions, etc...
                                             // see http://docs.jquery.com/Ajax/jomresJquery.ajax#options

    preBuild:         function(){},          // function to run before popup is built
    preShow:          function(box){},       // function to run before popup is displayed
    showTip:          function(box){
                        $(box).show();
                      },
    postShow:         function(box){},       // function to run after popup is built and displayed

    preHide:          function(box){},       // function to run before popup is removed
    hideTip:          function(box, callback) {
                        $(box).hide();
                        callback();   // you MUST call "callback" at the end of your animations
                      },
    postHide:         function(){},          // function to run after popup is removed

    hoverIntentOpts:  {                          // options for hoverIntent (if installed)
                        interval: 300,           // http://cherne.net/brian/resources/jquery.hoverIntent.html
                        timeout: 500
                      }

  }; // </ jomresJquery.bt.defaults >

  jomresJquery.bt.options = {};

})(jomresJquery);

// @todo
// use larger canvas (extend to edge of page when windowMargin is active)
// add options to shift position of tip vert/horiz and position of spike tip
// create drawn (canvas) shadows
// use overlay to allow overlap with hover
// experiment with making tooltip a subelement of the target
// handle non-canvas-capable browsers elegantly

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
	
	beatfunction:  function(){
	
	},
	
	timeoutobj:  {
		id: -1
	},

    set: function(options, onbeatfunction) {
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

    beat: function() {
		jomresJquery.ajax({
				url: this.options.url,
				dataType: "html",
				type: "GET",
				error: function(e)   { 
					jomresJquery('#'+ jomresJquery.jheartbeat.options.div_id).append(""); 
				},
				success: function(data){ 
					jomresJquery('#'+ jomresJquery.jheartbeat.options.div_id).html(data); 
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
(function($) {
	$.fn.hoverIntent = function(f,g) {
		// default configuration options
		var cfg = {
			sensitivity: 7,
			interval: 100,
			timeout: 0
		};
		// override configuration options with user supplied object
		cfg = $.extend(cfg, g ? { over: f, out: g } : f );

		// instantiate variables
		// cX, cY = current X and Y position of mouse, updated by mousemove event
		// pX, pY = previous X and Y position of mouse, set by mouseover and polling interval
		var cX, cY, pX, pY;

		// A private function for getting mouse position
		var track = function(ev) {
			cX = ev.pageX;
			cY = ev.pageY;
		};

		// A private function for comparing current and previous mouse position
		var compare = function(ev,ob) {
			ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
			// compare mouse positions to see if they've crossed the threshold
			if ( ( Math.abs(pX-cX) + Math.abs(pY-cY) ) < cfg.sensitivity ) {
				$(ob).unbind("mousemove",track);
				// set hoverIntent state to true (so mouseOut can be called)
				ob.hoverIntent_s = 1;
				return cfg.over.apply(ob,[ev]);
			} else {
				// set previous coordinates for next time
				pX = cX; pY = cY;
				// use self-calling timeout, guarantees intervals are spaced out properly (avoids JavaScript timer bugs)
				ob.hoverIntent_t = setTimeout( function(){compare(ev, ob);} , cfg.interval );
			}
		};

		// A private function for delaying the mouseOut function
		var delay = function(ev,ob) {
			ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
			ob.hoverIntent_s = 0;
			return cfg.out.apply(ob,[ev]);
		};

		// A private function for handling mouse 'hovering'
		var handleHover = function(e) {
			// copy objects to be passed into t (required for event object to be passed in IE)
			var ev = jQuery.extend({},e);
			var ob = this;

			// cancel hoverIntent timer if it exists
			if (ob.hoverIntent_t) { ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t); }

			// if e.type == "mouseenter"
			if (e.type == "mouseenter") {
				// set "previous" X and Y position based on initial entry point
				pX = ev.pageX; pY = ev.pageY;
				// update "current" X and Y position based on mousemove
				$(ob).bind("mousemove",track);
				// start polling interval (self-calling timeout) to compare mouse coordinates over time
				if (ob.hoverIntent_s != 1) { ob.hoverIntent_t = setTimeout( function(){compare(ev,ob);} , cfg.interval );}

			// else e.type == "mouseleave"
			} else {
				// unbind expensive mousemove event
				$(ob).unbind("mousemove",track);
				// if hoverIntent state is true, then call the mouseOut function after the specified delay
				if (ob.hoverIntent_s == 1) { ob.hoverIntent_t = setTimeout( function(){delay(ev,ob);} , cfg.timeout );}
			}
		};

		// bind the function to the two event listeners
		return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover);
	};
})(jQuery);


(function($) {
	
	// IE6 Background Image Fix
	if ($.browser.msie) try { document.execCommand("BackgroundImageCache", false, true)} catch(e) { };
	// Thanks to http://www.visualjquery.com/rating/rating_redux.html
	
	// plugin initialization
	$.fn.rating = function(options){
		if(this.length==0) return this; // quick fail
		
		// Handle API methods
		if(typeof arguments[0]=='string'){
			// Perform API methods on individual elements
			if(this.length>1){
				var args = arguments;
				return this.each(function(){
					$.fn.rating.apply($(this), args);
    });
			};
			// Invoke API method handler
			$.fn.rating[arguments[0]].apply(this, $.makeArray(arguments).slice(1) || []);
			// Quick exit...
			return this;
		};
		
		// Initialize options for this call
		var options = $.extend(
			{}/* new object */,
			$.fn.rating.options/* default options */,
			options || {} /* just-in-time options */
		);
		
		// Allow multiple controls with the same name by making each call unique
		$.fn.rating.calls++;
		
		// loop through each matched element
		this
		 .not('.star-rating-applied')
			.addClass('star-rating-applied')
		.each(function(){
			
			// Load control parameters / find context / etc
			var control, input = $(this);
			var eid = (this.name || 'unnamed-rating').replace(/\[|\]/g, '_').replace(/^\_+|\_+$/g,'');
			var context = $(this.form || document.body);
			
			// FIX: http://code.google.com/p/jquery-star-rating-plugin/issues/detail?id=23
			var raters = context.data('rating');
			if(!raters || raters.call!=$.fn.rating.calls) raters = { count:0, call:$.fn.rating.calls };
			var rater = raters[eid];
			
			// if rater is available, verify that the control still exists
			if(rater) control = rater.data('rating');
			
			if(rater && control)//{// save a byte!
				// add star to control if rater is available and the same control still exists
				control.count++;
				
			//}// save a byte!
			else{
				// create new control if first star or control element was removed/replaced
				
				// Initialize options for this raters
				control = $.extend(
					{}/* new object */,
					options || {} /* current call options */,
					($.metadata? input.metadata(): ($.meta?input.data():null)) || {}, /* metadata options */
					{ count:0, stars: [], inputs: [] }
				);
				
				// increment number of rating controls
				control.serial = raters.count++;
				
				// create rating element
				rater = $('<span class="star-rating-control"/>');
				input.before(rater);
				
				// Mark element for initialization (once all stars are ready)
				rater.addClass('rating-to-be-drawn');
				
				// Accept readOnly setting from 'disabled' property
				if(input.attr('disabled')) control.readOnly = true;
				
				// Create 'cancel' button
				rater.append(
					control.cancel = $('<div class="rating-cancel"><a title="' + control.cancel + '">' + control.cancelValue + '</a></div>')
					.mouseover(function(){
						$(this).rating('drain');
						$(this).addClass('star-rating-hover');
						//$(this).rating('focus');
					})
					.mouseout(function(){
						$(this).rating('draw');
						$(this).removeClass('star-rating-hover');
						//$(this).rating('blur');
					})
					.click(function(){
					 $(this).rating('select');
					})
					.data('rating', control)
				);
				
			}; // first element of group
			
			// insert rating star
			var star = $('<div class="star-rating rater-'+ control.serial +'"><a title="' + (this.title || this.value) + '">' + this.value + '</a></div>');
			rater.append(star);
			
			// inherit attributes from input element
			if(this.id) star.attr('id', this.id);
			if(this.className) star.addClass(this.className);
			
			// Half-stars?
			if(control.half) control.split = 2;
			
			// Prepare division control
			if(typeof control.split=='number' && control.split>0){
				var stw = ($.fn.width ? star.width() : 0) || control.starWidth;
				var spi = (control.count % control.split), spw = Math.floor(stw/control.split);
				star
				// restrict star's width and hide overflow (already in CSS)
				.width(spw)
				// move the star left by using a negative margin
				// this is work-around to IE's stupid box model (position:relative doesn't work)
				.find('a').css({ 'margin-left':'-'+ (spi*spw) +'px' })
			};
			
			// readOnly?
			if(control.readOnly)//{ //save a byte!
				// Mark star as readOnly so user can customize display
				star.addClass('star-rating-readonly');
			//}  //save a byte!
			else//{ //save a byte!
			 // Enable hover css effects
				star.addClass('star-rating-live')
				 // Attach mouse events
					.mouseover(function(){
						$(this).rating('fill');
						$(this).rating('focus');
					})
					.mouseout(function(){
						$(this).rating('draw');
						$(this).rating('blur');
					})
					.click(function(){
						$(this).rating('select');
					})
				;
			//}; //save a byte!
			
			// set current selection
			if(this.checked)	control.current = star;
			
			// hide input element
			input.hide();
			
			// backward compatibility, form element to plugin
			input.change(function(){
    $(this).rating('select');
   });
			
			// attach reference to star to input element and vice-versa
			star.data('rating.input', input.data('rating.star', star));
			
			// store control information in form (or body when form not available)
			control.stars[control.stars.length] = star[0];
			control.inputs[control.inputs.length] = input[0];
			control.rater = raters[eid] = rater;
			control.context = context;
			
			input.data('rating', control);
			rater.data('rating', control);
			star.data('rating', control);
			context.data('rating', raters);
  }); // each element
		
		// Initialize ratings (first draw)
		$('.rating-to-be-drawn').rating('draw').removeClass('rating-to-be-drawn');
		
		return this; // don't break the chain...
	};
	
	/*--------------------------------------------------------*/
	
	/*
		### Core functionality and API ###
	*/
	$.extend($.fn.rating, {
		// Used to append a unique serial number to internal control ID
		// each time the plugin is invoked so same name controls can co-exist
		calls: 0,
		
		focus: function(){
			var control = this.data('rating'); if(!control) return this;
			if(!control.focus) return this; // quick fail if not required
			// find data for event
			var input = $(this).data('rating.input') || $( this.tagName=='INPUT' ? this : null );
   // focus handler, as requested by focusdigital.co.uk
			if(control.focus) control.focus.apply(input[0], [input.val(), $('a', input.data('rating.star'))[0]]);
		}, // $.fn.rating.focus
		
		blur: function(){
			var control = this.data('rating'); if(!control) return this;
			if(!control.blur) return this; // quick fail if not required
			// find data for event
			var input = $(this).data('rating.input') || $( this.tagName=='INPUT' ? this : null );
   // blur handler, as requested by focusdigital.co.uk
			if(control.blur) control.blur.apply(input[0], [input.val(), $('a', input.data('rating.star'))[0]]);
		}, // $.fn.rating.blur
		
		fill: function(){ // fill to the current mouse position.
			var control = this.data('rating'); if(!control) return this;
			// do not execute when control is in read-only mode
			if(control.readOnly) return;
			// Reset all stars and highlight them up to this element
			this.rating('drain');
			this.prevAll().andSelf().filter('.rater-'+ control.serial).addClass('star-rating-hover');
		},// $.fn.rating.fill
		
		drain: function() { // drain all the stars.
			var control = this.data('rating'); if(!control) return this;
			// do not execute when control is in read-only mode
			if(control.readOnly) return;
			// Reset all stars
			control.rater.children().filter('.rater-'+ control.serial).removeClass('star-rating-on').removeClass('star-rating-hover');
		},// $.fn.rating.drain
		
		draw: function(){ // set value and stars to reflect current selection
			var control = this.data('rating'); if(!control) return this;
			// Clear all stars
			this.rating('drain');
			// Set control value
			if(control.current){
				control.current.data('rating.input').attr('checked','checked');
				control.current.prevAll().andSelf().filter('.rater-'+ control.serial).addClass('star-rating-on');
			}
			else
			 $(control.inputs).removeAttr('checked');
			// Show/hide 'cancel' button
			control.cancel[control.readOnly || control.required?'hide':'show']();
			// Add/remove read-only classes to remove hand pointer
			this.siblings()[control.readOnly?'addClass':'removeClass']('star-rating-readonly');
		},// $.fn.rating.draw
		
		
		
		
		
		select: function(value,wantCallBack){ // select a value
					
					// ***** MODIFICATION *****
					// Thanks to faivre.thomas - http://code.google.com/p/jquery-star-rating-plugin/issues/detail?id=27
					//
					// ***** LIST OF MODIFICATION *****
					// ***** added Parameter wantCallBack : false if you don't want a callback. true or undefined if you want postback to be performed at the end of this method'
					// ***** recursive calls to this method were like : ... .rating('select') it's now like .rating('select',undefined,wantCallBack); (parameters are set.)
					// ***** line which is calling callback
					// ***** /LIST OF MODIFICATION *****
			
			var control = this.data('rating'); if(!control) return this;
			// do not execute when control is in read-only mode
			if(control.readOnly) return;
			// clear selection
			control.current = null;
			// programmatically (based on user input)
			if(typeof value!='undefined'){
			 // select by index (0 based)
				if(typeof value=='number')
 			 return $(control.stars[value]).rating('select',undefined,wantCallBack);
				// select by literal value (must be passed as a string
				if(typeof value=='string')
					//return
					$.each(control.stars, function(){
						if($(this).data('rating.input').val()==value) $(this).rating('select',undefined,wantCallBack);
					});
			}
			else
				control.current = this[0].tagName=='INPUT' ?
				 this.data('rating.star') :
					(this.is('.rater-'+ control.serial) ? this : null);

			// Update rating control state
			this.data('rating', control);
			// Update display
			this.rating('draw');
			// find data for event
			var input = $( control.current ? control.current.data('rating.input') : null );
			// click callback, as requested here: http://plugins.jquery.com/node/1655
					
					// **** MODIFICATION *****
					// Thanks to faivre.thomas - http://code.google.com/p/jquery-star-rating-plugin/issues/detail?id=27
					//
					//old line doing the callback :
					//if(control.callback) control.callback.apply(input[0], [input.val(), $('a', control.current)[0]]);// callback event
					//
					//new line doing the callback (if i want :)
					if((wantCallBack ||wantCallBack == undefined) && control.callback) control.callback.apply(input[0], [input.val(), $('a', control.current)[0]]);// callback event
					//to ensure retro-compatibility, wantCallBack must be considered as true by default
					// **** /MODIFICATION *****
					
  },// $.fn.rating.select
		
		
		
		
		
		readOnly: function(toggle, disable){ // make the control read-only (still submits value)
			var control = this.data('rating'); if(!control) return this;
			// setread-only status
			control.readOnly = toggle || toggle==undefined ? true : false;
			// enable/disable control value submission
			if(disable) $(control.inputs).attr("disabled", "disabled");
			else     			$(control.inputs).removeAttr("disabled");
			// Update rating control state
			this.data('rating', control);
			// Update display
			this.rating('draw');
		},// $.fn.rating.readOnly
		
		disable: function(){ // make read-only and never submit value
			this.rating('readOnly', true, true);
		},// $.fn.rating.disable
		
		enable: function(){ // make read/write and submit value
			this.rating('readOnly', false, false);
		}// $.fn.rating.select
		
 });
	
	/*--------------------------------------------------------*/
	
	/*
		### Default Settings ###
		eg.: You can override default control like this:
		$.fn.rating.options.cancel = 'Clear';
	*/
	$.fn.rating.options = { //$.extend($.fn.rating, { options: {
			cancel: 'Cancel Rating',   // advisory title for the 'cancel' link
			cancelValue: '',           // value to submit when user click the 'cancel' link
			split: 0,                  // split the star into how many parts?
			
			// Width of star image in case the plugin can't work it out. This can happen if
			// the jQuery.dimensions plugin is not available OR the image is hidden at installation
			starWidth: 16//,
			
			//NB.: These don't need to be pre-defined (can be undefined/null) so let's save some code!
			//half:     false,         // just a shortcut to control.split = 2
			//required: false,         // disables the 'cancel' button so user can only select one of the specified values
			//readOnly: false,         // disable rating plugin interaction/ values cannot be changed
			//focus:    function(){},  // executed when stars are focused
			//blur:     function(){},  // executed when stars are focused
			//callback: function(){},  // executed when a star is clicked
 }; //} });
	
	/*--------------------------------------------------------*/
	
	/*
		### Default implementation ###
		The plugin will attach itself to file inputs
		with the class 'multi' when the page loads
	*/
	$(function(){
	 $('input[type=radio].star').rating();
	});

})(jQuery);

/**
 * jQuery Validation Plugin 1.9.0
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright (c) 2006 - 2011 Jörn Zaefferer
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

(function($) {

$.extend($.fn, {
	// http://docs.jquery.com/Plugins/Validation/validate
	validate: function( options ) {

		// if nothing is selected, return nothing; can't chain anyway
		if (!this.length) {
			options && options.debug && window.console && console.warn( "nothing selected, can't validate, returning nothing" );
			return;
		}

		// check if a validator for this form was already created
		var validator = $.data(this[0], 'validator');
		if ( validator ) {
			return validator;
		}

		// Add novalidate tag if HTML5.
		this.attr('novalidate', 'novalidate');

		validator = new $.validator( options, this[0] );
		$.data(this[0], 'validator', validator);

		if ( validator.settings.onsubmit ) {

			var inputsAndButtons = this.find("input, button");

			// allow suppresing validation by adding a cancel class to the submit button
			inputsAndButtons.filter(".cancel").click(function () {
				validator.cancelSubmit = true;
			});

			// when a submitHandler is used, capture the submitting button
			if (validator.settings.submitHandler) {
				inputsAndButtons.filter(":submit").click(function () {
					validator.submitButton = this;
				});
			}

			// validate the form on submit
			this.submit( function( event ) {
				if ( validator.settings.debug )
					// prevent form submit to be able to see console output
					event.preventDefault();

				function handle() {
					if ( validator.settings.submitHandler ) {
						if (validator.submitButton) {
							// insert a hidden input as a replacement for the missing submit button
							var hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val(validator.submitButton.value).appendTo(validator.currentForm);
						}
						validator.settings.submitHandler.call( validator, validator.currentForm );
						if (validator.submitButton) {
							// and clean up afterwards; thanks to no-block-scope, hidden can be referenced
							hidden.remove();
						}
						return false;
					}
					return true;
				}

				// prevent submit for invalid forms or custom submit handlers
				if ( validator.cancelSubmit ) {
					validator.cancelSubmit = false;
					return handle();
				}
				if ( validator.form() ) {
					if ( validator.pendingRequest ) {
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
	valid: function() {
        if ( $(this[0]).is('form')) {
            return this.validate().form();
        } else {
            var valid = true;
            var validator = $(this[0].form).validate();
            this.each(function() {
				valid &= validator.element(this);
            });
            return valid;
        }
    },
	// attributes: space seperated list of attributes to retrieve and remove
	removeAttrs: function(attributes) {
		var result = {},
			$element = this;
		$.each(attributes.split(/\s/), function(index, value) {
			result[value] = $element.attr(value);
			$element.removeAttr(value);
		});
		return result;
	},
	// http://docs.jquery.com/Plugins/Validation/rules
	rules: function(command, argument) {
		var element = this[0];

		if (command) {
			var settings = $.data(element.form, 'validator').settings;
			var staticRules = settings.rules;
			var existingRules = $.validator.staticRules(element);
			switch(command) {
			case "add":
				$.extend(existingRules, $.validator.normalizeRule(argument));
				staticRules[element.name] = existingRules;
				if (argument.messages)
					settings.messages[element.name] = $.extend( settings.messages[element.name], argument.messages );
				break;
			case "remove":
				if (!argument) {
					delete staticRules[element.name];
					return existingRules;
				}
				var filtered = {};
				$.each(argument.split(/\s/), function(index, method) {
					filtered[method] = existingRules[method];
					delete existingRules[method];
				});
				return filtered;
			}
		}

		var data = $.validator.normalizeRules(
		$.extend(
			{},
			$.validator.metadataRules(element),
			$.validator.classRules(element),
			$.validator.attributeRules(element),
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
	blank: function(a) {return !$.trim("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/filled
	filled: function(a) {return !!$.trim("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/unchecked
	unchecked: function(a) {return !a.checked;}
});

// constructor for validator
$.validator = function( options, form ) {
	this.settings = $.extend( true, {}, $.validator.defaults, options );
	this.currentForm = form;
	this.init();
};

$.validator.format = function(source, params) {
	if ( arguments.length == 1 )
		return function() {
			var args = $.makeArray(arguments);
			args.unshift(source);
			return $.validator.format.apply( this, args );
		};
	if ( arguments.length > 2 && params.constructor != Array  ) {
		params = $.makeArray(arguments).slice(1);
	}
	if ( params.constructor != Array ) {
		params = [ params ];
	}
	$.each(params, function(i, n) {
		source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
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
		errorContainer: $( [] ),
		errorLabelContainer: $( [] ),
		onsubmit: true,
		ignore: ":hidden",
		ignoreTitle: false,
		onfocusin: function(element, event) {
			this.lastActive = element;

			// hide error label and remove error class on focus if enabled
			if ( this.settings.focusCleanup && !this.blockFocusCleanup ) {
				this.settings.unhighlight && this.settings.unhighlight.call( this, element, this.settings.errorClass, this.settings.validClass );
				this.addWrapper(this.errorsFor(element)).hide();
			}
		},
		onfocusout: function(element, event) {
			if ( !this.checkable(element) && (element.name in this.submitted || !this.optional(element)) ) {
				this.element(element);
			}
		},
		onkeyup: function(element, event) {
			if ( element.name in this.submitted || element == this.lastElement ) {
				this.element(element);
			}
		},
		onclick: function(element, event) {
			// click on selects, radiobuttons and checkboxes
			if ( element.name in this.submitted )
				this.element(element);
			// or option elements, check parent select in that case
			else if (element.parentNode.name in this.submitted)
				this.element(element.parentNode);
		},
		highlight: function(element, errorClass, validClass) {
			if (element.type === 'radio') {
				this.findByName(element.name).addClass(errorClass).removeClass(validClass);
			} else {
				$(element).addClass(errorClass).removeClass(validClass);
			}
		},
		unhighlight: function(element, errorClass, validClass) {
			if (element.type === 'radio') {
				this.findByName(element.name).removeClass(errorClass).addClass(validClass);
			} else {
				$(element).removeClass(errorClass).addClass(validClass);
			}
		}
	},

	// http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
	setDefaults: function(settings) {
		$.extend( $.validator.defaults, settings );
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
		accept: "Please enter a value with a valid extension.",
		maxlength: $.validator.format("Please enter no more than {0} characters."),
		minlength: $.validator.format("Please enter at least {0} characters."),
		rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
		range: $.validator.format("Please enter a value between {0} and {1}."),
		max: $.validator.format("Please enter a value less than or equal to {0}."),
		min: $.validator.format("Please enter a value greater than or equal to {0}.")
	},

	autoCreateRanges: false,

	prototype: {

		init: function() {
			this.labelContainer = $(this.settings.errorLabelContainer);
			this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
			this.containers = $(this.settings.errorContainer).add( this.settings.errorLabelContainer );
			this.submitted = {};
			this.valueCache = {};
			this.pendingRequest = 0;
			this.pending = {};
			this.invalid = {};
			this.reset();

			var groups = (this.groups = {});
			$.each(this.settings.groups, function(key, value) {
				$.each(value.split(/\s/), function(index, name) {
					groups[name] = key;
				});
			});
			var rules = this.settings.rules;
			$.each(rules, function(key, value) {
				rules[key] = $.validator.normalizeRule(value);
			});

			function delegate(event) {
				var validator = $.data(this[0].form, "validator"),
					eventType = "on" + event.type.replace(/^validate/, "");
				validator.settings[eventType] && validator.settings[eventType].call(validator, this[0], event);
			}
			$(this.currentForm)
			       .validateDelegate("[type='text'], [type='password'], [type='file'], select, textarea, " +
						"[type='number'], [type='search'] ,[type='tel'], [type='url'], " +
						"[type='email'], [type='datetime'], [type='date'], [type='month'], " +
						"[type='week'], [type='time'], [type='datetime-local'], " +
						"[type='range'], [type='color'] ",
						"focusin focusout keyup", delegate)
				.validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", delegate);

			if (this.settings.invalidHandler)
				$(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/form
		form: function() {
			this.checkForm();
			$.extend(this.submitted, this.errorMap);
			this.invalid = $.extend({}, this.errorMap);
			if (!this.valid())
				$(this.currentForm).triggerHandler("invalid-form", [this]);
			this.showErrors();
			return this.valid();
		},

		checkForm: function() {
			this.prepareForm();
			for ( var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++ ) {
				this.check( elements[i] );
			}
			return this.valid();
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/element
		element: function( element ) {
			element = this.validationTargetFor( this.clean( element ) );
			this.lastElement = element;
			this.prepareElement( element );
			this.currentElements = $(element);
			var result = this.check( element );
			if ( result ) {
				delete this.invalid[element.name];
			} else {
				this.invalid[element.name] = true;
			}
			if ( !this.numberOfInvalids() ) {
				// Hide error containers on last error
				this.toHide = this.toHide.add( this.containers );
			}
			this.showErrors();
			return result;
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/showErrors
		showErrors: function(errors) {
			if(errors) {
				// add items to error list and map
				$.extend( this.errorMap, errors );
				this.errorList = [];
				for ( var name in errors ) {
					this.errorList.push({
						message: errors[name],
						element: this.findByName(name)[0]
					});
				}
				// remove items from success list
				this.successList = $.grep( this.successList, function(element) {
					return !(element.name in errors);
				});
			}
			this.settings.showErrors
				? this.settings.showErrors.call( this, this.errorMap, this.errorList )
				: this.defaultShowErrors();
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/resetForm
		resetForm: function() {
			if ( $.fn.resetForm )
				$( this.currentForm ).resetForm();
			this.submitted = {};
			this.lastElement = null;
			this.prepareForm();
			this.hideErrors();
			this.elements().removeClass( this.settings.errorClass );
		},

		numberOfInvalids: function() {
			return this.objectLength(this.invalid);
		},

		objectLength: function( obj ) {
			var count = 0;
			for ( var i in obj )
				count++;
			return count;
		},

		hideErrors: function() {
			this.addWrapper( this.toHide ).hide();
		},

		valid: function() {
			return this.size() == 0;
		},

		size: function() {
			return this.errorList.length;
		},

		focusInvalid: function() {
			if( this.settings.focusInvalid ) {
				try {
					$(this.findLastActive() || this.errorList.length && this.errorList[0].element || [])
					.filter(":visible")
					.focus()
					// manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
					.trigger("focusin");
				} catch(e) {
					// ignore IE throwing errors when focusing hidden elements
				}
			}
		},

		findLastActive: function() {
			var lastActive = this.lastActive;
			return lastActive && $.grep(this.errorList, function(n) {
				return n.element.name == lastActive.name;
			}).length == 1 && lastActive;
		},

		elements: function() {
			var validator = this,
				rulesCache = {};

			// select all valid inputs inside the form (no submit or reset buttons)
			return $(this.currentForm)
			.find("input, select, textarea")
			.not(":submit, :reset, :image, [disabled]")
			.not( this.settings.ignore )
			.filter(function() {
				!this.name && validator.settings.debug && window.console && console.error( "%o has no name assigned", this);

				// select only the first element for each name, and only those with rules specified
				if ( this.name in rulesCache || !validator.objectLength($(this).rules()) )
					return false;

				rulesCache[this.name] = true;
				return true;
			});
		},

		clean: function( selector ) {
			return $( selector )[0];
		},

		errors: function() {
			return $( this.settings.errorElement + "." + this.settings.errorClass, this.errorContext );
		},

		reset: function() {
			this.successList = [];
			this.errorList = [];
			this.errorMap = {};
			this.toShow = $([]);
			this.toHide = $([]);
			this.currentElements = $([]);
		},

		prepareForm: function() {
			this.reset();
			this.toHide = this.errors().add( this.containers );
		},

		prepareElement: function( element ) {
			this.reset();
			this.toHide = this.errorsFor(element);
		},

		check: function( element ) {
			element = this.validationTargetFor( this.clean( element ) );

			var rules = $(element).rules();
			var dependencyMismatch = false;
			for (var method in rules ) {
				var rule = { method: method, parameters: rules[method] };
				try {
					var result = $.validator.methods[method].call( this, element.value.replace(/\r/g, ""), element, rule.parameters );

					// if a method indicates that the field is optional and therefore valid,
					// don't mark it as valid when there are no other rules
					if ( result == "dependency-mismatch" ) {
						dependencyMismatch = true;
						continue;
					}
					dependencyMismatch = false;

					if ( result == "pending" ) {
						this.toHide = this.toHide.not( this.errorsFor(element) );
						return;
					}

					if( !result ) {
						this.formatAndAdd( element, rule );
						return false;
					}
				} catch(e) {
					this.settings.debug && window.console && console.log("exception occured when checking element " + element.id
						 + ", check the '" + rule.method + "' method", e);
					throw e;
				}
			}
			if (dependencyMismatch)
				return;
			if ( this.objectLength(rules) )
				this.successList.push(element);
			return true;
		},

		// return the custom message for the given element and validation method
		// specified in the element's "messages" metadata
		customMetaMessage: function(element, method) {
			if (!$.metadata)
				return;

			var meta = this.settings.meta
				? $(element).metadata()[this.settings.meta]
				: $(element).metadata();

			return meta && meta.messages && meta.messages[method];
		},

		// return the custom message for the given element name and validation method
		customMessage: function( name, method ) {
			var m = this.settings.messages[name];
			return m && (m.constructor == String
				? m
				: m[method]);
		},

		// return the first defined argument, allowing empty strings
		findDefined: function() {
			for(var i = 0; i < arguments.length; i++) {
				if (arguments[i] !== undefined)
					return arguments[i];
			}
			return undefined;
		},

		defaultMessage: function( element, method) {
			return this.findDefined(
				this.customMessage( element.name, method ),
				this.customMetaMessage( element, method ),
				// title is never undefined, so handle empty string as undefined
				!this.settings.ignoreTitle && element.title || undefined,
				$.validator.messages[method],
				"<strong>Warning: No message defined for " + element.name + "</strong>"
			);
		},

		formatAndAdd: function( element, rule ) {
			var message = this.defaultMessage( element, rule.method ),
				theregex = /\$?\{(\d+)\}/g;
			if ( typeof message == "function" ) {
				message = message.call(this, rule.parameters, element);
			} else if (theregex.test(message)) {
				message = jQuery.format(message.replace(theregex, '{$1}'), rule.parameters);
			}
			this.errorList.push({
				message: message,
				element: element
			});

			this.errorMap[element.name] = message;
			this.submitted[element.name] = message;
		},

		addWrapper: function(toToggle) {
			if ( this.settings.wrapper )
				toToggle = toToggle.add( toToggle.parent( this.settings.wrapper ) );
			return toToggle;
		},

		defaultShowErrors: function() {
			for ( var i = 0; this.errorList[i]; i++ ) {
				var error = this.errorList[i];
				this.settings.highlight && this.settings.highlight.call( this, error.element, this.settings.errorClass, this.settings.validClass );
				this.showLabel( error.element, error.message );
			}
			if( this.errorList.length ) {
				this.toShow = this.toShow.add( this.containers );
			}
			if (this.settings.success) {
				for ( var i = 0; this.successList[i]; i++ ) {
					this.showLabel( this.successList[i] );
				}
			}
			if (this.settings.unhighlight) {
				for ( var i = 0, elements = this.validElements(); elements[i]; i++ ) {
					this.settings.unhighlight.call( this, elements[i], this.settings.errorClass, this.settings.validClass );
				}
			}
			this.toHide = this.toHide.not( this.toShow );
			this.hideErrors();
			this.addWrapper( this.toShow ).show();
		},

		validElements: function() {
			return this.currentElements.not(this.invalidElements());
		},

		invalidElements: function() {
			return $(this.errorList).map(function() {
				return this.element;
			});
		},

		showLabel: function(element, message) {
			var label = this.errorsFor( element );
			if ( label.length ) {
				// refresh error/success class
				label.removeClass( this.settings.validClass ).addClass( this.settings.errorClass );

				// check if we have a generated label, replace the message then
				label.attr("generated") && label.html(message);
			} else {
				// create label
				label = $("<" + this.settings.errorElement + "/>")
					.attr({"for":  this.idOrName(element), generated: true})
					.addClass(this.settings.errorClass)
					.html(message || "");
				if ( this.settings.wrapper ) {
					// make sure the element is visible, even in IE
					// actually showing the wrapped element is handled elsewhere
					label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
				}
				if ( !this.labelContainer.append(label).length )
					this.settings.errorPlacement
						? this.settings.errorPlacement(label, $(element) )
						: label.insertAfter(element);
			}
			if ( !message && this.settings.success ) {
				label.text("");
				typeof this.settings.success == "string"
					? label.addClass( this.settings.success )
					: this.settings.success( label );
			}
			this.toShow = this.toShow.add(label);
		},

		errorsFor: function(element) {
			var name = this.idOrName(element);
    		return this.errors().filter(function() {
				return $(this).attr('for') == name;
			});
		},

		idOrName: function(element) {
			return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
		},

		validationTargetFor: function(element) {
			// if radio/checkbox, validate first element in group instead
			if (this.checkable(element)) {
				element = this.findByName( element.name ).not(this.settings.ignore)[0];
			}
			return element;
		},

		checkable: function( element ) {
			return /radio|checkbox/i.test(element.type);
		},

		findByName: function( name ) {
			// select by name and filter by form for performance over form.find("[name=...]")
			var form = this.currentForm;
			return $(document.getElementsByName(name)).map(function(index, element) {
				return element.form == form && element.name == name && element  || null;
			});
		},

		getLength: function(value, element) {
			switch( element.nodeName.toLowerCase() ) {
			case 'select':
				return $("option:selected", element).length;
			case 'input':
				if( this.checkable( element) )
					return this.findByName(element.name).filter(':checked').length;
			}
			return value.length;
		},

		depend: function(param, element) {
			return this.dependTypes[typeof param]
				? this.dependTypes[typeof param](param, element)
				: true;
		},

		dependTypes: {
			"boolean": function(param, element) {
				return param;
			},
			"string": function(param, element) {
				return !!$(param, element.form).length;
			},
			"function": function(param, element) {
				return param(element);
			}
		},

		optional: function(element) {
			return !$.validator.methods.required.call(this, $.trim(element.value), element) && "dependency-mismatch";
		},

		startRequest: function(element) {
			if (!this.pending[element.name]) {
				this.pendingRequest++;
				this.pending[element.name] = true;
			}
		},

		stopRequest: function(element, valid) {
			this.pendingRequest--;
			// sometimes synchronization fails, make sure pendingRequest is never < 0
			if (this.pendingRequest < 0)
				this.pendingRequest = 0;
			delete this.pending[element.name];
			if ( valid && this.pendingRequest == 0 && this.formSubmitted && this.form() ) {
				$(this.currentForm).submit();
				this.formSubmitted = false;
			} else if (!valid && this.pendingRequest == 0 && this.formSubmitted) {
				$(this.currentForm).triggerHandler("invalid-form", [this]);
				this.formSubmitted = false;
			}
		},

		previousValue: function(element) {
			return $.data(element, "previousValue") || $.data(element, "previousValue", {
				old: null,
				valid: true,
				message: this.defaultMessage( element, "remote" )
			});
		}

	},

	classRuleSettings: {
		required: {required: true},
		email: {email: true},
		url: {url: true},
		date: {date: true},
		dateISO: {dateISO: true},
		dateDE: {dateDE: true},
		number: {number: true},
		numberDE: {numberDE: true},
		digits: {digits: true},
		creditcard: {creditcard: true}
	},

	addClassRules: function(className, rules) {
		className.constructor == String ?
			this.classRuleSettings[className] = rules :
			$.extend(this.classRuleSettings, className);
	},

	classRules: function(element) {
		var rules = {};
		var classes = $(element).attr('class');
		classes && $.each(classes.split(' '), function() {
			if (this in $.validator.classRuleSettings) {
				$.extend(rules, $.validator.classRuleSettings[this]);
			}
		});
		return rules;
	},

	attributeRules: function(element) {
		var rules = {};
		var $element = $(element);

		for (var method in $.validator.methods) {
			var value;
			// If .prop exists (jQuery >= 1.6), use it to get true/false for required
			if (method === 'required' && typeof $.fn.prop === 'function') {
				value = $element.prop(method);
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

	metadataRules: function(element) {
		if (!$.metadata) return {};

		var meta = $.data(element.form, 'validator').settings.meta;
		return meta ?
			$(element).metadata()[meta] :
			$(element).metadata();
	},

	staticRules: function(element) {
		var rules = {};
		var validator = $.data(element.form, 'validator');
		if (validator.settings.rules) {
			rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
		}
		return rules;
	},

	normalizeRules: function(rules, element) {
		// handle dependency check
		$.each(rules, function(prop, val) {
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
		$.each(rules, function(rule, parameter) {
			rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
		});

		// clean number parameters
		$.each(['minlength', 'maxlength', 'min', 'max'], function() {
			if (rules[this]) {
				rules[this] = Number(rules[this]);
			}
		});
		$.each(['rangelength', 'range'], function() {
			if (rules[this]) {
				rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
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

		// To support custom messages in metadata ignore rule methods titled "messages"
		if (rules.messages) {
			delete rules.messages;
		}

		return rules;
	},

	// Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
	normalizeRule: function(data) {
		if( typeof data == "string" ) {
			var transformed = {};
			$.each(data.split(/\s/), function() {
				transformed[this] = true;
			});
			data = transformed;
		}
		return data;
	},

	// http://docs.jquery.com/Plugins/Validation/Validator/addMethod
	addMethod: function(name, method, message) {
		$.validator.methods[name] = method;
		$.validator.messages[name] = message != undefined ? message : $.validator.messages[name];
		if (method.length < 3) {
			$.validator.addClassRules(name, $.validator.normalizeRule(name));
		}
	},

	methods: {

		// http://docs.jquery.com/Plugins/Validation/Methods/required
		required: function(value, element, param) {
			// check if dependency is met
			if ( !this.depend(param, element) )
				return "dependency-mismatch";
			switch( element.nodeName.toLowerCase() ) {
			case 'select':
				// could be an array for select-multiple or a string, both are fine this way
				var val = $(element).val();
				return val && val.length > 0;
			case 'input':
				if ( this.checkable(element) )
					return this.getLength(value, element) > 0;
			default:
				return $.trim(value).length > 0;
			}
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/remote
		remote: function(value, element, param) {
			if ( this.optional(element) )
				return "dependency-mismatch";

			var previous = this.previousValue(element);
			if (!this.settings.messages[element.name] )
				this.settings.messages[element.name] = {};
			previous.originalMessage = this.settings.messages[element.name].remote;
			this.settings.messages[element.name].remote = previous.message;

			param = typeof param == "string" && {url:param} || param;

			if ( this.pending[element.name] ) {
				return "pending";
			}
			if ( previous.old === value ) {
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
				success: function(response) {
					validator.settings.messages[element.name].remote = previous.originalMessage;
					var valid = response === true;
					if ( valid ) {
						var submitted = validator.formSubmitted;
						validator.prepareElement(element);
						validator.formSubmitted = submitted;
						validator.successList.push(element);
						validator.showErrors();
					} else {
						var errors = {};
						var message = response || validator.defaultMessage( element, "remote" );
						errors[element.name] = previous.message = $.isFunction(message) ? message(value) : message;
						validator.showErrors(errors);
					}
					previous.valid = valid;
					validator.stopRequest(element, valid);
				}
			}, param));
			return "pending";
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/minlength
		minlength: function(value, element, param) {
			return this.optional(element) || this.getLength($.trim(value), element) >= param;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/maxlength
		maxlength: function(value, element, param) {
			return this.optional(element) || this.getLength($.trim(value), element) <= param;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/rangelength
		rangelength: function(value, element, param) {
			var length = this.getLength($.trim(value), element);
			return this.optional(element) || ( length >= param[0] && length <= param[1] );
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/min
		min: function( value, element, param ) {
			return this.optional(element) || value >= param;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/max
		max: function( value, element, param ) {
			return this.optional(element) || value <= param;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/range
		range: function( value, element, param ) {
			return this.optional(element) || ( value >= param[0] && value <= param[1] );
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/email
		email: function(value, element) {
			// contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
			return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/url
		url: function(value, element) {
			// contributed by Scott Gonzalez: http://projects.scottsplayground.com/iri/
			return this.optional(element) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/date
		date: function(value, element) {
			return this.optional(element) || !/Invalid|NaN/.test(new Date(value));
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/dateISO
		dateISO: function(value, element) {
			return this.optional(element) || /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value);
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/number
		number: function(value, element) {
			return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(value);
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/digits
		digits: function(value, element) {
			return this.optional(element) || /^\d+$/.test(value);
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/creditcard
		// based on http://en.wikipedia.org/wiki/Luhn
		creditcard: function(value, element) {
			if ( this.optional(element) )
				return "dependency-mismatch";
			// accept only spaces, digits and dashes
			if (/[^0-9 -]+/.test(value))
				return false;
			var nCheck = 0,
				nDigit = 0,
				bEven = false;

			value = value.replace(/\D/g, "");

			for (var n = value.length - 1; n >= 0; n--) {
				var cDigit = value.charAt(n);
				var nDigit = parseInt(cDigit, 10);
				if (bEven) {
					if ((nDigit *= 2) > 9)
						nDigit -= 9;
				}
				nCheck += nDigit;
				bEven = !bEven;
			}

			return (nCheck % 10) == 0;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/accept
		accept: function(value, element, param) {
			param = typeof param == "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
			return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/equalTo
		equalTo: function(value, element, param) {
			// bind to the blur event of the target in order to revalidate whenever the target field is updated
			// TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
			var target = $(param).unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
				$(element).valid();
			});
			return value == target.val();
		}

	}

});

// deprecated, use $.validator.format instead
$.format = $.validator.format;

})(jQuery);

// ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort()
;(function($) {
	var pendingRequests = {};
	// Use a prefilter if available (1.5+)
	if ( $.ajaxPrefilter ) {
		$.ajaxPrefilter(function(settings, _, xhr) {
			var port = settings.port;
			if (settings.mode == "abort") {
				if ( pendingRequests[port] ) {
					pendingRequests[port].abort();
				}
				pendingRequests[port] = xhr;
			}
		});
	} else {
		// Proxy ajax
		var ajax = $.ajax;
		$.ajax = function(settings) {
			var mode = ( "mode" in settings ? settings : $.ajaxSettings ).mode,
				port = ( "port" in settings ? settings : $.ajaxSettings ).port;
			if (mode == "abort") {
				if ( pendingRequests[port] ) {
					pendingRequests[port].abort();
				}
				return (pendingRequests[port] = ajax.apply(this, arguments));
			}
			return ajax.apply(this, arguments);
		};
	}
})(jQuery);

// provides cross-browser focusin and focusout events
// IE has native support, in other browsers, use event caputuring (neither bubbles)

// provides delegate(type: String, delegate: Selector, handler: Callback) plugin for easier event delegation
// handler is only called when $(event.target).is(delegate), in the scope of the jquery-object for event.target
;(function($) {
	// only implement if not provided by jQuery core (since 1.4)
	// TODO verify if jQuery 1.4's implementation is compatible with older jQuery special-event APIs
	if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
		$.each({
			focus: 'focusin',
			blur: 'focusout'
		}, function( original, fix ){
			$.event.special[fix] = {
				setup:function() {
					this.addEventListener( original, handler, true );
				},
				teardown:function() {
					this.removeEventListener( original, handler, true );
				},
				handler: function(e) {
					arguments[0] = $.event.fix(e);
					arguments[0].type = fix;
					return $.event.handle.apply(this, arguments);
				}
			};
			function handler(e) {
				e = $.event.fix(e);
				e.type = fix;
				return $.event.handle.call(this, e);
			}
		});
	};
	$.extend($.fn, {
		validateDelegate: function(delegate, type, handler) {
			return this.bind(type, function(event) {
				var target = $(event.target);
				if (target.is(delegate)) {
					return handler.apply(target, arguments);
				}
			});
		}
	});
})(jQuery);

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

(function() {

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
    return function() {
      return f.apply(obj, a.concat(slice.call(arguments)));
    };
  }

  var G_vmlCanvasManager_ = {
    init: function(opt_doc) {
      if (/MSIE/.test(navigator.userAgent) && !window.opera) {
        var doc = opt_doc || document;
        // Create a dummy element so that IE will allow canvas elements to be
        // recognized.
        doc.createElement('canvas');
        doc.attachEvent('onreadystatechange', bind(this.init_, this, doc));
      }
    },

    init_: function(doc) {
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
    initElement: function(el) {
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
      el.firstChild.style.width =  el.clientWidth + 'px';
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
    o2.fillStyle     = o1.fillStyle;
    o2.lineCap       = o1.lineCap;
    o2.lineJoin      = o1.lineJoin;
    o2.lineWidth     = o1.lineWidth;
    o2.miterLimit    = o1.miterLimit;
    o2.shadowBlur    = o1.shadowBlur;
    o2.shadowColor   = o1.shadowColor;
    o2.shadowOffsetX = o1.shadowOffsetX;
    o2.shadowOffsetY = o1.shadowOffsetY;
    o2.strokeStyle   = o1.strokeStyle;
    o2.globalAlpha   = o1.globalAlpha;
    o2.arcScaleX_    = o1.arcScaleX_;
    o2.arcScaleY_    = o1.arcScaleY_;
    o2.lineScale_    = o1.lineScale_;
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
    el.style.width =  surfaceElement.clientWidth + 'px';
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
  contextPrototype.clearRect = function() {
    this.element_.innerHTML = '';
  };

  contextPrototype.beginPath = function() {
    // TODO: Branch current matrix so that save/restore has no effect
    //       as per safari docs.
    this.currentPath_ = [];
  };

  contextPrototype.moveTo = function(aX, aY) {
    var p = this.getCoords_(aX, aY);
    this.currentPath_.push({type: 'moveTo', x: p.x, y: p.y});
    this.currentX_ = p.x;
    this.currentY_ = p.y;
  };

  contextPrototype.lineTo = function(aX, aY) {
    var p = this.getCoords_(aX, aY);
    this.currentPath_.push({type: 'lineTo', x: p.x, y: p.y});

    this.currentX_ = p.x;
    this.currentY_ = p.y;
  };

  contextPrototype.bezierCurveTo = function(aCP1x, aCP1y,
                                            aCP2x, aCP2y,
                                            aX, aY) {
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

  contextPrototype.quadraticCurveTo = function(aCPx, aCPy, aX, aY) {
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

  contextPrototype.arc = function(aX, aY, aRadius,
                                  aStartAngle, aEndAngle, aClockwise) {
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

  contextPrototype.rect = function(aX, aY, aWidth, aHeight) {
    this.moveTo(aX, aY);
    this.lineTo(aX + aWidth, aY);
    this.lineTo(aX + aWidth, aY + aHeight);
    this.lineTo(aX, aY + aHeight);
    this.closePath();
  };

  contextPrototype.strokeRect = function(aX, aY, aWidth, aHeight) {
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

  contextPrototype.fillRect = function(aX, aY, aWidth, aHeight) {
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

  contextPrototype.createLinearGradient = function(aX0, aY0, aX1, aY1) {
    var gradient = new CanvasGradient_('gradient');
    gradient.x0_ = aX0;
    gradient.y0_ = aY0;
    gradient.x1_ = aX1;
    gradient.y1_ = aY1;
    return gradient;
  };

  contextPrototype.createRadialGradient = function(aX0, aY0, aR0,
                                                   aX1, aY1, aR1) {
    var gradient = new CanvasGradient_('gradientradial');
    gradient.x0_ = aX0;
    gradient.y0_ = aY0;
    gradient.r0_ = aR0;
    gradient.x1_ = aX1;
    gradient.y1_ = aY1;
    gradient.r1_ = aR1;
    return gradient;
  };

  contextPrototype.drawImage = function(image, var_args) {
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
                ' coordorigin="0,0"' ,
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

    vmlStr.push(' ">' ,
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

  contextPrototype.stroke = function(aFill) {
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
        var width  = max.x - min.x;
        var height = max.y - min.y;
        focus = {
          x: (p0.x - min.x) / width,
          y: (p0.y - min.y) / height
        };

        width  /= this.arcScaleX_ * Z;
        height /= this.arcScaleY_ * Z;
        var dimension = m.max(width, height);
        shift = 2 * fillStyle.r0_ / dimension;
        expansion = 2 * fillStyle.r1_ / dimension - shift;
      }

      // We need to sort the color stops in ascending order by offset,
      // otherwise IE won't interpret it correctly.
      var stops = fillStyle.colors_;
      stops.sort(function(cs1, cs2) {
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

  contextPrototype.fill = function() {
    this.stroke(true);
  }

  contextPrototype.closePath = function() {
    this.currentPath_.push({type: 'close'});
  };

  /**
   * @private
   */
  contextPrototype.getCoords_ = function(aX, aY) {
    var m = this.m_;
    return {
      x: Z * (aX * m[0][0] + aY * m[1][0] + m[2][0]) - Z2,
      y: Z * (aX * m[0][1] + aY * m[1][1] + m[2][1]) - Z2
    }
  };

  contextPrototype.save = function() {
    var o = {};
    copyState(this, o);
    this.aStack_.push(o);
    this.mStack_.push(this.m_);
    this.m_ = matrixMultiply(createMatrixIdentity(), this.m_);
  };

  contextPrototype.restore = function() {
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

  contextPrototype.translate = function(aX, aY) {
    var m1 = [
      [1,  0,  0],
      [0,  1,  0],
      [aX, aY, 1]
    ];

    setM(this, matrixMultiply(m1, this.m_), false);
  };

  contextPrototype.rotate = function(aRot) {
    var c = mc(aRot);
    var s = ms(aRot);

    var m1 = [
      [c,  s, 0],
      [-s, c, 0],
      [0,  0, 1]
    ];

    setM(this, matrixMultiply(m1, this.m_), false);
  };

  contextPrototype.scale = function(aX, aY) {
    this.arcScaleX_ *= aX;
    this.arcScaleY_ *= aY;
    var m1 = [
      [aX, 0,  0],
      [0,  aY, 0],
      [0,  0,  1]
    ];

    setM(this, matrixMultiply(m1, this.m_), true);
  };

  contextPrototype.transform = function(m11, m12, m21, m22, dx, dy) {
    var m1 = [
      [m11, m12, 0],
      [m21, m22, 0],
      [dx,  dy,  1]
    ];

    setM(this, matrixMultiply(m1, this.m_), true);
  };

  contextPrototype.setTransform = function(m11, m12, m21, m22, dx, dy) {
    var m = [
      [m11, m12, 0],
      [m21, m22, 0],
      [dx,  dy,  1]
    ];

    setM(this, m, true);
  };

  /******** STUBS ********/
  contextPrototype.clip = function() {
    // TODO: Implement
  };

  contextPrototype.arcTo = function() {
    // TODO: Implement
  };

  contextPrototype.createPattern = function() {
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

  CanvasGradient_.prototype.addColorStop = function(aOffset, aColor) {
    aColor = processStyle(aColor);
    this.colors_.push({offset: aOffset,
                       color: aColor.color,
                       alpha: aColor.alpha});
  };

  function CanvasPattern_() {}

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
jomresJquery.fn.chainSelect = function( target, url, settings ) 
{
  return this.each( function()
  {
	jomresJquery(this).change( function( ) 
	{
		settings = jomresJquery.extend(
		{
			after : null,
			before : null,
			usePost : false,
			defaultValue : null,
			parameters : {'_id' : jomresJquery(this).attr('id'), '_name' : jomresJquery(this).attr('name')}
        } , settings);

		settings.parameters._value =  jomresJquery(this).val();

		if (settings.before != null) 
		{
			settings.before( target );
		}

		ajaxCallback = function(data, textStatus) 
		{
			jomresJquery(target).html("");//clear old options
			data = eval(data);//get json array
			
			for (i = 0; i < data.length; i++)//iterate over all options
			{
			
			  for ( key in data[i] )//get key => value
			  {
			//  How on earth this is happening, I don't know. Probably down to something that mootools does, but as I know nothing about mootools, I don't know how to switch it off. Therefore, we'll just check for the keys that are returned by mootools and exclude them.
			 // copy remove contains associate extend merge include getRandom getLast each test rgbToHext hexToRgb rgbToHsb hsbToRgb $family clean link combine erase empty flatten
			if ( -1 == data[i][key].toString().toLowerCase().lastIndexOf('object') && -1 == data[i][key].toString().toLowerCase().lastIndexOf('function') )
					jomresJquery(target).get(0).add(new Option(data[i][key],[key]), document.all ? i : null);
              }
			}

			if (settings.defaultValue != null)
			{
				jomresJquery(target).val(settings.defaultValue);//select default value
			} else
			{
				jomresJquery("option:first", target).attr( "selected", "selected" );//select first option
			}

			if (settings.after != null) 
			{
				settings.after(target);
			}

			jomresJquery(target).change();//call next chain
		};

		if (settings.usePost == true)
		{
			jomresJquery.post( url, settings.parameters, ajaxCallback );
		} else
		{
			jomresJquery.get( url, settings.parameters, ajaxCallback );
		}
	});
  });
};

/**
 * jGrowl 1.2.4
 *
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Written by Stan Lemon <stosh1985@gmail.com>
 * Last updated: 2009.12.13
 *
 * jGrowl is a jQuery plugin implementing unobtrusive userland notifications.  These 
 * notifications function similarly to the Growl Framework available for
 * Mac OS X (http://growl.info).
 *
 * To Do:
 * - Move library settings to containers and allow them to be changed per container
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
(function($) {

	/** jGrowl Wrapper - Establish a base jGrowl Container for compatibility with older releases. **/
	$.jGrowl = function( m , o ) {
		// To maintain compatibility with older version that only supported one instance we'll create the base container.
		if ( $('#jGrowl').size() == 0 ) 
			$('<div id="jGrowl"></div>').addClass($.jGrowl.defaults.position).appendTo('body');

		// Create a notification on the container.
		$('#jGrowl').jGrowl(m,o);
	};


	/** Raise jGrowl Notification on a jGrowl Container **/
	$.fn.jGrowl = function( m , o ) {
		if ( $.isFunction(this.each) ) {
			var args = arguments;

			return this.each(function() {
				var self = this;

				/** Create a jGrowl Instance on the Container if it does not exist **/
				if ( $(this).data('jGrowl.instance') == undefined ) {
					$(this).data('jGrowl.instance', $.extend( new $.fn.jGrowl(), { notifications: [], element: null, interval: null } ));
					$(this).data('jGrowl.instance').startup( this );
				}

				/** Optionally call jGrowl instance methods, or just raise a normal notification **/
				if ( $.isFunction($(this).data('jGrowl.instance')[m]) ) {
					$(this).data('jGrowl.instance')[m].apply( $(this).data('jGrowl.instance') , $.makeArray(args).slice(1) );
				} else {
					$(this).data('jGrowl.instance').create( m , o );
				}
			});
		};
	};

	$.extend( $.fn.jGrowl.prototype , {

		/** Default JGrowl Settings **/
		defaults: {
			pool: 			0,
			header: 		'',
			group: 			'',
			sticky: 		false,
			position: 		'top-right', // Is this still needed?
			glue: 			'after',
			theme: 			'default',
			corners: 		'10px',
			check: 			250,
			life: 			3000,
			speed: 			'normal',
			easing: 		'swing',
			closer: 		true,
			closeTemplate: '&times;',
			closerTemplate: '<div>[ close all ]</div>',
			log: 			function(e,m,o) {},
			beforeOpen: 	function(e,m,o) {},
			open: 			function(e,m,o) {},
			beforeClose: 	function(e,m,o) {},
			close: 			function(e,m,o) {},
			animateOpen: 	{
				opacity: 	'show'
			},
			animateClose: 	{
				opacity: 	'hide'
			}
		},
		
		notifications: [],
		
		/** jGrowl Container Node **/
		element: 	null,
	
		/** Interval Function **/
		interval:   null,
		
		/** Create a Notification **/
		create: 	function( message , o ) {
			var o = $.extend({}, this.defaults, o);

			this.notifications.push({ message: message , options: o });
			
			o.log.apply( this.element , [this.element,message,o] );
		},
		
		render: 		function( notification ) {
			var self = this;
			var message = notification.message;
			var o = notification.options;

			var notification = $(
				'<div class="jGrowl-notification' + 
				((o.group != undefined && o.group != '') ? ' ' + o.group : '') + '">' +
				'<div class="close">' + o.closeTemplate + '</div>' +
				'<div class="header">' + o.header + '</div>' +
				'<div>' + message + '</div></div>'
			).data("jGrowl", o).addClass(o.theme).children('div.close').bind("click.jGrowl", function() {
				$(this).parent().trigger('jGrowl.close');
			}).parent();


			/** Notification Actions **/
			$(notification).bind("mouseover.jGrowl", function() {
				$('div.jGrowl-notification', self.element).data("jGrowl.pause", true);
			}).bind("mouseout.jGrowl", function() {
				$('div.jGrowl-notification', self.element).data("jGrowl.pause", false);
			}).bind('jGrowl.beforeOpen', function() {
				if ( o.beforeOpen.apply( notification , [notification,message,o,self.element] ) != false ) {
					$(this).trigger('jGrowl.open');
				}
			}).bind('jGrowl.open', function() {
				if ( o.open.apply( notification , [notification,message,o,self.element] ) != false ) {
					if ( o.glue == 'after' ) {
						$('div.jGrowl-notification:last', self.element).after(notification);
					} else {
						$('div.jGrowl-notification:first', self.element).before(notification);
					}
					
					$(this).animate(o.animateOpen, o.speed, o.easing, function() {
						// Fixes some anti-aliasing issues with IE filters.
						if ($.browser.msie && (parseInt($(this).css('opacity'), 10) === 1 || parseInt($(this).css('opacity'), 10) === 0))
							this.style.removeAttribute('filter');

						$(this).data("jGrowl").created = new Date();
					});
				}
			}).bind('jGrowl.beforeClose', function() {
				if ( o.beforeClose.apply( notification , [notification,message,o,self.element] ) != false )
					$(this).trigger('jGrowl.close');
			}).bind('jGrowl.close', function() {
				// Pause the notification, lest during the course of animation another close event gets called.
				$(this).data('jGrowl.pause', true);
				$(this).animate(o.animateClose, o.speed, o.easing, function() {
					$(this).remove();
					var close = o.close.apply( notification , [notification,message,o,self.element] );

					if ( $.isFunction(close) )
						close.apply( notification , [notification,message,o,self.element] );
				});
			}).trigger('jGrowl.beforeOpen');
		
			/** Optional Corners Plugin **/
			if ( $.fn.corner != undefined ) $(notification).corner( o.corners );

			/** Add a Global Closer if more than one notification exists **/
			if ( $('div.jGrowl-notification:parent', self.element).size() > 1 && 
				 $('div.jGrowl-closer', self.element).size() == 0 && this.defaults.closer != false ) {
				$(this.defaults.closerTemplate).addClass('jGrowl-closer').addClass(this.defaults.theme)
					.appendTo(self.element).animate(this.defaults.animateOpen, this.defaults.speed, this.defaults.easing)
					.bind("click.jGrowl", function() {
						$(this).siblings().children('div.close').trigger("click.jGrowl");

						if ( $.isFunction( self.defaults.closer ) ) {
							self.defaults.closer.apply( $(this).parent()[0] , [$(this).parent()[0]] );
						}
					});
			};
		},

		/** Update the jGrowl Container, removing old jGrowl notifications **/
		update:	 function() {
			$(this.element).find('div.jGrowl-notification:parent').each( function() {
				if ( $(this).data("jGrowl") != undefined && $(this).data("jGrowl").created != undefined && 
					 ($(this).data("jGrowl").created.getTime() + $(this).data("jGrowl").life)  < (new Date()).getTime() && 
					 $(this).data("jGrowl").sticky != true && 
					 ($(this).data("jGrowl.pause") == undefined || $(this).data("jGrowl.pause") != true) ) {

					// Pause the notification, lest during the course of animation another close event gets called.
					$(this).trigger('jGrowl.beforeClose');
				}
			});

			if ( this.notifications.length > 0 && 
				 (this.defaults.pool == 0 || $(this.element).find('div.jGrowl-notification:parent').size() < this.defaults.pool) )
				this.render( this.notifications.shift() );

			if ( $(this.element).find('div.jGrowl-notification:parent').size() < 2 ) {
				$(this.element).find('div.jGrowl-closer').animate(this.defaults.animateClose, this.defaults.speed, this.defaults.easing, function() {
					$(this).remove();
				});
			}
		},

		/** Setup the jGrowl Notification Container **/
		startup:	function(e) {
			this.element = $(e).addClass('jGrowl').append('<div class="jGrowl-notification"></div>');
			this.interval = setInterval( function() { 
				$(e).data('jGrowl.instance').update(); 
			}, this.defaults.check);
			
			if ($.browser.msie && parseInt($.browser.version) < 7 && !window["XMLHttpRequest"]) {
				$(this.element).addClass('ie6');
			}
		},

		/** Shutdown jGrowl, removing it and clearing the interval **/
		shutdown:   function() {
			$(this.element).removeClass('jGrowl').find('div.jGrowl-notification').remove();
			clearInterval( this.interval );
		},
		
		close: 	function() {
			$(this.element).find('div.jGrowl-notification').each(function(){
				$(this).trigger('jGrowl.beforeClose');
			});
		}
	});
	
	/** Reference the Defaults Object for compatibility with older versions of jGrowl **/
	$.jGrowl.defaults = $.fn.jGrowl.prototype.defaults;

})(jQuery);

/*
 * jQuery Easing Compatibility v1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Adds compatibility for applications that use the pre 1.2 easing names
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

jQuery.extend( jQuery.easing,
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
	expoin: function(x, t, b, c, d) {
		return jQuery.easing.easeInExpo(x, t, b, c, d);
	},
	expoout: function(x, t, b, c, d) {
		return jQuery.easing.easeOutExpo(x, t, b, c, d);
	},
	expoinout: function(x, t, b, c, d) {
		return jQuery.easing.easeInOutExpo(x, t, b, c, d);
	},
	bouncein: function(x, t, b, c, d) {
		return jQuery.easing.easeInBounce(x, t, b, c, d);
	},
	bounceout: function(x, t, b, c, d) {
		return jQuery.easing.easeOutBounce(x, t, b, c, d);
	},
	bounceinout: function(x, t, b, c, d) {
		return jQuery.easing.easeInOutBounce(x, t, b, c, d);
	},
	elasin: function(x, t, b, c, d) {
		return jQuery.easing.easeInElastic(x, t, b, c, d);
	},
	elasout: function(x, t, b, c, d) {
		return jQuery.easing.easeOutElastic(x, t, b, c, d);
	},
	elasinout: function(x, t, b, c, d) {
		return jQuery.easing.easeInOutElastic(x, t, b, c, d);
	},
	backin: function(x, t, b, c, d) {
		return jQuery.easing.easeInBack(x, t, b, c, d);
	},
	backout: function(x, t, b, c, d) {
		return jQuery.easing.easeOutBack(x, t, b, c, d);
	},
	backinout: function(x, t, b, c, d) {
		return jQuery.easing.easeInOutBack(x, t, b, c, d);
	}
});
