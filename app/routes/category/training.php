<?php

$app->get('/category/training', $training(), function() use ($app) {
  echo 'Training';
})->name('category.training');
