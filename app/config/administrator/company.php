<?php

/**
 * Company model config
 */

return array(

  'title' => 'บริษัท',
  'single' => 'บริษัท',
  'model' => 'Company',

  'columns' => array(
    'id',
    'name',
    'phone',
  ),


  'filters' => array(
    'id',
    'name',
    'phone',
  ),

  'edit_fields' => array(

    'name' => array(
      'title' => 'Name',
      'type' => 'text',
    ),

    'phone' => array(
      'title' => 'Phone',
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
