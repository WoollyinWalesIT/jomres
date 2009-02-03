<?php

function JomresBuildRoute(&$query)
	{
	static $items;
	
	$segments = array();

	// Get the menu items for this component.
	/*
	if (!$items) 
		{
		$component	= &JComponentHelper::getComponent('com_jomres');
		$menu		= &JSite::getMenu();
		$items		= $menu->getItems('componentid', $component->id);
		}
	
	if(isset($query['task']))
		{
		$segments[] = $query['task'];
		unset($query['task']);
		};
	*/
	return $segments;
	}

function JomresParseRoute($segments)
	{
	$vars = array();
	//$vars['task'] = 'preview';
	return $vars;
	}
?>