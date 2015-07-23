<?php

$app->get('/category/student', function() use ($app) {
  $edus = $app->edu->where('country', $app->auth->country)->get();

  $app->render('category/student.php', [
      'edus' => $edus
  ]);

})->name('category.student');
