/**
 * Bootstrap Tour Extended
 *
 *     Copyright (c) 2013 FG Ribreau (@fgribreau)
 *     Licensed under the MIT, GPL licenses.
 * @ignore
*/

/**
 * (only for CoffeeScript)
 * @private
 * @ignore
*/

var __slice = [].slice,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

(function($, window) {
  var Backend, Cookie, LocalStorage, Memory, Tour, backend, document;
  document = window.document;
  Tour = (function() {
    /**
     * Create a tour
     * @param  {Object} options An optional option object (see #defaults)
     * @see Tour.defaults
     * @constructor
     * @return {Tour}
    */

    function Tour(options) {
      var _this = this;
      this._options = $.extend(true, {}, Tour.defaults, options);
      this._setupEvents();
      this.persistence = new backend[this._options.persistence in backend ? this._options.persistence : "Memory"](this._options);
      this._steps = [];
      this._initCurrentStep();
      this._onresize(function() {
        if (!_this.ended) {
          return _this._showStep(_this._current);
        }
      });
    }

    /**
     * Remove the Tour
    */


    Tour.prototype.dispose = function() {
      var _this = this;
      this._setState("current_step", null);
      this._setState("end", null);
      if (this._steps) {
        $.each(this._steps, function(i, s) {
          if ((s.element != null) && (s.element.popover != null)) {
            return s.element.popover("hide").removeData("popover");
          }
        });
      }
      $('.popover.bootstrap-tour, #bootstrap-tour-style, #bootstrap-tour-overlay').remove();
      $(document).off("click.bootstrap-tour, keyup.bootstrap-tour");
      this._evt.off();
      this.persistence.dispose();
      if (this._options.step) {
        $.each(this._options.step, function(k) {
          return _this._options.step[k] = null;
        });
      }
      return $.each(this._options, function(k) {
        return _this._options[k] = null;
      });
    };

    /**
     * Add a step to the tour
     * @param {Object} step An optional object that describe the step  (see #stepDefaults)
     * @return {Tour}
     * @see  Tour.stepDefaults
    */


    Tour.prototype.addStep = function(step) {
      this._steps.push($.extend({}, Tour.stepDefaults, step));
      return this;
    };

    /**
     * Start tour from current step
     * @param  {Boolean} force If force is set to `true` the tour will be forced to start
     * @return {Promise}       Promise that will be resolved when the step is shown
    */


    Tour.prototype.start = function(force) {
      var def,
        _this = this;
      if (force == null) {
        force = false;
      }
      def = $.Deferred();
      if (this.ended() && !force) {
        return def.reject("Tour ended").promise();
      }
      $(document).off("click.bootstrap-tour", ".popover.bootstrap-tour .next").on("click.bootstrap-tour", ".popover.bootstrap-tour .next", function(e) {
        e.preventDefault();
        if (!$(e.currentTarget).is(':not([disabled])')) {
          return;
        }
        return _this.next({
          trigger: 'popover'
        });
      });
      $(document).off("click.bootstrap-tour", ".popover.bootstrap-tour .prev").on("click.bootstrap-tour", ".popover.bootstrap-tour .prev", function(e) {
        e.preventDefault();
        if (!$(e.currentTarget).is(':not([disabled])')) {
          return;
        }
        return _this.prev({
          trigger: 'popover'
        });
      });
      $(document).off("click.bootstrap-tour", ".popover.bootstrap-tour .end").on("click.bootstrap-tour", ".popover.bootstrap-tour .end", function(e) {
        e.preventDefault();
        if (!$(e.currentTarget).is(':not([disabled])')) {
          return;
        }
        return _this.end({
          trigger: 'popover'
        });
      });
      this._setupKeyboardNavigation();
      this._showStep(this._current, def);
      return def.promise();
    };

    /**
     * Goto a step by its index
     * @param  {Number} index Step index
     * @return {Deferred}     The deferred will be resolved when the step `index` will be shown
    */


    Tour.prototype.gotoStep = function(index) {
      return this._when(this._mapTimes(index, this.next), this);
    };

    /**
     * Attach an event handler function for one event.
     * @param  {String}   event    A string containing one Bootstrap-tour event types, it can be "hide", "hidden", "show", "shown" or "skip". Each event can have a `:step{index}` path appended. For instance the event "shown:step0" will be triggered when the first step will be shown on screen.
     * @param  {String}   selector A selector string to filter the descendants of the selected elements that trigger the event.
     * @optional
     * @param  {String}   data     Data to be passed to the handler in event.data when an event is triggered.
     * @optional
     * @param  {Function} handler  A function to execute when the event is triggered.
     * @return {Tour}
    */


    Tour.prototype.on = function(event, selector, data, handler) {};

    /**
     * Attach a handler to an event. The handler is executed at most once.
     * @param {String} name      A string containing one Bootstrap-tour event types, such as "hide", "hidden", "show", "shown" or "skip".
     * @param {Mixed}  data      Data to be passed to the handler in `event.data` when an event is triggered.
     * @optional
     * @param {Function} handler A function to execute at the time the event is triggered.
     * @optional
     * @return {Tour}
     * see: #on
    */


    Tour.prototype.one = function(event, data, handler) {};

    /**
     * Remove an event handler.
     * @param  {String} event     Event name
     * @param  {Function} handler A handler function previously attached for the event(s), or the special value false.
     * @return {Tour}
    */


    Tour.prototype.off = function(event, handler) {};

    /**
     * Trigger an event on `Tour`
     * @param  {String} name Event name (e.g. "show", "shown", "hide", "hidden", "skip")
     * @optional
     * @param {Object} e Event object
     * @return {Tour}
    */


    Tour.prototype.trigger = function(name, e) {
      if (e == null) {
        e = {};
      }
      this._evt.triggerHandler(this._initEvent(name, e));
      if (e.step) {
        this._evt.triggerHandler(this._initEvent("" + name + ":step" + e.step.index, e));
      }
      return this;
    };

    /**
     * Hide current step and show next step
     * @param  {Object} (optional) Event object
     * @return {Promise} The promise will be resolved when the next step will be shown
    */


    Tour.prototype.next = function(e) {
      var def,
        _this = this;
      if (e == null) {
        e = {};
      }
      def = e && e.def ? e.def : $.Deferred();
      this._hideStep(this._current, {
        trigger: e.trigger
      }).always(function() {
        return _this._showNextStep(def);
      });
      return def.promise();
    };

    /**
     * Hide current step and show previous step
     * @param  {Object} (optional) Event object
     * @return {Promise} The promise will be resolved when the previous step will be shown
    */


    Tour.prototype.prev = function(trigger) {
      var def,
        _this = this;
      if (trigger == null) {
        trigger = "api";
      }
      def = $.Deferred();
      this._hideStep(this._current, {
        trigger: trigger
      }).always(function() {
        return _this._showPrevStep(def);
      });
      return def.promise();
    };

    /**
     * End the tour
     * @param  {String} (optional) trigger
     * @return {Promise} The promise will be resolved when the tour ended
    */


    Tour.prototype.end = function(trigger) {
      var def, e, step,
        _this = this;
      if (trigger == null) {
        trigger = "api";
      }
      def = $.Deferred();
      step = this._getStep(this._current);
      e = {
        step: step,
        trigger: trigger
      };
      this._hideStep(this._current, e).always(function() {
        _this._setState("end", "yes");
        $(document).off(".bootstrap-tour");
        _this.trigger("end", e);
        return def.resolve();
      });
      return def.promise();
    };

    /**
     * Verify if tour is enabled
     * @return {Boolean} true if the tour is ended
    */


    Tour.prototype.ended = function() {
      return !!this._getState("end");
    };

    /**
     * Restart the tour
     * @return {Promise} The promise will be resolved when the first step will be shown
    */


    Tour.prototype.restart = function() {
      this._setState("current_step", null);
      this._setState("end", null);
      this._setCurrentStep(0);
      return this.start();
    };

    /**
     * Switch debug mode
     * @param  {Boolean} activated If true, all `Tour` emitted events will be displayed in console
     * @return {Tour}
    */


    Tour.prototype.debugMode = function(activated) {
      var evtName, _i, _len, _ref;
      _ref = ["show", "shown", "hide", "hidden", "end"];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        evtName = _ref[_i];
        this.on(evtName, $.proxy(this._debug, this, evtName));
      }
      return this;
    };

    /**
     * Get a step by its indice
     * @param  {Number} i
     * @return {Object}
     * @private
    */


    Tour.prototype._getStep = function(i) {
      if (this._steps[i] != null) {
        return $.extend(this._steps[i], {
          index: i,
          next: i === this._steps.length - 1 ? -1 : i + 1,
          prev: i - 1
        });
      }
    };

    /**
     * Returns an element
     * @param  {Mixed} el element
     * @return {jQuery}      a jQuery object
     * @private
    */


    Tour.prototype._getElement = function(el) {
      if (typeof el === 'function') {
        el = el();
      }
      if (!el) {
        return $();
      }
      if (el instanceof jQuery) {
        return el;
      }
      return $(el);
    };

    /**
     * Show the next step
     * @param  {Deferred} def the deferred will be resolved when the step is shown
     * @private
    */


    Tour.prototype._showNextStep = function(def) {
      var step;
      step = this._getStep(this._current);
      return this._showStep(step.next, def);
    };

    /**
     * Show the previous step
     * @param  {Deferred} def the deferred will be resolved when the step is shown
     * @private
    */


    Tour.prototype._showPrevStep = function(def) {
      var step;
      step = this._getStep(this._current);
      return this._showStep(step.prev, def);
    };

    /**
     * Show the specified step
     * @param  {Number} i     Step index
     * @param  {Deferred} def A deferred that will be resolved when the popover will be shown or reject if the step was not found
     * @private
    */


    Tour.prototype._showStep = function(i, def) {
      var defs, direction, step,
        _this = this;
      step = this._getStep(i);
      direction = i >= this._current ? "next" : "prev";
      if (!step) {
        if (def) {
          def.reject("Step " + i + " undefined");
        }
        return;
      }
      this._setCurrentStep(i);
      if (step.path !== "" && document.location.pathname !== step.path && document.location.pathname.replace(/^.*[\\\/]/, '') !== step.path) {
        debugger;
        document.location.href = step.path;
        return;
      }
      defs = [];
      this.trigger("show", {
        step: step,
        element: false,
        defs: defs
      });
      return $.when.apply($, defs).always(function() {
        var $el;
        $el = _this._getElement(step.element);
        if ($el.length === 0 || !$el.is(":visible")) {
          _this.trigger("skip", {
            element: $el,
            step: step
          });
          _this[direction]({
            def: def
          });
          return;
        }
        _this._showPopover(step, i);
        _this.trigger("shown", {
          step: step,
          element: $el
        });
        if (def) {
          return def.resolve();
        }
      });
    };

    /**
     * Hide the specified step
     * @param  {Number} i  Step index
     * @param  {Event} e   Event
     * @return {Promise}
     * @optional
     * @private
    */


    Tour.prototype._hideStep = function(i, e) {
      var $el, def, defs, step,
        _this = this;
      if (e == null) {
        e = {};
      }
      def = $.Deferred();
      step = e.step = this._getStep(i);
      $el = e.element = this._getElement(step.element);
      defs = [];
      this.trigger("hide", $.extend(e, {
        defs: defs
      }));
      $.when.apply($, defs).always(function() {
        if (step.reflex) {
          $el.css("cursor", "").off("click.tour");
        }
        $el.popover("hide");
        _this._toggleOverlay($el, false);
        _this.trigger("hidden", e);
        return def.resolve();
      });
      return def.promise();
    };

    /**
     * Debug callback
     * @param  {[type]} evtName [description]
     * @param  {[type]} e       [description]
     * @return {[type]}         [description]
     * @private
    */


    Tour.prototype._debug = function(evtName, e) {
      return console.log(evtName, e.step.index, {
        details: e
      });
    };

    /**
     * Persist the state
     * @param {String} key
     * @param {Mixed} value
     * @private
    */


    Tour.prototype._setState = function(key, value) {
      return this.persistence.setState(this._options, key, value);
    };

    /**
     * Get the persisted state
     * @param {String} key
     * @private
    */


    Tour.prototype._getState = function(key) {
      var value;
      value = this.persistence.getState(this._options, key);
      return value;
    };

    /**
     * Init the current step variable
     * @private
    */


    Tour.prototype._initCurrentStep = function() {
      this._current = this._getState("current_step");
      if (!this._current || this._current === "null") {
        return this._current = 0;
      } else {
        return this._current = parseInt(this._current, 10);
      }
    };

    /**
     * Set and persist the current step
     * @param {Number} stepIndex
     * @ignore
    */


    Tour.prototype._setCurrentStep = function(stepIndex) {
      this._current = stepIndex;
      return this._setState("current_step", stepIndex);
    };

    /**
     * [_setupEvents description]
     * @return {[type]} [description]
     * @private
    */


    Tour.prototype._setupEvents = function() {
      this._evt = $('<div/>');
      this.on = this._chainable(this._evt.on, this._evt);
      this.off = this._chainable(this._evt.off, this._evt);
      return this.one = this._chainable(this._evt.one, this._evt);
    };

    /**
     * Create a new (augmented) jQuery Event
     *
     * @description The augmented jQuery Event object contains:
     *  * `{String}` `trigger`:               `api | popover | reflex | keyboard`
     *  * `{Object}` `step`:                  the current step
     *  * `{jQuery}` `element`:               the current step element
     *  * `{Function}` `setPromise(promise)`: set the
     *  Note that `onShow` Event does not provides the `element` attribute use `onShown` instead)
     * @private
     * @see Tour.event
     * @param  {String} name  Event name
     * @param  {Object} opt   Event attributes
     * @optional
     * @return {jQuery.Event} Augmented jQuery.Event
    */


    Tour.prototype._initEvent = function(name, opt) {
      var defs, e, step;
      if (name == null) {
        name = "";
      }
      if (opt == null) {
        opt = {};
      }
      e = jQuery.Event(name);
      $.extend(e, opt);
      if (e.defs) {
        defs = e.defs;
        e.setPromise = function(promise) {
          return defs.push(promise);
        };
        delete e.defs;
      }
      if (!e.trigger) {
        e.trigger = "api";
      }
      if (!e.step) {
        step = e.step = this._getStep(this._current);
      }
      if (name === "show" || name.indexOf("show:") === 0) {
        delete e.element;
      } else if (step) {
        e.element = this._getElement(step.element);
      }
      return e;
    };

    /**
     * Toggle the overlay
     * @param  {[type]} $el     [description]
     * @param  {[type]} display [description]
     * @private
    */


    Tour.prototype._toggleOverlay = function($el, display) {
      var $overlay, pos;
      this._injectOverlay();
      $overlay = $('#bootstrap-tour-overlay');
      if (!display) {
        $el.removeClass('bootstrap-tour-expose').css('z-index', '1');
        pos = $el.data('old-pos');
        if (pos) {
          $el.css('position', pos).removeData('old-pos');
        }
        $('.popover.bootstrap-tour').removeClass('expose');
        $overlay.hide();
        return;
      }
      $el.addClass('bootstrap-tour-expose').css('z-index', '99999');
      pos = $el.css('position');
      if (pos !== 'absolute') {
        $el.data('old-pos', pos);
        $el.css('position', 'relative');
      }
      $('.popover.bootstrap-tour').addClass('expose').css('z-index', '99999');
      return $overlay.width($(document.body).outerWidth()).height(Math.max($(window).height(), $(document.body).outerHeight())).show();
    };

    /**
     * Inject the overlay
     * @private
     * @return {[type]} [description]
    */


    Tour.prototype._injectOverlay = function() {
      if ($('style#bootstrap-tour-style').length > 0) {
        return;
      }
      $("<style id='bootstrap-tour-style' type='text/css'>" + (this._options.style()) + "</style>").appendTo('head');
      return $("<div id='bootstrap-tour-overlay'></div>").appendTo('body');
    };

    /**
     * Show step popover
     * @private
     * @param  {Object} step
     * @param  {Number} i    step number
    */


    Tour.prototype._showPopover = function(step, i) {
      var $el, $tmpl, options, popover, tip,
        _this = this;
      $el = this._getElement(step.element);
      options = $.extend(true, {}, this._options);
      step.content = this._getProp(step, options.step, "content", step);
      if (step.options) {
        $.extend(options, step.options);
      }
      if (this._getProp(step, options.step, "reflex", step)) {
        $el.css("cursor", "pointer").on("click.tour", function(e) {
          return _this.next({
            trigger: 'reflex'
          });
        });
      }
      step.content = this._getPropNotEmpty(step, options.step, "content", step);
      step.title = this._getPropNotEmpty(step, options.step, "title", step);
      $tmpl = $(this._getProp(step, options.step, "template", step)).wrapAll('<div/>').parent();
      if (step.prev === -1) {
        $tmpl.find('.prev').remove();
      }
      if (step.next === -1) {
        $tmpl.find('.next').remove();
      }
      $el.popover({
        placement: step.placement,
        trigger: "manual",
        template: $tmpl.html(),
        title: step.title || " ",
        content: step.content || " ",
        html: true,
        animation: step.animation
      });
      $tmpl.remove();
      popover = $el.data("popover");
      tip = popover.tip().addClass("bootstrap-tour " + options.name + "-step" + i + " " + options.step.addClass + " " + step.addClass);
      popover.show();
      this._toggleOverlay($el, this._getProp(step, options.step, "overlay", step));
      this._reposition(tip);
      return this._scrollIntoView(tip);
    };

    /**
     * Prevent popups from crossing over the edge of the window
     * @param  {jQuery} tip popover tip
     * @private
    */


    Tour.prototype._reposition = function(tip) {
      var offsetBottom, offsetRight, tipOffset;
      tipOffset = tip.offset();
      offsetBottom = $(document).outerHeight() - tipOffset.top - $(tip).outerHeight();
      if (offsetBottom < 0) {
        tipOffset.top = tipOffset.top + offsetBottom;
      }
      offsetRight = $(document).outerWidth() - tipOffset.left - $(tip).outerWidth();
      if (offsetRight < 0) {
        tipOffset.left = tipOffset.left + offsetRight;
      }
      if (tipOffset.top < 0) {
        tipOffset.top = 0;
      }
      if (tipOffset.left < 0) {
        tipOffset.left = 0;
      }
      return tip.offset(tipOffset);
    };

    /**
     * Scroll to the popup if it is not in the viewport
     * @param  {jQuery} tip popover tip
     * @private
    */


    Tour.prototype._scrollIntoView = function(tip) {
      var tipRect;
      tipRect = tip.get(0).getBoundingClientRect();
      if (!(tipRect.top > 0 && tipRect.bottom < $(window).height() && tipRect.left > 0 && tipRect.right < $(window).width())) {
        return tip.get(0).scrollIntoView(true);
      }
    };

    /**
     * When the user resize the window
     * @private
     * @param  {Function} fn      Callback function
     * @param  {Number}   timeout How much time to wait after the last `resize` event before firing fn
    */


    Tour.prototype._onresize = function(fn, timeout) {
      return $(window).resize(function() {
        clearTimeout(timeout);
        return timeout = setTimeout(fn, 100);
      });
    };

    /**
     * Activate if necessary the keyboard navigation
     * @private
    */


    Tour.prototype._setupKeyboardNavigation = function() {
      if (!this._options.keyboard) {
        return;
      }
      return $(document).on("keyup.bootstrap-tour", $.proxy(this._onKeyUp, this));
    };

    /**
     * When the key is up
     * @param  {Event} e jQuery event
     * @todo Handle escape key -> end the tour
     * @private
    */


    Tour.prototype._onKeyUp = function(e) {
      var step;
      if (!e.which) {
        return;
      }
      step = this._getStep(this._current);
      if (!step) {
        return;
      }
      switch (e.which) {
        case 39:
          e.preventDefault();
          if (step.next !== -1 && this._current < this._steps.length - 1) {
            return this.next({
              trigger: "keyboard"
            });
          }
          break;
        case 37:
          e.preventDefault();
          if (step.prev !== -1 && this._current > 0) {
            return this.prev({
              trigger: "keyboard"
            });
          }
      }
    };

    /**
     * Execute sequentially the array of function
     * @param  {Array} arr  an array of function that return a promise
     * @param  {Object} ctx context
     * @private
     * @return {Deferred}
    */


    Tour.prototype._when = function(arr, ctx) {
      var def, next;
      def = $.Deferred();
      next = function() {
        var fn;
        fn = arr.shift();
        if (!fn) {
          return def.resolve();
        }
        return fn.call(ctx).then(next);
      };
      next();
      return def.promise();
    };

    /**
     * Returns an array of `ipt` `times` times
     * @private
     * @param  {[type]} times [description]
     * @param  {[type]} ipt   [description]
     * @return {[type]}       [description]
    */


    Tour.prototype._mapTimes = function(times, ipt) {
      var o;
      o = [];
      while (times--) {
        o.push(ipt);
      }
      return o;
    };

    /**
     * Get the a non `falsy` property `prop` from `obj1` if present or from obj2 otherwise and transfer
     * arguments `args` if the property is a function
     *
     * @param  {Object} obj1    First object
     * @param  {Object} obj2    Second Object
     * @param  {String} prop    Property name
     * @param  {Array} args...  Array of arguments
     * @optional
     * @private
     * @return {Mixed}
    */


    Tour.prototype._getPropNotEmpty = function() {
      var args, obj1, obj2, prop, test;
      obj1 = arguments[0], obj2 = arguments[1], prop = arguments[2], args = 4 <= arguments.length ? __slice.call(arguments, 3) : [];
      test = function(o, prop) {
        return o && o.hasOwnProperty(prop) && !!o[prop];
      };
      return this.__getPropFn.apply(this, [test, obj1, obj2, prop].concat(__slice.call(args)));
    };

    /**
     * Get the a property `prop` from `obj1` if present or from obj2 otherwise and transfer
     * arguments `args` if the property is a function
     * @param  {Object} obj1    First object
     * @param  {Object} obj2    Second Object
     * @param  {String} prop    Property name
     * @param  {Array} args...  Array of arguments
     * @optional
     * @private
     * @return {Mixed}
    */


    Tour.prototype._getProp = function() {
      var args, obj1, obj2, prop, test;
      obj1 = arguments[0], obj2 = arguments[1], prop = arguments[2], args = 4 <= arguments.length ? __slice.call(arguments, 3) : [];
      test = function(o, prop) {
        return o && o.hasOwnProperty(prop);
      };
      return this.__getPropFn.apply(this, [test, obj1, obj2, prop].concat(__slice.call(args)));
    };

    /**
     * Get the a property `prop` from `obj1` if present or from obj2 otherwise and transfer
     * arguments `args` if the property is a function
     * @param  {Function} fn    The tester function
     * @param  {Object} obj1    First object
     * @param  {Object} obj2    Second Object
     * @param  {String} prop    Property name
     * @param  {Array} args...  Array of arguments
     * @optional
     * @private
     * @return {Mixed}
    */


    Tour.prototype.__getPropFn = function() {
      var args, fn, obj1, obj2, prop;
      fn = arguments[0], obj1 = arguments[1], obj2 = arguments[2], prop = arguments[3], args = 5 <= arguments.length ? __slice.call(arguments, 4) : [];
      if (fn(obj1, prop)) {
        return this._execOrGet.apply(this, [obj1[prop]].concat(__slice.call(args)));
      } else if (fn(obj2, prop)) {
        return this._execOrGet.apply(this, [obj2[prop]].concat(__slice.call(args)));
      } else {
        return null;
      }
    };

    /**
     * Get the value of `val`, it handles the case when `val` is a function
     * @param  {Mixed} val Value
     * @param  {Array} arg Array of arguments
     * @optional
     * @private
     * @return {Mixed}     `val` value
    */


    Tour.prototype._execOrGet = function() {
      var args, val;
      val = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      if ($.isFunction(val)) {
        return val.apply(null, args);
      } else {
        return val;
      }
    };

    /**
     * Make a function chainable inside `Tour`
     * @param  {Function} fn  function
     * @param  {Object}   ctx Context
     * @return {Function}     Chainable function that returns the current Tour instance
     * @private
    */


    Tour.prototype._chainable = function(fn, ctx) {
      var _this = this;
      return function() {
        var args;
        args = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
        fn.apply(ctx, args);
        return _this;
      };
    };

    /**
     * `Tour` constructor `option` defaults
     * @type {Object} defaults
    */


    Tour.defaults = {
      /**
       * name
       *
       * @description  This option is used to build the name of the cookie where the tour state is stored. You can initialize several tours with different names in the same page and application.
       * @type {String} name
      */

      name: "tour",
      /**
       * How to handle persistence
       *
       * @type {String} Backend name
       * @description The value can be "Cookie" | "LocalStorage" | "Memory" (default "Memory")
       *              Note: the "Cookie" backend requires jquery.cookie.js
      */

      persistence: "Memory",
      /**
       * Keyboard navigation
       * @type {Boolean} keyboard true if activated, false otherwise
      */

      keyboard: true,
      /**
       * Specify a function that return a css string
       * @type   {Function}
       * @return {String} css code that will be injected if `overlay` is used
      */

      style: function() {
        return ".popover.bootstrap-tour.expose{z-index:99998;}\n#bootstrap-tour-overlay{background:rgba(0,0,0,0.5);display:none;width:100%;height:100%;position:absolute; top:0; left:0; z-index:99997;}";
      },
      /**
       * # Global step parameters
       *
       * Each of the following parameters can be overriden at **each** step level.
       * @type {Object}
      */

      step: {
        /**
         * Default step title
         * @type {String|Function(step)}
        */

        title: null,
        /**
         * Default step content
         * @type {String|Function(step)}
        */

        content: null,
        /**
         * Css class to add to the .popover element
         * @description Note: if `addClass` is defined at the step level.
         *              The two defined `addClass` will be taken into account in the popover
         * @type {String}
        */

        addClass: "",
        /**
         * Globally enable an overlay for each step element, `true` if activated, `false` otherwise
         * @type {Boolean}
         * @todo Handle Bootstrap modal, pull requests are welcome !
        */

        overlay: false,
        /**
         * Globally enable the reflex mode, click on the element to continue the tour
         * @type {Boolean}
        */

        reflex: false,
        /**
         * Bootstrap Tour step-wide template
         * @description The template should contain `.prev`, `.next` and `.end`
         *              will be removed at runtime by Bootstrap Tour if necessary.
         *              The template function can be an underscore template or $.tmpl ...
         *
         * @param  {Object} step The step to render
         * @type   {Function}
         * @return {String}      A string containing the HTML that will be injected into the popover
        */

        template: function(step) {
          return "<div class=\"popover\">\n  <div class=\"arrow\"></div>\n  <div class=\"popover-inner\"><h3 class=\"popover-title\"></h3>\n    <div class=\"popover-content\"></div>\n    <div class=\"modal-footer\">\n    <a href=\"#\" class=\"btn btn-warning end pull-left\">"+tour_end+"</a>\n    <span><a href=\"" + step.prev + "\" class=\"btn prev\"><i class=\"icon-arrow-left\"></i> "+tour_prev+"</a>\n    <a href=\"" + step.next + "\" class=\"btn btn-primary pull-right next\">"+tour_next+" <i class=\"icon-arrow-right\"></i></a></span>\n    </div>\n  </div>\n</div>";
        }
      }
    };

    /**
     * addStep default parameters
     * @type {Object}
    */


    Tour.stepDefaults = {
      /**
       * Path to the page on which the step should be shown. this allows you
       * to build tours that span several pages!
       * @type {String}
      */

      path: "",
      /**
       * HTML element on which the step popover should be shown.
       * @type {jQuery-object|Css-Selector|Function()}
      */

      element: null,
      /**
       * How to position the popover - top | bottom | left | right.
       * @type {String}
      */

      placement: "right",
      /**
       * Step title
       * @type {String|Function(step)}
      */

      title: "",
      /**
       * Step content
       * @description Note: defining `step.title` and `step.content` functions at the tour level
       *              allow the developper to separate step title/content from the step behaviour.
       * @type {String|Function(step)}
      */

      content: "",
      /**
       * Apply a css fade transition to the tooltip.
       * @type {Boolean}
      */

      animation: true,
      /**
       * Enable the reflex mode, click on the element to continue the tour
       * @type {Boolean}
      */

      reflex: false,
      /**
       * Css class to add to the .popover element for this step only
       * @type {String}
      */

      addClass: ""
      /**
       * ...
       * @ignore
      */

    };

    return Tour;

  })();
  /**
   * Ignore backends
   * @ignore
  */

  Backend = (function() {
    function Backend() {}

    Backend.prototype.dispose = function() {};

    Backend.prototype.setState = function(options, key, value) {};

    Backend.prototype.getState = function(options, key) {};

    return Backend;

  })();
  Memory = (function(_super) {
    __extends(Memory, _super);

    function Memory(options) {
      this.ns = "__db_" + options.name + "__";
      window[this.ns] = {};
    }

    Memory.prototype._avail = function() {
      return window.hasOwnProperty(this.ns);
    };

    Memory.prototype.setState = function(options, key, value) {
      if (!this._avail()) {
        return;
      }
      return window[this.ns][key] = value;
    };

    Memory.prototype.getState = function(options, key) {
      if (!this._avail()) {
        return;
      }
      return window[this.ns][key] || null;
    };

    Memory.prototype.dispose = function() {
      return delete window[this.ns];
    };

    return Memory;

  })(Backend);
  Cookie = (function(_super) {
    __extends(Cookie, _super);

    function Cookie(options) {
      this.ns = "" + options.name + "_";
    }

    Cookie.prototype.setState = function(options, key, value) {
      return $.cookie("" + this.ns + key, value, {
        expires: 36500,
        path: '/'
      });
    };

    Cookie.prototype.getState = function(options, key) {
      return $.cookie("" + this.ns + key);
    };

    return Cookie;

  })(Backend);
  LocalStorage = (function(_super) {
    __extends(LocalStorage, _super);

    function LocalStorage(options) {
      this.ns = "" + options.name + "_";
    }

    LocalStorage.prototype.setState = function(options, key, value) {
      return window.localStorage.setItem("" + this.ns + key, JSON.stringify(value));
    };

    LocalStorage.prototype.getState = function(options, key) {
      var err, item;
      item = null;
      try {
        item = window.localStorage.getItem("" + this.ns + key);
        return JSON.parse(item);
      } catch (_error) {
        err = _error;
        console.error(err, item);
        return null;
      }
    };

    return LocalStorage;

  })(Backend);
  backend = {
    Memory: Memory,
    Cookie: Cookie,
    LocalStorage: LocalStorage
  };
  return window.Tour = Tour;
})(jQuery, window);

/*
//@ sourceMappingURL=bootstrap-tour.js.map
*/