<?php

$app->get('/category/student', function() use ($app) {
  $edus = $app->edu->where('country', $app->user->country)->get();

  $app->render('category/student.php', [
      'edus' => $edus
  ]);

  echo $edus;
})->name('category.student');
