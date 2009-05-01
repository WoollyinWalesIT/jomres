<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
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
		global $thisJRUser,$jrConfig;
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
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=bUploadForm", _JOMRES_FILE_DELETED );
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