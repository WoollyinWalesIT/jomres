<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################




if (!using_bootstrap())
	{
	jr_import('jomres_toolbar_normal');
	
	class jomres_toolbar extends jomres_toolbar_normal
		{
		function jomres_toolbar()
			{
			$mrConfig=getPropertySpecificSettings();
			$this->livesite=get_showtime('live_site');
			$this->standardActivityImages=$this->getStandardActivityImagesArray();
			$this->menubarImagesArray = $this->getMenubarImagesArray();
			$this->imageSize="small";
			if (isset($mrConfig['editiconsize']))
				$this->imageSize=$mrConfig['editiconsize'];
			$this->imageExtension='png';
			}
		}
	}
else
	{
	jr_import('jomres_toolbar_bootstrap');
	
	class jomres_toolbar extends jomres_toolbar_bootstrap
		{
		function jomres_toolbar()
			{
			$mrConfig=getPropertySpecificSettings();
			$this->livesite=get_showtime('live_site');
			$this->standardActivityImages=$this->getStandardActivityImagesArray();
			$this->menubarImagesArray = $this->getMenubarImagesArray();
			$this->imageSize="small";
			if (isset($mrConfig['editiconsize']))
				$this->imageSize=$mrConfig['editiconsize'];
			$this->imageExtension='png';
			}
		}
	}
?>