function jomres_submitbutton(pressbutton) {
	document.adminForm.task.value=pressbutton;
	try {
		document.adminForm.onsubmit();
		}
	catch(e){}
	document.adminForm.submit();
}

function disableSubmitButton (button) 
	{
	if (typeof button.disabled != 'undefined')
		button.disabled = true;
	else if (!button.buttonDisabled) 
		{
		button.oldValue = button.value;
		button.oldOnclick = button.onclick;
		button.value = 'DISABLED';
		button.onclick = cancelAction;
		button.buttonDisabled = true;
		}
	document.getElementById("submitbutton").className="";
	}
	
function enableSubmitButton (button) 
	{
	if (typeof button.disabled != 'undefined')
		button.disabled = false;
	else if (button.buttonDisabled) 
		{
		button.value = button.oldValue;
		button.onclick = button.oldOnclick;
		button.buttonDisabled = false;
		}
	var exists = document.getElementById("roomalert_top");
	if (exists != null) 
		{
		document.getElementById("submitbutton").className="oktobook";
		document.getElementById("roomalert_top").className="roomalert_off";
		document.getElementById("roomalert_bottom").className="roomalert_off";
		}
	document.getElementById('submitbutton').focus();
	}

	
function fadeIn(objId,opacity) {
	if (document.getElementById) {
		obj = document.getElementById(objId);
		if (opacity <= 100) {
			setOpacity(obj, opacity);
			opacity += 8;
			window.setTimeout("fadeIn('"+objId+"',"+opacity+")", 100);
		}
	}
}

function setOpacity(obj, opacity) 
	{
	opacity = (opacity == 100)?99.999:opacity;
	// IE/Win
	obj.style.filter = "alpha(opacity:"+opacity+")";
	// Safari 1.2, Konqueror
	obj.style.KHTMLOpacity = opacity/100;
	// Older Mozilla and Firefox
	obj.style.MozOpacity = opacity/100;
	// Safari 1.2, newer Firefox and Mozilla, CSS3
	obj.style.opacity = opacity/100;
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Show hide stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function hidediv(elementName) 
	{
	}

function showdiv($elementName) 
	{
	}

///////////////////////////////////////
//
//	Generic onload by Brothercake
//	http://www.brothercake.com/
//
///////////////////////////////////////

//onload function
function generic()
	{
	if ( toload.length > 0 )
		{
		for (x in toload)
			{
			eval(toload[x]);
			}
		}
	if ( document.ajaxform !=undefined ) 
		disableSubmitButton(document.ajaxform.confirmbooking);
	}
	
//setup onload function
var undefined;
var toload=new Array();
var templateVersion = 2.5;

if(typeof window.addEventListener != 'undefined')
{
	//.. gecko, safari, konqueror and standard
	window.addEventListener('load', generic, false);
}
else if(typeof document.addEventListener != 'undefined')
{
	//.. opera 7
	document.addEventListener('load', generic, false);
}
else if(typeof window.attachEvent != 'undefined')
{
	//.. win/ie

	window.attachEvent('onload', generic);
}

//** remove this condition to degrade older browsers
else
{
	//.. mac/ie5 and anything else that gets this far
	
	//if there's an existing onload function
	if(typeof window.onload == 'function')
	{
		//store it
		var existing = onload;
		
		//add new onload handler
		window.onload = function()
		{
		//call existing onload function
		existing();
		//call generic onload function
		generic();
		};
	}
	else
	{
		//setup onload function
		window.onload = generic;
	}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Ajax get response stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getResponse_particulars(field,value) 
	{
	HideRoomsList();
	blockInterface(field,200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: field, 'value': value },
		function(data)
			{
			showRoomsList(data); 
			show_log(field);
			}
	);
}

function getResponse_guesttype(typeid,value) 
	{
	HideRoomsList();
	blockInterface('guesttype',200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: 'guesttype', 'typeid': typeid ,'value': value },
		function(data)
			{
			showRoomsList(data); 
			show_log('guesttype');
			}
	);
	}

function getResponse_rooms(field,value) {
	HideRoomsList();
	blockInterface(field,200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: field,'value': value },
		function(data)
			{
			showRoomsList(data); 
			show_log(field);
			}
	);
}
function getResponse_extras(field,value,theId) {
	blockInterface(field,200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: field,'value': value },
		function(data)
			{
			eval(data); 
			show_log(field);
			}
	);
}
function getResponse(field,value) {
	blockInterface(field,200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: field,'value': value },
		function(data)
			{
			show_log(field);
			}
	);
}

function getResponse_existing(field,value) {
	blockInterface(field,200);
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: field,'value': value },
		function(data)
			{
			eval(data); 
			jQuery('div.block_ui_bookingform').unblock();
			//show_log(field);
			}
	);
}

function getResponse_guest() 
	{
	var firstname 		=jQuery('#firstname').val();
	var surname 		=jQuery('#surname').val();
	var house 			=jQuery('#house').val();
	var street 			=jQuery('#street').val();
	var town 			=jQuery('#town').val();
	var region 			=jQuery('#region').val();
	var postcode 		=jQuery('#postcode').val();
	var exists = document.ajaxform.country;
	if (exists != null)
		var country 		= document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	var tel_landline 	=jQuery('#tel_landline').val();
	var tel_mobile 		=jQuery('#tel_mobile').val();
	var eemail 			=jQuery('#eemail').val();

	url = ajaxurl+'?option=com_jomres&task=handlereq&no_html=1';
	result =checkaddressfields();

	if (result)
		{
		var addressString= firstname+"~"+surname+"~"+house+"~"+street+"~"+town+"~"+region+"~"+postcode+"~"+country+"~"+tel_landline+"~"+tel_mobile+"~"+eemail;
		blockInterface("guestdetails",200);
		jQuery.get(url,
			{ field: 'addressstring','value': addressString },
			function(data)
				{
				eval(data);
				show_log("addressstring");
				});
				
		}
	}

function show_log(lastfield) {
	jQuery.get(ajaxurl+'?option=com_jomres&task=handlereq&no_html=1',
		{ field: 'show_log','lastfield': lastfield },
		function(data)
			{
			eval(data); 
			jQuery('div.block_ui_bookingform').unblock();
			}
	);
}

function blockInterface(field,fadetime)
	{
	jQuery.extend(jQuery.blockUI.defaults.overlayCSS, { backgroundColor: '#fff', opacity: '0.5'  });
	jQuery.blockUI.defaults.pageMessage = "Please be patient...";
	jQuery.blockUI.defaults.fadeTime = fadetime;
	jQuery.unblockUI({ fadeOut:true });
	
	if (field == "guesttype")
		message = blockui_recheckingroomavailability;
	if (field == "arrivalDate")
		message = blockui_recheckingroomavailability;
	if (field == "arrival_period")
		message = blockui_recheckingroomavailability;
	if (field == "departureDate")
		message = blockui_recheckingroomavailability;
	if (field == "departure_period")
		message = blockui_recheckingroomavailability;
	if (field == "smoking")
		message = blockui_recheckingroomavailability;
	if (field == "extras")
		message = blockui_changingextra;
	if (field == "requestedRoom")
		message = blockui_changingroomselection;
		
	if (field == "guestdetails")
		message = blockui_updatingaddress;
	if (field == "firstname")
		message = blockui_recheckingroomavailability;
	if (field == "surname")
		message = blockui_recheckingroomavailability;
	if (field == "house")
		message = blockui_recheckingroomavailability;
	if (field == "street")
		message = blockui_recheckingroomavailability;
	if (field == "town")
		message = blockui_recheckingroomavailability;
	if (field == "region")
		message = blockui_recheckingroomavailability;
	if (field == "postcode")
		message = blockui_recheckingroomavailability;
	if (field == "country")
		message = blockui_recheckingroomavailability;
	if (field == "tel_landline")
		message = blockui_recheckingroomavailability;
	if (field == "tel_mobile")
		message = blockui_recheckingroomavailability;
	if (field == "email")
		message = blockui_recheckingroomavailability;
		
	if (field == "addresserror")
		message = blockui_addressinputerror;
	if (field == "existingCustomers")
		message = blockui_updatingaddress;

	if (field == "")
		message = blockui_recheckingroomavailability;
	jQuery('div.block_ui_bookingform').block('<img src="'+livesite+'/components/com_jomres/images/31.gif" /> <h3>'+message+'</h3>',{ border:'1px solid #016191'}); 
	}

	
function showRoomsList(req)
	{
	var rooms = req.split("~");
	buildSelected(rooms[0]) ; 
	buildAvailable(rooms[1]); 
	ShowRoomsList();
	return false;
	}

function HideRoomsList()
	{
	jQuery("div.roomsListWrapper").fadeOut("slow",1000); 
	//jQuery("div.roomsListWrapper").hide("slow"); 
	//jQuery("div.roomsListWrapper").find("div.roomsListInnerWrapper:visible").slideUp("slow"); 
	return false;
	}

function ShowRoomsList()
	{
	jQuery("div.roomsListWrapper").fadeIn("slow",1000); 
	//jQuery("div.roomsListWrapper").show("slow"); 
	//jQuery("div.roomsListWrapper").find("div.roomsListInnerWrapper").slideDown("slow");
	return false;
	}
	
function buildSelected(string)
	{
	if (string != undefined)
		{
		if ( string.length > 0 )
			document.getElementById("selectedRooms").innerHTML = string;
		}
	}

function buildAvailable(string)
	{	
	if (string != undefined)
		{	
		if ( string.length > 0 )
			document.getElementById("availRooms").innerHTML = string;
		}
	}
	
function checkSelectRoomMessage()
	{
	var exists = document.getElementById("roomalert_top");
	if (exists != null) 
		{
		if (document.getElementById("messages").innerHTML == selectroommessage )
			{
			
			jQuery("#extrascontainer").fadeTo("slow", 0.2);
			jQuery("#bookingform_address").fadeTo("slow", 0.2);
			jQuery("#bookingform_footer").fadeTo("slow", 0.2);
			document.getElementById("roomalert_top").className="roomalert_on"
			document.getElementById("roomalert_bottom").className="roomalert_on"
			//showdiv("roomalert_top");
			//showdiv("roomalert_bottom");
			//jQuery("#roomalert_top").Highlight(500, '#fc0000');               // Causes error with jquery 1.2 as interface library does not appear compatible with this version of jquery
			//jQuery("#roomalert_bottom").Highlight(500, '#fc0000');               // Causes error with jquery 1.2 as interface library does not appear compatible with this version of jquery
			}
		else
			{
			
			document.getElementById("extrascontainer").className="roomalert_off";
			document.getElementById("roomalert_top").className="roomalert_off";
			document.getElementById("roomalert_bottom").className="roomalert_off";
			//hidediv("roomalert_top");
			//hidediv("roomalert_bottom");
			jQuery("#extrascontainer").fadeTo("slow", 1);
			jQuery("#bookingform_address").fadeTo("slow", 1);
			jQuery("#bookingform_footer").fadeTo("slow", 1);
			}
		}
	}

(function($) {
	$.fn.customFadeIn = function(speed, callback) {
		$(this).fadeIn(speed, function() {
			if(jQuery.browser.msie)
				$(this).get(0).style.removeAttribute('filter');
			if(callback != undefined)
				callback();
		});
	};
	$.fn.customFadeOut = function(speed, callback) {
		$(this).fadeOut(speed, function() {
			if(jQuery.browser.msie)
				$(this).get(0).style.removeAttribute('filter');
			if(callback != undefined)
				callback();
		});
	};
})(jQuery);


function SRPcheckShowGuestDeetsNow() {
	if (isSRP)
		{
		showdiv("extrascontainer");
		showdiv("guestdeets");
		}
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//	 Departure date adjustment stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajaxADate(arrivalDate,dformat){
	var newday=0
	var day=0
	var mon=0
	var year=0
	if (dformat=="%d/%m/%Y"){
		dateArray=arrivalDate.split("/")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
	if (dformat=="%Y/%m/%d"){
		dateArray=arrivalDate.split("/")
		day=dateArray[2]
		mon=dateArray[1]
		year=dateArray[0]
		}
	if (dformat=="%m/%d/%Y"){
		dateArray=arrivalDate.split("/")
		day=dateArray[1]
		mon=dateArray[0]
		year=dateArray[2]
		}
	if (dformat=="%d-%m-%Y"){
		dateArray=arrivalDate.split("-")
		day=dateArray[0]
		mon=dateArray[1]
		year=dateArray[2]
		}
	if (dformat=="%Y-%m-%d"){
		dateArray=arrivalDate.split("-")
		day=dateArray[2]
		mon=dateArray[1]
		year=dateArray[0]
		}
	if (dformat=="%m-%d-%Y"){
		dateArray=arrivalDate.split("-")
		day=dateArray[1]
		mon=dateArray[0]
		year=dateArray[2]
		}
	if (dformat=="%d.%m.%Y"){
		dateArray=arrivalDate.split(".")
		day=dateArray[0]
		mon=dateArray[1]
		year=dateArray[2]
		}
		
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
			
	document.ajaxform.departureDate.value=dd;
	}	


///////////////////////////////////////
//
//	Validate the form input
//
///////////////////////////////////////

function checkaddressfields()
	{
	var firstname 		=jQuery.trim(jQuery('#firstname').val());
	var surname 		=jQuery.trim(jQuery('#surname').val());
	var house 			=jQuery.trim(jQuery('#house').val());
	var street 			=jQuery.trim(jQuery('#street').val());
	var town 			=jQuery.trim(jQuery('#town').val());
	var region 			=jQuery.trim(jQuery('#region').val());
	var postcode 		=jQuery.trim(jQuery('#postcode').val());
	var exists = document.ajaxform.country;
	if (exists != null)
		var country 	= document.ajaxform.country[document.ajaxform.country.selectedIndex].value;
	var tel_landline 	=jQuery.trim(jQuery('#tel_landline').val());
	var tel_mobile 		=jQuery.trim(jQuery('#tel_mobile').val());
	var eemail 			=jQuery.trim(jQuery('#eemail').val());

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
	
	if (validation_firstname && firstname.length == 0 )
		{
		setInputFillToErrorColour("#firstname");
		pass = false;
		}
	if (validation_surname && surname.length == 0 )
		{
		setInputFillToErrorColour("#surname");
		pass = false;
		}
	if (validation_houseno && house.length == 0 )
		{
		setInputFillToErrorColour("#house");
		pass = false;
		}
	if (validation_street && street.length == 0 )
		{
		setInputFillToErrorColour("#street");
		pass = false;
		}
	if (validation_town && town.length == 0 )
		{
		setInputFillToErrorColour("#town");
		pass = false;
		}
	if (validation_region && region.length == 0 )
		{
		setInputFillToErrorColour("#region");
		pass = false;
		}
	if (validation_postcode && postcode.length == 0 )
		{
		setInputFillToErrorColour("#postcode");
		pass = false;
		}
	if (validation_country && country.length == 0 )
		{
		setInputFillToErrorColour("#country");
		pass = false;
		}
	if (validation_landline && tel_landline.length == 0 )
		{
		setInputFillToErrorColour("#tel_landline");
		pass = false;
		}
	if (validation_cellmobile && tel_mobile.length == 0 )
		{
		setInputFillToErrorColour("#tel_mobile");
		pass = false;
		}
	if (validation_email && eemail.length == 0 )
		{
		setInputFillToErrorColour("#eemail");
		pass = false;
		}

	if (validation_email && !echeck(eemail))
		{
		setInputFillToErrorColour("#eemail");
		pass = false;
		}
	
	if (!pass)
		{
		jQuery('div.recheckaddress').show(); 
		blockInterface("addresserror",2500);
		jQuery('div.block_ui_bookingform').unblock();
		//disableSubmitButton(document.ajaxform.confirmbooking);
		return false;
		}
	else
		{
		enableSubmitButton(document.ajaxform.confirmbooking);
		return true;
		}
	}
	
function validate()
	{
	if (checkaddressfields())
		{
		getResponse_guest();
		setTimeout('submitBooking()', 1000);
		}
	}

function submitBooking()
	{
	document.ajaxform.action = livesite+"/index.php?option=com_jomres&task=confirmbooking"
	document.ajaxform.submit();	
	}
	
function setInputFillToOkColour(field)
	{
	jQuery(field).removeClass("errorbackground");
	}
	
function setInputFillToErrorColour(field)
	{
	jQuery(field).addClass("errorbackground");
	}
	
function submitenter(myfield,e)
	{
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;
	if (!document.ajaxform.confirmbooking.disabled)
		{
		if (keycode == 13)
			 {
			 document.ajaxform.submit();
			 return false;
			 }
		else
			 return true;
			 }
	else
		return true;
	}	
			
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
	}
