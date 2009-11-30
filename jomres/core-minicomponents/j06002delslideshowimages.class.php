<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06002delslideshowimages {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06002delslideshowimages()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
			
		$success=true;
		$defaultProperty=getDefaultProperty();
		$imageNameArray =  $_POST['idarray'];
		$mrp=JOMRES_IMAGELOCATION_ABSPATH.$defaultProperty.JRDS;
		foreach ($imageNameArray as $imageName)
			{
			$filename= split("\.",$imageName);
			$numExtensions=count($filename)-1;
			$fileExt=strtoupper($filename[$numExtensions]);
			if (!$fileExt== "JPG" || !$fileExt== "JPEG")
				{
				trigger_error("Error, User tried to delete image ".$imageName, E_USER_ERROR);
				}
				
			if (file_exists($mrp.$imageName) )
				{
				if (is_writable($mrp.$imageName) )
					if (!unlink($mrp.$imageName) )
						{
						$success=false;
						error_logging( "Error, unable to delete ".$mrp.$imageName);
						}
					else
						echo $imageName. ' '.jr_gettext('_JOMRES_FILE_DELETED',_JOMRES_FILE_DELETED);
					else
				echo "<br>";
				}
			else
				{
				error_logging( "Error, file does not exist ".$mrp.$imageName);
				return false;
				}
				
			}
		if ($success)
			{
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message(_JOMRES_FILE_DELETED);
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=bUploadForm");
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FILE_DELETED',_JOMRES_FILE_DELETED);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>