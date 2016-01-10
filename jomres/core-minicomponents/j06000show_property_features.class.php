<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000show_property_features
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		if (isset($componentArgs[ 'property_uid' ]))
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		elseif ( isset ( $_REQUEST['property_uid'] ))
			$property_uid = (int) $_REQUEST['property_uid'];
		else return;
		
		if (!user_can_view_this_property($property_uid))
			return;
		
		$output_now = true;
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = (bool)$componentArgs[ 'output_now' ];

		$mrConfig = getPropertySpecificSettings( $property_uid );
		
		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->gather_data( $property_uid );

		$output = array();

		if ( count($basic_property_details->features) > 0 )
			{
			if ( (int)$mrConfig['showPfeaturesCategories'] == 0 || $componentArgs[ 'show_feature_categories' ] == false )
				{
				$pFeatures = array();
				
				$output[ 'HFEATURES' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES, false );
				
				foreach ( $basic_property_details->features as $f )
					{
					$pFeature[ 'FEATURE' ] = jomres_makeTooltip( $f[ 'abbv' ], $f[ 'abbv' ], $f[ 'desc' ], JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$f[ 'image' ], "", "property_feature", array () );
					$pFeatures[] = $pFeature;
					}
					
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'pfeatures',$pFeatures);
				$tmpl->readTemplatesFromInput( 'show_property_features.html' );
				$features_template = $tmpl->getParsedTemplate();
				if ( $output_now )
					echo $features_template;
				else
					$this->retVals = $features_template;
				}
			else //display by categories
				{
				//first we split the features in arrays for each category
				$propertyFeatures = array();
				$features_template = '';
				
				foreach ( $basic_property_details->features as $f )
					{
					$propertyFeatures[$f['cat_id']][] = $f;
					}
				
				//now we generate the putput for each category
				foreach ($propertyFeatures as $k=>$v)
					{
					$output = array();
					$pFeatures = array();
					$pageoutput = array();
					
					if ($k > 0)
						$output[ 'HFEATURES' ] = $basic_property_details->all_property_features_categories[$k];
					else
						$output[ 'HFEATURES' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES, false );
					
					foreach ($v as $f)
						{
						$pFeature[ 'FEATURE' ] = jomres_makeTooltip( $f[ 'abbv' ], $f[ 'abbv' ], $f[ 'desc' ], JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$f[ 'image' ], "", "property_feature", array () );
						$pFeatures[] = $pFeature;
						}
					
					$pageoutput[]=$output;
					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->addRows( 'pfeatures',$pFeatures);
					$tmpl->readTemplatesFromInput( 'show_property_features.html' );
					$features_template .= $tmpl->getParsedTemplate();
					}
				
				if ( $output_now )
					echo $features_template;
				else
					$this->retVals = $features_template;
				}
			}
		else
			$output[ 'HFEATURES' ] = '';
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
