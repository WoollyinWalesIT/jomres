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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for the 'form' or creditcard gateway
 #
* @package Jomres
#
 */
class j00510form {
	/**
	#
	 * Constructor: collects data for and displays the form/creditcard gateway configuration popup
	#
	 */
	function j00510form()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$gateway="form";
		$button="<IMG SRC=\"".get_showtime('eLiveSite')."j00510".$gateway.".gif\" border=\"0\">";
		$defaultProperty=getDefaultProperty();

		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );

		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$gateway' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}

		$output['GATEWAYNAME']=ucwords($gateway);
		$output['GATEWAYLOGO']=$button;
		$output['GATEWAY']=$gateway;
		$output['JR_GATEWAY_CONFIG_ACTIVE']=jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAY_CONFIG_ACTIVE'.$gateway,"Active");
		$output['ACTIVE'] = jomresHTML::selectList( $yesno, 'active', 'class="inputbox" size="1"', 'value', 'text', $settingArray['active'] );

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( get_showtime('ePointFilepath') );
		$tmpl->readTemplatesFromInput( 'j00510'.$gateway.'.html' );
		$tmpl->addRows( 'edit_gateway', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();
		$gateway="form";
		
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAY_CONFIG_ACTIVE'.$gateway,"Active");

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