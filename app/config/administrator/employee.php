<?php

/**
 * Employee model config
 */

return array(

	'title' => 'พนักงาน',
	'single' => 'พนักงาน',
	'model' => 'Employee',

	'columns' => array(
		'id',
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
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
		'title' => array(
			'title' => 'Title',
			'type' => 'text',
		),

		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),

		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),

		'nickname' => array(
			'title' => 'Nickname',
			'type' => 'text',
		),

		'national_ID' => array(
			'title' => 'National Id',
			'type' => 'text',
		),

		'passport_ID' => array(
			'title' => 'Passport Id',
			'type' => 'text',
		),

		'foreigner_ID' => array(
			'title' => 'Foreigner Id',
			'type' => 'text',
		),

		'birthdate' => array(
			'title' => 'Birthdate',
			'type' => 'date',
		),

		'sex' => array(
			'title' => 'Sex',
			'type' => 'text',
		),

		'age' => array(
			'title' => 'Age',
			'type' => 'text',
		),

		'nationality' => array(
			'title' => 'Nationality',
			'type' => 'text',
		),

		'race' => array(
			'title' => 'Race',
			'type' => 'text',
		),

		'religion' => array(
			'title' => 'Religion',
			'type' => 'text',
		),

		'phone' => array(
			'title' => 'Phone',
			'type' => 'text',
		),

		'marital_status' => array(
			'title' => 'Marital Status',
			'type' => 'text',
		),

		'spouse_name' => array(
			'title' => 'Spouse Name',
			'type' => 'text',
		),

		'spouse_surname' => array(
			'title' => 'Spouse Surname',
			'type' => 'text',
		),

		'spouse_nickname' => array(
			'title' => 'Spouse Nickname',
			'type' => 'text',
		),

		'spouse_phone' => array(
			'title' => 'Spouse Phone',
			'type' => 'text',
		),

		'contactor_name' => array(
			'title' => 'Contactor Name',
			'type' => 'text',
		),

		'contactor_surname' => array(
			'title' => 'Contactor Surname',
			'type' => 'text',
		),

		'contactor_nickname' => array(
			'title' => 'Contactor Nickname',
			'type' => 'text',
		),

		'contactor_relation' => array(
			'title' => 'Contactor Relation',
			'type' => 'text',
		),

		'contactor_phone' => array(
			'title' => 'Contactor Phone',
			'type' => 'text',
		),

		'old_name' => array(
			'title' => 'Old Name',
			'type' => 'text',
		),

		'old_surname' => array(
			'title' => 'Old Surname',
			'type' => 'text',
		),

		'current_addr' => array(
			'title' => 'Current Addr',
			'type' => 'markdown',
		),

		'registeration_addr' => array(
			'title' => 'Registeration Addr',
			'type' => 'markdown',
		),

		'father_name' => array(
			'title' => 'Father Name',
			'type' => 'text',
		),

		'father_surname' => array(
			'title' => 'Father Surname',
			'type' => 'text',
		),

		'mother_name' => array(
			'title' => 'Mother Name',
			'type' => 'text',
		),

		'mother_surname' => array(
			'title' => 'Mother Surname',
			'type' => 'text',
		),

		'heir' => array(
			'title' => 'Heir',
			'type' => 'text',
		),

		'hid' => array(
			'title' => 'Hid',
			'type' => 'text',
		),

		'pid' => array(
			'title' => 'Pid',
			'type' => 'text',
		),

		'did' => array(
			'title' => 'Did',
			'type' => 'text',
		),

		'salary' => array(
			'title' => 'Salary',
			'type' => 'text',
		),

		'education' => array(
			'title' => 'Education',
			'type' => 'markdown',
		),

		'memo' => array(
			'title' => 'Memo',
			'type' => 'markdown',
		),

		'logs' => array(
			'title' => 'Logs',
			'type' => 'markdown',
		),

	),

);