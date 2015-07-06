<?php

$app->get('/register', function() use ($app) {
  $app->render('auth/register.php');
})->name('register');

$app->post('/register', function() use ($app) {
  $request = $app->request;

  // Getting information
  $email = $request->post('email');
  $username = $request->post('username');
  $password = $request->post('password');
  $passwordConfirm = $request->post('password_confirm');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email|uniqueEmail'],
    'Username' => [$username, 'required|alnumDash|max(20)|uniqueUsername'],
    'Password' => [$password, 'required|min(6)'],
    'Confirm password' => [$passwordConfirm, 'required|matches(Password)']
  ]);

  if ($v->passes()) {
    // Creating a new record
    $user = $app->user->create([
        'email' => $email,
        'username' => $username,
        'password' => $app->hash->password($password)
    ]);

    // Sending Email for authentication
    $app->mail->send('email/auth/registered.php', [ 'user' => $user ], function($message) use ($user){
      $message->to($user->email);
      $message->subject('Thanks for registering.');
    });

    // Flashing a message
    $app->flash('global', 'You have been registered.');
    $app->response->redirect($app->urlFor('home'));
  }

  $app->render('auth/register.php', [
      'errors' => $v->errors(),
      'request' => $request,
  ]);

})->name('register.post');
