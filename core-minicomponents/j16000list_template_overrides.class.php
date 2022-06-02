<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
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

class j16000list_template_overrides
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
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$template_packages = get_showtime('template_packages');

		if (!empty($template_packages)) {
			
			$template_overrides = jomres_singleton_abstract::getInstance('template_overrides');

			$template_files_overrideable = array();
			
			$already_found = array();

			foreach ( $template_packages as $packages ) {
				foreach ( $packages as $package_item ) {
					$r = array();
					$template_name = $package_item['template_name'];
					if (!in_array($template_name , $already_found)) {
						$r['TEMPLATE_NAME'] = $template_name;

						$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
						if (isset($template_overrides->template_overrides[$template_name])) {
							$r['PATH'] = $template_overrides->template_overrides[$template_name]['path'];
							$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
							$toolbar->newToolbar();
							$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template_override&template_name='.$template_name), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
							$toolbar->addSecondaryItem( 'fa fa-trash-o', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=delete_template_override&template_name=' . $template_name ), jr_gettext( 'COMMON_DELETE', 'COMMON_DELETE', false ) );
						} else {
							$r['PATH'] =jr_gettext('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', '_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', false);
							$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
							$toolbar->newToolbar();
							$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template_override&template_name='.$template_name), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
						}
						$r['EDITLINK'] = $toolbar->getToolbar();
						$rows[]=$r;
						$already_found[] = $template_name;
					}
				}
			}
			
			$output[ '_JOMRES_TEMPLATE_PACKAGES' ] = jr_gettext('_JOMRES_TEMPLATE_PACKAGES', '_JOMRES_TEMPLATE_PACKAGES', false);
			$output[ '_JOMRES_TEMPLATE_PACKAGES_LEAD' ] = jr_gettext('_JOMRES_TEMPLATE_PACKAGES_LEAD', '_JOMRES_TEMPLATE_PACKAGES_LEAD', false);
			$output[ '_JOMRES_TEMPLATE_PACKAGES_INFO' ] = jr_gettext('_JOMRES_TEMPLATE_PACKAGES_INFO', '_JOMRES_TEMPLATE_PACKAGES_INFO', false);
			
			$output[ '_JOMRES_TEMPLATE_PACKAGE_NAME' ] = jr_gettext('_JOMRES_TEMPLATE_PACKAGE_NAME', '_JOMRES_TEMPLATE_PACKAGE_NAME', false);
			$output[ '_JOMRES_TEMPLATE_PACKAGE_PATH' ] = jr_gettext('_JOMRES_TEMPLATE_PACKAGE_PATH', '_JOMRES_TEMPLATE_PACKAGE_PATH', false);

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->readTemplatesFromInput('template_packages.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->displayParsedTemplate();
		} else {
			echo 'No template packages installed';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
