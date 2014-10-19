<?php

/**
 * Medical Supply model config
 */

return array(

	'title' => 'ยาและเวชภัณฑ์',
	'single' => 'ยาและเวชภัณฑ์',
	'model' => 'MedicalSupply',

	'columns' => array(
		'drug_code' => array(
			'title' => 'Code'
			),
		'drug_name' => array(
			'title' => 'Name'
			),
		'drug_commonname' => array(
			'title' => 'Common Name
			'),
		'drug_tradename' => array(
			'title' => 'Tradename'
			),
		'drug_price' => array(
			'title' => 'Price'
			),
		'drug_cost' => array(
			'title' => 'Cost'
			),
		'drug_stock' => array(
			'title' => 'Stock'
			),
		'drug_status' => array(
			'title' => 'Status'
			),

	),


	'filters' => array(

		'drug_code' => array(
			'title' => 'Code',
		),
		'drug_name' => array(
			'title' => 'Name',
		),
	),

	'edit_fields' => array(

			'drug_code' => array(
				'title' => 'code',
				'type' => 'text'
			),

			'drug_name' => array(
				'title' => 'name',
				'type' => 'text'
			),

			'drug_commonname' => array(
				'title' => 'commonname',
				'type' => 'text'
			),

			'drug_tradename' => array(
				'title' => 'tradename',
				'type' => 'text'
			),

			'drug_ingredient' => array(
				'title' => 'ingredient',
				'type' => 'text'
			),

			'drug_usage' => array(
				'title' => 'usage',
				'type' => 'markdown'
			),

			'drug_dose' => array(
				'title' => 'dose',
				'type' => 'markdown'
			),

			'drug_package' => array(
				'title' => 'package',
				'type' => 'markdown'
			),

			'drug_period' => array(
				'title' => 'period',
				'type' => 'markdown'
			),

			'drug_price' => array(
				'title' => 'price',
				'type' => 'markdown'
			),

			'drug_cost' => array(
				'title' => 'cost',
				'type' => 'markdown'
			),

			'drug_stock' => array(
				'title' => 'stock',
				'type' => 'markdown'
			),

			'drug_status' => array(
				'title' => 'status',
				'type' => 'text'
			),

			'drug_note' => array(
				'title' => 'note',
				'type' => 'text'
			),
		),
);
