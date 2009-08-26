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
 * Constructs and displays  error message to user
 #
* @package Jomres
#
 */
class j02272publishprop {
	/**
	#
	 * Constructor: Displays error message to user
	#
	 */
	function j02272publishprop()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser,$jrConfig;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();

		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE));

		if (!isset($_REQUEST['property_uid']) )
			$defaultProperty=getDefaultProperty();
		else
			$defaultProperty=jomresGetParam( $_REQUEST, 'property_uid',0);
		$cache->trashCacheForProperty($defaultProperty);
		$cache->trashCacheForUser($thisJRUser->userid);
		if (in_array($defaultProperty,$thisJRUser->authorisedProperties))
			{
			$query="SELECT published FROM #__jomres_propertys WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
			$published = doSelectSql($query,1);
			if ($published)
				{
				$query="UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE))) jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
				}
			else
				{
				if ($jrConfig['useSubscriptions']=="1")
					{
					$allowedProperties = subscribers_getAvailablePropertySlots($thisJRUser->id);
					$existingPublishedProperties = subscribers_getManagersPublishedProperties($thisJRUser->id);
					if ($allowedProperties > count($existingPublishedProperties) || ($thisJRUser->superPropertyManager && $thisJRUser->superPropertyManagersAreGods) )
						{
						$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
						if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE))) jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
						}
					else
						echo _JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH;
					}
				else
					{
					$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
					if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE))) jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
					}
				}
			}
		else
			echo "You naughty little tinker, that's not your property";

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