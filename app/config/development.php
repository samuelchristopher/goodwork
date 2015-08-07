<?php

return [
  'app'=> [
      'url' => 'http://localhost',
      'hash' => [
          'algo' => PASSWORD_BCRYPT,
          'cost' => 10
      ]
  ],
  'db' => [
      'driver' => 'mysql',
      'host' => '127.0.0.1',
      'name' => 'site',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => ''
  ],
  'auth' => [
      'session' => 'user_id',
      'remember' => 'user_r'
  ],

  'mail' => [
      'smtp_auth' => true,
      'smtp_secure' => 'tls',
      'host' => 'smtp.gmail.com',
      'username' => 'thegoodworkteam@gmail.com',
      'password' => 'thegoodworkteam1234',
      'port' => 587,
      'html' => true
  ],
  'twig' => [
      'debug' => true
  ],
  'csrf' => [
    'key' => 'csrf_token'
  ]
];
