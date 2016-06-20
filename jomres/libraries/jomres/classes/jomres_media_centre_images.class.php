<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_media_centre_images
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct()
		{
		self::$configInstance         	= false;
		$this->images		      		= array ();
		$this->multi_query_images  		= array ();
		
		$this->multi_query_images [ 'noimage-large' ] = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage.gif";
		$this->multi_query_images [ 'noimage-medium' ] = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage.gif";
		$this->multi_query_images [ 'noimage-small' ] = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage_small.gif";
		}
		
	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_media_centre_images();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}
	
	public function __set( $setting, $value )
		{
		$this->$setting = $value;
		return true;
		}

	public function __get( $setting )
		{
		return $this->$setting;
		}
	
	function get_images($property_id = null, $types = array() )
		{
		if ($property_id == null)
			{
			$property_id = get_showtime("property_uid");
			}
		
		//property images
		if (count($types)==0 || in_array('property',$types))
			{
			if (!isset( $this->multi_query_images[$property_id]['property']))
				{
				$this->get_images_multi( $property_id, array('property') );
				}
			if (isset( $this->multi_query_images[$property_id]['property']))
				$this->images ['property']=$this->multi_query_images[$property_id]['property'];
			else //there are no images
				{
				$this->images ['property'][0][] = array ( 
														"large" =>  $this->multi_query_images[ 'noimage-large' ] ,
														"medium" => $this->multi_query_images[ 'noimage-medium' ] ,
														"small" => $this->multi_query_images[ 'noimage-small' ] 
														);
				}
			}

		//room images
		if (count($types)==0 || in_array('rooms',$types))
			{
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data( $property_id );
			if (!isset( $this->multi_query_images[$property_id]['rooms']))
				{
				$this->get_images_multi( $property_id, array('rooms') );
				}

			if (isset( $this->multi_query_images[$property_id]['rooms']))
				$this->images ['rooms']=$this->multi_query_images[$property_id]['rooms'];
			else
				$this->images ['rooms']=array();
			
			foreach ( $current_property_details->rooms as $room_id)
				{
				if (isset($this->images['rooms']))
					{
					if (!array_key_exists($room_id,$this->images['rooms']))
						{
						$this->images [ 'rooms' ] [ $room_id ] [] = array ( 
							"large" =>  $this->multi_query_images[ 'noimage-large' ] ,
							"medium" =>  $this->multi_query_images[ 'noimage-medium' ] ,
							"small" =>  $this->multi_query_images[ 'noimage-small' ] 
							);
						}
					}
				}
			}
		
		//slideshow images
		if (count($types)==0 || in_array('slideshow',$types))
			{
			if (!isset( $this->multi_query_images[$property_id]['slideshow']))
				{
				$this->get_images_multi( $property_id, array('slideshow') );
				}
			if (isset( $this->multi_query_images[$property_id]['slideshow']))
				$this->images ['slideshow'] = $this->multi_query_images[$property_id]['slideshow'];
			else //there are no images
				{
				$this->images ['slideshow'][0][] = array ( 
														"large" =>  $this->multi_query_images[ 'noimage-large' ] ,
														"medium" => $this->multi_query_images[ 'noimage-medium' ] ,
														"small" => $this->multi_query_images[ 'noimage-small' ] 
														);
				}
			}

		//room features images
		if (count($types)==0 || in_array('room_features',$types))
			{
			if (!isset( $this->multi_query_images[$property_id]['room_features']))
				{
				$this->get_images_multi( $property_id, array('room_features') );
				}
			if (isset( $this->multi_query_images[$property_id]['room_features']))
				$this->images ['room_features']=$this->multi_query_images[$property_id]['room_features'];
			}
		
		//extras images
		if (count($types)==0 || in_array('extras',$types))
			{
			if (!isset( $this->multi_query_images[$property_id]['extras']))
				{
				$this->get_images_multi( $property_id, array('extras') );
				}
			if (isset( $this->multi_query_images[$property_id]['extras']))
				$this->images ['extras']=$this->multi_query_images[$property_id]['extras'];
			}
		
		return $this->images;
		}


	function get_images_multi( $property_uids, $requested_types = array() )
		{
		// As we're going to let this function work on both single and multiple lists of property uids, we'll cast property_ids to an array if it isn't one already
		if (!is_array($property_uids))
			$property_uids = array($property_uids);
		
		// First we need to extract those uids that are not already in the $this->images var, this (may) reduce the number of scandirs we need to execute
		$temp_array = array ();
		foreach ( $property_uids as $id )
			{
			foreach ( $requested_types as $t )
				{
				if ( !array_key_exists( $id[$t], $this->multi_query_images ) ) 
					$temp_array[ ] = $id;
				}
			}
		$property_uids = $temp_array;
		unset ( $temp_array );
		
		if ( count( $property_uids ) > 0 )
			{
			$MiniComponents =jomres_getSingleton('mcHandler');
			$MiniComponents->triggerEvent( '03379' );
			$resource_types = $MiniComponents->miniComponentData['03379'];
			
			// This section will find all images uploaded by the new media centre's functionality
			if (count($resource_types)>0)
				{
				$all_types = array();
				foreach ($resource_types as $type)
					{
					if (is_array($type) && isset($type['resource_type']) && in_array($type['resource_type'], $requested_types))
						$all_types[] = $type['resource_type'];
					}
				}

			if (count($all_types)>0)
				{
				foreach ($property_uids as $property_id)
					{
					$base_path = JOMRES_IMAGELOCATION_ABSPATH . $property_id . JRDS;
					$rel_path  = JOMRES_IMAGELOCATION_RELPATH . $property_id . "/" ;
					
					
					$dir_contents = scandir_getdirectories( $base_path );
						
					foreach ($dir_contents as $dir)
						{
						if (in_array($dir,$all_types))
							{
							$sub_directories = scandir_getdirectories( $base_path . $dir . JRDS );
							if (count($sub_directories)>0)
								{
								foreach ($sub_directories as $resouce_id )
									{
									$resource_images = scandir_getfiles( $base_path . $dir . JRDS . $resouce_id . JRDS );
									
									if (count ($resource_images) > 0 )
										{
										foreach ($resource_images as $image)
											{
											$this->multi_query_images [ $property_id ] [ $dir ] [ $resouce_id ] [] = array ( 
												"large" =>  $rel_path .  $dir . "/" . $resouce_id . "/" . $image ,
												"medium" => $rel_path  . $dir . "/" . $resouce_id . "/medium/". $image ,
												"small" => $rel_path  . $dir . "/" . $resouce_id . "/thumbnail/" . $image
												);
											}
										}
									else //the dir is empty
										{
										$this->multi_query_images [ $property_id ][ $dir ] [ $resouce_id ] [] = array ( 
												"large" =>  $this->multi_query_images[ 'noimage-large' ] ,
												"medium" => $this->multi_query_images[ 'noimage-medium' ] ,
												"small" => $this->multi_query_images[ 'noimage-small' ] 
												);
										}
									}
								}
							}
						}
					}
				}
			}
		return $this->multi_query_images;
		}

	}
