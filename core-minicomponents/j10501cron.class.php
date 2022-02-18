<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501cron
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ( !isset($jrConfig[ 'admin_options_level' ]) ) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		if ( $jrConfig[ 'admin_options_level' ] < 1 ) {
			return;
		}


		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];
		
		$cron = jomres_singleton_abstract::getInstance('jomres_cron');

		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_CRON_TITLE', '_JOMRES_COM_A_CRON_TITLE', false));

		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_CRON_DESC', '_JOMRES_COM_A_CRON_DESC', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_CRON_METHOD', '_JOMRES_COM_A_CRON_METHOD', false));
		$configurationPanel->setmiddle($lists[ 'cron_method' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_CRON_METHOD_DESC', '_JOMRES_COM_A_CRON_METHOD_DESC', false));
		$configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10530', $componentArgs);
		
		$configurationPanel->insertHeading("Current Cron Jobs");
		
		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_CRON_IMMEDIATERUN', '_JOMRES_COM_A_CRON_IMMEDIATERUN', false));
		
		foreach ($cron->allUnlockedJobs as $job) {
			$d = DateTime::createFromFormat('U', $job['last_ran']);
			$last_ran = $d->format('Y-m-d H:i');
			$schedule = $job['schedule'];

			$_jomres_com_a_cron_lastran = jr_gettext('_JOMRES_COM_A_CRON_LASTRAN', '_JOMRES_COM_A_CRON_LASTRAN', false);
			$_jomres_com_a_cron_schedule = jr_gettext('_JOMRES_COM_A_CRON_SCHEDULE', '_JOMRES_COM_A_CRON_SCHEDULE', false);
			
			$configurationPanel->setleft('<a href="'.JOMRES_SITEPAGE_URL_AJAX.'&task=cron_'.$job[ 'job_name' ].'" target="_blank" >'.$job[ 'job_name' ].' ----- '.$_jomres_com_a_cron_lastran.' '.$last_ran.' '.$_jomres_com_a_cron_schedule.' '.$schedule.'</a>');
			$configurationPanel->setmiddle('');
			$configurationPanel->setright('');
			$configurationPanel->insertSetting();
		} 

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
