<?php
/**
 * @package     PASTMI.ExpositionGallery
 * @subpackage  com_expositiongallery
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class ExpositionGalleryViewExpositionGallery extends JViewLegacy
{
	/**
	 * Display the Exposition Gallery view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->appName = $this->get('AppName');

		// Check if errors
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		// Display the view
		parent::display($tpl);
	}
}