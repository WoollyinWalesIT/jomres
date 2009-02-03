// Color Picker Script from Flooble.com
// For more information, visit
//	http://www.flooble.com/scripts/colorpicker.php
// Copyright 2003 Animus Pactum Consulting inc.
// You may use and distribute this code freely, as long as
// you keep this copyright notice and the link to flooble.com
// if you chose to remove them, you must link to the page
// listed above from every web page where you use the color
// picker code.
//---------------------------------------------------------
	 var perline = 9;
	 var divSet = false;
	 var curId;
	 var colorLevels = Array('0', '3', '6', '9', 'C', 'F');
	 var colorArray = Array();
	 var ie = false;
	 var nocolor = 'none';
	 if (document.all) { ie = true; nocolor = ''; }
	 function getObj(id) {
		if (ie) { return document.all[id]; }
		else {	return document.getElementById(id);	}
	 }

	 function addColor(r, g, b) {
	 	var red = colorLevels[r];
	 	var green = colorLevels[g];
	 	var blue = colorLevels[b];
	 	addColorValue(red, green, blue);
	 }

	 function addColorValue(r, g, b) {
	 	colorArray[colorArray.length] = '#' + r + r + g + g + b + b;
	 }

	 function setColor(color) {
	 	var link = getObj(curId);
	 	var field = getObj('cfg_' + curId );
	 	var picker = getObj('colorpicker');
	 	field.value = color;
	 	if (color == '') {
		 	link.style.background = nocolor;
		 	link.style.color = nocolor;
		 	color = nocolor;
	 	} else {
		 	link.style.background = color;
		 	link.style.color = color;
		}
	 	picker.style.display = 'none';
		eval(getObj('cfg_' + curId).title);
	 }

	 function setDiv() {
	 	if (!document.createElement) { return; }
		var elemDiv = document.createElement('div');
		if (typeof(elemDiv.innerHTML) != 'string') { return; }
		genColors();
		elemDiv.id = 'colorpicker';
		elemDiv.style.position = 'absolute';
		elemDiv.style.display = 'none';
		elemDiv.style.border = '#000000 1px solid';
		elemDiv.style.background = '#FFFFFF';
		elemDiv.innerHTML = '<span style="font-family:Verdana; font-size:11px;">Pick a color: '
			+ '(<a href="javascript:setColor(\'\');">No color</a>)<br>'
			+ getColorTable()
			+ '<center><a href="http://www.flooble.com/scripts/colorpicker.php"'
			+ ' target="_blank">color picker</a> by <a href="http://www.flooble.com" target="_blank"><b>flooble</b></a></center></span>';

		document.body.appendChild(elemDiv);
		divSet = true;
	 }

	 function pickColor(id)
		{
	 	if (!divSet) { setDiv(); }
	 	var picker = getObj('colorpicker');
		if (id == curId && picker.style.display == 'block') {
			picker.style.display = 'none';
			return;
		}
	 	curId = id;
	 	var thelink = getObj(id);
	 	//picker.style.top = getAbsoluteOffsetTop(thelink)+20+'px';
	 	//picker.style.left = getAbsoluteOffsetLeft(thelink)+'px';
		var pos=findPos(thelink);
		//alert(pos[1]);
		picker.style.top = pos[1]+20+'px';
		picker.style.left = pos[0]+'px';
		picker.style.display = 'block';
		}

	 function genColors() {
		addColorValue('0','0','0');
		addColorValue('3','3','3');
		addColorValue('6','6','6');
		addColorValue('8','8','8');
		addColorValue('9','9','9');
		addColorValue('A','A','A');
		addColorValue('C','C','C');
		addColorValue('E','E','E');
		addColorValue('F','F','F');

		for (a = 1; a < colorLevels.length; a++)
			addColor(0,0,a);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(a,a,5);

		for (a = 1; a < colorLevels.length; a++)
			addColor(0,a,0);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(a,5,a);

		for (a = 1; a < colorLevels.length; a++)
			addColor(a,0,0);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(5,a,a);


		for (a = 1; a < colorLevels.length; a++)
			addColor(a,a,0);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(5,5,a);

		for (a = 1; a < colorLevels.length; a++)
			addColor(0,a,a);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(a,5,5);

		for (a = 1; a < colorLevels.length; a++)
			addColor(a,0,a);
		for (a = 1; a < colorLevels.length - 1; a++)
			addColor(5,a,5);

	 	return colorArray;
	 }
	 function getColorTable() {
		 var colors = colorArray;
		 var tableCode = '';
		 tableCode += '<table border="0" cellspacing="1" cellpadding="1">';
		 for (i = 0; i < colors.length; i++) {
				if (i % perline == 0) { tableCode += '<tr>'; }
				tableCode += '<td bgcolor="#000000"><a style="outline: 1px solid #000000; color: '
					+ colors[i] + '; background: ' + colors[i] + ';font-size: 10px;" title="'
					+ colors[i] + '" href="javascript:setColor(\'' + colors[i] + '\');">&nbsp;&nbsp;&nbsp;</a></td>';
				if (i % perline == perline - 1) { tableCode += '</tr>'; }
		 }
		 if (i % perline != 0) { tableCode += '</tr>'; }
		 tableCode += '</table>';
		 return tableCode;
	 }
	 function relateColor(id, color) {
	 	var link = getObj(id);
	 	if (color == '') {
		 	link.style.background = nocolor;
		 	link.style.color = nocolor;
		 	color = nocolor;
	 	} else {
		 	link.style.background = color;
		 	link.style.color = color;
		}
		eval(getObj('cfg_' + id).title);
	 }
	 function  getAbsoluteOffsetTop(obj) {

	 	var top = obj.offsetTop;
		//if(navigator.appName='Microsoft Internet Explorer'){return lngRet;}
		alert(top);
	 	var parent = obj.offsetParent;
		while (parent != document.body) {

	 		top += parent.offsetTop;
	 		parent = parent.offsetParent;
	 	}
	 	return top;
	 }

function findPos(obj) {
	var curleft = curtop = 0;
	if (obj.offsetParent) {
		curleft = obj.offsetLeft
		curtop = obj.offsetTop
		while (obj = obj.offsetParent) {
			curleft += obj.offsetLeft
			curtop += obj.offsetTop
		}
	}
	return [curleft,curtop];
}


	 function  getAbsoluteOffsetLeft(obj) {
	 	var left = obj.offsetLeft;
	 	var parent = obj.offsetParent;
	 	while (parent != document.body) {
	 		left += parent.offsetLeft;
	 		parent = parent.offsetParent;
	 	}
	 	return left;
	 }
