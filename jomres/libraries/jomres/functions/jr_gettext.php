<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


function jr_gettext($theConstant,$theValue,$okToEdit=TRUE,$isLink=FALSE)
	{
	$customTextObj =jomres_getSingleton('custom_text');
			
	$property_uid = (int)get_showtime('property_uid');
	$customTextArray = $customTextObj->get_custom_text();
	// if ($theConstant == "_JOMRES_CUSTOMTEXT_PROPERTY_NAME")
		// {
		// var_dump($theConstant);echo "<br>";var_dump($customTextArray);echo "<br>";
		// }
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
		
/* 	// New in 4.3, and experimental, so it's disabled by default and there's no option to enable it
	if ($jrConfig['auto_translate'] == "1")
		{
		if (!defined($theConstant) && !array_key_exists($theConstant,$customTextArray) && $theText != "")
			{
			//echo $property_uid;
			//var_dump($customTextObj->property_uids_custom_text);exit;
			$site_lang = $jrConfig['siteLang'];
			$jomresConfig_lang = get_showtime('lang');
			$site_tmp=explode("-",$site_lang);
			$curr_lang_tmp = explode("-",$jomresConfig_lang);
			
			//$gquery = "http://ajax.googleapis.com/ajax/services/language/translate?v=1.0&q=".urlencode($theText)."&langpair=".$site_tmp[0]."%7C".$curr_lang_tmp[0];
			// Autodetect the source language
			$gquery = "http://ajax.googleapis.com/ajax/services/language/translate?v=1.0&q=".urlencode($theText)."&langpair=%7C".$curr_lang_tmp[0];
			//echo $gquery." ".$theConstant."<br>";
			$curl_handle=curl_init($gquery);
			curl_setopt($curl_handle,CURLOPT_URL);
			curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
			curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
			$response = trim(curl_exec($curl_handle));
			curl_close($curl_handle);
			$response = json_decode($response);
			// Are we good?
			if ( (int)$response->responseStatus == 200)
				{
				//echo $response->responseData->translatedText."<br/>";
				$theText=filter_var($response->responseData->translatedText,FILTER_SANITIZE_SPECIAL_CHARS);
				
				$theText = str_replace("'", "&#39;", $theText);
				$query="INSERT INTO #__jomres_custom_text (`constant`,`customtext`,`property_uid`,`language`) VALUES ('".$theConstant."','".$theText."','".(int)$property_uid."','".get_showtime('lang')."')";
				$audit=_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT;
				// We'll disable this for now. The property features aren't associated with property ids so  it's generating lots of queries and saving lots of useless rows in the custom_text table
				//$result=doInsertSql($query,$audit);
				echo $property_uid." ".$theText."<br>";
				$customTextObj->property_uids_custom_text[$property_uid][$theConstant] = $theText;
				//var_dump($customTextObj->property_uids_custom_text[$property_uid]);exit;
				}
			else
				{
				//echo $response->responseStatus."<br>";
				}
			//echo $theText."<br/>";
			}
		} */
	
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
	
	$theText = jomres_purify_html($theText,$editing);
	
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


// Added to this file because it's expected to be used by jr_gettext
function jomres_purify_html($dirty,$editing)
	{
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$clean="";
	
	$performance_monitor =jomres_getSingleton('jomres_performance_monitor');
	$performance_monitor->set_point("pre-purification ".time());
	if ($jrConfig['use_html_purifier'] == "1" && !$editing)
		{
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'htmlpurifier'.JRDS.'HTMLPurifier.standalone.php');
		// Allowed Elements in HTML
		$HTML_Allowed_Elms = 'a, abbr, acronym, b, blockquote, br, caption, cite, code, dd, del, dfn, div, dl, dt, em, h1, h2, h3, h4, h5, h6, i, img, ins, kbd, li, ol, p, pre, span, strong, sub, sup, table, tbody, td, tfoot, th, thead, tr, tt, ul, var';

		// Allowed Element Attributes in HTML, element must also be allowed in Allowed Elements for these attributes to work.
		$HTML_Allowed_Attr = 'abbr.title, acronym.title, blockquote.cite, div.style, h1.style, h2.style, h3.style, h4.style, h5.style, h6.style, img.src, img.alt, img.title, img.class, img.style, img.height, img.width, ol.style, p.style, span.style, span.class, span.id, table.class, table.id, table.border, table.cellpadding, table.cellspacing, table.style, table.width, td.abbr, td.align, td.class, td.id, td.colspan, td.rowspan, td.style, td.valign, tr.align, tr.class, tr.id, tr.style, tr.valign, th.abbr, th.align, th.class, th.id, th.colspan, th.rowspan, th.style, th.valign, ul.style';

		$config = HTMLPurifier_Config::createDefault();
		$config->set('Cache', 'SerializerPath', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS);
		$config->set('HTML', 'AllowedElements', $HTML_Allowed_Elms); // sets allowed html elements that can be used.
		$config->set('HTML', 'AllowedAttributes', $HTML_Allowed_Attr); // sets allowed html attributes that can be used.

		$config->set('Core', 'Encoding', 'UTF-8');
		$config->set('HTML', 'Doctype', 'XHTML 1.0 Strict');
		$config->set('AutoFormat', 'RemoveEmpty', true);
		$purifier = new HTMLPurifier($config);
		$clean = $purifier->purify($dirty);
		}
	else
		$clean = $dirty; // ugh. Of course it's not clean, but if somebody chooses to not use this code, what can you do?
	unset($purifier);
	$performance_monitor->set_point("post-purification".time());
	return $clean;
	}


?>