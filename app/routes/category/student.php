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
  $subject = $request->post('message');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email'],
    'Message' => [$subject, 'required']
  ]);

  if ($v->passes()) {
    $app->mail->send('email/category/student/booking.php', [ 'email' => $email, 'subject' => $subject], function ($message) {
      $message->to('thegoodworkteam@gmail.com');
      $message->subject('Consultant booking');
    });

    $app->flash('global', 'Your message has been sent and will be addressed within 7 days');
    return $app->response->redirect($app->urlFor('category.student'));
  }

  $app->flash('global', 'Email and message fields need to be filled appropriately');
  return $app->response->redirect($app->urlFor('category.student'));



})->name('category.student.post');
