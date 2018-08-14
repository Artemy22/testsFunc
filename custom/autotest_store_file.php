<?php

require('../config.php');
require('../MainLogicFile.php');

$uniq_title_file = "autotest_file_" . uniqid();

$uploadFile = new MainLogicFile($uniq_title_file, "https://customdemohub.".$mainPath."store/upload/file/upload", $customJwt, $file);

$uploadFile->actionFile();

$appendFile = new MainLogicFile($uniq_title_file, "https://customdemohub.".$mainPath."store/upload/file/upload_afterloading", $customJwt, $file);

for ($appendCount = 0; $appendCount < 3; $appendCount++) {
    $appendFile->actionFile();
}