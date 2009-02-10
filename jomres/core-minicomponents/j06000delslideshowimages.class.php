<?php
/**
#
 * Mini-component core file: Constructs and displays the manager's menu
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06000delslideshowimages {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06000delslideshowimages()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $Itemid,$thisJRUser,$jrConfig,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$success=true;
		$defaultProperty=getDefaultProperty();
		$imageNameArray =  $_POST['idarray'];
		$mrp=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$defaultProperty.'/';
		foreach ($imageNameArray as $imageName)
			{
			$imageName = (string)$imageName;
			$pos = strpos($imageName, ".jpg");
			if ($pos === false)
				{
				error_logging("Error, couldn't validate filename ".$imageName);
				return;
				}
			if (file_exists($mrp.$imageName) )
				{
				if (is_writable($mrp.$imageName) )
					if (unlink($mrp.$imageName) )
						echo $imageName. ' '.jr_gettext('_JOMRES_FILE_DELETED',_JOMRES_FILE_DELETED);
					else
						{
						$success=false;
						echo "Unable to delete image. Please check your file permissions and try again";
						}
				echo "<br>";
				}
			}
		if ($success)
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=bUploadForm&Itemid=".$Itemid, _JOMRES_FILE_DELETED );
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