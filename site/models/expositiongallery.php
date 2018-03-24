<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_expositiongallery
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExpositionGallery Model
 *
 * @since  0.0.1
 */
class ExpositionGalleryModelExpositionGallery extends JModelItem
{
    const APP_NAME = "Exposition Gallery";
	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getAppName()
	{
		return self::APP_NAME;
	}
}