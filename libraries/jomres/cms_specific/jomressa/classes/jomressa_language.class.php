<?php
class jomressa_language
	{
	function jomressa_language($lang)
		{
		if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.$lang.'.php'))
			{
			require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.$lang.'.php');
			}
		else
			{
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.'en-GB.php'))
				{
				require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.'en-GB.php');
				}
			}
		}
	}
?>