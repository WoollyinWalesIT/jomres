<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


function jr_gettext($theConstant,$theValue,$okToEdit=TRUE,$isLink=FALSE)
	{
	$customTextObj =jomres_getSingleton('custom_text');
	
	$property_uid = get_showtime('property_uid');
	$customTextArray = $customTextObj->get_custom_text();
	$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
	$thisJRUser=jomres_getSingleton('jr_user');

	if (!isset($tmpBookingHandler->user_settings['editing_on']))
		$tmpBookingHandler->user_settings['editing_on']= false;
		
	if (!$thisJRUser->userIsManager)
		$tmpBookingHandler->user_settings['editing_on']= false;
		
	if ($thisJRUser->userIsManager && $thisJRUser->accesslevel < 2)
		$tmpBookingHandler->user_settings['editing_on']= false;

	$editing = $tmpBookingHandler->user_settings['editing_on'];
	
	//$tmpBookingHandler->close_jomres_session();

	$mrConfig=getPropertySpecificSettings($property_uid);
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	if (isset($thisJRUser->accesslevel))
		$accessLevel=$thisJRUser->accesslevel;
	else
		$accessLevel=0;
	$theText=$theValue;
	$defaultText="";
	$br="";
	if (get_showtime('task')=="editCustomTextAll")
		$br="<br>";

	if (count($customTextArray)>0)
		{
		if (array_key_exists($theConstant,$customTextArray) )
			{
			$theText=stripslashes($customTextArray[$theConstant]);
			}
		else
			{
			$theText=$theValue;
			$defaultText=$theValue;
			}
		}
	$theText=jomres_reconvertString($theText);
	if (isset($thisJRUser))
		{
		if ($_REQUEST['task']=="touch_templates" && $thisJRUser->userIsManager)
			{
			$property_uid=0;
			$jrConfig['editinplace']=1;
			$jrConfig['editingModeAffectsAllProperties'] = "1";
			$editing = true;
			}
		if ($thisJRUser->userIsManager && ($editing || ($jrConfig['editingModeAffectsAllProperties'] == "1" && $thisJRUser->superPropertyManager == true ) ) && $okToEdit && ($accessLevel ==2))
			{
			if (strlen(trim($theText))==0 || strtolower(trim($theText)) == "<span></span>" || strtolower(trim($theText)) == "<span> </span>" || strtolower(trim($theText)) == "<span>  </span>")
				$theText="xxxxxxxxx";
			$indexphp="index2.php";
			$title=' title="'._JOMRES_COM_MR_VRCT_ROOM_LINKTEXT.'" ';
			$defaultText=substr($defaultText,0,100);

				if ($isLink)
					{
					$link = JOMRES_SITEPAGE_URL.'&task=editCustomText&lng='.get_showtime('lang').'&theConstant='.$theConstant."&property_uid=".$property_uid;
					$editingLink="<a class=\"jomrestexteditable\" $title href=\"$link\" target=\"_blank\" ><img src=\"".get_showtime('live_site')."/jomres/images/jricon.png\" width=\"10\" height=\"10\" border=\"0\"></a>";
					$theText=$editingLink.$theText;
					}
				else
					{
					if ($jrConfig['editinplace']==1 && $_REQUEST['no_html'] != '1' )
						{
						if (!defined('JOMRESJQUERY_EDITINPLACE'))
							{
							define("JOMRESJQUERY_EDITINPLACE",1);
							echo '
								<script type="text/javascript">
							jQuery(document).ready(function() {';
							if ($_REQUEST['task']=="touch_templates")
								echo 'jQuery(".jqueryeditable").editable("'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editinplace&no_html=1", ';
							else
								echo 'jQuery(".jqueryeditable").editable("'.JOMRES_SITEPAGE_URL.'&task=editinplace&no_html=1", ';
							echo "	{
								indicator : '".JOMRES_WORD_SAVING."',
								id			: 'theConstant',
								name		: 'newtext',
								type		: 'textarea',
								cancel		: 'x',
								submit		: 'OK',
								tooltip		: '".htmlspecialchars(_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT)."',
								height		: '20',
								width		: '200',
								style		: 'inherit'
								});
							});
							</script>
							";
							}
						$theText='<span class="jomrestexteditable"><div class="jqueryeditable" id="'.$theConstant.'" >'.htmlspecialchars($theText).'</div></span>';
						}
					else
						{
						$link = JOMRES_SITEPAGE_URL_NOHTML.'&task=editCustomText&popup=1&lng='.get_showtime('lang').'&theConstant='.$theConstant."&property_uid=".$property_uid;
						$editingLink="<a class=\"jomrestexteditable\" $title href=\"$link\" target=\"_blank\" >$theText</a>";
						$theText=$editingLink.$br;
						}
					}
				}
		}
	
	switch ($jrConfig['utfHTMLdecode'])
		{
		case 0:
			return html_entity_decode($theText);
			break;
		case 1:
			return jomres_html_entity_decode_utf8($theText);
			break;
		case 2:
		default:
			return $theText;
		}
	}

?>