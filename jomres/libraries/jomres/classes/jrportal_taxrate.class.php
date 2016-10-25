<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_taxrate
	{
	private static $configInstance;
	
	public function __construct()
		{
		$this->id			= 0;
		$this->code			= '';
		$this->description	= '';
		$this->rate			= 0.00;
		$this->is_eu_country= 0;
		$this->error 		= null;
		
		$this->tmp_taxrate					= array();
		$this->tmp_taxrate['id']			= 0;
		$this->tmp_taxrate['code']			= '';
		$this->tmp_taxrate['description']	= '';
		$this->tmp_taxrate['rate']			= 0.00;
		$this->tmp_taxrate['is_eu_country']	= 0;
		
		$this->taxrates = false;
		
		$this->getAllTaxRates();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jrportal_taxrate();
			}

		return self::$configInstance;
		}
	
	function getAllTaxRates()
		{
		if (true === is_array($this->taxrates))
			return true;

		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$this->taxrates = $c->retrieve('all_tax_rates');
		
		if (true === is_array($this->taxrates))
			{
			return true;
			}
		else
			{
			$this->taxrates = array();
			
			$query  = "SELECT `id`,`code`,`description`,`rate`,`is_eu_country` FROM #__jomresportal_taxrates";
			$result = doSelectSql( $query );
			
			if ( count( $result ) > 0 )
				{
				foreach ( $result as $r )
					{
					$this->taxrates[ $r->id ][ 'id' ]		  	= $r->id;
					$this->taxrates[ $r->id ][ 'code' ]			= $r->code;
					$this->taxrates[ $r->id ][ 'description' ] 	= $r->description;
					$this->taxrates[ $r->id ][ 'rate' ]			= $r->rate;
					$this->taxrates[ $r->id ][ 'is_eu_country' ]= $r->is_eu_country;
					}
				}
			$c->store('all_tax_rates',$this->taxrates);
			}
	
		return true;
		}

	function gather_data( $id = 0 )
		{
		if ( (int)$id > 0 )
			{
			if (array_key_exists($id, $this->taxrates))
				{
				$this->id			= $this->taxrates[$id]['id'];
				$this->code			= $this->taxrates[$id]['code'];
				$this->description	= $this->taxrates[$id]['description'];
				$this->rate			= $this->taxrates[$id]['rate'];
				$this->is_eu_country= $this->taxrates[$id]['is_eu_country'];
				
				return true;
				}
			else
				{
				error_logging( "No Tax Rates were found with id ".$id );
	
				return false;
				}
			}
		else
			return false;
		}

	function commitTaxRate()
		{
		if ( $this->tmp_taxrate['id'] < 1 )
			{
			$query  = "INSERT INTO #__jomresportal_taxrates
				(
				`code`,
				`description`,
				`rate`,
				`is_eu_country`
				)
				VALUES
				(
				'". $this->tmp_taxrate['code'] . "',
				'". $this->tmp_taxrate['description'] . "',
				" . (float) $this->tmp_taxrate['rate'] . ",
				" . (int) $this->tmp_taxrate['is_eu_country'] . "
				)";
			$result = doInsertSql( $query, "" );
			
			if ( $result )
				{
				$this->tmp_taxrate['id'] = $result;
				return true;
				}
			else
				{
				error_logging( "ID of Tax Rate could not be found after apparent successful insert" );
				return false;
				}
			}
		error_logging( "ID of Tax Rate already available. Are you sure you are creating a new Tax rate?" );

		return false;
		}

	function commitUpdateTaxRate()
		{
		if ( $this->tmp_taxrate['id'] > 0 )
			{
			$query  = "UPDATE #__jomresportal_taxrates SET
							`code` = '".$this->tmp_taxrate['code']."',
							`description` = '".$this->tmp_taxrate['description']."',
							`rate` = ".(float)$this->tmp_taxrate['rate'].",
							`is_eu_country` = ".(int)$this->tmp_taxrate['is_eu_country']." 
						WHERE `id` = " . (int)$this->tmp_taxrate['id'];
			$result = doInsertSql( $query, "" );
			
			if ( $result ) 
				return true;
			else
				{
				error_logging( "ID of Tax Rate could not be found after apparent successful insert" );
				return false;
				}
			}
		error_logging( "ID of Tax Rate to be updated is 0" );

		return false;
		}

	function deleteTaxRate( $id = 0 )
		{
		if ( (int)$id > 0 )
			{
			$query  = "DELETE FROM #__jomresportal_taxrates WHERE `id` = " . (int)$id;
			$result = doInsertSql( $query, "" );
			
			if ( $result )
				{
				if (array_key_exists($id, $this->taxrates))
					unset($this->taxrates[$id]);
				
				return true;
				}
			else
				{
				error_logging( "Could not delete tax rate with id ".$id );

				return false;
				}
			}
		error_logging( "ID ".$id." of Tax Rate not available" );

		return false;
		}
		
	function deleteAllTaxRates()
		{
		$query = "TRUNCATE TABLE #__jomresportal_taxrates";
		$result = doInsertSql( $query, "" );
		
		if ( $result )
			{
			$this->taxrates = array();
			
			return true;
			}
		else
			{
			error_logging( "Could not empty tax rates table." );
			
			return false;
			}
		}
	
	function makeTaxratesDropdown( $selected = '0', $name = 'taxrate' )
		{
		$ratesOptions  = array ();
		$ratesDropdown = "";
	
		if ( count( $this->taxrates ) < 1 ) 
			$this->getAllTaxRates();

		if ( count( $this->taxrates > 0 ) )
			{
			foreach ( $this->taxrates as $r )
				{
				$ratesOptions[ ] = jomresHTML::makeOption( $r[ 'id' ], $r[ 'code' ] . " " . $r[ 'description' ] );
				}
			$ratesDropdown = jomresHTML::selectList( $ratesOptions, $name, 'class="inputbox" size="1"', 'value', 'text', $selected );
			}
	
		return $ratesDropdown;
		}

	}
