<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  fmm 2010 
 * @author     Frank Mattes 
 * @package    FCC 
 * @license    GNU/LGPL 
 * @filesource
 */


/**
 * Table tl_fcc_pp_jahrgang 
 */
$GLOBALS['TL_DCA']['tl_fcc_pp_jahrgang'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
    'ctable'                      => 'tl_fcc_pp_name'
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 0,
			'fields'                  => array('session_beginn'),
			'flag'                    => 11
		),
		'label' => array
		(
			'fields'                  => array('session_beginn','session_ende'),
			'format'                  => 'Session von %s bis %s',
      'label_callback'          => array ('tl_fcc_pp_jahrgang','label_callback')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => '{sessions_daten},session_beginn,session_ende;{zusatz},bemerkung;{prinzenpaar},titel_weibl,titel_maennl'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'session_beginn' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['session_beginn'],
			'exclude'                 => false,
			'inputType'               => 'text',
      'search'                  => true, 
      'sorting'                 => true, 
      'flag'                    => 9,
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard')
		),
    'session_ende'   => array
    (
			'label'                   => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['session_ende'],
			'exclude'                 => false,
			'inputType'               => 'text',
      'search'                  => true, 
      'sorting'                 => true, 
      'flag'                    => 6,
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard')
		),
    'bemerkung'   => array
    (
			'label'                   => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['bemerkung'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
    'titel_weibl'   => array
    (
			'label'                   => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['titel_weibl'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
    'titel_maennl'   => array
    (
			'label'                   => &$GLOBALS['TL_LANG']['tl_fcc_pp_jahrgang']['titel_maennl'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		)
	)
);


/**
 * Class tl_comments
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  fmm 2010
 * @author     Frank Mattes 
 * @package    FCC
 */
class tl_fcc_pp_jahrgang extends Backend
{
function label_callback($row, $label) {
  return ('Session ' . date("Y", $row['session_beginn']) .'/'.date("Y", $row['session_ende']));
}

}

?>