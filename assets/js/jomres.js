if ('undefined' != typeof(jQuery)) {
	var jomresJquery = jQuery.noConflict();
};

//vars
var jr_deferred = jomresJquery.Deferred();
var killScroll = false; // IMPORTANT
var last_scrolled_id = 0;

jomresJquery(document).ready(function () {

	// https://jquery.com/upgrade-guide/3.5/
	//  redefining jQuery.htmlPrefilter after loading jQuery:
	var rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi;
	jQuery.htmlPrefilter = function( html ) {
		return html.replace( rxhtmlTag, "<$1></$2>" );
	};

	jomresJquery.ajaxSetup({ cache: false });

	if (navigator.appName == 'Microsoft Internet Explorer') {
		window.onerror = Block_Error;
	}

	jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: jomresJquery.fn.tipsy.autoNS, delayOut: 100});

	jomresJquery.fn.fadeThenSlideToggle = function (speed, easing, callback) {
		if (this.is(":hidden")) {
			// temp disabled, we'll use fade in/out for now as sliding doesn't work on ipad
			//return this.slideDown(speed, easing).fadeTo(speed, 1, easing, callback);
			return this.fadeIn();
		} else {
			//return this.fadeTo(speed, 0, easing).slideUp(speed, easing, callback);
			return this.fadeOut();
		}
	}
	
  jomresJquery.fn.editableform.buttons  = ''+
      '<button type="submit" class="btn btn-primary editable-submit"><i class="fa fa-check"></i></button>'+
      '<button type="button" class="btn editable-cancel"><i class="fa fa-window-close"></i></button>';
	  
});

jomresJquery('.copy_to_clipboard').on("click",function(e){
	e.preventDefault();
});

function jomresCopyToClipboard(input_id) {

	var copyText = document.getElementById(input_id);
	copyText.select();
	document.execCommand("copy");
}



function Block_Error() {
	return true;
};

function toggle_button_class(id) {
	var isActive = jomresJquery(id).hasClass('active');
	if (isActive)
		{
		jomresJquery(id).removeClass('active btn-success');
		}
	else
		{
		jomresJquery(id).addClass('active btn-success');
		}
}

function make_datatable(table_id, pagetitle, livesite, ajaxurl, showTools) {
	bProcessing = false;
	bServerSide = false;
	dt_ajax_options = false;
	if (typeof ajaxurl !== 'undefined' && ajaxurl != '') {
		bProcessing = true;
		bServerSide = true;
		dt_ajax_options = {
			"url": ajaxurl,
			"data": function (d) {
				d.jr_search = d.search;
				d.jr_order = d.order;
				delete d.search;
				delete d.order;
				}
			}
		}
	if (typeof showTools === 'undefined')
		{
		showTableTools = true;
		}
	else
		{
		showTableTools = showTools;
		}
		
	if (showTableTools)
		{
		if (jomres_template_version == "bootstrap3"){
			sDomm = "<'row'<'col-xs-4'lr><'col-xs-4'B><'col-xs-4'f>>t<'row'<'col-xs-4'i><'col-xs-8'p>>";
			}
		else {
			sDomm = "<'row-fluid'<'span4'lr><'span4'B><'span4'f>>t<'row-fluid'<'span4'i><'span8'p>>";
			}
		}
	else
		{
		if (jomres_template_version == "bootstrap3"){
			sDomm = "<'row'<'col-xs-4'l><'col-xs-2'r><'col-xs-6'f>>t<'row'<'col-xs-4'i><'col-xs-8'p>>";
			}
		else {
			sDomm = "<'row-fluid'<'span4'r><'span2'r><'span6'f>>t<'row-fluid'<'span4'i><'span8'p>>";
			}
		
		}
	var oTable = jomresJquery('#' + table_id).dataTable({
		"processing": bProcessing,
		"serverSide": bServerSide,
		"ajax": dt_ajax_options,
		"jQueryUI": false,
		"stateSave": true,
		"autoWidth": false,
		"dom": sDomm,
		"order": [[ 0, "desc" ]],
		"searchDelay": 1000,
		"deferRender": true,
		"language": {
			"decimal":			'',
			"emptyTable":		dataTables_sEmptyTable,
			"info":				dataTables_sInfo,
			"infoEmpty":		dataTables_sInfoEmpty,
			"infoFiltered":		dataTables_sInfoFiltered,
			"infoPostFix":		dataTables_sInfoPostFix,
			"thousands": 		dataTables_sInfoThousands,
			"lengthMenu":		dataTables_sLengthMenu,
			"loadingRecords":	dataTables_sLoadingRecords,
			"processing":		dataTables_sProcessing,
			"search":			dataTables_sSearch,
			"zeroRecords":		dataTables_sZeroRecords,
			"paginate": {
				"first":	dataTables_sFirst,
				"last":		dataTables_sLast,
				"next":     dataTables_sNext,
				"previous": dataTables_sPrevious
			},
			"aria": {
				"sortAscending":  dataTables_sSortAscending,
				"sortDescending": dataTables_sSortDescending
			},
			"buttons": {
				"colvis": dataTables_sColVis
			}
		},
		"responsive": {
			"details": {
				"type": "inline"
			}
		},
		"buttons": [
			{
				"extend": "copy",
				"exportOptions": {
					"columns": ':visible'
				}
			},
			{
				"extend": "csv",
				"charset": "utf8",
				"exportOptions": {
					"columns": ':visible'
				}
			},
			{
				"extend": "excel",
				"title": pagetitle,
				"charset": "utf16le",
				"exportOptions": {
					"columns": ':visible'
				}
			},
			{
				"extend": "pdf",
				"charset": "utf8",
				"orientation": "landscape",
				"title": pagetitle,
				"exportOptions": {
					"columns": ':visible'
				}
			},
			{
				"extend": "print",
				"title": pagetitle,
				"autoPrint": false,
				"exportOptions": {
					"columns": ':visible'
				}
			},
			{
				"extend": "colvis",
				//"columns": ":gt(0)"
			}
		]
	});
}

function dataTableSetHiddenColumns(table_id, column_ids)
	{
	var oTable = jomresJquery('#' + table_id).DataTable();
	var hiddenColumnsSet = localStorage.getItem( 'hiddenColumnsSet' + table_id);
	if (!hiddenColumnsSet && column_ids.constructor === Array && column_ids.length > 0 )
		{
		oTable.columns(column_ids).visible(false,false);
		jomresJquery( oTable.columns(column_ids).header() ).addClass( 'none' );
		}
	else
		{
		oTable.columns().every( function () {
			if (this.visible() === false ) 
				{
				this.visible(false,false);
				jomresJquery( this.header() ).addClass( 'none' );
				}
			else
				{
				this.visible(true,false);
				jomresJquery( this.header() ).removeClass( 'none' );
				}
			});
		}
	oTable.responsive.rebuild();
	oTable.responsive.recalc();
	localStorage.setItem( 'hiddenColumnsSet' + table_id, true);
}

/* Credit : http://www.developersnippets.com/2009/05/20/evaluate-scripts-while-working-on-ajax-requests/ */
function parse_ajax_returned_scripts(_source) {
	var source = _source;
	var scripts = new Array();

	// Strip out tags
	while (source.indexOf("<script") > -1 || source.indexOf("</script") > -1) {
		var s = source.indexOf("<script");
		var s_e = source.indexOf(">", s);
		var e = source.indexOf("</script", s);
		var e_e = source.indexOf(">", e);

		// Add to scripts array
		scripts.push(source.substring(s_e + 1, e));
		// Strip from source
		source = source.substring(0, s) + source.substring(e_e + 1);
	}

	// Loop through every script collected and eval it
	for (var i = 0; i < scripts.length; i++) {
		try {
			eval(scripts[i]);
		}
		catch (ex) {
			// do what you want here when a script fails
		}
	}
	// Return the cleaned source
	jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: 'sw', delayOut: 100});
	return source;
}

function bind_data_toggle() {
	jomresJquery(function () {
		jomresJquery('[data-toggle="modal"]').click(function (e) {
			random_identifier = jomresJquery(this).attr('random_identifier');
			modal_title = jomresJquery(this).attr('property_name');
			property_uid = jomresJquery(this).attr('property_uid');
			task = jomresJquery(this).attr('ajax_task');
			loader = '';
			
			if (task == 'show_property_reviews') {
				jomresJquery('#property_reviews' + random_identifier).html(loader);
			}
			else if (task == 'faq') {
				modal_title = jomresJquery(this).attr('faq-modal-title');
				jomresJquery('#FAQModal').html(loader);
			}
			else
				jomresJquery('#module_' + random_identifier + '_popup').html(loader);
			
			e.preventDefault();
			
			if (task == 'show_property_reviews') {
				ajax_url = property_reviews_ajax_url + property_uid;
				}
			else if (task == 'faq'){
				ajax_url = live_site_ajax + '&task=faq';
				}
			else{
				ajax_url = module_pop_ajax_url + property_uid;
				}

			jomresJquery.get(ajax_url , function (data) {
				if (jomres_template_version == "bootstrap3" || jomres_template_version == "bootstrap4"){
					result = '<div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">x</button><h4>' + modal_title + '</h4></div><div class="modal-body">' + data + '</div></div></div>';
					}
				else {
					result = '<div class="modal-header"><button type="button" class="close" data-dismiss="modal">x</button><h4>' + modal_title + '</h4></div><div class="modal-body">' + data + '</div>';
					}
				
				if (task == 'show_property_reviews') {
					jomresJquery('#property_reviews' + random_identifier).html(result);
					}
				else if (task == 'faq') {
					jomresJquery('#FAQModal').html(result);
					}
				else {
					jomresJquery('#module_' + random_identifier + '_popup').html(result);
					}
				
				jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: 'sw', delayOut: 100});
			});
		});
	});
}

function module_popup(random_identifier, property_uid) {
	var modal_popup_height = 640;
	var modal_popup_width = 520;
	if ((screen.width <= 960)) {
		var modal_popup_height = 440;
		var modal_popup_width = 320;
	}
	else if ((screen.width <= 758)) {
		var modal_popup_height = 340;
		var modal_popup_width = 220;
	}
	else if ((screen.width <= 524)) {
		var modal_popup_height = 240;
		var modal_popup_width = 120;
	}

	jomresJquery('#module_' + random_identifier + '_popup').dialog({
		height: modal_popup_height,
		width: modal_popup_width,
		modal: true,
		resizable: true,
		open: function () {
			jomresJquery.get(module_pop_ajax_url + property_uid,
				function (data) {
					jomresJquery('#module_' + random_identifier + '_popup').html(data);
					jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: 'sw', delayOut: 100});
				});
		}
	}); // init without showing
	/* closes the dialog when you click elsewhere on the page. Modal in the dialog options must be set to True*/
	jomresJquery('.ui-widget-overlay').on("click", function () {
		//Close the dialog
		jomresJquery('#module_' + random_identifier + '_popup').dialog("close");
	});
}

jomresJquery(document).ready(function () {
	if (jomres_template_version != 'jquery_ui') {return false};
	
	//all hover and click logic for buttons
	jomresJquery(".fg-button:not(.ui-state-disabled)")
	.hover(
		function () {
			jomresJquery(this).addClass("ui-state-hover");
		},
		function () {
			jomresJquery(this).removeClass("ui-state-hover");
		}
	)
	.mousedown(function () {
		jomresJquery(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
		if (jomresJquery(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active')) {
			jomresJquery(this).removeClass("ui-state-active");
		}
		else {
			jomresJquery(this).addClass("ui-state-active");
		}
	})
	.mouseup(function () {
		if (!jomresJquery(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button')) {
			jomresJquery(this).removeClass("ui-state-active");
		}
	});
});


function quick_info(uid) {
	var selectedEffect = "slide";
	var options = {};
	jomresJquery("#effect" + uid).toggle(selectedEffect, options, 500);
	jomresJquery("#effect" + uid).removeClass('hidden');
	return false;
};

function isAvailable(date) {
	var dateAsString = date.getFullYear().toString() + "-" + (date.getMonth() + 1).toString() + "-" + date.getDate();
	var result = jomresJquery.inArray(dateAsString, bookedDays) == -1 ? [true] : [false];
	return result
};

function switch_editing_mode(url, val) {
	var original_url = window.location.href;
	jomresJquery.get(url + '&task=switcheditingmode&switchmode=' + val, function (data) {
		window.location = original_url;
	});
};

function switch_language_context(val) {
	var original_url = window.location.href;
	window.location = original_url + '&language_context=' + val;
};

function switch_exchange_rate(url, val) {
	var original_url = window.location.href;
	jomresJquery.get(url + '&task=switch_exchange_rate&currency_code=' + val, function (data) {
		window.location = original_url;
	});
};

function generic_reload(field, val) {
	var original_url = window.location.href;
	new_url = insertParam(original_url, field, val, true);
	window.location = new_url;
};

function insertParam(sourceUrl, parameterName, parameterValue, replaceDuplicates) {
	if ((sourceUrl == null) || (sourceUrl.length == 0)) {
		sourceUrl = document.location.href;
	}
	var urlParts = sourceUrl.split("?");
	var newQueryString = "";
	if (urlParts.length > 1) {
		var parameters = urlParts[1].split("&");
		for (var i = 0; (i < parameters.length); i++) {
			var parameterParts = parameters[i].split("=");
			if (!(replaceDuplicates && parameterParts[0] == parameterName)) {
				if (newQueryString == "") {
					newQueryString = "?";
					}
				else {
					newQueryString += "&";
					}
				newQueryString += parameterParts[0] + "=" + parameterParts[1];
			}
		}
	}
	if (newQueryString == "") {
		newQueryString = "?";
		}
	else {
		newQueryString += "&";
		}
	newQueryString += parameterName + "=" + parameterValue;

	return urlParts[0] + newQueryString;
};

function populateDiv(div_id, content) {
	if (jomresJquery("#" + div_id).length > 0) {
		document.getElementById(div_id).innerHTML = content;
		jomresJquery(div_id).fadeIn(100);
	}
};

function jomres_isChecked(ischecked) {
	if (ischecked == true) {
		document.adminForm.boxchecked.value++;
		}
	else {
		document.adminForm.boxchecked.value--;
		}
};

function jomres_checkAll(n) {
	var f = document.adminForm;
	var c = f.toggle.checked;
	var n2 = 0;
	for (i = 0; i < n; i++) {
		cb = eval('f.cb' + i);
		if (cb) {
			cb.checked = c;
			n2++;
		}
	}
	if (c) {
		document.adminForm.boxchecked.value = n2;
	} else {
		document.adminForm.boxchecked.value = 0;
	}
};


function jomres_submitbutton(pressbutton) {
	document.adminForm.task.value = pressbutton;
	try {
		document.adminForm.onsubmit();
	}
	catch (e) {
	}
	document.adminForm.submit();
};

function disableSubmitButton(button) {
	if (typeof button.disabled != 'undefined') {
		button.disabled = true;
		}
	else if (!button.buttonDisabled) {
		button.oldValue = button.value;
		button.oldOnclick = button.onclick;
		button.value = 'DISABLED';
		button.onclick = cancelAction;
		button.buttonDisabled = true;
	}
	document.getElementById("submitbutton").className = "";
};

function enableSubmitButton(button) {
	if (typeof button.disabled != 'undefined') {
		button.disabled = false;
		}
	else if (button.buttonDisabled) {
		button.value = button.oldValue;
		button.onclick = button.oldOnclick;
		button.buttonDisabled = false;
	}
};


function fadeIn(objId, opacity) {
	if (document.getElementById) {
		obj = document.getElementById(objId);
		if (opacity <= 100) {
			setOpacity(obj, opacity);
			opacity += 8;
			window.setTimeout("fadeIn('" + objId + "'," + opacity + ")", 100);
		}
	}
};

function setOpacity(obj, opacity) {
	opacity = (opacity == 100) ? 99.999 : opacity;
	// IE/Win
	obj.style.filter = "alpha(opacity:" + opacity + ")";
	// Safari 1.2, Konqueror
	obj.style.KHTMLOpacity = opacity / 100;
	// Older Mozilla and Firefox
	obj.style.MozOpacity = opacity / 100;
	// Safari 1.2, newer Firefox and Mozilla, CSS3
	obj.style.opacity = opacity / 100;
};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Show hide stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function hidediv(elementName) {
	jomresJquery("#" + elementName).slideUp();
};

function showdiv($elementName) {
	jomresJquery("#" + elementName).slideDown();
};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Ajax get response stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getResponse_particulars(field, value, arrivalDate_id) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	departureDate = jomresJquery("#" + arrivalDate_id + "_XXX").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '&arr_dep_date=' + departureDate, { field: field, 'value': value },
		function (data) {
			showRoomsList(data);
			show_log(field);
		}
	);
};

function getResponse_guesttype(typeid, value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: 'guesttype', 'typeid': typeid, 'value': value },
		function (data) {
			showRoomsList(data);
			show_log('guesttype');
		}
	);
};


function getResponse_standardguests() {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	var value = jomresJquery("#standard_guests").val();

	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: 'standard_guests',  'value': value },
		function (data) {
			showRoomsList(data);
		}
	);
};

function getResponse_children( id ) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	var value = document.getElementById("child_dropdown["+id+"]").selectedIndex;
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: 'child_selection',  'value': value , 'guest_index': id},
		function (data) {
			showRoomsList(data);
		}
	);
};

function getResponse_rooms(field, value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value },
		function (data) {
			showRoomsList(data);
			show_log(field);
		}
	);
};

function getResponse_multiroom_select(field, value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value },
		function (data) {
			showRoomsList(data);
			show_log(field);
		}
	);
};

function getResponse_extras(field, value, theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value },
		function (data) {
			eval(data);
			show_log(field);
			var ex_id = "extras_" + theId;
			var extra_checked = jomresJquery("#" + ex_id).is(':checked');

			var combo = jomresJquery('#quantity' + theId).val();
			if (combo != undefined) {
				if (combo[0]) {
					if (extra_checked == true) {
						jomresJquery('#quantity' + theId).attr("disabled", false);

					}
					else {
						jomresJquery('#quantity' + theId).attr("disabled", true);
						jomresJquery('#quantity' + theId).val("1");
					}
				}
			}
		}
	);
};

function getResponse_room_features(field, value, theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value, 'theId': theId },
		function (data) {
			showRoomsList(data);
			eval(data);
			show_log(field);
		}
	);
};

function getResponse_override(field, value, theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value, 'theId': theId },
		function (data) {
			eval(data);
			show_log(field);
		}
	);
};

function getResponse_extrasquantity(field, value, theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value, 'theId': theId },
		function (data) {
			eval(data);
			show_log(field);
		}
	);
};

function getResponse(field, value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value },
		function (data) {
			eval(data);
			show_log(field);
		}
	);
};

function getResponse_existing(field, value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '', { field: field, 'value': value },
		function (data) {
			eval(data);
			//jomresJquery('div.block_ui_bookingform').unblock();
			//show_log(field);
		}
	);
};

function getResponse_guest() {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	var firstname = jomresJquery('#firstname').val();
	var surname = jomresJquery('#surname').val();
	var house = jomresJquery('#house').val();
	var street = jomresJquery('#street').val();
	var town = jomresJquery('#town').val();
	var region = jomresJquery('#region').val();
	var postcode = jomresJquery('#postcode').val();
	var exists = document.ajaxform.country;
	if (exists != null) {
		var country = document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	}
	var tel_landline = jomresJquery('#tel_landline').val();
	var tel_mobile = jomresJquery('#tel_mobile').val();
	var eemail = jomresJquery('#eemail').val();

	url = ajaxurl + '&task=handlereq&property_uid_check=' + form_property_uid + '';
	result = checkaddressfields();

	if (result) {
		var addressString = firstname + "~" + surname + "~" + house + "~" + street + "~" + town + "~" + region + "~" + postcode + "~" + country + "~" + tel_landline + "~" + tel_mobile + "~" + eemail;
		jr_deferred = jomresJquery.get(url, { field: 'addressstring', 'value': addressString },
			function (data) {
				eval(data);
				show_log("addressstring");
			});

	}
};

/* A quick, silent check that we'll perform after the log details have been output (the show_log function was depreciated some time ago, but is still called by most of the ajax calls so it makes sense to utilise it)
 The purpose of this code is to send a quick check to ensure that the user is getting information back about the property they think they're getting booking information for. Here's the scenario this is intended to fix :
 A potential guest opens a tab to Property A's booking form, then another tab to Property B's booking form. Within the Jomres session, the property uid we're checking is for Pr B, so if the user switches back to Pr A's tab, they'll be seeing booking form information from Pr B, but with Pr's A header. As this is going to be confusing, we will send this form's property uid to handle req, which will check the property uid stored in the tmp booking data's session. If the property uid is different, then we'll know that the above scenario is the case and we'll pass back window.location = etc. As this is parsed by the "eval" function, then the booking form will be triggered to redirect the user's page to the correct property.

 */
function show_log(lastfield) {
	//jomresJquery('#jGrowl').jGrowl('close');
	// var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	// jomresJquery.get(ajaxurl+'&task=handlereq',{ field: "property_uid_check",'value': form_property_uid },
	// function(data){
	// eval(data);
	// });
};

function showRoomsList(req) {
	//var rooms = req.split("~");
	//buildSelected(rooms[0]) ;
	//buildAvailable(rooms[1]);
	eval(req);
	if (rooms_list_enabled)
		ShowRoomsList();
	if (jomresJquery("#noroomsselected").length)
		document.getElementById("noroomsselected").className = error_class;

	return false;
};

function HideRoomsList() {
	jomresJquery("#roomsListWrapper").delay(800).hide('blind', { direction: 'vertical' }, 1000);
	return false;
};

function ShowRoomsList() {
	jomresJquery("#roomsListWrapper").delay(800).show('blind', { direction: 'vertical' }, 1000);
	return false;
};

function buildSelected(string) {
	if (string != undefined) {
		if (string.length > 0) {
			populateDiv("selectedRooms", string);
			}
		//document.getElementById("selectedRooms").innerHTML = string;
	}
};

function buildAvailable(string) {
	if (string != undefined) {
		if (string.length > 0) {
			populateDiv("availRooms", string);
			}
		//document.getElementById("availRooms").innerHTML = string;
	}
};

function checkSelectRoomMessage(oktobook, disable_address) {
	if (!oktobook) {
		if (rooms_list_enabled) {
			if (show_extras == true) {
				jomresJquery("#extrascontainer").delay(800).fadeTo("slow", 0.1);
				}

			jomresJquery("#bookingform_footer").delay(800).fadeTo("slow", 0.1);
			jomresJquery("#accommodation_container").delay(800).fadeTo("slow", 0.1);
		}
	}
	else {
		if (show_extras == true) {
			jomresJquery("#extrascontainer").delay(800).fadeTo("slow", 1);
			}
		jomresJquery("#bookingform_address").delay(800).slideDown("slow");
		jomresJquery("#bookingform_footer").delay(800).fadeTo("slow", 1);
		jomresJquery("#accommodation_container").delay(800).fadeTo("slow", 1);
	}
};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Departure date adjustment stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajaxADate(arrivalDate, dformat) {
	var currentDepartureDateText = jomresJquery(document.ajaxform.departureDate).val();
	var currentDepartureDatesplit_dates = jomres_split_date(currentDepartureDateText, dformat)
	currentDepartureDateday = currentDepartureDatesplit_dates[0];
	currentDepartureDatemon = currentDepartureDatesplit_dates[1];
	currentDepartureDateyear = currentDepartureDatesplit_dates[2];
	var currentDepartureDated = new Date(currentDepartureDateyear, currentDepartureDatemon - 1, currentDepartureDateday);

	var day = 0
	var mon = 0
	var year = 0
	var split_dates = jomres_split_date(arrivalDate, dformat)
	day = split_dates[0];
	mon = split_dates[1];
	year = split_dates[2];

	var d = new Date(year, mon - 1, day);
	d.setDate(d.getDate() + mininterval);

	sday = String(d.getDate());
	smonth = String(d.getMonth() + 1);
	if (sday.length == 1)
		fday = "0" + sday;
	else
		fday = sday;
	if (smonth.length == 1)
		fmonth = "0" + smonth;
	else
		fmonth = smonth;

	if (dformat == "%d/%m/%Y") {
		dd = fday + "/" + fmonth + "/" + String(d.getFullYear())
		}
	if (dformat == "%Y/%m/%d") {
		dd = String(d.getFullYear()) + "/" + fmonth + "/" + fday
		}
	if (dformat == "%m/%d/%Y") {
		dd = fmonth + "/" + fday + "/" + String(d.getFullYear())
		}
	if (dformat == "%d-%m-%Y") {
		dd = fday + "-" + fmonth + "-" + String(d.getFullYear())
		}
	if (dformat == "%Y-%m-%d") {
		dd = String(d.getFullYear()) + "-" + fmonth + "-" + fday
		}
	if (dformat == "%m-%d-%Y") {
		dd = fmonth + "-" + fday + "-" + String(d.getFullYear())
		}

	var one_day = 1000 * 60 * 60 * 24;
	var difference = Math.ceil((d.getTime() - currentDepartureDated.getTime()) / (one_day)) + mininterval;
	if (difference > mininterval)
		document.ajaxform.departureDate.value = dd;
};

function jomres_split_date(date, dformat) {
	if (dformat == "%d/%m/%Y") {
		dateArray = date.split("/")
		day = dateArray[0]
		mon = dateArray[1]
		year = dateArray[2]
		}
	if (dformat == "%Y/%m/%d") {
		dateArray = date.split("/")
		day = dateArray[2]
		mon = dateArray[1]
		year = dateArray[0]
		}
	if (dformat == "%m/%d/%Y") {
		dateArray = date.split("/")
		day = dateArray[1]
		mon = dateArray[0]
		year = dateArray[2]
		}
	if (dformat == "%d-%m-%Y") {
		dateArray = date.split("-")
		day = dateArray[0]
		mon = dateArray[1]
		year = dateArray[2]
		}
	if (dformat == "%Y-%m-%d") {
		dateArray = date.split("-")
		day = dateArray[2]
		mon = dateArray[1]
		year = dateArray[0]
		}
	if (dformat == "%m-%d-%Y") {
		dateArray = date.split("-")
		day = dateArray[1]
		mon = dateArray[0]
		year = dateArray[2]
		}
	if (dformat == "%d.%m.%Y") {
		dateArray = date.split(".")
		day = dateArray[0]
		mon = dateArray[1]
		year = dateArray[2]
		}
	return  [ day, mon , year ];
};
///////////////////////////////////////
//
//	Validate the form input
//
///////////////////////////////////////

function checkaddressfields() {
	var firstname = jomresJquery.trim(jomresJquery('#firstname').val());
	var surname = jomresJquery.trim(jomresJquery('#surname').val());
	var house = jomresJquery.trim(jomresJquery('#house').val());
	var street = jomresJquery.trim(jomresJquery('#street').val());
	var town = jomresJquery.trim(jomresJquery('#town').val());
	var postcode = jomresJquery.trim(jomresJquery('#postcode').val());
	var exists = document.ajaxform.country;
	if (exists != null)
		var country = document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	var tel_landline = jomresJquery.trim(jomresJquery('#tel_landline').val());
	var tel_mobile = jomresJquery.trim(jomresJquery('#tel_mobile').val());
	var eemail = jomresJquery.trim(jomresJquery('#eemail').val());

	setInputFillToOkColour('#firstname');
	setInputFillToOkColour('#surname');
	setInputFillToOkColour('#house');
	setInputFillToOkColour('#street');
	setInputFillToOkColour('#town');
	setInputFillToOkColour('#postcode');
	setInputFillToOkColour('#tel_landline');
	setInputFillToOkColour('#tel_mobile');
	setInputFillToOkColour('#eemail');

	jomresJquery("#region").closest('.control-group').addClass('success');
	jomresJquery("#country").closest('.control-group').addClass('success');

	var pass = true;

	if (validation_firstname && firstname.length == 0) {
		setInputFillToErrorColour("#firstname");
		pass = false;
		}
	if (validation_surname && surname.length == 0) {
		setInputFillToErrorColour("#surname");
		pass = false;
		}
	if (validation_houseno && house.length == 0) {
		setInputFillToErrorColour("#house");
		pass = false;
		}
	if (validation_street && street.length == 0) {
		setInputFillToErrorColour("#street");
		pass = false;
		}
	if (validation_town && town.length == 0) {
		setInputFillToErrorColour("#town");
		pass = false;
		}
	if (validation_postcode && postcode.length == 0) {
		setInputFillToErrorColour("#postcode");
		pass = false;
		}
	if (validation_country && country.length == 0) {
		setInputFillToErrorColour("#country");
		pass = false;
		}
	if (validation_landline && tel_landline.length == 0) {
		setInputFillToErrorColour("#tel_landline");
		pass = false;
		}
	if (validation_cellmobile && tel_mobile.length == 0) {
		setInputFillToErrorColour("#tel_mobile");
		pass = false;
		}
	if (validation_email && eemail.length == 0) {
		setInputFillToErrorColour("#eemail");
		pass = false;
		}
	if (validation_email && !echeck(eemail)) {
		setInputFillToErrorColour("#eemail");
		pass = false;
		}
	if (!pass) {
		jomresJquery('div.recheckaddress').show();
		return false;
	}
	else {
		enableSubmitButton(document.ajaxform.confirmbooking);
		return true;
	}
};

function dobooking_validate() {
	if (checkaddressfields()) {
		getResponse_guest();
		document.ajaxform.confirmbooking.disabled = true;
		jomresJquery.when(jr_deferred).done(function() {submitBooking()});
		}
	};

function submitBooking() {
	document.ajaxform.action = livesite;
	document.ajaxform.submit(document.ajaxform.confirmbooking.disabled = true);
	};

function setInputFillToOkColour(field) {
	jomresJquery(field).addClass(success_class);
	};

function setInputFillToErrorColour(field) {
	jomresJquery(field).addClass(error_class);
	};

function submitenter(myfield, e) {
	var keycode;
	if (window.event) {
		keycode = window.event.keyCode;
		}
	else if (e) {
		keycode = e.which;
		}
	else return true;
	if (!document.ajaxform.confirmbooking.disabled) {
		if (keycode == 13) {
			document.ajaxform.submit();
			return false;
		}
		else {
			return true;
			}
	}
	else {
		return true;
	}
};

/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */
function echeck(str) {
	var strlen = str.length
	var at = "@"
	var dot = "."
	var lat = str.indexOf(at)
	var lstr = str.length
	var ldot = str.indexOf(dot)
	if (strlen == 0) {
		return false
		}
	if (str.indexOf(at) == -1) {
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
		//alert("Invalid E-mail ID");
		return false;
		}
	if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.indexOf(at, (lat + 1)) != -1) {
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.indexOf(dot, (lat + 2)) == -1) {
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.indexOf(" ") != -1) {
		//alert("Invalid E-mail ID")
		return false
		}
	return true
};

/* list_properties.js */
function toggle_review_div(uid, property_name) {
	div_id = "#property_reviews" + uid;
	jomresJquery(div_id).dialog({
		height: 500,
		width: 800,
		modal: true,
		resizable: true,
		open: function () {
			jomresJquery.get(live_site_ajax + "&task=show_property_reviews&property_uid=" + uid,
				function (data) {
					jomresJquery('#property_reviews' + uid).html(data);
					//jomresJquery('.star').rating();
				});
		}
	});
	jomresJquery('.ui-widget-overlay').live("click", function () {
		jomresJquery(div_id).dialog("close");
	});
};

function shortlist(property_uid, show_label) {
	if (typeof show_label !== 'undefined' && show_label != '') {
		a = parseInt(show_label);
		}
	else {
		a = 0;
		}
	jomresJquery.get(live_site_ajax + "&task=ajax_shortlist&property_uid=" + property_uid + "&show_label=" + a, function (data) {
		jomresJquery('#shortlist_' + property_uid).html(data);
	});
}

function set_budget(budget_price , reload , formname ) {
	jomresJquery.get(live_site_ajax + "&task=ajax_budget&budget_figure="+budget_price, function (data) {
		if (reload){
			location.reload();
		}
		else {
			submit_search(formname);
		}
	});
}

function lastAddedLiveFunc() {
	if (live_scrolling_enabled) {
		id = jomresJquery(".jomres_property_list_propertywrapper:last").attr("id");
		if (id != last_scrolled_id) {
			var animation = '<div id="animation"><img src="' + path_to_jomres_dir + '/'+JOMRES_ROOT_DIRECTORY + '/assets/images/ajax_animation/broken_circle.gif" /></div>';
			jomresJquery("#livescrolling_results").append(animation);
			jomresJquery.get(live_site_ajax + "&task=ajax_list_properties&nofollowtmpl&lastID=" + id,
			function (data) {
				var result = data.split("^");
				jomresJquery("#animation").remove();
				if (result[0] != "") {
					jomresJquery("#livescrolling_results").replaceWith(result[0]);
					bind_data_toggle();
					eval(result[1]);
				}

				killScroll = false; // IMPORTANT - Make function available again.
				var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
				jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled", bol);
				last_scrolled_id = id;
				jomresJquery(".jomres_bt_tooltip_features").tipsy({html: true, fade: true, gravity: 'sw', delayOut: 100});
				//console.log(last_scrolled_id);
			});
		}
	}
};

jomresJquery(document).ready(function () {
	jomresJquery(window).scroll(function () {
		if (jomresJquery(window).height() + jomresJquery(window).scrollTop() >= jomresJquery(document).height() - 2000) {
			if (killScroll == false) { // IMPORTANT - Keeps the loader from fetching more than once.
				killScroll = true; // IMPORTANT - Set killScroll to true, to make sure we do not trigger this code again before it's done running.
				lastAddedLiveFunc();
			}
		}
	});

	jomresJquery("input[type=checkbox][name=compare]").click(function () {
		var bol = jomresJquery("input[type=checkbox][name=compare]:checked").length >= 3;
		jomresJquery("input[type=checkbox][name=compare]").not(":checked").attr("disabled", bol);
	});
	bind_data_toggle();
});

function trigger_comparison(form) {
	var values = new Array();
	jomresJquery("input[type=checkbox][name=compare]:checked").each(
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

/*
 * jHeartbeat 0.3.0
 * (C)Alex Richards - http://www.ajtrichards.co.uk/
 */
document.addEventListener('DOMContentLoaded', function() {
	if (typeof ajaxurl !== 'undefined' && ajaxurl != '') {
		jomresJquery.jheartbeat = {
			options: {
				url: ajaxurl + "&task=handlereq&no_html=1&field=heartbeat" ,
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
	}
});


/*
 * jHeartbeat 0.3.0
 * (C)Alex Richards - http://www.ajtrichards.co.uk/
 */
jomresJquery(document).ready(function (){
	if (typeof ajaxurl !== 'undefined' && ajaxurl != '') {
		jomresJquery.jheartbeat = {
			options: {
				url: ajaxurl + "&task=handlereq&no_html=1&field=heartbeat" ,
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
	}

});

function jomres_print(div) {
	jomresJquery('body').css('visibility','hidden');
	jomresJquery(div).css('visibility','visible');
	window.print();
	jomresJquery('body').css('visibility','visible');
}

document.addEventListener('DOMContentLoaded', function(){
	jomresJquery(function(){
		jomresJquery('.readmore-wrapper').expander({
			expandText: jomres_javascript_readmore,
			userCollapseText: jomres_javascript_readless,
			slicePoint: 200,
			showWordCount: false,
			wordCountText: ' ({{count}} words)',
			preserveWords: true,
			expandEffect: 'fadeIn',
			expandSpeed: 800,
			collapseEffect: 'slideUp',
			collapseSpeed: 400,
			moreLinkClass: 'link-secondary',
			lessLinkClass: 'link-secondary',
		});
	});
});