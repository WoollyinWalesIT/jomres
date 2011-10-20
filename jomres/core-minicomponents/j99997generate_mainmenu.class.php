<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j99997generate_mainmenu {
	function j99997generate_mainmenu($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$buttons = $componentArgs['jomres_mainmenu_buttons_categorised'];
		$button_o = array();

		$categories = array();
		$jomres_mainmenu_category_images = get_showtime('jomres_mainmenu_category_images');
		
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
				$r=$val;
				$r['LIVESITE']=get_showtime('live_site');
				$r['TARGET'] = '';
				if ($val['external'])
					$r['TARGET'] = ' target="_blank" ';
					
				$r['disabled_class']='';
				if ($r['disabled'])
					{
					$r['link']='#';
					$r['disabled_class']= 'class="ui-widget-shadow"';
					}

				$rows[]=$r;
				}

			$pageoutput = array();
			$output['CATEGORY']=ucwords($category);
			$output['LIVE_SITE']=get_showtime('live_site');
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'mainmenu_options.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$button_o[]['DIV']= $tmpl->getParsedTemplate();
			}

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'mainmenu_wrapper.html' );
		$tmpl->addRows( 'button_output', $button_o );
		$this->ret_vals = $tmpl->getParsedTemplate();
		 echo $this->ret_vals;
		}


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
?>