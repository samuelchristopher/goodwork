<?php

$app->get('/category/graduate', $graduate(), function() use ($app) {
  echo 'Graduate';
})->name('category.graduate');
