<?php

use Carbon\Carbon;

$app->get('/login', $guest(), function() use ($app) {
  $app->render('auth/login.php');
})->name('login');

$app->post('/login', $guest(), function() use ($app) {

  $request = $app->request;

  // Getting info
  $identifier = $request->post('identifier');
  $password = $request->post('password');
  $remember = $request->post('remember');

  $v = $app->validation;

  $v->validate([
      'Identifier' => [$identifier, 'required'],
      'Password' => [$identifier, 'required']
  ]);

  if ($v->passes()) {
    $user = $app->user
            ->where('active', true)
            ->where(function($query) use ($identifier) {
              return $query->where('email', $identifier)
                    ->orWhere('username', $identifier);
            })
            ->first();
    if ($user && $app->hash->passwordCheck($password, $user->password)) {
      $_SESSION[$app->config->get('auth.session')] = $user->id;

      if ($remember === 'on') {
        $rememberIdentifier = $app->randomlib->generateString(128);
        $rememberToken = $app->randomlib->generateString(128);

        $user->updateRememberCredentials(
          $rememberIdentifier,
          $app->hash->hash($rememberToken)
        );

        $app->setCookie(
          $app->config->get('auth.remember'),
          "{$rememberIdentifier}___{$rememberToken}",
          Carbon::parse('+1 week')->timestamp
        );
      }

     if ($user->category === 'Student') {
        $url = $app->urlFor('category.student');
      } elseif ($user->category === 'Graduate') {
        $url = $app->urlFor('category.graduate');
      } elseif ($user->category === 'Training') {
        $url = $app->urlFor('category.training');
      } elseif ($user->category === 'Employer') {
        $url = $app->urlFor('category.employer');
      };

      $app->flash('global', 'You are now signed in!');
      return $app->response->redirect($url);

    } else {
      $app->flash('global', 'Could not log you in!');
      return $app->response->redirect($app->urlFor('login'));
    }


  }

  $app->render('auth/login.php', [
    'errors' => $v->errors(),
    'request' => $request
  ]);

})->name('login.post');
