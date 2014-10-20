<?php

/**
 * IDC9 model config
 */

return array(

	'title' => 'รหัสหัตถการ',
	'single' => 'รหัสหัตถการ',
	'model' => 'Idc9',

	'columns' => array(
		'id',
		'code_idc9' => array(
			'title' => 'Code'
		),
		'name_idc9' => array(
			'title' => 'Name'
		),
		'action',
		'price',
	),


	'filters' => array(
		'code',
		'name',
	),

	'edit_fields' => array(

		'code_idc9' => array(
			'title' => 'Code',
			'type' => 'text',
		),

		'name_idc9' => array(
			'title' => 'Name',
			'type' => 'text',
		),

		'action' => array(
			'title' => 'Action',
			'type' => 'text',
		),

		'price' => array(
			'title' => 'Price',
			'type' => 'text',
		),

		'note_idc9' => array(
			'title' => 'Note',
			'type' => 'text',
		),

	),

);
