<?php

$app->get('/category/employer', $employer(), function() use ($app) {
  $app->render('category/employer.php');
})->name('category.employer');
