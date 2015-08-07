<?php

$app->get('/statements/terms', function() use ($app) {
  $app->render('statements/terms.php');
})->name('statements.terms');
