<?php

require('../config.php');
require('../MainLogicFile.php');

$uniq_title_file = "autotest_file_" . uniqid();

$uploadFile = new MainLogicFile($uniq_title_file, $masterPath."store/upload/file/upload", $masterJwt, $file);

$uploadFile->actionFile();

$appendFile = new MainLogicFile($uniq_title_file, $masterPath."store/upload/file/upload_afterloading", $masterJwt, $file);

for ($appendCount = 0; $appendCount < 1; $appendCount++) {
    $appendFile->actionFile();
}