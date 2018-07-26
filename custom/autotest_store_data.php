<?php

error_reporting( E_ALL );


require('../config.php');
require('../MainLogicData.php');


$uniq_title_Data = "autotest_Data_" . uniqid();


$uploadData = new MainLogicData($uniq_title_Data, $customPath."store/upload/data/upload", $customJwt, $data);

$uploadData->actionData();

$appendData = new MainLogicData($uniq_title_Data, $customPath."store/upload/data/upload_afterloading", $customJwt, $data);


for ($appendCount = 0; $appendCount < 10; $appendCount++) {
    $appendData->actionData();
}