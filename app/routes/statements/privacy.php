<?php

$app->get('/statements/privacy', function() use ($app) {
  $app->render('statements/privacy.php');
})->name('statements.privacy');
