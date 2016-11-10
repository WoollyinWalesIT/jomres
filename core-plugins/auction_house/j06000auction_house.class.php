<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06000auction_house
	{
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; 
			$this->shortcode_data = array (
				"task" => "auction_house",
				"info" => "_JOMRES_SHORTCODES_06000AUCTION_HOUSE",
				"arguments" => array ()
				);
			return;
			}
		$ePointFilepath=get_showtime('ePointFilepath');
		date_default_timezone_set('UTC');
		
		$ah_object = jomres_getSingleton('jomres_auctionhouse_auctions');
		$wl_object = jomres_getSingleton('jomres_auctionhouse_watchlists');
		
		if (using_bootstrap())
			{
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/', 'bootstrap-multiselect.js' );
			jomres_cmsspecific_addheaddata( "css", JOMRES_ROOT_DIRECTORY.'/css/', 'bootstrap-multiselect.css' );
			}
		
		$output=array();
		$pageoutput = array();
		$thisJRUser=jomres_getSingleton('jr_user');

		$ahtask 				= jomresGetParam( $_REQUEST, 'ahtask', "" );
		set_showtime('ahtask',$ahtask);

		define("JOMRES_AUCTIONHOUSE_URL", JOMRES_SITEPAGE_URL_NOSEF.'&task=auction_house');
		define("JOMRES_AUCTIONHOUSE_URL_AJAX", JOMRES_SITEPAGE_URL_AJAX.'&no_html=1&popup=1&task=auction_house');
		
		if ($thisJRUser->userIsRegistered)
			define("JOMRES_AH_USERCANBID", true);
		else
			define("JOMRES_AH_USERCANBID", false);
			
		if ( $thisJRUser->accesslevel > 50 ) //higher than receptionist
			define("JOMRES_AH_USERCANSELL", true);
		else
			define("JOMRES_AH_USERCANSELL", false);
			
		$ahheader = $MiniComponents->specificEvent('06050','auction_head');
		
		if ($MiniComponents->eventSpecificlyExistsCheck('06060',get_showtime('ahtask')) )
			$ahcontent = $MiniComponents->specificEvent('06060',get_showtime('ahtask'));
		elseif ( $MiniComponents->eventSpecificlyExistsCheck('06061',get_showtime('ahtask')) && JOMRES_AH_USERCANBID ) // 06061 ahtasks are reserved for registered users
				$ahcontent = $MiniComponents->specificEvent('06061',get_showtime('ahtask'));
			elseif ( $MiniComponents->eventSpecificlyExistsCheck('06062',get_showtime('ahtask')) && JOMRES_AH_USERCANSELL ) // 06062 ahtasks are reserved for property managers
					$ahcontent = $MiniComponents->specificEvent('06062',get_showtime('ahtask'));
				else
					$ahcontent = $MiniComponents->specificEvent('06060','auction_index');

		if (!defined('JOMRES_NOHTML') || JOMRES_NOHTML == "0")
			$output['HEADER']=$ahheader;
		
		if (!defined('JOMRES_NOHTML') || JOMRES_NOHTML == "0")
			{
			$ahfooter = $MiniComponents->specificEvent('06070','auction_foot');
			$output['CONTENT']=$ahcontent;
			}
		else
			{
			if (get_showtime('ahtask') != "heartbeat")
				$output['CONTENT']=get_showtime('ahjavascript').'^'.$ahcontent;
			else
				$output['CONTENT']=$ahcontent;
			}

		if (!defined('JOMRES_NOHTML') || JOMRES_NOHTML == "0")
			$output['FOOTER']=$ahfooter;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		if (!defined('JOMRES_NOHTML') || JOMRES_NOHTML == "0")
			{
			$tmpl->setRoot(get_showtime('auctionhouse_templates_path'));
			$tmpl->readTemplatesFromInput( 'auction_house.html' );
			}
		else
			{
			$tmpl->setRoot($ePointFilepath.JRDS.'templates');
			$tmpl->readTemplatesFromInput( 'auction_house_ajax.html' );
			}
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		
		$ah_object->perform_auction_maintenance();
		
		}

	function touch_template_language()
		{
		$output=array();
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_TITLE','_JOMRES_AUCTIONHOUSE_AUCTION_TITLE');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_MAXIBID','_JOMRES_AUCTIONHOUSE_AUCTION_MAXIBID');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_TIMELEFT','_JOMRES_AUCTIONHOUSE_AUCTION_TIMELEFT');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID','_JOMRES_AUCTIONHOUSE_AUCTION_BID');
		
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_NOTLOGGEDIN','_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_NOTLOGGEDIN');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_ENDED','_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_ENDED');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID_PLACED','_JOMRES_AUCTIONHOUSE_AUCTION_BID_PLACED');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_NOTFOUND','_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_NOTFOUND');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_OWNAUCTION','_JOMRES_AUCTIONHOUSE_CANNOTBID_REASON_OWNAUCTION');
		
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID_YOURBIDHIGHEST','_JOMRES_AUCTIONHOUSE_AUCTION_BID_YOURBIDHIGHEST');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID_OUTBID','_JOMRES_AUCTIONHOUSE_AUCTION_BID_OUTBID');
		
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_COUNTDOWN_DAYS','_JOMRES_AUCTIONHOUSE_COUNTDOWN_DAYS');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_COUNTDOWN_HOURS','_JOMRES_AUCTIONHOUSE_COUNTDOWN_HOURS');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_COUNTDOWN_MINUTES','_JOMRES_AUCTIONHOUSE_COUNTDOWN_MINUTES');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_COUNTDOWN_SECONDS','_JOMRES_AUCTIONHOUSE_COUNTDOWN_SECONDS');
		
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_NOTLOGGEDIN','_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_NOTLOGGEDIN');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_ALREADYBID','_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_ALREADYBID');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_ENDED','_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_ENDED');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_NOTYOURS','_JOMRES_AUCTIONHOUSE_CANNOTCANCEL_REASON_NOTYOURS');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_NOBIDS','_JOMRES_AUCTIONHOUSE_AUCTION_NOBIDS');
		$output[]=jr_gettext('_JOMRES_AUCTIONHOUSE_DEFAULTLIST','_JOMRES_AUCTIONHOUSE_DEFAULTLIST');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_ADDTOWATCHLIST_INSTRUCTIONS','_JOMRES_AUCTIONHOUSE_ADDTOWATCHLIST_INSTRUCTIONS');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_ENDED','_JOMRES_AUCTIONHOUSE_AUCTION_ENDED');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_PROPERTY_DETAILS_AUCTIONINFO','_JOMRES_AUCTIONHOUSE_PROPERTY_DETAILS_AUCTIONINFO');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_VALUE_INFO','_JOMRES_AUCTIONHOUSE_AUCTION_VALUE_INFO');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_PROPERTY_DETAILS_MOREINFO','_JOMRES_AUCTIONHOUSE_PROPERTY_DETAILS_MOREINFO');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_INVOICING_COMMISSIONWORD','_JOMRES_AUCTIONHOUSE_INVOICING_COMMISSIONWORD');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_RESERVE_NOTMET','_JOMRES_AUCTIONHOUSE_AUCTION_RESERVE_NOTMET');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_INVOICING_PREAMBLE','_JOMRES_AUCTIONHOUSE_INVOICING_PREAMBLE');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID_WON','_JOMRES_AUCTIONHOUSE_AUCTION_BID_WON');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_AUCTION_BID_LOST','_JOMRES_AUCTIONHOUSE_AUCTION_BID_LOST');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_BIDPLACED_SUBJECT','_JOMRES_AUCTIONHOUSE_EMAILS_BIDPLACED_SUBJECT');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_BIDPLACED_BODY','_JOMRES_AUCTIONHOUSE_EMAILS_BIDPLACED_BODY');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_OUTBID_SUBJECT','_JOMRES_AUCTIONHOUSE_EMAILS_OUTBID_SUBJECT');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_OUTBID_BODY','_JOMRES_AUCTIONHOUSE_EMAILS_OUTBID_BODY');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_SUBJECT','_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_SUBJECT');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_BODY','_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_BODY');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_BODY2','_JOMRES_AUCTIONHOUSE_EMAILS_AUCTIONWON_BODY2');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_BOOKINGNOTE','_JOMRES_AUCTIONHOUSE_BOOKINGNOTE');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_SELLER_AUCTION_ENDED_SUBJECT','_JOMRES_AUCTIONHOUSE_EMAILS_SELLER_AUCTION_ENDED_SUBJECT');
		$output[] =jr_gettext('_JOMRES_AUCTIONHOUSE_EMAILS_SELLER_AUCTION_ENDED_BODY','_JOMRES_AUCTIONHOUSE_EMAILS_SELLER_AUCTION_ENDED_BODY');
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
