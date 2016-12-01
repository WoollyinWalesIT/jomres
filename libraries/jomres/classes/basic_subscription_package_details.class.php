<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class basic_subscription_package_details
{
    private static $configInstance;

    public function __construct()
    {
        $this->allPackages = array();
        $this->getAllSubscriptionPackages();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function gatherData($package_id = 0)
    {
        if ($package_id == 0) {
            throw new Exception('Error: Package id not set.');
        }

        if (array_key_exists($package_id, $this->allPackages)) {
            $this->id = $this->allPackages[ $package_id ][ 'id' ];
            $this->name = $this->allPackages[ $package_id ][ 'name' ];
            $this->description = $this->allPackages[ $package_id ][ 'description' ];
            $this->published = $this->allPackages[ $package_id ][ 'published' ];
            $this->frequency = $this->allPackages[ $package_id ][ 'frequency' ];
            $this->full_amount = $this->allPackages[ $package_id ][ 'full_amount' ];
            $this->tax_code_id = $this->allPackages[ $package_id ][ 'tax_code_id' ];
            $this->currencycode = $this->allPackages[ $package_id ][ 'currencycode' ];
            $this->renewal_price = $this->allPackages[ $package_id ][ 'renewal_price' ];
            $this->params = $this->allPackages[ $package_id ][ 'params' ];

            return true;
        } else {
            return false;
        }
    }

    //Get all subscription packages
    public function getAllSubscriptionPackages()
    {
        //check if we already got them
        if (count($this->allPackages) > 0) {
            return true;
        }

        //check if the subscriptions packages are in cache
        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');

        if ($c->isCached('subscriptionPackages')) {
            $this->allPackages = $c->retrieve('subscriptionPackages');

            return true;
        }

        $query = 'SELECT 
						`id`,
						`name`,
						`description`,
						`published`,
						`frequency`,
						`full_amount`,
						`tax_code_id`,
						`currencycode`,
						`renewal_price`,
						`params` 
					FROM #__jomresportal_subscriptions_packages ';
        $result = doSelectSql($query);

        if (count($result) > 0) {
            foreach ($result as $r) {
                $this->allPackages[ $r->id ][ 'id' ] = $r->id;
                $this->allPackages[ $r->id ][ 'name' ] = $r->name;
                $this->allPackages[ $r->id ][ 'description' ] = $r->description;
                $this->allPackages[ $r->id ][ 'published' ] = $r->published;
                $this->allPackages[ $r->id ][ 'frequency' ] = $r->frequency;
                $this->allPackages[ $r->id ][ 'full_amount' ] = $r->full_amount;
                $this->allPackages[ $r->id ][ 'tax_code_id' ] = $r->tax_code_id;
                $this->allPackages[ $r->id ][ 'currencycode' ] = $r->currencycode;
                $this->allPackages[ $r->id ][ 'renewal_price' ] = $r->renewal_price;
                $this->allPackages[ $r->id ][ 'params' ] = unserialize($r->params);
            }

            $c->store('subscriptionPackages', $this->allPackages);

            return true;
        }

        return false;
    }
}
