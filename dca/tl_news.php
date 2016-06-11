<?php

$GLOBALS['TL_DCA']['tl_news']['palettes']['__selector__'][] = 'addVGWort';
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] .= ';{vgwort_legend:hide},addVGWort';
$GLOBALS['TL_DCA']['tl_news']['subpalettes']['addVGWort'] = 'vgwort_code';

$GLOBALS['TL_DCA']['tl_news']['fields']['addVGWort'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['addVGWort'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_news']['fields']['vgwort_code'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['vgwort_code'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);