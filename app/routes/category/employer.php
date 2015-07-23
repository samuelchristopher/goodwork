<?php

$app->get('/category/employer', function() use ($app) {
  echo 'Employer';
})->name('category.employer');
