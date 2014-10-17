<?php

return array(

	/**
	 * Package URI
	 *
	 * @type string
	 */
	'uri' => 'manage',

	/**
	 * Page title
	 *
	 * @type string
	 */
	'title' => 'Hospital Management',

	/**
	 * The path to your model config directory
	 *
	 * @type string
	 */
	'model_config_path' => app('path') . '/config/administrator',

	/**
	 * The path to your settings config directory
	 *
	 * @type string
	 */
	'settings_config_path' => app('path') . '/config/administrator/settings',

	

	'menu' => array(
		'เวชระเบียน' => array('medical_record', 'patient','person'),
		'opd',
		'clinic',
		'lab',
		'rad',
		'phama',
		'medical_supply',
		'healty',
		'opd_finance',
		'report',
		'รหัสโรค' => array('idc9', 'idc10'),
		'appointment',
		'public_relation',
		// 'Settings' => array('settings.site'),
	),



	/**
	 * The permission option is the highest-level authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view the admin section. Any "falsey" response will send the user back to the 'login_path' defined below.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return true;
		//return Auth::user()->hasRole('admin');
	},

	/**
	 * This determines if you will have a dashboard (whose view you provide in the dashboard_view option) or a non-dashboard home
	 * page (whose menu item you provide in the home_page option)
	 *
	 * @type bool
	 */
	'use_dashboard' => false,

	/**
	 * If you want to create a dashboard view, provide the view string here.
	 *
	 * @type string
	 */
	'dashboard_view' => '',

	/**
	 * The menu item that should be used as the default landing page of the administrative section
	 *
	 * @type string
	 */
	'home_page' => 'medical_record',

	/**
	 * This is the path where Administrator will send the user if they are not logged in (!Auth::check())
	 *
	 * @type string
	 */
	'login_path' => 'login',

	/**
	 * The logout path is the path where Administrator will send the user when they click the logout link
	 *
	 * @type string
	 */
	'logout_path' => 'logout',

	/**
	 * Redirect key
	 *
	 * @type string
	 *
	 * This comes with the redirection to your login_action. Input::get('redirect') will hold the return URL.
	 */
	'login_redirect_key' => 'redirect',

	/**
	 * Global items per page
	 *
	 * @type NULL|int
	 *
	 * If you set this to an integer value greater than 0, it will override the $per_page static property in ALL of your models
	 */
	'global_rows_per_page' => 20,

	/**
	 * An array of available locale strings. This determines which locales are available in the languages menu at the top right of the Administrator
	 * interface.
	 *
	 * @type array
	 */
	'locales' => array(),

);