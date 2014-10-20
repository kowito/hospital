<?php

/**
 * Lab model config
 */

return array(

	'title' => 'Lab Groups',
	'single' => 'Lab Group',
	'model' => 'LabGroup',

	'columns' => array(
		'id',
		'code' => array(
			'title' => 'code',
		),

		'name' => array(
			'title' => 'Name',
		),
	),


	'filters' => array(
		'code' => array(
			'title' => 'code',
		),

		'name' => array(
			'title' => 'Name',
		),
	),

	'edit_fields' => array(
		'code' => array(
			'title' => 'code',
			'type' => 'text',
		),

		'name' => array(
			'title' => 'Name',
			'type' => 'text',
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
