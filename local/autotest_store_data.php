<?php

error_reporting( E_ALL );


require('/home/artem/PhpstormProjects/autotests/config.php');
require('/home/artem/PhpstormProjects/autotests/MainLogicData.php');


$uniq_title_Data = "autotest_Data_" . uniqid();


$uploadData = new MainLogicData($uniq_title_Data, 'local.'.$mainPath."store/upload/data/upload", $localJwt, $data);

$uploadData->actionData();

$appendData = new MainLogicData($uniq_title_Data, 'local.'.$mainPath."store/upload/data/upload_afterloading", $localJwt, $data);


for ($appendCount = 0; $appendCount < 100; $appendCount++) {
    $appendData->actionData();
}