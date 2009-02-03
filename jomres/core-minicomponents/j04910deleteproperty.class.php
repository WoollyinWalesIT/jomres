<?php
/**
#
 * Mini-component core file: Delete a property
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$thisJRUser,$jomresConfig_live_site,$Itemid,$jrConfig;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$sure  = jomresGetParam( $_REQUEST, 'sure', 0 );
		if ($sure)
			{
			$property_uid=(int)getDefaultProperty();
			
			if (in_array($property_uid,$thisJRUser->authorisedProperties) && !JOMRES_SINGLEPROPERTY)
		 		{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETED',_JOMRES_COM_MR_PROPERTY_DELETED,FALSE);
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.'/');
				rmdir(JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['ss_imageLocation'].$property_uid.'/');
				dropImage($property_uid,"property");

				$subject=_JOMRES_REGISTRATION_CREATEDPROPERTY.$property_name;
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
					$thisJRUser->check_currentproperty();
					jomresRedirect( jomresURL("index.php?option=com_jomres&Itemid=$Itemid", '' ));
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
					window.location="<?php  echo $jomresConfig_live_site.'/index.php?option=com_jomres&task=deleteProperty'.jomresURLToken().'&Itemid='.$Itemid.'&property_uid='.$property_uid.'&sure=1'; ?>"
				else
					window.location="<?php  echo $jomresConfig_live_site.'/index.php?option=com_jomres&task=propertyadmin&Itemid='.$Itemid; ?>"
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