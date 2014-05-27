<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


if ( !using_bootstrap() )
	{
	jr_import( 'jomres_toolbar_normal' );

	class jomres_toolbar extends jomres_toolbar_normal
		{
		function jomres_toolbar()
			{
			$mrConfig                     = getPropertySpecificSettings();
			$this->livesite               = get_showtime( 'live_site' );
			$this->standardActivityImages = $this->getStandardActivityImagesArray();
			$this->menubarImagesArray     = $this->getMenubarImagesArray();
			$this->imageSize              = "small";
			if ( isset( $mrConfig[ 'editiconsize' ] ) ) $this->imageSize = $mrConfig[ 'editiconsize' ];
			$this->imageExtension = 'png';
			}
		}
	}
else
	{
	$bs_version = jomres_bootstrap_version();
	if ( $bs_version == "2")
		{
		jr_import( 'jomres_toolbar_bootstrap' );
		}
	elseif ($bs_version=="3")
		{
		jr_import( 'jomres_toolbar_bootstrap3' );
		}

	jr_import( 'jomresItemToolbar' );

	class jomres_toolbar extends jomres_toolbar_bootstrap
		{
		function jomres_toolbar()
			{
			$mrConfig                     = getPropertySpecificSettings();
			$this->livesite               = get_showtime( 'live_site' );
			$this->standardActivityImages = $this->getStandardActivityImagesArray();
			$this->menubarImagesArray     = $this->getMenubarImagesArray();
			$this->imageSize              = "small";
			if ( isset( $mrConfig[ 'editiconsize' ] ) ) $this->imageSize = $mrConfig[ 'editiconsize' ];
			$this->imageExtension = 'png';
			}
		}
	}
?>