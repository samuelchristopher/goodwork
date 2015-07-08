<?php

return [
  'app'=> [
      'url' => 'http://dev-goodwork.hol.es',
      'hash' => [
          'algo' => PASSWORD_BCRYPT,
          'cost' => 10
      ]
  ],
  'db' => [
      'driver' => 'mysql',
      'host' => 'mysql.hostinger.my',
      'name' => 'u544037136_site',
      'username' => 'u544037136_root',
      'password' => 'password1234',
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
