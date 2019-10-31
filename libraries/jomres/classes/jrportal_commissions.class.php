<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_commissions // Functions supplied as a class so that they can be extended easily without rewriting  the functions
{
	public function __construct()
	{
		$this->crates = array();

		$this->id = 0;
		$this->title = '';
		$this->type = 0;
		$this->value = 0.00;
		$this->currencycode = 'GBP';
		$this->tax_rate = 0;
		$this->error = null;
	}

	public function getCrateForPropertyuid($property_uid)
	{
		$query = 'SELECT crate_id FROM #__jomresportal_properties_crates_xref WHERE property_id = '.$property_uid.' LIMIT 1';
		$crate_id = doSelectSql($query);

		if (count($crate_id) == 1) {
			foreach ($crate_id as $c) {
				$this->crates = $this->getCrates("WHERE `id` = '".$c->crate_id."' LIMIT 1");

				return $this->crates[ $c->crate_id ];
			}
		}

		return array();
	}

	public function getAllCrates()
	{
		$this->crates = $this->getCrates();

		return $this->crates;
	}

	public function getCratesByIdArray($idArray)
	{
		$clause = 'WHERE id IN ('.jomres_implode($idArray).')';
		$this->crates = $this->getCrates($clause);

		return $this->crates;
	}

	public function getCrates($clause = '')
	{
		$query = 'SELECT `id`,`title`,`type`,`value`,`currencycode`,`tax_rate` FROM #__jomresportal_c_rates '.$clause;
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$this->crates[ $r->id ][ 'id' ] = $r->id;
				$this->crates[ $r->id ][ 'title' ] = $r->title;
				$this->crates[ $r->id ][ 'type' ] = $r->type;
				$this->crates[ $r->id ][ 'value' ] = $r->value;
				$this->crates[ $r->id ][ 'currencycode' ] = $r->currencycode;
				$this->crates[ $r->id ][ 'tax_rate' ] = $r->tax_rate;
			}
		}

		return $this->crates;
	}

	public function getCrate()
	{
		if ((int) $this->id > 0) {
			$query = 'SELECT `id`,`title`,`type`,`value`,`currencycode`,`tax_rate` FROM #__jomresportal_c_rates WHERE `id`= '.(int) $this->id.' LIMIT 1';
			$result = doSelectSql($query);

			if ($result && count($result) == 1) {
				foreach ($result as $r) {
					$this->id = $r->id;
					$this->title = $r->title;
					$this->type = $r->type;
					$this->value = $r->value;
					$this->currencycode = $r->currencycode;
					$this->tax_rate = $r->tax_rate;
				}

				return true;
			} else {
				if (empty($result)) {
					$this->error = 'No Commission rates were found with that id';

					return false;
				}
				if (count($result) > 1) {
					$this->error = 'More than one Commission rate was found with that id';

					return false;
				}
			}
		} else {
			$this->error = 'ID of Commission rate not available';

			return false;
		}
	}

	public function commitNewCrate()
	{
		if ((int) $this->id < 1) {
			$query = "INSERT INTO #__jomresportal_c_rates
				(
				`title`,
				`type`,
				`value`,
				`currencycode`,
				`tax_rate`
				)
				VALUES
				(
				'$this->title',
				".(int) $this->type.',
				'.(float) $this->value.",
				'$this->currencycode',
				".(int) $this->tax_rate.'
				)';
			$result = doInsertSql($query, '');

			if ($result) {
				$this->id = $result;

				return true;
			} else {
				$this->error = 'ID of Commission rate could not be found after apparent successful insert';

				return false;
			}
		}
		$this->error = 'ID of Commission rate already available. Are you sure you are creating a new Commission rate?';

		return false;
	}

	public function commitUpdateCrate()
	{
		if ((int) $this->id > 0) {
			$query = "UPDATE #__jomresportal_c_rates SET
				`title` 			= '$this->title',
				`type` 				= ".(int) $this->type.',
				`value` 			= '.(float) $this->value.",
				`currencycode` 		= '$this->currencycode',
				`tax_rate` 			= ".(int) $this->tax_rate.' 
				WHERE `id`= '.(int) $this->id.' ';
			$result = doInsertSql($query, '');

			if ($result) {
				return true;
			} else {
				$this->error = 'ID of Commission rate not available';

				return false;
			}
		}
		$this->error = 'ID of Commission rate not available';

		return false;
	}

	public function deleteCrates($id = false)
	{
		$clause = '';

		if ($id) {
			if (is_array($id)) {
				if (!empty($id)) {
					$clause = 'id IN ('.jomres_implode($id).') ';
				}
			} elseif ((int) $id > 0) {
				$clause = 'id = '.(int) $id.' ';
			}

			if ($clause != '') {
				$query = 'DELETE FROM #__jomresportal_c_rates WHERE '.$clause;

				return doInsertSql($query, '');
			} else {
				return false;
			}
		}

		return false;
	}

	public function makeCrateDropdown($selected = 1, $idx = null, $params = array())
	{
		$options = array();
		$js = '';

		if ((int) $selected == 0) {
			$options[] = jomresHTML::makeOption('0', '-');
		}

		foreach ($this->crates as $v) {
			$options[] = jomresHTML::makeOption($v[ 'id' ], $v[ 'title' ]);
		}

		if (!empty($params)) {
			if (isset($params['property_uid'])) {
				$js = 'onchange="savecrates(\''.$params['property_uid'].'\', this.value );"';
			}
		}

		return jomresHTML::selectList($options, "crates[$idx]", ' size="1"'.$js, 'value', 'text', $selected, false);
	}

	public function makeCrateTypeDropdown($selected = 1)
	{
		$options = array();
		$types = array('1' => 'Flat', '2' => 'Percentage');

		foreach ($types as $k => $v) {
			$options[] = jomresHTML::makeOption($k, $v);
		}

		return jomresHTML::selectList($options, 'type', 'class="inputbox" size="1"', 'value', 'text', $selected);
	}

	public function assignDefaultCrate($property_uid = 0, $crate_id = 0)
	{
		if ((int) $property_uid == 0) {
			return false;
		}

		if ((int) $crate_id == 0) {
			return false;
		}

		$query = 'INSERT INTO #__jomresportal_properties_crates_xref ( `property_id`,`crate_id` ) VALUES ( '.(int) $property_uid.', '.$crate_id.' )';
		$result = doInsertSql($query, '');

		if ($result) {
			return $result;
		} else {
			$this->error = 'ID of Property could not be found after apparent successful insert';

			return false;
		}

		return false;
	}

	public function getCurrentCrateInvoiceIdForManagerId($manager_id = 0)
	{
		if ((int) $manager_id == 0) {
			return false;
		}

		$query = 'SELECT id FROM #__jomresportal_invoices WHERE cms_user_id = '.(int) $manager_id." AND `is_commission` = 1 AND `raised_date` <= '1970-01-01 00:00:01' ";
		$invoice_id = doSelectSql($query, 1);

		if ((int) $invoice_id > 0) {
			return (int) $invoice_id;
		} else {
			return false;
		}
	}

	public function createNewCrateInvoiceForManagerId($manager_id = 0, $currencycode = 'GBP')
	{
		if ((int) $manager_id == 0) {
			$this->error = 'Manager id not set';

			return false;
		}

		jr_import('jrportal_invoice');
		$invoice = new jrportal_invoice();

		$invoice->id = 0;
		$invoice->cms_user_id = $manager_id;
		$invoice->status = 3; //pending
		$invoice->raised_date = '1970-01-01 00:00:01';
		$invoice->due_date = '1970-01-01 00:00:01';
		$invoice->currencycode = $currencycode;
		$invoice->is_commission = 1;

		if ($invoice->commitNewInvoice()) {
			return $invoice->id;
		} else {
			return false;
		}
	}
} //end class
