<?php

/**
 * Pharmaceutical model config
 */

return array(

	'title' => 'การจ่ายยา',
	'single' => 'การจ่ายยา',
	'model' => 'Pharmaceutical',

	'columns' => array(
		'id',
		'case_entry' => array(
			'title' => 'Case entry',
		),
	),


	'filters' => '',

	'edit_fields' => array(

		'Patient' => array(
			'title' => 'Patient',
			'relationship' => 'patient', //this is the name of the Eloquent relationship method!
			'select' => '(:table).id'
			,
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
