<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao;


/**
 * Front end module "news list".
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ModuleNewsMenuButtons extends \ModuleNews
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_newsmenubuttons';


    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            /** @var \BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['newsmenubuttons'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        $this->news_archives = $this->sortOutProtected(deserialize($this->news_archives));

        // Return if there are no archives
        if (!is_array($this->news_archives) || empty($this->news_archives))
        {
            return '';
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        $newsArchives = \NewsArchiveModel::findMultipleByIds($this->news_archives);

        $this->Template->filter = $this->filterbtns;
        $this->Template->sorting = $this->sortbtns;
        $this->Template->archives = $newsArchives;
    }
}
