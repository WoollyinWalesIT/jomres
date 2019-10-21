<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_oauth_scopes 
	{
	public function __construct($cwd = "") 
		{
		$this->default_scopes		= array();
		$this->scopes_file	= "scopes.json";
		$this->get_scopes_file();
		}
	
	private function get_scopes_file()
		{
		$already_found = array();
		
		$jrePath			 = JOMRES_COREPLUGINS_ABSPATH;
		$core_plugins_dir_contents = scandir($jrePath);
		$api_feature_directories = array();
		foreach ($core_plugins_dir_contents as $directory )
			{
			if ( substr($directory,0 , 12 ) == "api_feature_")
				$api_feature_directories[] = array( "path" => $jrePath , "sub_directory" => $directory );
			}
		
		
		$third_party_api_plguins = JOMRES_REMOTEPLUGINS_ABSPATH;
		$third_party_plugins_dir_contents = scandir($third_party_api_plguins);
		$third_party_api_feature_directories = array();
		foreach ($third_party_plugins_dir_contents as $directory )
			{
			if ( substr($directory,0 , 12 ) == "api_feature_")
				$third_party_api_feature_directories[] =  array( "path" => $third_party_api_plguins , "sub_directory" => $directory );
			}
		
		$all_plugins = array_merge($api_feature_directories , $third_party_api_feature_directories );

		$scope_file_contents = array();
		if (count($all_plugins) > 0)
			{
			foreach ($all_plugins as $dir)
				{
				// An api feature can be configured as auth_free ( in other words, client services do not need to send Oauth api key pairs to use the endpoint ) through the addition of an auth_free.json file to it's plugin directory. 
				// If the api feature is auth_free then it shouldn't be included in the scopes list, regardless of it's scopes file.
				$json = new stdClass();
				$json->auth_free = false;

				if (file_exists($dir['path'].$dir['sub_directory'].JRDS.'auth_free.json') ) {
					$json = json_decode(file_get_contents($dir['path'].$dir['sub_directory'].JRDS.'auth_free.json'));
				}

				if ( file_exists($dir['path'].$dir['sub_directory'].JRDS.$this->scopes_file) && ( !$json->auth_free || !isset($json->auth_free) ) ) 
					{
					$scope_file_contents[] = json_decode(file_get_contents($dir['path'].$dir['sub_directory'].JRDS.$this->scopes_file));
					}
				}
			}
			
		if (count($scope_file_contents) > 0 )
			{
			foreach ($scope_file_contents as $key => $value)
				{
				if (count($value)>0)
					{
					foreach ($value as $k=>$v)
						{
						foreach ($v as $scope)
							{
							if (!in_array($scope,$already_found)) {
								$this->default_scopes[$k][] = $scope;
								$already_found[] = $scope;
								}
							}
						}
					}
				}
			}
		}
		
	}
