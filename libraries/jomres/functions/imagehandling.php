<?php
/**
#
 * Image handling functions
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * Finds the configured slideshow finds the images then includes the required slideshow.php file
#
 */
function getSlideshow($property_uid)
	{
	global $jrConfig,$jomresConfig_live_site,$property_uid;

	$slideshowImgs_AbPath=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.JRDS;
	$slideshowImgs_RelPath=$jomresConfig_live_site.$jrConfig['ss_imageLocation'].$property_uid.'/';
	$slideshowBasepath=JOMRESPATH_BASE.JRDS.'plugins'.JRDS.'slideshows'.JRDS.$jrConfig['slideshow'].JRDS;
	$slideshowRelpath='/plugins/slideshows/'.$jrConfig['slideshow'].'/';
	$imagesArray=listImages();

	if (count($imagesArray) >0)
		{
		$filecount=0;
		for ($i = 0; $i <count($imagesArray); $i++)
			{
		 	$filename= split("\.",$imagesArray[$i]);
			$numExtensions=count($filename)-1;
			$fileExt=strtoupper($filename[$numExtensions]);
			if ($fileExt== "JPG" || $fileExt== "JPEG")
				{
				$imageData[$i]['filename']=$imagesArray[$i];
				$sizes=getImagesSize($imagesArray[$i]);
				$imageData[$i]['actualwidth'] = $sizes['actualwidth'];
				$imageData[$i]['actualheight'] = $sizes['actualheight'];
				$imageData[$i]['fullwidth'] = $sizes['fullwidth'];
				$imageData[$i]['fullheight'] = $sizes['fullheight'];
				$imageData[$i]['thwidth'] = $sizes['thwidth'];
				$imageData[$i]['thheight'] = $sizes['thheight'];
				$imageData[$i]['imagelocation'] = $slideshowImgs_RelPath;
				$filecount++;
				}
			}
		}
	$propertyName=getPropertyNameNoTables($property_uid);
	include($slideshowBasepath."slideshow.php");
	$result=constructSlideshow($imageData,$propertyName,$slideshowImgs_RelPath,$slideshowRelpath);
	return $result;
	}

/**
#
 * Gets the image sizes, refactored to the jrConfig max width value, then returns them. Allows us to return a set of sizes so that the image proportions remain valid
#
 */
function getImagesSize($imageLocation)
	{
	global $property_uid,$jrConfig;
	$imagesPath=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.'/';
	$mysock = getimagesize($imagesPath.$imageLocation);
	if ($mysock)
		{
		// http://www.sitepoint.com/article/image-resizing-php
		//takes the larger size of the width and height and applies the formula accordingly...this is so this script will work dynamically with any size image
		$width=$mysock[0];
		$height=$mysock[1];

		$image['actualwidth'] = $width;
		$image['actualheight'] = $height;
		if ($width > $height)
			$percentage = ($jrConfig['maxwidth']/ $width);
		else
			$percentage = ($jrConfig['maxwidth'] / $height);
		//gets the new value and applies the percentage, then rounds the value
		$image['fullwidth'] = round($width * $percentage);
		$image['fullheight'] = round($height * $percentage);

		if ($width > $height)
			$percentage = ($jrConfig['maxwidth']/ $width);
		else
			$percentage = ($jrConfig['maxwidth'] / $height);

		$image['thwidth'] = round($width * $percentage);
		$image['thheight'] = round($height * $percentage);
		return $image;
		}
	else
		return FALSE;
	}

/**
#
 * Creates the form to perform batch uploads for slideshow images
#
 */
function batchUploadForm()
	{
	global $Itemid,$jomresConfig_live_site,$jrConfig;
	$defaultProperty=getDefaultProperty();
	$output['PAGETITLE']			=jr_gettext('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD',_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD);
	$output['ITEMID']				=$Itemid;
	$output['INFO']					=jr_gettext('_JOMRES_FRONT_IMAGEUPLOADS_INFO',_JOMRES_FRONT_IMAGEUPLOADS_INFO);
	$output['IMAGESALREADYINDIR']	=jr_gettext('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR',_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR);

	$imagesAlreadyInDirectory=listImages();
	$rows=array();
	if (count($imagesAlreadyInDirectory)>0)
		{
		foreach ($imagesAlreadyInDirectory as $image)
			{
			$r['IMAGENAME']=$image;
			$r['IMAGEPATH']=$jomresConfig_live_site.$jrConfig['ss_imageLocation'].$defaultProperty.'/';
			$r['IMAGEOUTPUT']='<img src="'.$r['IMAGEPATH'].$r['IMAGENAME'].'" alt="'.$r['IMAGENAME'].'" border="0" />';
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$r['IMAGENAME'].'">';
			$rows[]=$r;
			}
		}

	$jrtbar = new jomres_toolbar();
	$jrtb  = $jrtbar->startTable();
	$jrtb .= $jrtbar->toolbarItem('save','','',true,'bUpload');
	$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&Itemid=$Itemid"),'');
	$jrtb .= $jrtbar->endTable();
	$output['JOMRESTOOLBAR']=$jrtb;

	$output['DELETEIMAGES']=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,false,false);

	$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';

	$pageoutput[]=$output;
	$tmpl = new patTemplate();
   	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'batchupload.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->addRows( 'rows',$rows);
	$tmpl->displayParsedTemplate();
	}

/**
#
 * Does the batch upload
#
 */
function batchUploadPropertyImages()
	{
	global $jrConfig;
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$defaultProperty=getDefaultProperty();
	$mrp=$jrConfig['ss_imageLocation'].$defaultProperty.'/';
	$defaultProperty=getDefaultProperty();
	//$saveMessage=_JOMRES_FILE_UPDATED;
	$uploadedImagesArray=array();
	for ($i = 0; $i < 12; $i++)
		{
		$checkedImage=FALSE;
		$uploadedFilename	=	$_FILES['image'.$i]['name'];
		//$uploadedSize		=	$_FILES['image'.$i]['size'];
		//$uploadedTemp		=	$_FILES['image'.$i]['tmp_name'];
		if (!empty($uploadedFilename))
			$checkedImage=uploadImageFromPost('image'.$i,$uploadedFilename,$mrp);
	   	if ($checkedImage)
	   		{
	   		$uploadedImagesArray[]=$uploadedFilename;
	   		}
		}
	if (count($uploadedImagesArray) > 0)
		echo _JOMRES_FILE_UPLOADED;
	}

/**
#
 * Gets a list of filenames from the slideshow folder for this property
#
 */
function listImages()
	{
	global $jrConfig,$property_uid;
	$mrp=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.'/';
	$d = @dir($mrp);
	$docs = array();
	if($d)
		{
		while (FALSE !== ($entry = $d->read()))
			{
			$filename = $entry;
			if(is_file($mrp.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
				{
				$docs[] =$filename;
				}
			}
		$d->close();
		if (count($docs)>1)
			sort($docs);

		}
	return $docs;
	}

/**
#
 * Does a bunch of checks on the uploaded image to ensure that it's actually an image, and a few other checks
#
 */
function batchcheckImageUpload($property_uid,$resourceType,$resourceId,$uploadedFilename,$uploadedSize,$uploadedTemp)
	{
	global $mrConfig,$jrConfig;
	$saveMessage=jr_gettext('_JOMRES_FILE_UPDATED',_JOMRES_FILE_UPDATED,FALSE);
	$mrp=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.'/';
   	$rc=1; //reset return code
	if (!is_dir($mrp) )
		{
		mkdir($mrp, 0777);
		}

	$uploadedFileLocation="";
 	$filename= split("\.",$uploadedFilename);
	// Now let's check that this really is an Image file
   	if (!getimagesize($uploadedTemp))
		{
		echo "File ".$filename." is not an image file. Not uploaded.";
		$rc=FALSE;
		}
   	//Change the file's name
	$numExtensions=(count($filename))-1;
	$filesize=$uploadedSize;
	$fileExt=$filename[$numExtensions];
	$newFileName=$uploadedFilename;
	$newFileName=str_replace(" ","-",$newFileName);
	//Ensure it is a new file
   	if (file_exists($mrp."/$filename"))
		{
		if (!unlink($mrp."/$uploadedFilename") )
			{
			echo "<script> alert('Tried to delete old file, but couldnt. Wibble!'); ; < /script>\n";
			}
		}

	//move it to the proper location
	if ($rc)
		{
		$theFile=$uploadedTemp;
		//echo $theFile;
   		move_uploaded_file($theFile, $mrp."$newFileName");
		@chmod ($mrp."$newFileName", 0777);

		//Filename + proper path
		$fileLocation=$mrp."/$newFileName";
		//some transaltions for readability
		//numExtensions= people tend to upload malicious files using mutliple extensions like: virus.txt.vbs; we'll want to have the last extension to validate against..
		$numExtensions=(count($filename))-1;
		$filesize=$uploadedSize;
		$fileExt=$filename[$numExtensions];
		//check for empty file
		if (empty($uploadedFilename))
			{
			@unlink($fileLocation);
			echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_EMPTY',_JOMRES_FILE_ERROR_EMPTY,FALSE).". ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
//			$message=str_replace("[file]","",$message);
			$rc=FALSE;
			}
		if (!getimagesize($fileLocation))
			{
			$rc=FALSE;
			}
		if ($rc)
			{
			//check for allowed file types
			$allowedArray= explode (',',strtolower($jrConfig['fileTypes']));
			$fileExt=strtolower($fileExt);
			if( !in_array($fileExt,$allowedArray ) )
				{
				unlink($fileLocation);
				echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_TYPE',_JOMRES_FILE_ERROR_TYPE,FALSE)." ".$jrConfig['fileTypes'].". ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
//				$message=str_replace("[file]","",$message);
				$rc=0;
				}
			if ($rc)
				{
				//check file name characteristics
				if (eregi("[^0-9a-zA-Z_-]", $filename))
					{
					unlink($fileLocation);
					echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_NAME',_JOMRES_FILE_ERROR_NAME,FALSE).". ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
//					$message=str_replace("[file]","",$message);
					$rc=0;
					}

				if ($rc)
					{
					//check filesize
					$maxFileSize=$jrConfig['fileSize']*1024;
					if ( $filesize > $maxFileSize)
						{
						unlink($fileLocation);
						echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_SIZE',_JOMRES_FILE_ERROR_SIZE,FALSE)." (".$jrConfig['fileSize']." Kilobytes). ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
//						$message=str_replace("[file]","",$message);
						$rc=0;
						}
					if ($rc)
						{
						$code='[file name='.$newFileName.' size='.$filesize.']'.$mrp.$newFileName.'[/file]';
//						if ( preg_match("/\[file\]/si", $message) )
//							$message=str_replace("[file]",$code,$message);
//						else
//							$message=$message.' '.$code;
						$uploadedFileLocation=$jrConfig['ss_imageLocation'].$property_uid.'/'.$newFileName;
						}
					}
				}
			}
		}
	if ($rc)
		{
		return $uploadedFileLocation;
		}
	else
		return FALSE;
	}

?>
