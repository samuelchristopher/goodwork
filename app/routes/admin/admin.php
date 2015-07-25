<?php

$app->get('/admin', $admin(), function() use ($app) {
  $app->render('admin/admin.php');
})->name('admin');

$app->post('/admin', $admin(), function() use ($app) {
  $request = $app->request;

  $email = $request->post('email');
  $website = $request->post('website');
  $phoneNumber = $request->post('phone_number');
  $institutionName = $request->post('institution_name');
  $address = $request->post('address');
  $country = $request->post('country');
  $principalName = $request->post('principal_name');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email|uniqueEduEmail'],
    'Website' => [$website, 'required'],
    'Phone number' => [$phoneNumber, 'required'],
    'Institution name' => [$institutionName, 'required|alpha'],
    'Address' => [$address, 'required'],
    'Country' => [$country, 'required'],
    'Principal name' => [$email, 'required'],
  ]);

  if ($v->passes()) {
    $edu = $app->edu->create([
      'email' => $email,
      'website' => $website,
      'phone_number' => $phoneNumber,
      'institution_name' => $institutionName,
      'address' => $address,
      'country' => $country,
      'principal_name' => $principalName,
      'active' => true
    ]);
    // $app->mail->send('email/student/edu.php', [ 'edu' => $edu], function($message) use ($edu) {
    //   $message->to($edu->email);
    //   $message->subject('Your education institution has been registered with GoodWork');
    // });

    $app->flash('global', 'Educational institution has been registered');

    if ($app->auth->isStudent()) {
      $url = $app->urlFor('category.student');
    } elseif ($app->auth->isEmployer()) {
      $url = $app->urlFor('category.employer');
    } elseif ($app->auth->isGraduate()) {
      $url = $app->urlFor('category.graduate');
    } elseif ($app->auth->isTraining()) {
      $url = $app->urlFor('category.training');
    } else {
      $url = $app->urlFor('home');
    }
    $app->response->redirect($url);

  }

  $app->render('admin/admin.php', [
      'errors' => $v->errors(),
      'request' => $request,
  ]);



})->name('admin.post');
