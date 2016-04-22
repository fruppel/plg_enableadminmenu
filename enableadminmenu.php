<?php
/**
 * @copyright   Copyright (C) 2016 Florian Ruppel
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * System plugin to enable admin menu on all views.
 */
class PlgSystemEnableadminmenu extends JPlugin
{
	public function onAfterDispatch()
	{
		$app = JFactory::getApplication();
	
		// Check that we are in the admin application.
		if ($app->isAdmin())
		{
			$app->input->set('hidemainmenu', false);
		}
		return true;
	}
}
