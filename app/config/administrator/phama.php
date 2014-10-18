<?php

/**
 * Pharmaceutical model config
 */

return array(

	'title' => 'เภสัชกรรม',
	'single' => 'เภสัชกรรม',
	'model' => 'Pharmaceutical',

	'columns' => array(
		'id',
		'case_entry' => array(
			'title' => 'Case entry',
		),
	),


	'filters' => '',

	'edit_fields' => array(
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
