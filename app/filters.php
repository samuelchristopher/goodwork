<?php

$authenticationCheck = function($required) use ($app) {
  return function() use ($required, $app){
      if ((!$app->auth && $required || $app->auth && !$required)) {
        $app->redirect($app->urlFor('home'));
      }
  };
};

$authenticated = function() use ($authenticationCheck) {
  return $authenticationCheck(true);
};

$guest = function() use ($authenticationCheck) {
  return $authenticationCheck(false);
};

$admin = function() use ($app) {
  return function() use ($app) {
    if (!$app->auth || !$app->auth->isAdmin()) {
      $app->redirect($app->urlFor('home'));
    }
  };
};

$student = function() use ($app) {
  return function() use ($app) {
    if (!$app->auth || !$app->auth->isStudent()) {
      return $app->redirect($app->urlFor('home'));
    }
  };
};

$graduate = function() use ($app) {
  return function() use ($app) {
    if (!$app->auth || !$app->auth->isGraduate()) {
      return $app->redirect($app->urlFor('home'));
    }
  };
};

$employer = function() use ($app) {
  return function() use ($app) {
    if (!$app->auth || !$app->auth->isEmployer()) {
      return $app->redirect($app->urlFor('home'));
    }
  };
};

$training = function() use ($app) {
  return function() use ($app) {
    if (!$app->auth || !$app->auth->isTraining()) {
      return $app->redirect($app->urlFor('home'));
    }
  };
};
