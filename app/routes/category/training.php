<?php

$app->get('/category/training', function() use ($app) {
  echo 'Training';
})->name('category.training');
