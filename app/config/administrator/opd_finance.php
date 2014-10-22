<?php

/**
 * OPD Finance model config
 */

return array(

	'title' => 'รายการข้อมูลการชำระเงิน',
	'single' => 'รายการข้อมูลการชำระเงิน',
	'model' => 'OpdFinance',

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

		'cash_list' => array(
			'title' => 'cash list',
		),

		'cash_total' => array(
			'title' => 'cash total',
			'type' => 'number',
	    'title' => 'Price',
	    'symbol' => '฿',
			'decimals' => 2,
		),

		'cash_status' => array(
			'title' => 'cash status',
		),

		'cash_note' => array(
			'title' => 'cash note',
		),

		'status' => array(
			'title' => 'status',
		),
	),


	'filters' => array(
		'status',
	),

	'edit_fields' => array(
		'patient' => array(
			'title' => 'Patient',
			'type' => 'relationship',
			'name_field' => 'first_name',

		),
		'status' => array(
			'title' => 'status',
			'type' => 'bool'
		),

		'case_entry' => array(
			'title' => 'case_entry',
			'type' => 'datetime'
		),

		'cash_list' => array(
			'title' => 'cash_list',
			'type' => 'markdown'
		),

		'cash_total' => array(
			'title' => 'cash_total',
			'type' => 'text'
		),

		'cash_status' => array(
			'title' => 'cash_status',
			'type' => 'markdown'
		),

		'cash_note' => array(
			'title' => 'cash_note',
			'type' => 'markdown'
		),

	),

);
