<?php

error_reporting( E_ALL );


require('../config.php');
require('../MainLogicData.php');


$uniq_title_Data = "autotest_Data_" . uniqid();


$uploadData = new MainLogicData($uniq_title_Data, $trainingPath."store/upload/data/upload", $trainingJwt, $data);

$uploadData->actionData();

$appendData = new MainLogicData($uniq_title_Data, $trainingPath."store/upload/data/upload_afterloading", $trainingJwt, $data);


for ($appendCount = 0; $appendCount < 10; $appendCount++) {
    $appendData->actionData();
}