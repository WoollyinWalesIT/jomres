<?php
use Joomla\CMS\Factory;
if (class_exists('JComponentRouterBase')) {
	abstract class JomresRouterBase extends JComponentRouterBase
	{
	}
} else {
	class JomresRouterBase
	{
		var $app;
		var $menu;

		public function __construct($app = null, $menu = null)
		{
			$this->app = empty($app) ? Factory::getApplication('site') : $app;
			$this->menu = empty($menu) ? $this->app->getMenu() : $menu;
		}
	}
}
