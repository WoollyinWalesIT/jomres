<?php

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function jomres_setPageTitle($title)
	{
	if (function_exists('jomres_cmsspecific_setPageTitle'))
		jomres_cmsspecific_setPageTitle($title);
	else
		return;
	}

function jomres_setPageMetatags($metaTag)
	{
	if (function_exists('jomres_cmsspecific_setPageMetatags'))
		jomres_cmsspecific_setPageTitle($title);
	else
		return;
	}
	
	
 ?>