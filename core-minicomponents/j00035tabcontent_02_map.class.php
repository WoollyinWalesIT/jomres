<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
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
	 * Used by j06000viewproperty.class.php to build tabs in the property details page. Builds map template output.
	 * 
	 */

class j00035tabcontent_02_map
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->retVals = '';
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig = getPropertySpecificSettings($property_uid);

		$map = $MiniComponents->specificEvent('06000', 'show_property_map', array('output_now' => false, 'property_uid' => $property_uid));
		$map_title = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', false);

		if (strlen($map) > 0) {
			$tab_id = 'mapTab';
			$anchor = jomres_generate_tab_anchor($map_title); ?>
				<script type="text/javascript">
					jomresJquery(document).ready(function () {
						jomresJquery('#pdetails_tabs').bind('tabsshow', function (event, ui) {
							if (ui.panel.id == "<?php echo $anchor; ?>") {
								<?php echo 'init_map_'.get_showtime('current_map_identifier'); ?>();
							}
						});
					});
				</script>
			<?php
			$tab = array('TAB_ANCHOR' => $anchor, 'TAB_ID' => $tab_id, 'TAB_TITLE' => $map_title, 'TAB_CONTENT' => $map);
			$this->retVals = $tab;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
