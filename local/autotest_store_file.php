<?php

require('../config.php');
require('../MainLogicFile.php');

$uniq_title_file = "autotest_file_" . uniqid();

$uploadFile = new MainLogicFile($uniq_title_file, $localPath."store/upload/file/upload", $localJwt, $file);

$uploadFile->actionFile();

$appendFile = new MainLogicFile($uniq_title_file, $localPath."store/upload/file/upload_afterloading", $localJwt, $file);

for ($appendCount = 0; $appendCount < 10; $appendCount++) {
    $appendFile->actionFile();
}