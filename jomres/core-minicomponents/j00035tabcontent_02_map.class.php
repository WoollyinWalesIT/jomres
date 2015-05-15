<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00035tabcontent_02_map
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );

		$output = $componentArgs[ 'currrent_output' ];
		// j01050 geocoder (google maps)
		if ( strlen( $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ] ) > 0 )
			{
			$tab_id = "mapTab";
			$anchor = jomres_generate_tab_anchor( $output[ 'TITLE_MAP' ] );
			?>
				<script type="text/javascript">
					jomresJquery(document).ready(function () {
						jomresJquery('#pdetails_tabs').bind('tabsshow', function (event, ui) {
							if (ui.panel.id == "<?php echo $anchor;?>") {
								<?php echo "init_map_".get_showtime("current_map_identifier");?>();
							}
						});
					});
				</script>
			<?php
			$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_ID" => $tab_id, "TAB_TITLE" => $output[ 'TITLE_MAP' ], "TAB_CONTENT" => $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ]);
			$this->retVals = $tab;
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
		return $this->retVals;
		}

	}

?>