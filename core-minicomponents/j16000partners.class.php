<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
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

class j16000partners
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$output = array();

		$output['TITLE'] = 'Our Partners';
		$output['INTRO'] = 'Here you can find a list of our partners. These are businesses who also offer plugins for Jomres, extra to those already available in the Jomres Plugin Manager.';


		$client = new GuzzleHttp\Client([
			'base_uri' => 'https://raw.githubusercontent.com/WoollyinWalesIT/partners/master/partners.json'
		]);

		$response = $client->request('GET', '')->getBody()->getContents();
		$p = json_decode($response);

		$partner_data = array();

		foreach ($p->partners as $partner) {
			$r = array();

			$r['NAME'] = $partner->name;
			$r['LINK'] = $partner->link;
			$r['INTRO'] = $partner->intro;
			$r['IMAGE'] = $partner->image;

			$partner_data[] = $r;
		}

		$pageoutput = array();
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('jomres_partners.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $partner_data);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
