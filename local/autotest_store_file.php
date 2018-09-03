<?php

require('/home/artem/PhpstormProjects/autotests/config.php');
require('/home/artem/PhpstormProjects/autotests/MainLogicFile.php');

$uniq_title_file = "autotest_file_" . uniqid();

$uploadFile = new MainLogicFile($uniq_title_file, "local.".$mainPath."store/upload/file/upload", $localJwt, $file);

$uploadFile->actionFile();

$appendFile = new MainLogicFile($uniq_title_file, "local.".$mainPath."store/upload/file/upload_afterloading", $localJwt, $file);

for ($appendCount = 0; $appendCount < 509; $appendCount++) {
    $appendFile->actionFile();
}