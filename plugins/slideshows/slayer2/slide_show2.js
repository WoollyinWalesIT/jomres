
/************************************

	slide show II
	version 1.0
	last revision: 06.24.2004
	steve@slayeroffice.com

	Please leave this notice intact!
	
	Should you make any improvements
	or modifications to this code, please
	let me know so that i can update
	the version hosted at slayeroffice

************************************/
	

window.onload = init;		// what to do when the document loads
var d=document;				// object reference to the document object
var total_images;			// the total amount of images. defined in init
var imgObj = new Array();		// object reference array for the images in the document
var imgInfo = new Array();		// will contain the current tops and lefts for the images
var activeObj;			// defines which image is currently active and moving
var prevObj = null;			// defines the previously active object so we know which one to move out of the way
var zInterval =null;		// interval reference

// MSIE runs intervals a lot better and smoother than Mozilla based browsers (the only thing its got over it, i might add)
// This sets the movement increment accordingly.
var ANIM_SPEED=document.all?5:10;

function init() {
	// bail out if this is an older browser
	if(!d.getElementById)return;
	// create the span elements the the user clicks on to view the images
	createControls();
	// clone the images in the markup
	cloneImages();
	// initialize the text in the caption div element
	d.getElementById("caption").innerHTML = "Click a number above to begin.";
}

function cloneImages() {
	// create an object reference to the parent element
	mObj=d.getElementById("mContainer");
	// find out how many images we've got in the parent element.
	// this also allows you to place as many or as few images in the parent element
	// as you like without having to modify the script.
	total_images = mObj.getElementsByTagName("img").length;
	for(i=0;i<total_images;i++) {
		// create a temporary object reference to the image we're iterating over
		tmpObj = mObj.getElementsByTagName("img")[i];
		// initilize the array we'll be using to reference the images
		imgObj[i]=new Array();
		// create the object references
		imgObj[i][0] = tmpObj;
		// clone the original images so that we have one at top, bottom and right.
		imgObj[i][1] = imgObj[i][0].cloneNode(false);
		imgObj[i][2] = imgObj[i][0].cloneNode(false);
		imgObj[i][3] = imgObj[i][0].cloneNode(false);
		// append the cloned images to the parent element
		mObj.appendChild(imgObj[i][1]);
		mObj.appendChild(imgObj[i][2]);
		mObj.appendChild(imgObj[i][3]);
		// define the class's for the new images
		imgObj[i][0].className = "rightImage";
		imgObj[i][1].className = "leftImage";	
		imgObj[i][2].className = "topImage";	
		imgObj[i][3].className = "bottomImage";	
		// initiliaze the coordinate arrays for the images so we can keep track of where they 
		// are when moving them without having to access the offset property directly, which is really really slow.
		imgInfo[i] = new Array();
		imgInfo[i][0] = imgObj[i][0].offsetLeft;
		imgInfo[i][1] = imgObj[i][1].offsetLeft;
		imgInfo[i][2] = imgObj[i][2].offsetTop;
		imgInfo[i][3] = imgObj[i][3].offsetTop;
	}
}

function createControls() {
	// create an object reference to the control div element
	cObj = d.getElementById("controls");
	mObj=d.getElementById("mContainer");
	// append a SPAN element to the control div for each image in the parent element
	for(i=0;i<mObj.getElementsByTagName("img").length;i++) {
		ctrlObj = cObj.appendChild(d.createElement("span"));
		ctrlObj.appendChild(d.createTextNode(i+1));
		// this bogus "xid" attribute will be used to identify which image needs to be
		// set to an active state when the user clicks on a span. the xid corresponds
		// to the images index in the imgObj array
		ctrlObj.xid = i;
		ctrlObj.onclick=function() { initTransition(this.xid); }
	}
}

function initTransition(objIndex) {
	// define which image is currectly the active image
	activeObj=objIndex;
	// start the interval
	zInterval = setInterval("doTransition()",20);
}

function doTransition() {
	// prevObj is initialized as null. If it isnt null, then there is already an image in 
	// the viewable area. move it out of the way.
	if(prevObj!=null) {
		imgInfo[prevObj][0]-=ANIM_SPEED;
		imgInfo[prevObj][1]+=ANIM_SPEED;
		imgInfo[prevObj][2]-=ANIM_SPEED;
		imgInfo[prevObj][3]+=ANIM_SPEED;
	
		imgObj[prevObj][0].style.left = imgInfo[prevObj][0]+"px";
		imgObj[prevObj][1].style.left = imgInfo[prevObj][1]+"px";
		imgObj[prevObj][2].style.top = imgInfo[prevObj][2]+"px";
		imgObj[prevObj][3].style.top = imgInfo[prevObj][3]+"px";
	}
	// increment the tops and lefts of the images
	imgInfo[activeObj][0]+=ANIM_SPEED;
	imgInfo[activeObj][1]-=ANIM_SPEED;
	imgInfo[activeObj][2]+=ANIM_SPEED;
	imgInfo[activeObj][3]-=ANIM_SPEED;
	// ...and put them where they need to be
	imgObj[activeObj][0].style.left = imgInfo[activeObj][0]+"px";
	imgObj[activeObj][1].style.left = imgInfo[activeObj][1]+"px";
	imgObj[activeObj][2].style.top = imgInfo[activeObj][2]+"px";
	imgObj[activeObj][3].style.top = imgInfo[activeObj][3]+"px";

	// if the first cloned image's left is less than 0, clear the interval 
	// and set all of the images at the zero position
	if(imgInfo[activeObj][1]<=0) {
		clearInterval(zInterval);
		zInterval = null;
		// make sure the previous image is out of the way
		// by putting back at its negative positions
		if(prevObj!=null) {
			imgObj[prevObj][0].style.left="-202px";
			imgObj[prevObj][1].style.left="202px";
			imgObj[prevObj][2].style.top="-124px";
			imgObj[prevObj][3].style.top="124px";
		}
		imgObj[activeObj][0].style.left=0;
		imgObj[activeObj][1].style.left=0;
		imgObj[activeObj][2].style.top=0;
		imgObj[activeObj][3].style.top=0;

		// set the active image as the previous image so we'll
		// know which one to move out of the way next time
		prevObj=activeObj;

		// set the caption div to the images alt attribute value
		d.getElementById("caption").innerHTML = imgObj[activeObj][0].alt;
	}
}