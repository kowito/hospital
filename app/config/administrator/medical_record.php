<?php

/**
 * Medical Record model config
 */

return array(

	'title' => 'เวชระเบียน',
	'single' => 'เวชระเบียน',
	'model' => 'MedicalRecord',

	'columns' => array(
		'id',
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
		),
		'num_films' => array(
			'title' => '# email',
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
		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),
		'email' => array(
			'title' => 'Email',
			'type' => 'text',
		),
	),

);