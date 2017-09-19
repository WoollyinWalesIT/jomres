<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.11
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_taxrate
{
    private static $configInstance;

    public function __construct()
    {
        $this->id = 0;
        $this->code = '';
        $this->description = '';
        $this->rate = 0.00;
        $this->is_eu_country = 0;
        $this->error = null;

        $this->tmp_taxrate = array();
        $this->tmp_taxrate['id'] = 0;
        $this->tmp_taxrate['code'] = '';
        $this->tmp_taxrate['description'] = '';
        $this->tmp_taxrate['rate'] = 0.00;
        $this->tmp_taxrate['is_eu_country'] = 0;

        $this->taxrates = false;

        $this->getAllTaxRates();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function getAllTaxRates()
    {
        if (is_array($this->taxrates)) {
            return true;
        }

		$this->taxrates = array();

		$query = 'SELECT `id`,`code`,`description`,`rate`,`is_eu_country` FROM #__jomresportal_taxrates';
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$this->taxrates[ $r->id ][ 'id' ] = $r->id;
				$this->taxrates[ $r->id ][ 'code' ] = $r->code;
				$this->taxrates[ $r->id ][ 'description' ] = $r->description;
				$this->taxrates[ $r->id ][ 'rate' ] = $r->rate;
				$this->taxrates[ $r->id ][ 'is_eu_country' ] = $r->is_eu_country;
			}
		}
 
        return true;
    }

    public function gather_data($id = 0)
    {
        if ((int) $id > 0) {
            if (isset($this->taxrates[$id])) {
                $this->id = $this->taxrates[$id]['id'];
                $this->code = $this->taxrates[$id]['code'];
                $this->description = $this->taxrates[$id]['description'];
                $this->rate = $this->taxrates[$id]['rate'];
                $this->is_eu_country = $this->taxrates[$id]['is_eu_country'];

                return true;
            } else {
                error_logging('No Tax Rates were found with id '.$id);

                return false;
            }
        } else {
            return false;
        }
    }

    public function commitTaxRate()
    {
        if ($this->tmp_taxrate['id'] < 1) {
            $query = "INSERT INTO #__jomresportal_taxrates
				(
				`code`,
				`description`,
				`rate`,
				`is_eu_country`
				)
				VALUES
				(
				'".$this->tmp_taxrate['code']."',
				'".$this->tmp_taxrate['description']."',
				" .(float) $this->tmp_taxrate['rate'].',
				' .(int) $this->tmp_taxrate['is_eu_country'].'
				)';
            $result = doInsertSql($query, '');

            if ($result) {
                $this->tmp_taxrate['id'] = $result;

                return true;
            } else {
                error_logging('ID of Tax Rate could not be found after apparent successful insert');

                return false;
            }
        }
        error_logging('ID of Tax Rate already available. Are you sure you are creating a new Tax rate?');

        return false;
    }

    public function commitUpdateTaxRate()
    {
        if ($this->tmp_taxrate['id'] > 0) {
            $query = "UPDATE #__jomresportal_taxrates SET
							`code` = '".$this->tmp_taxrate['code']."',
							`description` = '".$this->tmp_taxrate['description']."',
							`rate` = ".(float) $this->tmp_taxrate['rate'].',
							`is_eu_country` = '.(int) $this->tmp_taxrate['is_eu_country'].' 
						WHERE `id` = ' .(int) $this->tmp_taxrate['id'];
            $result = doInsertSql($query, '');

            if ($result) {
                return true;
            } else {
                error_logging('ID of Tax Rate could not be found after apparent successful insert');

                return false;
            }
        }
        error_logging('ID of Tax Rate to be updated is 0');

        return false;
    }

    public function deleteTaxRate($id = 0)
    {
        if ((int) $id > 0) {
            $query = 'DELETE FROM #__jomresportal_taxrates WHERE `id` = '.(int) $id;
            $result = doInsertSql($query, '');

            if ($result) {
                if (isset($this->taxrates[$id])) {
                    unset($this->taxrates[$id]);
                }

                return true;
            } else {
                error_logging('Could not delete tax rate with id '.$id);

                return false;
            }
        }
        error_logging('ID '.$id.' of Tax Rate not available');

        return false;
    }

    public function deleteAllTaxRates()
    {
        $query = 'TRUNCATE TABLE #__jomresportal_taxrates';
        $result = doInsertSql($query, '');

        if ($result) {
            $this->taxrates = array();

            return true;
        } else {
            error_logging('Could not empty tax rates table.');

            return false;
        }
    }

    public function makeTaxratesDropdown($selected = '0', $name = 'taxrate')
    {
        $ratesOptions = array();
        $ratesDropdown = '';

        if (empty($this->taxrates)) {
            $this->getAllTaxRates();
        }

        if (!empty($this->taxrates)) {
            foreach ($this->taxrates as $r) {
                $ratesOptions[ ] = jomresHTML::makeOption($r[ 'id' ], $r[ 'code' ].' '.$r[ 'description' ]);
            }
            $ratesDropdown = jomresHTML::selectList($ratesOptions, $name, 'class="inputbox" size="1"', 'value', 'text', $selected);
        }

        return $ratesDropdown;
    }
}
