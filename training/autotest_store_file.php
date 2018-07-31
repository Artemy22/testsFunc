<?php

require('../config.php');
require('../MainLogicFile.php');

$uniq_title_file = "autotest_file_" . uniqid();

$uploadFile = new MainLogicFile($uniq_title_file, "https://training.".$mainPath."store/upload/file/upload", $trainingJwt, $file);

$uploadFile->actionFile();

$appendFile = new MainLogicFile($uniq_title_file, "https://training.".$mainPath."store/upload/file/upload_afterloading", $trainingJwt, $file);

for ($appendCount = 0; $appendCount < 10; $appendCount++) {
    $appendFile->actionFile();
}