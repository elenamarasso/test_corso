<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of helloworld component
 */
class helloworldController extends JControllerLegacy
{
	/**
	 * display task
	 *
	 * @return void
	 */
function display($cachable = false, $urlparams = false)
	{
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'helloworlds'));

		// call parent behavior
		parent::display($cachable);

		// Set the submenu
		helloworldHelper::addSubmenu('messages');
	}
}
