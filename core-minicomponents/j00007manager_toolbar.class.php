<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00007manager_toolbar {
	function j00007manager_toolbar($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$accessLevel=$thisJRUser->accesslevel;
		$published=$componentArgs['published'];
		if ($accessLevel=="2")
			{
			jr_import('jomres_cache');
			$cache = new jomres_cache("manager_menu",0,true);

			$cacheContent = $cache->readCache();
			if ($cacheContent)
				echo $cacheContent;
			else
				{
				$rows		=array();
				$pageoutput	=array();
				$output=array();

				jr_import('jomres_sanity_check');
				$sanity_checks = new jomres_sanity_check();
				$output['WARNINGS'] = $sanity_checks->do_sanity_checks();

				$componentArgs['published']=$published;

				set_showtime('frontend_buttons',array());

				$MiniComponents->triggerEvent('00011',$componentArgs); //
				$mcOutput=$MiniComponents->getAllEventPointsData('00011');

				if (count($mcOutput)>0)
					{
					foreach ($mcOutput as $key=>$val)
						{
						$r=array();
						$r["OPTIONS"]=$val;
						$rows[]=$r;
						}
					}

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
				if ($management_view)
					$tmpl->readTemplatesFromInput('toolbar_manager_manager_view.html');
				else
					$tmpl->readTemplatesFromInput('toolbar_manager.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$cachableContent = $tmpl->getParsedTemplate();
				$cache->setCache($cachableContent);
				unset($cache);
				echo $cachableContent;
				}
			}

		// Third party plugin buttons
		$MiniComponents->triggerEvent('09002',$componentArgs); //
		$mcOutput=$MiniComponents->getAllEventPointsData('09002');
		if (count($mcOutput)>0)
			{
			$rows		=array();
			$pageoutput	=array();
			$output=array();

			foreach ($mcOutput as $key=>$val)
				{
				$r=array();
				$r["OPTIONS"]=$val;
				$rows[]=$r;
				}

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'toolbar_thirdparty.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows',$rows);
			echo $tmpl->getParsedTemplate();
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