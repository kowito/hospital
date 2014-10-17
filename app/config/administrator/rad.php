<?php

/**
 * Rad model config
 */

return array(

	'title' => 'รังสีวิทยา',
	'single' => 'รังสีวิทยา',
	'model' => 'rad',

	'columns' => array(
		'id',
		'xn_code' => array(
			'title' => '# code',
		),
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
		),

		'case_entry' => array(
			'title' => 'Entry',
		),

		'status' => array(
			'title' => 'Status',
		),
	),


	'filters' => array(
		'id',
		'first_name' => array(
			'title' => 'First Name',
		),
		'last_name' => array(
			'title' => 'Last Name',
		),
	),

	'edit_fields' => array(
		'title' => array(
			'title' => 'title',
			'type' => 'text',
		),

		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),

		'xn_code' => array(
			'title' => 'code',
			'type' => 'text',
		),

		'xlab_status' => array(
			'title' => 'status',
			'type' => 'markdown',
		),
		'xlab_note' => array(
			'title' => 'note',
			'type' => 'markdown',
		),
		'memo' => array(
			'title' => 'memo',
			'type' => 'text',
		),
		'logs' => array(
			'title' => 'logs',
			'type' => 'text',
		),
		'case_entry' => array(
			'title' => 'case_entry',
			'type' => 'datetime',
		),

		'confidential' => array(
			'title' => 'confidential',
			'type' => 'bool',
		),

		'status' => array(
			'title' => 'status',
			'type' => 'bool',
		),
		
	),

);