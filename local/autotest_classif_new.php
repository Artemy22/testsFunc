<?php

error_reporting(E_ALL);

require('/home/artem/PhpstormProjects/autotests/config.php');
require('/home/artem/PhpstormProjects/autotests/ClassifAddNewLocal.php');

$uniq_title_Data = "autotest_classif_" . uniqid();

$uploadData = new ClassifAddNewLocal ($uniq_title_Data, "http://local.".$newClassifier, $localJwt);

$uploadData->actionData();
echo "\n";