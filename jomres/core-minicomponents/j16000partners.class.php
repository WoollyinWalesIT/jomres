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

class j16000partners
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$output=array();
		
		$output['TITLE']="Our Partners";
		$output['INTRO']="Here you can find a list of our partners. These are businesses who also offer plugins for Jomres, extra to those already available in the Jomres Plugin Manager.";
		
		
		$partners = array();
		$partners ['jomres_extras'] = array (
			"name"=>"Jomres Extras", 
			"intro"=>"Jomres Extras have been working on Jomres for many years now, and have produced many excellent plugins for Jomres.",
			"plugin_list_url"=>"http://www.jomres-extras.com/jomres-extras.com.php",
			"image"=>"jomres-extras.com.png",
			"link"=>"http://www.jomres-extras.com"
			);
		
		$partners ['jomres_plugins'] = array (
			"name"=>"Jomres Plugins", 
			"intro"=>"Rodrigo is very active in the Jomres.net forums, many users have benefited from his helpfulness and skills over the years. He produces his own plugins for Jomres, but his main focus is custom coding for individual projects.",
			"plugin_list_url"=>"http://www.jomres-plugins.com/jomrespluginsmanifest/jomres-plugins.com.php",
			"image"=>"jomres-plugins.com.png",
			"link"=>"http://www.jomres-plugins.com"
			);
		
		$partners ['jadera_plugins'] = array (
			"name"=>"Jadera Plugins", 
			"intro"=>"An enthusiastic user of Jomres, Marinhio's a popular user on the forums and is always looking for ways to maximise his investment in Jomres.",
			"plugin_list_url"=>"http://dev.jadera.eu/jadera.eu.php",
			"image"=>"jadera.eu.png",
			"link"=>"http://dev.jadera.eu/"
			);
		
/* 		$partners ['odys'] = array (
			"name"=>"ODYS", 
			"intro"=>"Sidebar is another of our longtime users and ad hoc plugin developers.",
			"plugin_list_url"=>"http://localhost/pluginlists/odys.biz.php",
			"image"=>"odys.biz.png",
			"link"=>"http://www.jomresdemo.odys.biz"
			); */
		
		$partners ['osdcs'] = array (
			"name"=>"OSDCS", 
			"intro"=>"Robert and Vince go back almost to the beginning of Joomla, and OSDCS now have 46 gateways plugins for Jomres.",
			"plugin_list_url"=>"http://www.joomla-payment-gateways.osdcs.com/osdcs.com.php",
			"image"=>"osdcs.com.png",
			"link"=>"http://www.joomla-payment-gateways.osdcs.com/index.php?option=com_digistore&controller=digistoreProducts&task=list&cid=2&Itemid=5"
			);
		$partner_data = array();
		
		if ( function_exists( "curl_init" ))
			{
			foreach ($partners as $key=>$p)
				{
				$curl_handle = curl_init();
				curl_setopt( $curl_handle, CURLOPT_URL, $p['plugin_list_url'] );
				curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 );
				curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres' );
				curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, 1 );
				$response = curl_exec( $curl_handle );
				curl_close( $curl_handle );
				$partner_plugins = json_decode( $response , true );

				if (count($partner_plugins)>0)
					{
					$partner_data[$key]=$p;
					$partner_data[$key]['id']=$key;
					foreach ($partner_plugins as $plugin)
						{
						$partner_data[$key]['plugins'][] =array (
							"name"			=>jomres_sanitise_string($plugin['name']),
							"image"			=>jomres_sanitise_string($plugin['image']),
							"description"	=>nl2br(jomres_sanitise_string($plugin['description'])),
							"purchase_url"	=>jomres_sanitise_string($plugin['purchase_url']),
							"demo"			=>jomres_sanitise_string($plugin['demo'])
							);
						}

					$tmpl          = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
					$tmpl->readTemplatesFromInput( 'jomres_partners_plugins.html' );
					$tmpl->addRows( 'sub_pageoutput', $partner_data[$key]['plugins'] );
					$partner_data[$key]['plugins'] = $tmpl->getParsedTemplate();
					}
				}
			
			//print_r($partner_data);exit;
			$pageoutput=array();
			$pageoutput[]=$output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'jomres_partners.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $partner_data );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			throw new Exception('Unable to run Partners script, curl not available.');
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}