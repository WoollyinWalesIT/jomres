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

class j06005list_gateways_for_invoice
	{
	function __construct($invoice_id = null )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		if (is_null($invoice_id))
			$this->invoice_id		= intval(  jomresGetParam( $_REQUEST, 'invoice_id', 0 ) );
		else
			$this->invoice_id = (int)$invoice_id;
		
		if ($this->invoice_id == 0)
			return;
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$MiniComponents->triggerEvent( '10509', array ( "invoice_id" => $this->invoice_id ) );
		$mcOutput = $MiniComponents->getAllEventPointsData( '10509' );
		if ( count( $mcOutput ) > 0 )
			{
			
			$output = array();
			$pageoutput = array();
			
			$rows= array();
			foreach ( $mcOutput as $gateway )
				{
				$prefix = 'gateway_setting_'.$gateway['name'];
				
				if (!isset($jrConfig[ $prefix.'_active' ]))
					$jrConfig[$prefix.'_active'] = "0";
				
				if ($jrConfig[$prefix.'_active'] == "1")
					{
					$r = $gateway;
					$r['LINK'] = JOMRES_SITEPAGE_URL."&task=invoice_payment_send&gateway=".$gateway['name']."&invoice_id=".$this->invoice_id;
					$rows[]=$r;
					}
				}
			if ( count ( $rows) > 0 )
				{
				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'list_gateways_for_invoice.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$this->retVals = $tmpl->getParsedTemplate();
				
				if ( isset($_REQUEST['invoice_id']))
					echo $this->retVals;
				}
			else
				{
				echo "<p class='alert alert-danger'>Error, no gateways have been configured.</p>";
				}
			}
			
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}

?>