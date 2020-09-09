<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
 *
 * @copyright	2005-2020 Vince Wooll
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

class j10531amazon_s3
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

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		
		$options = array();
		$options[] = jomresHTML::makeOption( 'us-east-1', 'US East (N. Virginia)' );
		$options[] = jomresHTML::makeOption( 'us-east-2', 'US East (Ohio)' );
		$options[] = jomresHTML::makeOption( 'us-west-1', 'US West (N. California)' );
		$options[] = jomresHTML::makeOption( 'us-west-2', 'US West (Oregon)' );
		$options[] = jomresHTML::makeOption( 'ca-central-1', 'Canada (Central)' );
		$options[] = jomresHTML::makeOption( 'ap-south-1', 'Asia Pacific (Mumbai)' );
		$options[] = jomresHTML::makeOption( 'ap-northeast-2', 'Asia Pacific (Seoul)' );
		$options[] = jomresHTML::makeOption( 'ap-southeast-1', 'Asia Pacific (Singapore)' );
		$options[] = jomresHTML::makeOption( 'ap-southeast-2', 'Asia Pacific (Sydney)' );
		$options[] = jomresHTML::makeOption( 'ap-northeast-1', 'Asia Pacific (Tokyo)' );
		$options[] = jomresHTML::makeOption( 'eu-central-1', 'EU (Frankfurt)' );
		$options[] = jomresHTML::makeOption( 'eu-west-1', 'EU (Ireland)' );
		$options[] = jomresHTML::makeOption( 'eu-west-2', 'EU (London)' );
		$options[] = jomresHTML::makeOption( 'sa-east-1', 'South America (São Paulo)' );
		$s3_region = jomresHTML::selectList( $options, 'cfg_amazon_s3_region','class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'amazon_s3_region' ]);
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext("_JOMRES_COM_MR_NO",'_JOMRES_COM_MR_NO',false) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext("_JOMRES_COM_MR_YES",'_JOMRES_COM_MR_YES',false) );
		
		$active = jomresHTML::selectList( $yesno, 'cfg_amazon_s3_active','class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'amazon_s3_active' ]);
		$remove_local_copies = jomresHTML::selectList( $yesno, 'cfg_amazon_s3_remove_local_copies','class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'amazon_s3_remove_local_copies' ]);
		$use_tls = jomresHTML::selectList( $yesno, 'cfg_amazon_s3_use_tls','class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'amazon_s3_use_tls' ]);

		$configurationPanel->insertHeading('Amazon S3');
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_STATUS_ACTIVE', '_JOMRES_STATUS_ACTIVE', false));
		$configurationPanel->setmiddle($active);
		$configurationPanel->setright(jr_gettext('_JOMRES_S3_ACTIVE_DESC', '_JOMRES_S3_ACTIVE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft('Key');
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_amazon_s3_key" value="'.$jrConfig[ 'amazon_s3_key' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft('Secret');
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_amazon_s3_secret" value="'.$jrConfig[ 'amazon_s3_secret' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft('Region');
		$configurationPanel->setmiddle($s3_region);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft('Bucket');
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_amazon_s3_bucket" value="'.$jrConfig[ 'amazon_s3_bucket' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_CLOUDFRONT_DMAIN', '_JOMRES_CLOUDFRONT_DMAIN', false));
		$configurationPanel->setmiddle('https://<input type="text" class="input-large" name="cfg_amazon_cloudfront_domain" value="'.$jrConfig[ 'amazon_cloudfront_domain' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CLOUDFRONT_DMAIN_DESC', '_JOMRES_CLOUDFRONT_DMAIN_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft('SSL/TLS');
		$configurationPanel->setmiddle($use_tls);
		$configurationPanel->setright(jr_gettext('_JOMRES_S3_SSLTLS_DESC', '_JOMRES_S3_SSLTLS_DESC', false));
		$configurationPanel->insertSetting();
		
		/* $configurationPanel->setleft('Remove files from server?');
		$configurationPanel->setmiddle($remove_local_copies);
		$configurationPanel->setright('Once a file has been copied to Amazon S3, remove it from the local server');
		$configurationPanel->insertSetting(); */
	}


	public function getRetVals()
	{
		return null;
	}
}
