<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Modules
    'Contao\ModuleNewsMenuButtons' => 'system/modules/tsv-news/modules/ModuleNewsMenuButtons.php',

    // Classes
    'TsvNews' => 'system/modules/tsv-news/classes/TsvNews.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_newsmenubuttons' => 'system/modules/tsv-news/templates',
));
