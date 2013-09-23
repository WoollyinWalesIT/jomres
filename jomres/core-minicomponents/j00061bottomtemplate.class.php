<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j00061bottomtemplate
	{
	function j00061bottomtemplate( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		if ( AJAXCALL ) return;
		$jomres_tooltips = jomres_singleton_abstract::getInstance( 'jomres_tooltips' );

		$management_view = jomresGetParam( $_REQUEST, 'tmpl', false );

		$output = array ();

		if ( using_bootstrap() )
			{
			$output[ 'RADIO_BUTTON_JAVASCRIPT' ] = '
			<!-- Joomla 3 frontend doesn\'t yet have this, and Jomres needs it for the property config (among others). Put in for now, will see if we need to remove it when Alpha 2 is released -->

			<script>
				(function($){
					// Turn radios into btn-group
					$(\'.radio.btn-group label\').addClass(\'btn\')
					$(".btn-group label:not(.active)").click(function(){
						var label = $(this);
						var input = $(\'#\' + label.attr(\'for\'));

						if (!input.prop(\'checked\')){
							label.closest(\'.btn-group\').find("label").removeClass(\'active btn-primary\');
							label.addClass(\'active btn-primary\');
							input.prop(\'checked\', true);
						}
					});
					$(".btn-group input[checked=checked]").each(function(){
						$("label[for=" + $(this).attr(\'id\') + "]").addClass(\'active btn-primary\');
					});
				})(jQuery);
			</script>';
			}
		$output[ 'BACKTOTOP' ] = jr_gettext( 'BACKTOTOP', BACKTOTOP, false );


		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if ( $management_view ) $tmpl->readTemplatesFromInput( 'management_bottom.html' );
		else
		$tmpl->readTemplatesFromInput( 'bottom.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();

		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( 'BACKTOTOP', BACKTOTOP );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>