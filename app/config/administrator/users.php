<?php

/**
 * Users model config
 */

return array(

	'title' => 'Users',
	'single' => 'user',
	'model' => 'User',

	'columns' => array(
		'id',
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
		),
		'email' => array(
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

		'specialist' => array(
			'title' => 'Specialist',
			'type' => 'text',
		),

		
	),

);