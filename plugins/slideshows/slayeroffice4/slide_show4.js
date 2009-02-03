/***********************************************
	Slide Show IV
	Version 1.0
	Last Revision: 09.25.2004
	steve@slayeroffice.com
	
	PLEASE LEAVE THIS NOTICE IN TACT!

	Should you modify/improve upon this code
	please let me know so that i may update the 
	version hosted at slayeroffice

***********************************************/


window.onload = init;		// set up the initialization event
var d=document;			// shortcut reference to the document object
var imageObjArray;		// this array will hold all the info we need for the images found in the imageContainer div
var currentImg = 0;		// the index of the current image
var containerObj,captionObj;		// references to div elements
var dims;				// array to hold the dimension transitions
var wIndex=0;			// the index in the width subset of the array
var hIndex=0;			// the index in the height subset of the array
var zInterval = null;		// the animation interval
var INCREMENT = 2;		// the rate at which we move through the dimension tranisition array. lower to slow it down, raise it to speed up.

function init() {
	if(!d.getElementById)return;		//bail out if this is an older browser

	imageObjArray = getImageDimensions(d.getElementById("imageContainer"));	// get all the data we need on the images
	createImageNav(imageObjArray);						// create the navigation elements
	captionObj = d.getElementById("mContainer").appendChild(d.createElement("div"));	//create the caption object
	captionObj.id = "caption";
	captionObj.innerHTML = imageObjArray[0][0].getAttribute("alt");			// set the caption to the first image's alt attribute

	imageObjArray[0][0].style.display = "block";					// show the first image and set its opacity to near 100%
	resetOpacity(imageObjArray[0][0],99);					// mozilla browsers on Win32 give an ugly flash if you set the object opacity to 100%, so we use 99 to avoid that

	containerObj = d.getElementById("imageContainer");				// create a reference to the imageContainer element
	containerObj.style.width = imageObjArray[0][1] + "px";				// and set its dimensions the same as the first image.
	containerObj.style.height = imageObjArray[0][2] + "px";
}

// following function sets the object's (argument obj) opacity to argument val
// and covers all three methods for the different browsers capable of the effect
function resetOpacity(obj,val) {
	if(window.opera)return;
	obj.style.MozOpacity = val/10;
	obj.style.opacity = val/10;
	obj.style.filter = "alpha(opacity="+val*10+")";
}

// creates an array of image objects and the data we need for them.
// only looks at the images found in the parentObj argument.
function getImageDimensions(parentObj) {
	imgArray = parentObj.getElementsByTagName("img");
	nImage = new Array();
	for(i=0;i<imgArray.length;i++) {
		nImage[i] = new Array();
		nImage[i][0] = imgArray[i];
		// MSIE returns "0" for an objects dimensions when said object's display is none. we use bogus
		// attributes to get around this annoying flaw.
		nImage[i][1] = imgArray[i].getAttribute("xwidth");
		nImage[i][2] = imgArray[i].getAttribute("xheight");
		imgArray[i].style.display = "none";
		resetOpacity(imgArray[i],0);
	}
	return nImage;
}

//this function simply creates the navigational elements for the slide show based on the length of
// the array passed to it.
function createImageNav(imgArray) {
	n = d.getElementById("imageContainer").appendChild(d.createElement("div"));
	n.id = "navContainer";
	for(i=0;i<imgArray.length;i++) {
		a = n.appendChild(d.createElement("a"));
		a.href = "javascript:showImage(" + i + ");"
		a.id = "a"+i;
		a.innerHTML = i+1
	}
	d.getElementById("a0").style.border="1px solid";
}


function showImage(imgIndex) {
	if(zInterval != null || imgIndex == currentImg) return;		// return if we are already animating or the user is clicking on the active image
	d.getElementById("caption").innerHTML = "";			// reset the caption element to a blank string
	imageObjArray[currentImg][0].style.display = "none";		// hide the current image
	d.getElementById("a"+currentImg).style.borderStyle = "none";	// get rid of the border on the navigation element and then give it to the now active navigation element
	d.getElementById("a"+imgIndex).style.border = "1px solid";
	resetOpacity(imageObjArray[currentImg][0],0);			// reset the opacity of the new current image to 0 and then figure out its dimension transitions
	dims = calculateDimensionTransition(imageObjArray[currentImg][1],imageObjArray[currentImg][2],imageObjArray[imgIndex][1],imageObjArray[imgIndex][2]);
	currentImg = imgIndex;					// set the current image to the image passed in
	zInterval = setInterval("resizeContainer()",10);			// begin the fade-in interval
}

function resizeContainer() {
	if(wIndex<dims[0].length)containerObj.style.width = dims[0][wIndex] + "px";	// if we havent exceeded the length of widths and heights, set the container object to the new dimensions
	if(hIndex<dims[1].length)containerObj.style.height = dims[1][hIndex] + "px";		

	wIndex+=INCREMENT; hIndex+=INCREMENT;		// add INCREMENT to the index's. Incrementing or decrementing here will speed up/slow down the animation
	try {
		containerObj.style.top = (400-dims[1][hIndex])/2 + "px"; // IE can flip out here if we go out of range a little, so we catch the error.
	} catch(err) { }

	if(wIndex>=dims[0].length && hIndex >= dims[1].length) { // we've reached the width and height transition. clean it up and get ready for the next round
		clearInterval(zInterval);
		wIndex=0;
		hIndex=0;
		imageObjArray[currentImg][0].style.display = "block";
		containerObj.style.width = imageObjArray[currentImg][1] + "px";
		containerObj.style.height = imageObjArray[currentImg][2] + "px";
		curOpacity = 0;
		zInterval = setInterval("fadeImage()",10);
	}
}

// this function fades the object in until it is 0.9 (90%) opaque
function fadeImage() {
	curOpacity++;
	resetOpacity(imageObjArray[currentImg][0],curOpacity);
	if(curOpacity/10 == 0.9) {
		resetOpacity(imageObjArray[currentImg][0],9.9);
		captionObj.innerHTML = imageObjArray[currentImg][0].getAttribute("alt");
		clearInterval(zInterval);
		zInterval = null;
		curOpacity=0;
	}
}

// calculates the transitions required for a 200x100 element to become a 315x60 element.
// the returned array is then used in resizeContainer for the animation effect.

function calculateDimensionTransition(startW,startH,endW,endH) {
	dimensions = new Array();
	dimensions[0] = new Array(); dimensions[1] = new Array();
	nW = startW;
	nH = startH;
	if(endW>startW) {
		while(nW<endW) {
			nW++;
			dimensions[0][dimensions[0].length] = nW;
		}
	} else {
		while(nW>endW) { 
			nW--;
			dimensions[0][dimensions[0].length] = nW--;
		}
	}

	if(endH>startH) {
		while(nH<endH) {
			nH++;
			dimensions[1][dimensions[1].length] = nH;
		}
	} else {
		while(nH>endH) {
			nH--;
			dimensions[1][dimensions[1].length] = nH;
		}
	}

	return dimensions;
}