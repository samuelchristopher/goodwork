<?php

$app->get('/educational-institution/:institutionName', function($institutionName) use ($app) {
  $edu = $app->edu->where('institution_name', $institutionName)->first();

  if (!$edu) {
    $app->notFound();
  }

  $app->render('category/school_profile.php', [
    'edu' => $edu
  ]);
})->name('school.profile');
