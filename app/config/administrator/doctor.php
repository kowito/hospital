<?php

/**
 * Doctor model config
 */

return array(

  'title' => 'ข้อมูลแพทย์',
  'single' => 'ข้อมูลแพทย์',
  'model' => 'Doctor',

  'columns' => array(
    'full_name' => array(
      'title' => 'Name',
      'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
    ),
    'birthdate',
    'age',
    'phone',

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
    'title' => Array(
      'title' => 'Title',
      'type' => 'text',
    ),

    'first_name'  => array(
      'title' => 'First Name',
      'type' => 'text',
    ),

    'last_name'  => array(
      'title' => 'Last Name',
      'type' => 'text',
    ),

    'nickname' => array(
      'title' => 'Nickname',
      'type' => 'text',
    ),

    'birthdate'  => array(
      'title' => 'Date of Birth',
      'type' => 'date',
    ),

    'sex'  => array(
      'title' => 'Sex',
      'type' => 'text',
    ),

    'age'  => array(
      'title' => 'Age',
      'type' => 'number',
    ),

  ),

);
