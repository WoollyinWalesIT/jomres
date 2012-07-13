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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();

		$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
		

		if (!isset($_REQUEST['property_uid']) )
			$defaultProperty=getDefaultProperty();
		else
			$defaultProperty=jomresGetParam( $_REQUEST, 'property_uid',0);
		$cache->trashCacheForProperty($defaultProperty);
		$cache->trashCacheForUser($thisJRUser->userid);
		if (in_array($defaultProperty,$thisJRUser->authorisedProperties))
			{
			$query="SELECT published FROM #__jomres_propertys WHERE propertys_uid = ".(int)$defaultProperty." LIMIT 1";
			$published = doSelectSql($query,1);
			if ($published)
				{
				$query="UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid = ".(int)$defaultProperty." LIMIT 1";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY',_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY,FALSE)))
					{
					$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY',_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY,FALSE));
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
					}
				}
			else
				{
				if ($jrConfig['useSubscriptions']=="1")
					{
					$allowedProperties = subscribers_getAvailablePropertySlots($thisJRUser->id);
					$existingPublishedProperties = subscribers_getManagersPublishedProperties($thisJRUser->id);
					if ($allowedProperties > count($existingPublishedProperties) || ($thisJRUser->superPropertyManager && $thisJRUser->superPropertyManagersAreGods) )
						{
						$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid = ".(int)$defaultProperty." LIMIT 1";
						if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE)))
							{
							$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE));
							jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
							}
						}
					else
						echo _JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH;
					}
				else
					{
					$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid = ".(int)$defaultProperty." LIMIT 1";
					if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE))) 
						{
						$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE));
						jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties"), "" );
						}
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