<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j99997generate_mainmenu {
	function j99997generate_mainmenu($componentArgs)
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		// Stops the main menu from being generated twice.
		if (get_showtime('mainmenu_alreadyrun'))
			return;
		set_showtime('mainmenu_alreadyrun',true);
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$buttons = $componentArgs['jomres_mainmenu_buttons_categorised'];
		$button_o = array();

		$categories = array();
		$jomres_mainmenu_category_images = get_showtime('jomres_mainmenu_category_images');
		
		$management_view=$componentArgs['management_view'];
		
		foreach ($buttons as $category=>$buts)
			{
			$categories[$category]=$category;
			$output['CAT_IMAGE'] =get_showtime('live_site').'/jomres/images/down.png';
			if (isset($jomres_mainmenu_category_images[$category]))
				{
				$output['CAT_IMAGE'] = $jomres_mainmenu_category_images[$category];
				}
			
			$rows = array();
			foreach ($buts as $key=>$val)
				{
				$old_task='';
				$elements = str_replace("&amp;","&",$val['link']);
				$bits = explode("&",$elements);
				foreach ($bits as $bobs)
					{
					$bob = explode("=",$bobs);
					if ($bob[0]=="task")
						{
						$old_task='&attempted_task='.$bob[1];
						}
					}

				$r=$val;
				$r['LIVESITE']=get_showtime('live_site');
				$r['TARGET'] = '';
				if ($val['external'])
					$r['TARGET'] = ' target="_blank" ';
					
				$r['disabled_class']='';
				if ($r['disabled'])
					{
					$r['link']=JOMRES_SITEPAGE_URL_NOSEF."&task=feature_not_available".$old_task;
					if (!using_bootstrap())
						$r['disabled_class']= 'ui-state-error ui-state-disabled';
					else
						$r['disabled_class']= 'disabled';
					}
				
				$button_link=str_replace('&amp;','&',$val['link']);
				parse_str($button_link,$url_params);
				if (array_key_exists('task',$url_params))
					{
					$button_task=$url_params['task'];
					
					$r['BADGES']='';
					$items_requiring_attention = get_number_of_items_requiring_attention_for_menu_option($button_task);
					if (count($items_requiring_attention)>0)
						{
						foreach ($items_requiring_attention as $colour=>$number)
							{
							$tmpl = new patTemplate();
							$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
							$tmpl->readTemplatesFromInput( 'frontend_menu_badge_'.$colour.'.html' );
							$tmpl->addRows( 'items_requiring_attention', array(array("NUMBER"=>$number)));
							$r['BADGES'] .= $tmpl->getParsedTemplate();
							}
						}
					
					if ($button_task==jomresGetParam( $_REQUEST, 'task', "" ))
						{
						if (!using_bootstrap())
							$r['ACTIVE']="ui-state-active";
						else
							$r['ACTIVE']="active";
						}
					else
						$r['ACTIVE']="";
					}

				$rows[]=$r;
				}

			$pageoutput = array();
			$output['CATEGORY']=ucwords($category);
			$output['LIVE_SITE']=get_showtime('live_site');
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			if (!$management_view)
				{
				if ($jrConfig['alternate_mainmenu'] == "0")
					$tmpl->readTemplatesFromInput( 'mainmenu_options.html' );
				else
					$tmpl->readTemplatesFromInput( 'mainmenu_options_alternate.html' );
				}
			else
				$tmpl->readTemplatesFromInput( 'management_mainmenu_options.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$button_o[]['DIV']= $tmpl->getParsedTemplate();
			}
		
		$output=array();
		$pageoutput = array();
		
		$output['PROPERTYNAME']							= get_showtime("menuitem_propertyname");
		$output['MENUITEM_TIMEZONE_DROPDOWN']			= get_showtime("menuitem_timezone_dropdown");
		$output['MENUITEM_TIMEZONEBLURB']				= get_showtime("menuitem_timezoneblurb");
		$output['MENUITEM_MANAGEMENT_VIEW_DROPDOWN']	= get_showtime("menuitem_management_view_dropdown");
		$output['MENUITEM_EDITING_MODE_DROPDOWN']		= get_showtime("menuitem_editing_mode_dropdown");
		$output['MENUITEM_LANGDROPDOWN']				= get_showtime("menuitem_langdropdown");
		
		
		$output['_JOMRES_CONTROLPANEL']=jr_gettext("_JOMRES_CONTROLPANEL",_JOMRES_CONTROLPANEL,false);
		$output['_JOMRES_MENU_SHOW']=jr_gettext("_JOMRES_MENU_SHOW",_JOMRES_MENU_SHOW,false);
		$output['_JOMRES_MENU_HIDE']=jr_gettext("_JOMRES_MENU_HIDE",_JOMRES_MENU_HIDE,false);
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if (!$management_view)
			{
			if ($jrConfig['alternate_mainmenu'] == "0")
				$tmpl->readTemplatesFromInput( 'mainmenu_wrapper.html' );
			else
				$tmpl->readTemplatesFromInput( 'mainmenu_wrapper_alternate.html' );
			}
		else
			$tmpl->readTemplatesFromInput( 'management_menu_wrapper.html' );
		$tmpl->addRows( 'button_output', $button_o );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$this->ret_vals = $tmpl->getParsedTemplate();
		echo $this->ret_vals;
		}


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
?>