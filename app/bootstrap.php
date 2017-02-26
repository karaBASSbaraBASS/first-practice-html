<?php

// подключаем файлы ядра
 require_once 'core/model.php';
 require_once 'core/view.php';
 require_once 'core/controller.php';
 require_once 'helpers/session.php';
 require_once 'helpers/url.php';
 require_once 'core/router.php';

$app = new Router();
$app->setTemplate('default');
$app->setController('index');
$app->init();
