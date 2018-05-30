<?php
return [
  'backend' => [
    'frontName' => 'admin_lcza8z'
  ],
  'crypt' => [
    'key' => 'b252913f13f8e7dc9c50a92ae0c76c9e'
  ],
  'db' => [
    'table_prefix' => '',
    'connection' => [
      'default' => [
        'host' => 'localhost',
        'dbname' => 'm2-vatogo',
        'username' => 'root',
        'password' => '4291',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1'
      ]
    ]
  ],
  'resource' => [
    'default_setup' => [
      'connection' => 'default'
    ]
  ],
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'cache_types' => [
    'config' => 0,
    'layout' => 0,
    'block_html' => 0,
    'collections' => 0,
    'reflection' => 0,
    'db_ddl' => 0,
    'eav' => 0,
    'customer_notification' => 0,
    'config_integration' => 0,
    'config_integration_api' => 0,
    'full_page' => 0,
    'translate' => 0,
    'config_webservice' => 0,
    'vatogo_productcreation' => 0
  ],
  'install' => [
    'date' => 'Mon, 26 Mar 2018 14:41:19 +0000'
  ]
];
