<?php

$app->get('/admin', $admin(), function() use ($app) {
  $app->render('admin/admin.php');
})->name('admin');
