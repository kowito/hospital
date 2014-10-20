<?php

/**
 * IDC10 model config
 */

return array(

	'title' => 'รหัสโรค',
	'single' => 'รหัสโรค',
	'model' => 'Idc10',

	'columns' => array(
		'code_idc10' => array(
			'title' => 'Code'
		),
		'name_idc10' => array(
			'title' => 'Name'
		),
		'symptoms',
		'diagnosis',
		'periods',
		'drugs',
		'drugs_usage',
	),


	'filters' => array(
		'code_idc10' => array(
			'title' => 'Code',
		),
		'name_idc10' => array(
			'title' => 'Name',
		),
	),

	'edit_fields' => array(

		'code_idc10' => array(
			'title' => 'code',
			'type' => 'text',
		),
		'name_idc10' => array(
			'title' => 'name',
			'type' => 'text',
		),
		'symptoms' => array(
			'title' => 'symptoms',
			'type' => 'markdown',
		),
		'diagnosis' => array(
			'title' => 'diagnosis',
			'type' => 'markdown',
		),
		'periods' => array(
			'title' => 'periods',
			'type' => 'markdown',
		),
		'drugs' => array(
			'title' => 'drugs',
			'type' => 'markdown',
		),
		'drugs_usage' => array(
			'title' => 'drugs_usage',
			'type' => 'markdown',
		),
		'solutions' => array(
			'title' => 'solutions',
			'type' => 'markdown',
		),
		'note_idc10' => array(
			'title' => 'note_idc10',
			'type' => 'text',
		),
		'memo' => array(
			'title' => 'memo',
			'type' => 'markdown',
		),
		'logs' => array(
			'title' => 'logs',
			'type' => 'markdown',
		),
	),
);
