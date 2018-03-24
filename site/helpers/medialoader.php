<?php

// Class for load media files like JavaScripts

defined('_JEXEC') or die;

class ExpositionGalleryHelpersMedialoader
{
    
    static $loaded = false;

    public static function load()
    {
        if (self::$loaded) {
            return;
        }

        self::$loaded = true;

        $JSs = Array();
        $document = JFactory::getDocument();

        $JSs[] = 'frontend/dist/bundle.js';

        foreach($JSs as $js) {
            $script = JUri::root(true) . '/media/com_expositiongallery/'.$js;
            $document->addScript($script);
        }
    }
}

?>