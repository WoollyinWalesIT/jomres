<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
class jomressa_site_factory
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct() 
		{
		$this->runinfo = array();
		if (isset($_REQUEST['admin']))
			$this->currpage="admin";
		else
			$this->currpage="frontend";
		$this->heads = array(1=>"",2=>"",3=>"");
		if (!defined('JOMRES_WRAPPED'))
			$this->heads[1][] = '<meta name="generator" content="Jomres Standalone" />';
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomressa_site_factory();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function setHead($type,$content=array())
		{
		if (!defined('JOMRES_WRAPPED'))
			{
			switch ($type) 
				{
				case "javascript":
					$this->heads[3][] = '<script type="text/javascript" src="'.$content['path'].$content['filename'].'"></script>';
				break;
				case "css":
					$this->heads[2][] ='<link type="text/css" rel="stylesheet" href="'.$content['path'].$content['filename'].'" />';
				break;
				case "description":
					$this->heads[1]["description"] ='<meta name="description" content="'.$content['description'].'" />';
				break;
				case "keywords":
					$this->heads[1]["keywords"] = '<meta name="keywords" content="'.$content['keywords'].'" />';
				break;
				case "charset":
					$this->heads[1][] = '<meta http-equiv="Content-Type" content="text/html; charset='.$content['charset'].'" />';
				break;
				case "title":
					$this->heads[1]['title'] = '<title>'.$content['title'].'</title>';
				break;
				case "revisit":
					$this->heads[1][] = '<META NAME="revisit" CONTENT="'.$content['revisit'].' days">';
				break;
				case "distribution":
					$this->heads[1][] = '<META NAME="distribution" CONTENT="'.$content['distribution'].'">';
				break;
				default:
					
				break;
				}
			}
		else
			{
			switch ($type) 
				{
				case "javascript":
					$this->heads[3][] = '<script type="text/javascript" src="'.$content['path'].$content['filename'].'"></script>';
				break;
				case "css":
					$this->heads[2][] ='<link type="text/css" rel="stylesheet" href="'.$content['path'].$content['filename'].'" />';
				default:
					
				break;
				}
			}
		}
		
	public function renderHeads()
		{
		$result = array();
		foreach ($this->heads as $heads)
			{
			foreach ($heads as $head)
				{
				$result[]=array('HEADS'=>$head);
				}
			}
		return $result;
		}




	}
?>