<?php

error_reporting( E_ALL );

require('/home/artem/PhpstormProjects/autotests/config.php');
require('/home/artem/PhpstormProjects/autotests/MainLogicClassifAddNew.php');

$htmlGet = shell_exec (" curl -X GET \
'$masterClassNew' \
-H 'cookie: $masterCookie' ");

$dom = new DOMDocument();

@$dom->loadHTML($htmlGet);

$token = '';

foreach($dom->getElementsByTagName('input') as $link) {
    $token = $link->getAttribute('value');
}

$uniq_title_Data = "autotest_classif_" . uniqid();

$uploadData = new MainLogicClassifAddNew ($uniq_title_Data, $masterClassNew, $masterCookie, $token);

$uploadData->actionData();
echo "\n";
