<?php

/**
 * Lab model config
 */

return array(

	'title' => 'ห้องปฏิบัติการ',
	'single' => 'ห้องปฏิบัติการ',
	'model' => 'Lab',

	'columns' => array(
		'id',
		'lab_code' => array(
			'title' => 'Code',
		),

		'patient' => array(
			'title' => 'Patient Name',
			'relationship' => 'patient',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)"
		),

		'lab_group' => array(
			'title' => 'Lab Group',
			'relationship' => 'lab_group',
			'select' => '(:table).name',
		),

		'status',
		'confidential',
		'lab_status' => array(
			'title' => 'Lab Status',
		),
	),


	'filters' => array(
		'id',
		'lab_code' => array(
			'title' => 'Code',
		),
	),

	'edit_fields' => array(
		'patient' => array(
			'title' => 'Patient',
			'type' => 'relationship',
			'name_field' => 'first_name',
		),
		
		'lab_code' => array(
			'title' => 'Code',
			'type' => 'text',
		),

		'lab_group' => array(
			'title' => 'Lab Group',
			'type' => 'relationship',
			'name_field' => 'name',

		),

		'status' => array(
			'title' => 'Status',
			'type' => 'bool',
		),

		'confidential' => array(
			'title' => 'Confidential',
			'type' => 'bool',
		),

		'lab_status' => array(
			'title' => 'Lab Status',
			'type' => 'text',
		),

	),

);
