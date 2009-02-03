/*
 * JHeartbeat 0.1.1 Beta
 * By Jason Levine (http://www.jasons-toolbox.com)
 * A heartbeat plugin for the jquery library to help keep sessions alive.
 */
 
 jQuery.jheartbeat = {

	options: {
		url: "heartbeat_default.asp",
		delay: 10000
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
			jQuery.extend(this.options, options);
		}
		if (onbeatfunction) {
			this.beatfunction = onbeatfunction;
		}

		// Add the HeartBeatDIV to the page
		jQuery("body").append("<div id=\"HeartBeatDIV\" style=\"display: none;\"></div>");
		this.timeoutobj.id = setTimeout("jQuery.jheartbeat.beat();", this.options.delay);
	},

	beat: function() {
		jQuery("#HeartBeatDIV").load(this.options.url);
		this.timeoutobj.id = setTimeout("jQuery.jheartbeat.beat();", this.options.delay);
		this.beatfunction();
	}
};