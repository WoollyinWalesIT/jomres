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
 * Lists the properties, according to property uids passed from a search function
 #
* @package Jomres
#
 */
class j06000terms
	{
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j06000terms()
		{
		global $mrConfig,$jomresConfig_live_site,$jomresConfig_lang,$jrConfig,$MiniComponents,$mainframe;

		$property_uid 	= intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		$this->pop		= jomresGetParam( $_REQUEST, 'popup', 0 );
		//if ($this->pop==1)
			//property_header($property_uid);

		$mrConfig			= getPropertySpecificSettings($property_uid);
		$userIsManager		= checkUserIsManager();

		$query="SELECT property_name,property_policies_disclaimers
		FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
		$propertyList = doSelectSql($query);

		foreach ($propertyList as $pproperty)
			$property_policiesdisclaimers=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',htmlspecialchars(trim(stripslashes($pproperty->property_policies_disclaimers)), ENT_QUOTES) );

		if ( (!$userIsManager) || $userIsManager )
			{
			$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = '$property_uid' AND language = '$jomresConfig_lang'";
			$customTextList=doSelectSql($query);
			if (count($customTextList))
				{
				$customTextArray=array();
				foreach ($customTextList as $text)
					$customTextArray[$text->constant]=stripslashes($text->customtext);
				}

			$property=array();
			$property['LIVESITE']			= $jomresConfig_live_site;
			$property['HPROPERTYNAME']		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
			$property['HPOLICIESDISCLAIMERS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);

			$property['POLICIESDISCLAIMERS']=$property_policiesdisclaimers;
			if (empty($property['POLICIESDISCLAIMERS']))
				$property['HPOLICIESDISCLAIMERS']="";

			$property_deets[]	= $property;

			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'property_deets', $property_deets );
			$tmpl->readTemplatesFromInput( 'terms.html' );
			$tmpl->displayParsedTemplate();

			if ($mrConfig['dumpTemplate']=="1" && isset($tmpl) )
				$tmpl->dump();
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
