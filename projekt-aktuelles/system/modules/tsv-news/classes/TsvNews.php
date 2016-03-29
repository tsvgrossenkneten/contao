<?php

/**
 * User: Colin Deepe
 * Date: 28.03.2016
 */

class TsvNews
{
    public function addTsvNews($strContent, $strTemplate)
    {
        global $objPage;

        $GLOBALS['TL_JQUERY'][] = '<script src="/system/modules/tsv-news/assets/js/isotope.pkgd.min.js"></script>';
        $GLOBALS['TL_JQUERY'][] = '<script src="/system/modules/tsv-news/assets/js/tsv-news.js"></script>';

        return $strContent;
    }
}