<?php

/**
 * AppointmentType model config
 */

return array(

	'title' => 'ประเภทนัดหมาย',
	'single' => 'ประเภทนัดหมาย',
	'model' => 'AppointmentType',

	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Name',
		)
	),


	'filters' => array(
		'name' => array(
			'title' => 'Name',
		),
	),

	'edit_fields' => array(
		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),
	),
);
