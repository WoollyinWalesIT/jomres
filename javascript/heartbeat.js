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