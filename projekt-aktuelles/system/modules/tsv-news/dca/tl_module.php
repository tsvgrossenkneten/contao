<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenubuttons'] = '{title_legend},name,headline,type;{config_legend},news_archives,filterbtns,sortbtns;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['sortbtns'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['sortbtns'],
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['filterbtns'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['filterbtns'],
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);