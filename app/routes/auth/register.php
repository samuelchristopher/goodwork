<?php

use GoodWork\User\UserPermission;

$app->get('/register', $guest(), function() use ($app) {
  $app->render('auth/register.php');
})->name('register');

$app->post('/register', $guest(), function() use ($app) {
  $request = $app->request;

  // Getting information
  $email = $request->post('email');
  $category = $request->post('category');
  $futureAmbition = $request->post('future_ambition');
  $country = $request->post('country');
  // $qualifications = $request->post('qualifications');
  $username = $request->post('username');
  $password = $request->post('password');
  $passwordConfirm = $request->post('password_confirm');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email|uniqueEmail'],
    'Username' => [$username, 'required|alnumDash|max(20)|uniqueUsername'],
    'Password' => [$password, 'required|min(6)'],
    'Confirm password' => [$passwordConfirm, 'required|matches(Password)'],
    'Category' => [$category, 'required'],
    'Future ambition' => [$futureAmbition, 'required'],
    'Country' => [$country, 'required'],
  ]);

  if ($v->passes()) {
    // Generation stream_encoding
    $identifier = $app->randomlib->generateString(128);
    // Creating a new record
    $user = $app->user->create([
        'email' => $email,
        'username' => $username,
        'password' => $app->hash->password($password),
        'active' => false,
        'active_hash' => $app->hash->hash($identifier),
        'category' => $category,
        'future_ambition' => $futureAmbition,
        'country' => $country,
    ]);

    $user->permissions()->create(UserPermission::$defaults);

    // Sending Email for authentication
    $app->mail->send('email/auth/registered.php', [ 'user' => $user, 'identifier' => $identifier], function($message) use ($user){
      $message->to($user->email);
      $message->subject('Thanks for registering');
    });

    // Flashing a message
    $app->flash('global', 'You have been registered. Check your email for activation instructions.');
    $app->response->redirect($app->urlFor('home'));
  }

  $app->render('auth/register.php', [
      'errors' => $v->errors(),
      'request' => $request,
  ]);
})->name('register.post');
