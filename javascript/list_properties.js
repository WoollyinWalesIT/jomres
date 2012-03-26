function toggle_review_div(uid,property_name)
	{
	div_id = "#property_reviews"+uid;
	jomresJquery( div_id ).dialog({
		resizable: false,
		height: 500,
		width : 800,
		modal : true,
		resizable: true,
		open: function() 
			{
			jomresJquery.get(live_site_ajax+"&task=show_property_reviews&property_uid="+uid,
			function(data){
				jomresJquery('#property_reviews'+uid).html(data);
				jomresJquery('.star').rating();
				});
			}
		});
	/* closes the dialog when you click elsewhere on the page. Modal in the dialog options must be set to True*/
	jomresJquery('.ui-widget-overlay').live("click", function() {
		//Close the dialog
		jomresJquery(div_id).dialog("close");
	});
	};
	
	



	
	
function shortlist(property_uid){
	jomresJquery.get(live_site_ajax+"&task=ajax_shortlist&property_uid="+property_uid, function(data) {
		jomresJquery('#shortlist_'+property_uid).html(data);
		});
	}

var killScroll = false; // IMPORTANT
var last_scrolled_id = 0;
function lastAddedLiveFunc() 
	{
	id = jomresJquery(".jomres_property_list_propertywrapper:last").attr("id");
	if (id != last_scrolled_id){
		jomresJquery.get(live_site_ajax+"&task=ajax_list_properties&nofollowtmpl&lastID="+id,
			function(data){
				if (data != "") {
				jomresJquery(".jomres_property_list_propertywrapper:last").after(data);
				}
			killScroll = false; // IMPORTANT - Make function available again.
			var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
			jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled",bol);
			last_scrolled_id = id;
			//console.log(last_scrolled_id);
			});
		}
	};  

jomresJquery(window).scroll(function(){
	if (jomresJquery(window).height() + jomresJquery(window).scrollTop() >= jomresJquery(document).height()-600) {
		if (killScroll == false) { // IMPORTANT - Keeps the loader from fetching more than once.
			killScroll = true; // IMPORTANT - Set killScroll to true, to make sure we do not trigger this code again before it's done running.
			lastAddedLiveFunc();
			}
		}
	});


jomresJquery(".plist-button").livequery(function() {
	jomresJquery(this).button();
	jomresJquery(this).show();
	});

jomresJquery(".plist-button-last").livequery(function() {
	jomresJquery(this).button();
	jomresJquery(this).show();
	});


jomresJquery(document).ready(function() {
	jomresJquery("input[type=checkbox][name=compare]").click(function() {
		var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
		jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled",bol);
		});
	});

function trigger_comparison(form) {
	var values = new Array();
	jomresJquery(":checkbox:checked").each(
	function() {
		values.push(jomresJquery(this).val());
		}
	);
	
	if (values.length > 1) {
		url = compare_url+"&property_uids="+values;
		window.location =url;
		}
	//	console.log(url);
	}
