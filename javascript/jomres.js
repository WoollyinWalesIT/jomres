
if ('undefined'!=typeof(jQuery)){
var jomresJquery = jQuery.noConflict();
};

if (navigator.appName == 'Microsoft Internet Explorer') window.onerror=Block_Error;function Block_Error(){return true;};


function module_popup(random_identifier,property_uid){
	jomresJquery('#module_'+random_identifier+'_popup').dialog({
	resizable: false,
	height: 490,
	width : 520,
	modal : true,
	resizable: true,
	open: function() 
		{
		jomresJquery.get(module_pop_ajax_url+property_uid,
		function(data){
			jomresJquery('#module_'+random_identifier+'_popup').html(data);
			});
		}
	}); // init without showing
	/* closes the dialog when you click elsewhere on the page. Modal in the dialog options must be set to True*/
	jomresJquery('.ui-widget-overlay').live("click", function() {
		//Close the dialog
		jomresJquery('#module_'+random_identifier+'_popup').dialog("close");
	});
}

jomresJquery(function(){
	//all hover and click logic for buttons
	jomresJquery(".fg-button:not(.ui-state-disabled)")
	.hover(
		function(){ 
			jomresJquery(this).addClass("ui-state-hover"); 
		},
		function(){ 
			jomresJquery(this).removeClass("ui-state-hover"); 
		}
	)
	.mousedown(function(){
			jomresJquery(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
			if( jomresJquery(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ jomresJquery(this).removeClass("ui-state-active"); }
			else { jomresJquery(this).addClass("ui-state-active"); }
	})
	.mouseup(function(){
		if(! jomresJquery(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
			jomresJquery(this).removeClass("ui-state-active");
		}
	});
});


function quick_info(uid) {
	var selectedEffect = "slide";
	var options = {};
	jomresJquery( "#effect"+uid ).toggle( selectedEffect, options, 500 );
	return false;
};

function isAvailable(date){

	var dateAsString = date.getFullYear().toString() + "-" + (date.getMonth()+1).toString() + "-" + date.getDate();
	var result = jomresJquery.inArray( dateAsString, bookedDays ) ==-1 ? [true] : [false];
	return result
	};

function switch_editing_mode(url,val)
	{
	var original_url = window.location.href;
	jomresJquery.get(url+'&task=switcheditingmode&switchmode='+val,function(data){
		window.location = original_url;
		});
	};
	
function switch_exchange_rate(url,val)
	{
	var original_url = window.location.href;
	jomresJquery.get(url+'&task=switch_exchange_rate&currency_code='+val,function(data){
		window.location = original_url;
		});
	};
	
function generic_reload(field,val)
	{
	var original_url = window.location.href;
	new_url = insertParam(original_url,field,val, true);
	window.location = new_url;
	};

function insertParam(sourceUrl, parameterName, parameterValue, replaceDuplicates)
	{
    if ((sourceUrl == null) || (sourceUrl.length == 0)) sourceUrl = document.location.href;
    var urlParts = sourceUrl.split("?");
    var newQueryString = "";
    if (urlParts.length > 1)
    {
        var parameters = urlParts[1].split("&");
        for (var i=0; (i < parameters.length); i++)
        {
			var parameterParts = parameters[i].split("=");
			if (!(replaceDuplicates && parameterParts[0] == parameterName))
			{
				if (newQueryString == "")
					newQueryString = "?";
				else
					newQueryString += "&";
				newQueryString += parameterParts[0] + "=" + parameterParts[1];
			}
        }
    }
    if (newQueryString == "")
        newQueryString = "?";
    else
        newQueryString += "&";
    newQueryString += parameterName + "=" + parameterValue;

    return urlParts[0] + newQueryString;
	};

/*
Interesting proof of concept, but not ready for showtime
function switch_editing_mode(url,val)
	{
	var original_url = window.location.href;
		jomresJquery('div.jomres_content_area').block({
			message: '<img src="jomres/images/31.gif" />', 
			css:	{
					padding: '15px', 
					'-webkit-border-radius': '10px', 
					'-moz-border-radius': '10px'
					}
				});	
	jomresJquery.get(url+'&task=switcheditingmode&switchmode='+val,function(data){

		jomresJquery.get(original_url+"&format=raw",
			function(data){
				populateDiv('jomres_content_area',data);
				}
			);
		jomresJquery('div.jomres_content_area').unblock();
	});
	//window.location.reload();
	}
*/

function populateDiv(div_id,content){
	if ( jomresJquery("#"+div_id).length > 0 ){ 
		document.getElementById(div_id).innerHTML = content;
		jomresJquery(div_id).fadeIn(100);
		}
	};

function jomres_isChecked(ischecked){
	if (ischecked == true){
		document.adminForm.boxchecked.value++;
	}
	else {
		document.adminForm.boxchecked.value--;
	}
};

function jomres_checkAll( n ) {
	var f = document.adminForm;
	var c = f.toggle.checked;
	var n2 = 0;
	for (i=0; i < n; i++) {
		cb = eval( 'f.cb' + i );
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
	/*
	var hid = jomresJquery('<input type="text" name="nohtml" value="1"/>');
	hid.prependTo("adminForm");
	var theval = jomresJquery("input[name=nohtml]").val();
	alert(theval);
	return;
	*/
	document.adminForm.task.value=pressbutton;
	try {
		document.adminForm.onsubmit();
		}
	catch(e){}
	document.adminForm.submit();
};

function disableSubmitButton (button) {
	if (typeof button.disabled != 'undefined')
		button.disabled = true;
	else if (!button.buttonDisabled) {
		button.oldValue = button.value;
		button.oldOnclick = button.onclick;
		button.value = 'DISABLED';
		button.onclick = cancelAction;
		button.buttonDisabled = true;
		}
	document.getElementById("submitbutton").className="";
	};
	
function enableSubmitButton (button) {
	if (typeof button.disabled != 'undefined')
		button.disabled = false;
	else if (button.buttonDisabled) {
		button.value = button.oldValue;
		button.onclick = button.oldOnclick;
		button.buttonDisabled = false;
		}

	// Disabled as causes a js error in ie if the booking form is in the property details.
	//document.getElementById('submitbutton').focus();
	};

	
function fadeIn(objId,opacity) {
	if (document.getElementById) {
		obj = document.getElementById(objId);
		if (opacity <= 100) {
			setOpacity(obj, opacity);
			opacity += 8;
			window.setTimeout("fadeIn('"+objId+"',"+opacity+")", 100);
		}
	}
};

function setOpacity(obj, opacity) {
	opacity = (opacity == 100)?99.999:opacity;
	// IE/Win
	obj.style.filter = "alpha(opacity:"+opacity+")";
	// Safari 1.2, Konqueror
	obj.style.KHTMLOpacity = opacity/100;
	// Older Mozilla and Firefox
	obj.style.MozOpacity = opacity/100;
	// Safari 1.2, newer Firefox and Mozilla, CSS3
	obj.style.opacity = opacity/100;
	};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Show hide stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function hidediv(elementName) {
	jomresJquery("#"+elementName).slideUp();
	};

function showdiv($elementName) {
	jomresJquery("#"+elementName).slideDown();
	};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Ajax get response stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getResponse_particulars(field,value,arrivalDate_id) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	departureDate = jomresJquery("#"+arrivalDate_id+"_XXX").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'&arr_dep_date='+departureDate,{ field: field, 'value': value },
		function(data){
			showRoomsList(data); 
			show_log(field);
			}
	);
};

function getResponse_guesttype(typeid,value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: 'guesttype', 'typeid': typeid ,'value': value },
		function(data){
			showRoomsList(data); 
			show_log('guesttype');
			}
		);
	};

function getResponse_rooms(field,value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value },
		function(data){
			showRoomsList(data); 
			show_log(field);
			}
	);
};

function getResponse_multiroom_select(field,value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value },
		function(data){
			showRoomsList(data); 
			show_log(field);
			}
	);
};

function getResponse_extras(field,value,theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value },
		function(data){
			eval(data); 
			show_log(field);
			var ex_id = "extras_"+theId;
			var extra_checked = jomresJquery("#"+ex_id).is(':checked');

			var combo = jomresJquery('#quantity'+theId).val();
			if (combo != undefined)
				{
				if (combo[0])
					{
					if (extra_checked == true)
						{
						jomresJquery('#quantity'+theId).attr("disabled",false);
						
						}
					else
						{
						jomresJquery('#quantity'+theId).attr("disabled",true);
						jomresJquery('#quantity'+theId).val("1");
						}
					}
				}
			}
	);
};

function getResponse_room_features(field,value,theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	HideRoomsList();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value,'theId': theId },
		function(data){
			showRoomsList(data); 
			eval(data); 
			show_log(field);
			}
	);
};

function getResponse_override(field,value,theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value,'theId': theId },
		function(data){
			eval(data); 
			show_log(field);
			}
	);
};

function getResponse_extrasquantity(field,value,theId) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value,'theId': theId },
		function(data){
			eval(data); 
			show_log(field);
			}
	);
};


function getResponse(field,value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value },
		function(data){
			eval(data); 
			show_log(field);
			}
	);
};

function getResponse_existing(field,value) {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'',{ field: field,'value': value },
		function(data){
			eval(data); 
			//jomresJquery('div.block_ui_bookingform').unblock();
			//show_log(field);
			}
	);
};

function getResponse_guest() {
	var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	var firstname 		=jomresJquery('#firstname').val();
	var surname 		=jomresJquery('#surname').val();
	var house 			=jomresJquery('#house').val();
	var street 			=jomresJquery('#street').val();
	var town 			=jomresJquery('#town').val();
	var region 			=jomresJquery('#region').val();
	var postcode 		=jomresJquery('#postcode').val();
	var exists = document.ajaxform.country;
	if (exists != null)
		var country 		= document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	var tel_landline 	=jomresJquery('#tel_landline').val();
	var tel_mobile 		=jomresJquery('#tel_mobile').val();
	var eemail 			=jomresJquery('#eemail').val();

	url = ajaxurl+'&task=handlereq&property_uid_check='+form_property_uid+'';
	result =checkaddressfields();

	if (result){
		var addressString= firstname+"~"+surname+"~"+house+"~"+street+"~"+town+"~"+region+"~"+postcode+"~"+country+"~"+tel_landline+"~"+tel_mobile+"~"+eemail;
		jomresJquery.get(url,{ field: 'addressstring','value': addressString },
			function(data){
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
	// var form_property_uid = jomresJquery("#booking_form_property_uid").val();
	// jomresJquery.get(ajaxurl+'&task=handlereq',{ field: "property_uid_check",'value': form_property_uid },
		// function(data){
			// eval(data);
		// });
};

function showRoomsList(req){
	//var rooms = req.split("~");
	//buildSelected(rooms[0]) ; 
	//buildAvailable(rooms[1]);
	eval(req);
	if (rooms_list_enabled)
		ShowRoomsList();
	if (jomresJquery("#noroomsselected").length)
		document.getElementById("noroomsselected").className=error_class;

	return false;
	};

function HideRoomsList(){
	jomresJquery("#roomsListWrapper").delay(800).hide('blind', { direction: 'vertical' }, 1000);
	return false;
	};

function ShowRoomsList(){
	jomresJquery("#roomsListWrapper").delay(800).show('blind', { direction: 'vertical' }, 1000);
	return false;
	};
	
function buildSelected(string){
	if (string != undefined){
		if ( string.length > 0 )
			populateDiv("selectedRooms",string);
			//document.getElementById("selectedRooms").innerHTML = string;
		}
	};

function buildAvailable(string)
	{	
	if (string != undefined){
		if ( string.length > 0 )
			populateDiv("availRooms",string);
			//document.getElementById("availRooms").innerHTML = string;
		}
	};
	
function checkSelectRoomMessage(oktobook){
		if (!oktobook ){
			if (rooms_list_enabled)
				{
				if (show_extras == true)
					jomresJquery("#extrascontainer").delay(800).fadeTo("slow", 0.1);
				jomresJquery("#bookingform_address").delay(800).fadeTo("slow", 0.1);
				jomresJquery("#bookingform_footer").delay(800).fadeTo("slow", 0.1);
				//jomresJquery("#totals_container").delay(800).fadeTo("slow", 0.1);
				jomresJquery("#accommodation_container").delay(800).fadeTo("slow", 0.1);
				}
			}
		else{
			if (show_extras == true)
				jomresJquery("#extrascontainer").delay(800).fadeTo("slow", 1);
			jomresJquery("#bookingform_address").delay(800).fadeTo("slow", 1);
			jomresJquery("#bookingform_footer").delay(800).fadeTo("slow", 1);
			//jomresJquery("#totals_container").delay(800).fadeTo("slow", 1);
			jomresJquery("#accommodation_container").delay(800).fadeTo("slow", 1);
			}
	};

// (function($) {
	// $.fn.customFadeIn = function(speed, callback) {
		// $(this).fadeIn(speed, function() {
			// if(jomresJquery.browser.msie)
				// $(this).get(0).style.removeAttribute('filter');
			// if(callback != undefined)
				// callback();
		// });
	// };
	// $.fn.customFadeOut = function(speed, callback) {
		// $(this).fadeOut(speed, function() {
			// if(jomresJquery.browser.msie)
				// $(this).get(0).style.removeAttribute('filter');
			// if(callback != undefined)
				// callback();
		// });
	// };
// })(jomresJquery);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Departure date adjustment stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajaxADate(arrivalDate,dformat){
	var currentDepartureDateText = jomresJquery(document.ajaxform.departureDate).val();
	var currentDepartureDatesplit_dates = jomres_split_date(currentDepartureDateText,dformat)
	currentDepartureDateday = currentDepartureDatesplit_dates[0];
	currentDepartureDatemon = currentDepartureDatesplit_dates[1];
	currentDepartureDateyear = currentDepartureDatesplit_dates[2];
	var currentDepartureDated = new Date(currentDepartureDateyear,currentDepartureDatemon-1,currentDepartureDateday); 
	
	var day=0
	var mon=0
	var year=0
	var split_dates = jomres_split_date(arrivalDate,dformat)
	day = split_dates[0];
	mon = split_dates[1];
	year = split_dates[2];
	
	var d = new Date(year,mon-1,day); with (d) setDate(getDate()+mininterval);

	sday=String(d.getDate());
	smonth=String(d.getMonth()+1);
	if (sday.length == 1)
		fday="0"+sday;
	else
		fday=sday;
	if (smonth.length == 1)
		fmonth="0"+smonth;
	else
		fmonth=smonth;

	if (dformat=="%d/%m/%Y"){
		dd=fday+"/"+fmonth+"/"+String(d.getFullYear())
		}
	if (dformat=="%Y/%m/%d"){
		dd= String(d.getFullYear())+"/"+fmonth+"/"+fday
		}
	if (dformat=="%m/%d/%Y"){
		dd=fmonth+"/"+ fday+"/"+String(d.getFullYear())
		}
	if (dformat=="%d-%m-%Y"){
		dd=fday+"-"+fmonth+"-"+String(d.getFullYear())
		}
	if (dformat=="%Y-%m-%d"){
		dd= String(d.getFullYear())+"-"+fmonth+"-"+fday
		}
	if (dformat=="%m-%d-%Y"){
		dd=fmonth+"-"+ fday+"-"+String(d.getFullYear())
		}


	var one_day=1000*60*60*24;
	var difference = Math.ceil((d.getTime()-currentDepartureDated.getTime())/(one_day))+mininterval;
	if (difference > mininterval)
		document.ajaxform.departureDate.value=dd;
	};

function jomres_split_date(date,dformat)
	{
	if (dformat=="%d/%m/%Y"){
		dateArray=date.split("/")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
	if (dformat=="%Y/%m/%d"){
		dateArray=date.split("/")
		day=dateArray[2]
		mon=dateArray[1]
		year=dateArray[0]
		}
	if (dformat=="%m/%d/%Y"){
		dateArray=date.split("/")
		day=dateArray[1]
		mon=dateArray[0]
		year=dateArray[2]
		}
	if (dformat=="%d-%m-%Y"){
		dateArray=date.split("-")
		day=dateArray[0]
		mon=dateArray[1]
		year=dateArray[2]
		}
	if (dformat=="%Y-%m-%d"){
		dateArray=date.split("-")
		day=dateArray[2]
		mon=dateArray[1]
		year=dateArray[0]
		}
	if (dformat=="%m-%d-%Y"){
		dateArray=date.split("-")
		day=dateArray[1]
		mon=dateArray[0]
		year=dateArray[2]
		}
	if (dformat=="%d.%m.%Y"){
		dateArray=date.split(".")
		day=dateArray[0]
		mon=dateArray[1]
		year=dateArray[2]
		}
	return  [ day, mon , year ];
	};
///////////////////////////////////////
//
//	Validate the form input
//
///////////////////////////////////////

function checkaddressfields(){
	var firstname 		=jomresJquery.trim(jomresJquery('#firstname').val());
	var surname 		=jomresJquery.trim(jomresJquery('#surname').val());
	var house 			=jomresJquery.trim(jomresJquery('#house').val());
	var street 			=jomresJquery.trim(jomresJquery('#street').val());
	var town 			=jomresJquery.trim(jomresJquery('#town').val());
	var region 			=jomresJquery.trim(jomresJquery('#region').val());
	var postcode 		=jomresJquery.trim(jomresJquery('#postcode').val());
	var exists = document.ajaxform.country;
	if (exists != null)
		var country 	= document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	var tel_landline 	=jomresJquery.trim(jomresJquery('#tel_landline').val());
	var tel_mobile 		=jomresJquery.trim(jomresJquery('#tel_mobile').val());
	var eemail 			=jomresJquery.trim(jomresJquery('#eemail').val());

	setInputFillToOkColour('#firstname');
	setInputFillToOkColour('#surname');
	setInputFillToOkColour('#house');
	setInputFillToOkColour('#street');
	setInputFillToOkColour('#town');
	setInputFillToOkColour('#region');
	setInputFillToOkColour('#postcode');
	setInputFillToOkColour('#tel_landline');
	setInputFillToOkColour('#tel_mobile');
	setInputFillToOkColour('#eemail');
	
	var pass			= true;
	
	if (validation_firstname && firstname.length == 0 ){
		setInputFillToErrorColour("#firstname");
		pass = false;
		}
	if (validation_surname && surname.length == 0 ){
		setInputFillToErrorColour("#surname");
		pass = false;
		}
	if (validation_houseno && house.length == 0 ){
		setInputFillToErrorColour("#house");
		pass = false;
		}
	if (validation_street && street.length == 0 ){
		setInputFillToErrorColour("#street");
		pass = false;
		}
	if (validation_town && town.length == 0 ){
		setInputFillToErrorColour("#town");
		pass = false;
		}
	if (validation_region && region.length == 0 ){
		setInputFillToErrorColour("#region");
		pass = false;
		}
	if (validation_postcode && postcode.length == 0 ){
		setInputFillToErrorColour("#postcode");
		pass = false;
		}
	if (validation_country && country.length == 0 ){
		setInputFillToErrorColour("#country");
		pass = false;
		}
	if (validation_landline && tel_landline.length == 0 ){
		setInputFillToErrorColour("#tel_landline");
		pass = false;
		}
	if (validation_cellmobile && tel_mobile.length == 0 ){
		setInputFillToErrorColour("#tel_mobile");
		pass = false;
		}
	if (validation_email && eemail.length == 0 ){
		setInputFillToErrorColour("#eemail");
		pass = false;
		}

	if (validation_email && !echeck(eemail)){
		setInputFillToErrorColour("#eemail");
		pass = false;
		}
	
	if (pass)
		pass = checkCustomFields();
	if (!pass){
		jomresJquery('div.recheckaddress').show();
		return false;
		}
	else{
		enableSubmitButton(document.ajaxform.confirmbooking);
		return true;
		}
	};
	
function dobooking_validate(){
	if (checkaddressfields()){
		getResponse_guest();
		setTimeout('submitBooking()', 2000);
		}
	};

function submitBooking(){
	document.ajaxform.action = livesite+"&task=confirmbooking"
	document.ajaxform.submit();
	};
	
function setInputFillToOkColour(field){
	jomresJquery(field).removeClass("ui-state-highlight");
	};
	
function setInputFillToErrorColour(field){
	jomresJquery(field).addClass("ui-state-highlight");
	};
	
function submitenter(myfield,e){
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;
	if (!document.ajaxform.confirmbooking.disabled){
		if (keycode == 13) {
			 document.ajaxform.submit();
			 return false;
			 }
		else
			return true;
		}
	else
		return true;
	};

/**
* DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
*/
function echeck(str) {
	var strlen = str.length
	var at="@"
	var dot="."
	var lat=str.indexOf(at)
	var lstr=str.length
	var ldot=str.indexOf(dot)
	if (strlen==0){
		return false
		}	
	if (str.indexOf(at)==-1){
		//alert("Invalid E-mail ID")
		return false
		}
	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
			//alert("Invalid E-mail ID");
		return false;
		}
	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
			//alert("Invalid E-mail ID")
			return false
		}
	if (str.indexOf(at,(lat+1))!=-1){
			//alert("Invalid E-mail ID")
			return false
		}
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
			//alert("Invalid E-mail ID")
			return false
		}
	if (str.indexOf(dot,(lat+2))==-1){
			//alert("Invalid E-mail ID")
			return false
		}
	if (str.indexOf(" ")!=-1){
			//alert("Invalid E-mail ID")
			return false
		}
	return true
	};
