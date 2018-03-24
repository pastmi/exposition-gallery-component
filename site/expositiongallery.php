<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_expositiongallery
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Load media files
JLoader::register('ExpositionGalleryHelpersMedialoader', JPATH_SITE . '/components/com_expositiongallery/helpers/medialoader.php');
ExpositionGalleryHelpersMedialoader::load();

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by ExpositionGallery
$controller = JControllerLegacy::getInstance('ExpositionGallery');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();