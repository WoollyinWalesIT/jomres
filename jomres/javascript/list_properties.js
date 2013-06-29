function toggle_review_div(uid, property_name) {
	div_id = "#property_reviews" + uid;
	jomresJquery(div_id).dialog({
		resizable: false,
		height: 500,
		width: 800,
		modal: true,
		resizable: true,
		open: function () {
			jomresJquery.get(live_site_ajax + "&task=show_property_reviews&property_uid=" + uid,
				function (data) {
					jomresJquery('#property_reviews' + uid).html(data);
					jomresJquery('.star').rating();
				});
		}
	});
	/* closes the dialog when you click elsewhere on the page. Modal in the dialog options must be set to True*/
	jomresJquery('.ui-widget-overlay').live("click", function () {
		//Close the dialog
		jomresJquery(div_id).dialog("close");
	});
};

function shortlist(property_uid) {
	jomresJquery.get(live_site_ajax + "&task=ajax_shortlist&property_uid=" + property_uid, function (data) {
		jomresJquery('#shortlist_' + property_uid).html(data);
	});
}

var killScroll = false; // IMPORTANT
var last_scrolled_id = 0;
function lastAddedLiveFunc() {
	id = jomresJquery(".jomres_property_list_propertywrapper:last").attr("id");
	if (id != last_scrolled_id) {
		var animation = '<div id="animation"><img src="' + path_to_jomres_dir + 'jomres/images/ajax_animation/broken_circle.gif" /></div>';
		jomresJquery(".jomres_property_list_propertywrapper:last").after(animation);
		jomresJquery.get(live_site_ajax + "&task=ajax_list_properties&nofollowtmpl&lastID=" + id,
			function (data) {
				jomresJquery("#animation").remove();
				if (data != "") {
					jomresJquery(".jomres_property_list_propertywrapper:last").after(data);
					bind_data_toggle();
				}

				killScroll = false; // IMPORTANT - Make function available again.
				var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
				jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled", bol);
				last_scrolled_id = id;
				jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: 'sw', delayOut: 100});
				//console.log(last_scrolled_id);
			});
	}
};

jomresJquery(window).scroll(function () {
	if (jomresJquery(window).height() + jomresJquery(window).scrollTop() >= jomresJquery(document).height() - 600) {
		if (killScroll == false) { // IMPORTANT - Keeps the loader from fetching more than once.
			killScroll = true; // IMPORTANT - Set killScroll to true, to make sure we do not trigger this code again before it's done running.
			lastAddedLiveFunc();
		}
	}
});


jomresJquery(document).ready(function () {
	jomresJquery("input[type=checkbox][name=compare]").click(function () {
		var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
		jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled", bol);
	});
	bind_data_toggle();
});

function trigger_comparison(form) {
	var values = new Array();
	jomresJquery(":checkbox:checked").each(
		function () {
			values.push(jomresJquery(this).val());
		}
	);

	if (values.length > 1) {
		url = compare_url + "&property_uids=" + values;
		window.location = url;
	}
	//	console.log(url);
}
