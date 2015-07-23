<?php

$app->get('/category/graduate', function() use ($app) {
  echo 'Graduate';
})->name('category.graduate');
