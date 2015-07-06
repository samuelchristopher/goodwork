<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;

use GoodWork\User\User;
use GoodWork\Mail\Mailer;
use GoodWork\Helpers\Hash;
use GoodWork\Validation\Validator;


use GoodWork\Middleware\BeforeMiddleware;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
  'mode' => file_get_contents(INC_ROOT . '/mode.php'),
  'view' => new Twig(),
  'templates.path' => INC_ROOT . '/app/views'
]);

$app->add(new BeforeMiddleware);

$app->configureMode($app->config('mode'), function() use ($app) {
  $mode = preg_replace('/\s+/', '', $app->mode);
  $app->config = Config::load(INC_ROOT . "/app/config/{$mode}.php");
});

require 'database.php';
require 'routes.php';

$app->auth = false;

$app->container->set('user', function() {
  return new User;
});

$app->container->singleton('hash', function() use ($app) {
  return new Hash($app->config);
});

$app->container->singleton('validation', function() use ($app) {
  return new Validator($app->user);
});

$app->container->singleton('mail', function() use ($app) {
  $mailer = new PHPMailer;

  $mailer->Host = $app->config->get('mail.host');
  $mailer->SMTPAuth = $app->config->get('mail.smtp_auth');
  $mailer->SMTPSecure = $app->config->get('mail.smtp_secure');
  $mailer->Port = $app->config->get('mail.port');
  $mailer->Username = $app->config->get('mail.username');
  $mailer->Password = $app->config->get('mail.password');

  $mailer->isHTML($app->config->get('mail.html'));

  // Return mailer object
  return new Mailer($app->view, $mailer);
});

$view = $app->view();

$view->parserOptions = [
  'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
    new TwigExtension
];
