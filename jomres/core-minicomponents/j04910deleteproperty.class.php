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
 * Delete a property
 #
* @package Jomres
#
 */
class j04910deleteproperty {
	/**
	#
	 * Delete a property
	#
	 */
	function j04910deleteproperty($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser,$jomresConfig_live_site,$jrConfig;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$sure  = jomresGetParam( $_REQUEST, 'sure', 0 );
		if ($sure)
			{
			$property_uid=(int)getDefaultProperty();
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($property_uid);
			if (in_array($property_uid,$thisJRUser->authorisedProperties) && !JOMRES_SINGLEPROPERTY)
		 		{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETED',_JOMRES_COM_MR_PROPERTY_DELETED,FALSE);
				emptyDir(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS);
				rmdir(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS);
				dropImage($property_uid,"property",0,false);

				$subject=_JOMRES_MR_AUDIT_DELETE_PROPERTY.$property_name;
				sendAdminEmail(getPropertyName($property_uid),$saveMessage);

				$query="DELETE FROM #__jomres_extraServices WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_contracts WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_rates WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_bookings WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_classes WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_rooms WHERE propertys_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_features WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_hotel_features WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_pluginsettings WHERE prid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_settings WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_custom_text WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_pcounter WHERE p_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_managers_propertys_xref WHERE property_uid = '".$property_uid."'";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."'";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_PROPERTY',_JOMRES_MR_AUDIT_DELETE_PROPERTY,FALSE)))
					{
					$resetProperty = $thisJRUser->check_currentproperty();
					$jomres_messaging =jomres_getSingleton('jomres_messages');
					$jomres_messaging->set_message($saveMessage);
					
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&thisProperty=".$resetProperty, '' ));
					}
				else
					trigger_error ("Unable to delete from propertys table, mysql db failure", E_USER_ERROR);
				}
			else
				{
				trigger_error (_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS, E_USER_ERROR);
				echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS',_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS,FALSE)."'); ; </script>\n";
				}
			}
		else
			{
			$query="SELECT propertys_uid FROM #__jomres_propertys";
			$propertyList = doSelectSql($query);
			if (count($propertyList) > 1)
				{
				$property_uid  = intval( jomresGetParam( $_POST, 'property_uid', 0 ) );
				?>
				<script type="text/javascript">
				<!--
				var answer = confirm ("<?php  echo _JOMRES_AREYOUSURE ?>")
				if (answer)
					window.location="<?php  echo JOMRES_SITEPAGE_URL.'&task=deleteProperty'.jomresURLToken().'&property_uid='.$property_uid.'&sure=1'; ?>"
				else
					window.location="<?php  echo JOMRES_SITEPAGE_URL.'&task=propertyadmin'; ?>"
				// -->
				</script>
				<?php
				}
			else
				{
				echo "Sorry, you must have at least one property on the system for Jomres to work. Please create a new property before attempting to delete this one.";
				}
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