<?php

/**
 * Appointment model config
 */

return array(

	'title' => 'นัดหมายผู้ป่วย',
	'single' => 'นัดหมายผู้ป่วย',
	'model' => 'Appointment',

	'columns' => array(
		'title' => array(
			'title' => 'Title',
		),
		'datetime' => array(
			'title' => 'datetime',
		),
		'where' => array(
			'title' => 'Where',
		),
		'status' => array(
			'title' => 'Status',
		),
	),


	'filters' => array(
		'title' => array(
			'title' => 'Title',
		),
	),

	'edit_fields' => array(
		'title' => array(
			'title' => 'Title',
			'type' => 'text',
		),

		'AppointmentType' => array(
			'title' => 'Appointment Type',
			'type' => 'relationship',
			'name_field' => 'name',
		),

		'Employee' => array(
			'title' => 'Employee',
			'type' => 'relationship',
			'name_field' => 'name',
		),


		'datetime' => array(
			'title' => 'Datetime',
			'type' => 'datetime',
		),

		'where' => array(
			'title' => 'Where',
			'type' => 'text',
		),

		'status' => array(
			'title' => 'Status',
			'type' => 'text',
		),

	),

);
