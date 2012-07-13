<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################



/**
#
 * Gets the image sizes, refactored to the jrConfig max width value, then returns them. Allows us to return a set of sizes so that the image proportions remain valid
#
 */
function getImagesSize($imageLocation)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$thumbnail_width=$jrConfig['thumbnail_width'];
	$mysock = getimagesize($imageLocation);
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
			$percentage = ($thumbnail_width/ $width);
		else
			$percentage = ($thumbnail_width / $height);

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
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$defaultProperty=getDefaultProperty();
	jr_import('jomres_cache');
	$cache = new jomres_cache();
	$cache->trashCacheForProperty($defaultProperty);

	$output['PAGETITLE']			=jr_gettext('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD',_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD);
	$output['ITEMID']				=$Itemid;
	$output['INFO']					=jr_gettext('_JOMRES_FRONT_IMAGEUPLOADS_INFO',_JOMRES_FRONT_IMAGEUPLOADS_INFO);
	$output['IMAGESALREADYINDIR']	=jr_gettext('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR',_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR);
	$output['_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD']	=jr_gettext('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD',_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD);


	$imagesAlreadyInDirectory=listImages($defaultProperty);
	$rows=array();
	if (count($imagesAlreadyInDirectory)>0)
		{
		foreach ($imagesAlreadyInDirectory as $image)
			{
			$r['IMAGENAME']=$image;
			$r['IMAGEPATH']=JOMRES_IMAGELOCATION_RELPATH.$defaultProperty.'/';
			$thumb=getThumbnailForImage($r['IMAGEPATH'].$r['IMAGENAME']);
			if ($thumb)
				$r['IMAGEOUTPUT']= $thumb;
			else
				$r['IMAGEOUTPUT']=$r['IMAGEPATH'].$r['IMAGENAME'];
			$r['COUNT']=count($rows);
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$r['IMAGENAME'].'">';
			$rows[]=$r;
			}
		}

	$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
	$jrtb  = $jrtbar->startTable();
	$jrtb .= $jrtbar->toolbarItem('save','','',true,'bUpload');
	$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&Itemid=$Itemid"),'');
	$jrtb .= $jrtbar->endTable();
	$output['JOMRESTOOLBAR']=$jrtb;

	$output['DELETEIMAGES']=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,false,false);

	$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
	$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
	$output['JOMRES_SITEPAGE_URL_DELIMAGES']=JOMRES_SITEPAGE_URL."&task=delslideshowimages";

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
	$defaultProperty=getDefaultProperty();
	jr_import('jomres_cache');
	$cache = new jomres_cache();
	$cache->trashCacheForProperty($defaultProperty);

	$uploadedImagesArray=array();
	for ($i = 0; $i < 12; $i++)
		{
		$checkedImage=FALSE;
		$uploadedFilename	=	$_FILES['image'.$i]['name'];
		if (!empty($uploadedFilename))
			$checkedImage=uploadImageFromPost('image'.$i,$uploadedFilename,JOMRES_IMAGELOCATION_ABSPATH.$defaultProperty.JRDS);
	   	if ($checkedImage)
	   		{
	   		$uploadedImagesArray[]=$uploadedFilename;
	   		}
		}
	if (count($uploadedImagesArray) > 0)
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=bUploadForm"), '' );
	
	}

/**
#
 * Gets a list of filenames from the slideshow folder for this property
#
 */
function listImages($property_uid)
	{
	$abs=JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS;
	$d = @dir($abs);
	$docs = array();
	if($d)
		{
		while (FALSE !== ($entry = $d->read()))
			{
			$filename = $entry;
			if(is_file($abs.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs' && !strstr($entry, '_thumbnail'))
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
	global $mrConfig;
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$saveMessage=jr_gettext('_JOMRES_FILE_UPDATED',_JOMRES_FILE_UPDATED,FALSE);
	$mrp=JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'/';
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
   		move_uploaded_file($theFile, $mrp."$newFileName");
		@chmod ($mrp."$newFileName", 0777);

		//Filename + proper path
		$fileLocation=$mrp."/$newFileName";
		//numExtensions= people tend to upload malicious files using mutliple extensions like: virus.txt.vbs; we'll want to have the last extension to validate against..
		$numExtensions=(count($filename))-1;
		$filesize=$uploadedSize;
		$fileExt=$filename[$numExtensions];
		//check for empty file
		if (empty($uploadedFilename))
			{
			@unlink($fileLocation);
			echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_EMPTY',_JOMRES_FILE_ERROR_EMPTY,FALSE).". ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
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
				$rc=0;
				}
			if ($rc)
				{
				//check file name characteristics
				if (eregi("[^0-9a-zA-Z_-]", $filename))
					{
					unlink($fileLocation);
					echo "<script> alert('".jr_gettext('_JOMRES_FILE_ERROR_NAME',_JOMRES_FILE_ERROR_NAME,FALSE).". ".jr_gettext('_JOMRES_FILE_NOT_UPLOADED',_JOMRES_FILE_NOT_UPLOADED,FALSE)."'); ; </script>\n";
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
						$rc=0;
						}
					if ($rc)
						{
						$code='[file name='.$newFileName.' size='.$filesize.']'.$mrp.$newFileName.'[/file]';
						$uploadedFileLocation=JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'/'.$newFileName;
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
