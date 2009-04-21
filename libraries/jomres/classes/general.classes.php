<?php
/**
#
 * JRPortal core file
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################



class html_functions
	{
	function cpanelButton( $link, $image, $text, $path='/jomres/images/jomresimages/large/' ) 
		{
		global $jomresConfig_live_site,$task;
		global $ePointFilepath,$eLiveSite;
		$link = str_replace("&amp;", "&", $link);
		$link = str_replace("&", "&amp;", $link);
		
		if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'jomresimages'.JRDS.'large'.JRDS.$image) )
			$path=$eLiveSite.$image;
		else
			$path=$jomresConfig_live_site.$path.$image;
		if (strlen( jomresGetParam( $_REQUEST, 'task', "" ))>0)
			{
			return '
			<div style="text-align:center;vertical-align:middle;float:left;width:80px;height:65px;">
				<a href="'.$link.'" style="text-decoration:none;border:none;">
					<img src="'.$path.'" style="border:none;" border="0" height="35" width="35" /><br/>
					<span>'.$text.'</span>
				</a>
			</div>
			';
			}
		else
			{
			return '
			<div style="padding:0 2px 4px 0;text-align:center;vertical-align:middle;float:left;width:120px;height:100px;">
				<div class="icon" align="center">
					<a href="'.$link.'" style="text-decoration:none;">
					<img src="'.$path.'" border="0" /><br/>
					<span>'.$text.'</span>
					</a>
				</div>
			</div>
			';
			}
		}
		
	function cpanelInfoRow( $text, $info ) 
		{
		return '
			<span>'.$text.' : '.$info.'</span>
		';
		}
	}
	
class crateTypes
	{
	function crateTypes()
		{
		$this->id=0;
		$this->types=array('1'=>'Flat','2'=>'Percentage');
		}
	
	function makeCrateTypeDropdown()
		{
		$options = array();
		foreach ($this->types as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		return jomresHTML::selectList( $options, 'type','class="inputbox" size="1"', 'value', 'text', $this->id);
		}	
	
	function getCrate()
		{
		return $this->types[$this->id];
		}
	}

class currency_codes
	{
	function currency_codes()
		{
		$this->id='';
		$this->codes=array(
			'AUD'=>'AUD Australia Dollars',
			'CAD'=>'CAD Canada Dollars',
			'CHF'=>'CHF Switzerland Francs',
			'CNY'=>'CNY China Yuan Renminbi',
			'DKK'=>'DKK Denmark Kroner',
			'EUR'=>'EUR Euro',
			'GBP'=>'GBP United Kingdom Pounds',
			'HKD'=>'HKD Hong Kong Dollars',
			'HUF'=>'HUF Hungary Forint',
			'INR'=>'INR India Rupees',
			'JPY'=>'JPY Japan Yen',
			'MXN'=>'MXN Mexico Pesos',
			'MYR'=>'MYR Malaysia Ringgits',
			'NIS'=>'NIS New Sheqel',
			'NOK'=>'NOK Norway Kroner',
			'NZD'=>'NZD New Zealand Dollars',
			'PHP'=>'PHP Philipino Pesos',
			'RUB'=>'RUB Russia Rubles',
			'SEK'=>'SEK Sweden Kronor',
			'SGD'=>'SGD Singapore Dollars',
			'THB'=>'THB Thailand Baht',
			'USD'=>'USD United States Dollars',
			'ZAR'=>'ZAR South Africa Rand'
			);
		}
	
	function makeCodesDropdown()
		{
		$options = array();
		foreach ($this->codes as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		return jomresHTML::selectList( $options, 'currencycode','class="inputbox" size="1"', 'value', 'text', $this->id);
		}	
	
	function getCode()
		{
		return $this->codes[$this->id];
		}
	}
	
class jrportal_transaction
	{
	function jrportal_transaction()
		{
		$this->success=true;
		$this->insertedId=0;
		$this->queryArray=array();
		$query="BEGIN";
		if (doSql($query))
			return true;
		else
			return false;
		}
	
	function insertQuery($query)
		{
		$result=doInsertSql($query,'');
		if ($result)
			{
			if (gettype($result)=="integer")
				$this->insertedId=$result;
			$this->success=true;
			}
		else
			$this->success=false;
		$this->queryArray[]=array('query'=>$query,'success'=>$result);
		return $this->success;
		}
	
	function commit()
		{
		$query="COMMIT";
		if (doSql($query) && $this->success)
			{
			$this->logSuccess();
			return true;
			}
		$this->logFailure();
		$this->rollback();
		trigger_error ("Portal insert failed.", E_USER_ERROR);
		}
	
	function rollback()
		{
		$query="ROLLBACK";
		if (doSql($query))
			return true;
		else
			return false;
		}

	function logFailure()
		{
		$message="<font color='red'>Transaction insert(s) failed :: ";
		foreach ($this->queryArray as $q)
			{
			$message.=$q['query'];
			if ($q['success'])
				$message.=" Passed ";
			else
				$message.=" Failed ";
			}
		$message.="</font><br>";
		echo $message;
		jrportalquery_log($message);
		}
		
	function logSuccess()
		{
		$message="Transaction insert(s) passed :: ";
		foreach ($this->queryArray as $q)
			{
			$message.=$q['query'];
			if ($q['success'])
				$message.=" Passed ";
			else
				$message.=" Failed ";
			}
		$message.="</font><br>";
		//echo $message;
		jrportalquery_log($message);
		}
	}

?>