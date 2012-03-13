function toggle_review_div(uid,property_name)
	{
	div_id = "#property_reviews"+uid;
	jomresJquery( div_id ).dialog({
		title: property_name,
		width: 800,
		height: 500,
		show: 'slide',
		modal: true
		});
	};
	
var killScroll = false; // IMPORTANT
function lastAddedLiveFunc() 
	{
	jomresJquery.get(live_site_ajax+"&task=ajax_list_properties&nofollowtmpl&lastID="+jomresJquery(".jomres_property_list_propertywrapper:last").attr("id"),
	//alert (jomresJquery(".jomres_property_list_propertywrapper:last").attr("id"));
		function(data){
			if (data != "") {
			jomresJquery(".jomres_property_list_propertywrapper:last").after(data);
			
			}
		killScroll = false; // IMPORTANT - Make function available again.
		var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
		jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled",bol);
		});
	
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

function trigger_comparison(form)
	{
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