<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main-local.php';

require_once($yii);
Yii::createWebApplication($config)->run();