<?php

$app->get('/category/student', $authenticated(), function() use ($app) {
  $edus = $app->edu->where('country', $app->auth->country)->get();

  $app->render('category/student.php', [
      'edus' => $edus
  ]);

})->name('category.student');

$app->post('/category/student', $authenticated(), function() use ($app) {
  $request = $app->request;

  $email = $request->post('email');
  $subject = $request->post('subject');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email'],
    'Subject' => [$subject, 'required']
  ]);

  if ($v->passes()) {
    $app->mail->send('email/category/student/booking.php', [ 'email' => $email, 'subject' => $subject], function ($message) {
      $message->to('thegoodworkteam@gmail.com');
      $message->subject('Consultant booking');
    });
  }

})->name('category.student.post');
