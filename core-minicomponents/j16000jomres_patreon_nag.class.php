<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.0
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

	class j16000jomres_patreon_nag
	{
		/**
		 *
		 * Constructor
		 *
		 * Main functionality of the Minicomponent
		 *
		 *
		 *
		 */

		public function __construct($componentArgs)
		{
			// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			if ($MiniComponents->template_touch) {
				$this->template_touchable = false;

				return;
			}

			$this->retVals = '';

			if (file_exists(JOMRES_TEMP_ABSPATH.'nag.php')) {
				include_once JOMRES_TEMP_ABSPATH.'nag.php';
			} else {
				$str = '<?php $nag_count=1;?>';
				file_put_contents(JOMRES_TEMP_ABSPATH.'nag.php',$str );
				return null;
			}

			if (
				$nag_count == 30 ||
				$nag_count == 40 ||
				$nag_count == 50 ||
				$nag_count == 60 ||
				$nag_count == 100 ||
				$nag_count == 110 ||
				$nag_count == 120 ||
				$nag_count == 130 ||
				$nag_count == 140 ||
				$nag_count == 150 // I was tempted to make this >= but that's just cruel :D After 150+ views in the administrator area, if you haven't contributed to the project by now, you won't.
			) {
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->readTemplatesFromInput('jomres_patron_nag.html');
				$this->retVals = $tmpl->getParsedTemplate();
			}

			$nag_count++;
			$str = '<?php $nag_count='.$nag_count.';?>';
			file_put_contents(JOMRES_TEMP_ABSPATH.'nag.php',$str );
		}


		public function getRetVals()
		{
			return $this->retVals;
		}
	}
