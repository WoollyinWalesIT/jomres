<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.1
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class webhooks 
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $manager_id = 0) {
		$this->manager_id = (int)$manager_id;
		$this->webhooks	 = array();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_all_webhooks(){
		$query = 'SELECT `id`, `manager_id` , `settings` , `enabled` FROM #__jomres_webhooks_integrations WHERE manager_id = '.(int)$this->manager_id.' OR manager_id = 0';
		$result = doSelectSql($query );
		if ( !empty($result) ){
			foreach ($result as $r) {
				$this->webhooks[$r->id] = array ( "id" => $r->id , "manager_id" => $r->manager_id , "settings" => unserialize($r->settings) , "enabled" => (bool)$r->enabled );
			}
		}

		return $this->webhooks;
	 }
		
	/**
	 * 
	 *
	 *
	 */

	public function get_webhook ( $id ) {
		if (empty($this->webhooks))
			throw new Exception('Error: Webhooks array not set. Did you try to call get_webhook before get_all_webhooks?');
		if (isset($this->webhooks[$id])) {
			return $this->webhooks[$id];
		} else {
			return false;
		}

	}
		
	/**
	 * 
	 *
	 *
	 */

	public function set_setting( $id , $key , $val ) {
		$this->webhooks[$id]["settings"][$key] = $val ;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function commit_integration( $id =0 ) {
		if ( $id == 0 ) {
			if (!isset($this->webhooks[$id]["enabled"])) {
				$this->webhooks[$id]["enabled"] = 1;
			}
				
			$query = "INSERT INTO #__jomres_webhooks_integrations (`manager_id`, `settings` , `enabled`) VALUES (".$this->manager_id." , '".serialize( $this->webhooks[$id]["settings"])."' , ".$this->webhooks[$id]["enabled"]."  )";
			$integration_id = doInsertSql( $query, false );
			if ( (int)$integration_id > 0 )
				{
				return $integration_id;
				}
			else
				{
				throw new Exception( "Error: Webhook insertion failed.");
				}
		}
		else {
			$query = "UPDATE #__jomres_webhooks_integrations SET 
				`manager_id` = ".$this->manager_id." ,
				`settings` = '".serialize( $this->webhooks[$id]["settings"])."',
				`enabled` = ".(int)$this->webhooks[$id]["enabled"]."
				WHERE id = ".$id."
				LIMIT 1
				";

			$result = doInsertSql( $query, false );
			if ( $result == true )
				{
				return $id;
				}
			else
				{
				throw new Exception( "Error: Webhook update failed.");
				}
		}
	}
		
	/**
	 * 
	 *
	 *
	 */

	public function delete_integration ( $id ) {
		if (!isset($this->webhooks[$id])) {
			throw new Exception( "Error: Cannot delete integration as does not exist ( for this user ) ");
		}
		$query = "DELETE FROM #__jomres_webhooks_integrations WHERE id = ".(int)$id." LIMIT 1";
		$result = doInsertSql( $query, false );
		if ( $result == true ){
			return true;
		}
		else {
			throw new Exception( "Error: Webhook failed to delete integration.");
		}
	}
	
}
