<?php

/**
 * Medical Record model config
 */

return array(

	'title' => 'ผู้ป่วย',
	'single' => 'ผู้ป่วย',
	'model' => 'Patient',

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

		'hn_code' => array(
			'title' => 'Hn Code',
			'type' => 'text',
		),

		'an_code' => array(
			'title' => 'An Code',
			'type' => 'text',
		),

		'ln_code' => array(
			'title' => 'Ln Code',
			'type' => 'text',
		),

		'vn_code' => array(
			'title' => 'Vn Code',
			'type' => 'text',
		),

		'hold_user' => array(
			'title' => 'Hold User',
			'type' => 'text',
		),

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
			'title' => 'nickname',
			'type' => 'text',
		),

		'medical_status' => array(
			'title' => 'Medical Status',
			'type' => 'bool',
		),

		'medical_case' => array(
			'title' => 'Medical Case',
			'type' => 'text',
		),

		'case_entry' => array(
			'title' => 'Case Entry',
			'type' => 'datetime',
		),

		'case_close' => array(
			'title' => 'Case Close',
			'type' => 'datetime'
		),

		'case_cause' => array(
			'title' => 'Case Cause',
			'type' => 'markdown',
		),

		'doctor_on_case' => array(
			'title' => 'Doctor On Case',
			'type' => 'text',
		),

		'order2close' => array(
			'title' => 'Order2close',
			'type' => 'text',
		),

		'spec_IDC9' => array(
			'title' => 'Spec Idc9',
			'type' => 'text',
		),

		'spec_IDC10' => array(
			'title' => 'Spec Idc10',
			'type' => 'text',
		),

		'doctor_actions' => array(
			'title' => 'Doctor Actions',
			'type' => 'markdown',
		),

		'doctor_diagnosis' => array(
			'title' => 'Doctor Diagnosis',
			'type' => 'markdown',
		),

		'doctor_comment' => array(
			'title' => 'Doctor Comment',
			'type' => 'markdown',
		),

		'mainlist_drugs' => array(
			'title' => 'Mainlist Drugs',
			'type' => 'bool',
		),

		'social_welfare' => array(
			'title' => 'Social Welfare',
			'type' => 'bool',
		),

		'sex' => array(
			'title' => 'Sex',
			'type' => 'text',
		),

		'age' => array(
			'title' => 'Age',
			'type' => 'text',
		),

		'height' => array(
			'title' => 'Height',
			'type' => 'text',
		),

		'weight' => array(
			'title' => 'Weight',
			'type' => 'text',
		),

		'bmi_value' => array(
			'title' => 'Bmi Value',
			'type' => 'text',
		),

		'blood_group' => array(
			'title' => 'Blood Group',
			'type' => 'text',
		),

		'blood_type' => array(
			'title' => 'Blood Type',
			'type' => 'text',
		),

		'vital_temp' => array(
			'title' => 'Vital Temp',
			'type' => 'text',
		),

		'vital_bloodpressure' => array(
			'title' => 'Vital Bloodpressure',
			'type' => 'text',
		),

		'vital_heartbeat' => array(
			'title' => 'Vital Heartbeat',
			'type' => 'text',
		),

		'additional_data' => array(
			'title' => 'Additional Data',
			'type' => 'markdown',
		),

		'lab_need' => array(
			'title' => 'Lab Need',
			'type' => 'text',
		),

		'lab_list' => array(
			'title' => 'Lab List',
			'type' => 'markdown',
		),

		'lab_results' => array(
			'title' => 'Lab Results',
			'type' => 'markdown',
		),

		'xray_need' => array(
			'title' => 'Xray Need',
			'type' => 'text',
		),

		'xray_list' => array(
			'title' => 'Xray List',
			'type' => 'markdown',
		),

		'xray_results' => array(
			'title' => 'Xray Results',
			'type' => 'markdown',
		),

		'drugs_list' => array(
			'title' => 'Drugs List',
			'type' => 'markdown',
		),

		'expense_list' => array(
			'title' => 'Expense List',
			'type' => 'markdown',
		),

		'expense_total' => array(
			'title' => 'Expense Total',
			'type' => 'markdown',
		),

		'related_documents' => array(
			'title' => 'Related Documents',
			'type' => 'markdown',
		),

		'memo' => array(
			'title' => 'Related Documents',
			'type' => 'markdown',
		),

		'logs' => array(
			'title' => 'Logs',
			'type' => 'markdown',
		),

	),

);