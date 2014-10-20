<?php

/**
 * Pharmaceutical model config
 */

return array(

	'title' => 'ข้อมูลการจ่ายยา',
	'single' => 'ข้อมูลการจ่ายยา',
	'model' => 'Prescription',

	'columns' => array(
		'id',

		'patient' => array(
			'title' => 'Patient Name',
			'relationship' => 'patient',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)"

		),

		'case_entry' => array(
			'title' => 'Case entry',
		),
		'cash_total' => array(
			'title' => 'Cash total',
		),
	),


	'filters' => '',

	'edit_fields' => array(
		'patient' => array(
			'title' => 'Patient',
			'type' => 'relationship',
			'name_field' => 'first_name',

		),

			'case_entry' => array(
				'title' => 'Case Entry',
				'type' => 'date'
			),

			'drug_list' => array(
				'title' => 'Drug List',
				'type' => 'markdown'
			),

			'cash_total' => array(
				'title' => 'Cash Total',
				'type' => 'number'
			),
		),

);
