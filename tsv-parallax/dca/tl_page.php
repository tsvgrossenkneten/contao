<?php
/**
 * Created by PhpStorm.
 * User: Georg Jaedicke
 * Date: 31.01.2016
 * Time: 09:25
 *
 * TL_PAGE für das Parallax-Hintergrundbild erweitern
 */

array_push($GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'], 'tsvParallax');
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('{expert_legend', '{tsv_parallax_legend:hide},tsvParallax;{expert_legend', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['tsvParallax'] = 'parallaxImage';

$GLOBALS['TL_DCA']['tl_page']['fields']['tsvParallax'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['tsvParallax'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('submitOnChange' => true),
    'sql' => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['parallaxImage'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['parallaxImage'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => array('filesOnly' => true, 'extensions' => Config::get('validImageTypes'), 'fieldType' => 'radio'),
    'sql' => "binary(16) NULL"
);