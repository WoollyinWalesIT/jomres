<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


function jr_gettext($theConstant,$theValue,$okToEdit=TRUE,$isLink=FALSE)
	{
	$property_uid = (int)get_showtime('property_uid');
	
	global $text_bucket;
	if (!isset($text_bucket))
		$text_bucket = array();
	if (isset($text_bucket[$property_uid][$theConstant]))
		return $text_bucket[$property_uid][$theConstant];
	
	$customTextObj =jomres_singleton_abstract::getInstance('custom_text');
	
	
	$customTextArray = $customTextObj->get_custom_text();

	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	if (get_showtime("jr_user_ready")) // If jr_user isn't ready yet, calling jomres_singleton_abstract::getInstance('jr_user') will cause php to stop due to recursion, so we'll check that jr_user's been set up before we do anything else
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');

		if (!isset($tmpBookingHandler->user_settings['editing_on']))
			$tmpBookingHandler->user_settings['editing_on']= false;
			
		if (!$thisJRUser->userIsManager)
			$tmpBookingHandler->user_settings['editing_on']= false;
			
		if ($thisJRUser->userIsManager && $thisJRUser->accesslevel < 2)
			$tmpBookingHandler->user_settings['editing_on']= false;

		$editing = $tmpBookingHandler->user_settings['editing_on'];
		}
	else
		$tmpBookingHandler->user_settings['editing_on']= false;

	$mrConfig=getPropertySpecificSettings($property_uid);
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
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
	//$theText=jomres_reconvertString($theText);
	if (isset($thisJRUser))
		{
		if ($_REQUEST['task']=="touch_templates" && $thisJRUser->userIsManager)
			{
			$property_uid=0;
			$jrConfig['editinplace']=1;
			$jrConfig['editingModeAffectsAllProperties'] = "1";
			$editing = true;
			}
		
		if($jrConfig['allowHTMLeditor']!="1")
			$theText=jomres_remove_HTML($theText);
		
		$theText = jomres_decode($theText);
		
		if ($thisJRUser->userIsManager && ($editing || ($jrConfig['editingModeAffectsAllProperties'] == "1" && $thisJRUser->superPropertyManager == true ) ) && $okToEdit && ($accessLevel ==2))
			{
			if (strlen(trim($theText))==0 || strtolower(trim($theText)) == "<span></span>" || strtolower(trim($theText)) == "<span> </span>" || strtolower(trim($theText)) == "<span>  </span>")
				$theText="xxxxxxxxx";
			$indexphp="index.php";
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
						jomresJquery(document).ready(function() {';
						if ($_REQUEST['task']=="touch_templates")
							echo 'jomresJquery(".jqueryeditable").editable("'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editinplace&no_html=1", ';
						else
							echo 'jomresJquery(".jqueryeditable").editable("'.JOMRES_SITEPAGE_URL.'&task=editinplace&no_html=1", ';
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
	
	//$theText = jomres_purify_html($theText,$editing);
	$text_bucket[$property_uid][$theConstant] = $theText;
	return $theText;
	}


// Added to this file because it's expected to be used by jr_gettext
function jomres_purify_html($dirty,$editing)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$clean="";
	$performance_monitor =jomres_singleton_abstract::getInstance('jomres_performance_monitor');
	$performance_monitor->set_point("pre-purification ".time());
	$html_purifier = jomres_singleton_abstract::getInstance('jomres_input_filter_singleton');
	$clean = $html_purifier->purify($dirty);
	$performance_monitor->set_point("post-purification".time());
	return $clean;
	}


?>