<?php

include_once('/home/artem/PhpstormProjects/autotests/DashbCopy.php');
include_once('/home/artem/PhpstormProjects/autotests/config.php');
include_once('/home/artem/PhpstormProjects/autotests/DashbAdd.php');
require ('/home/artem/PhpstormProjects/autotests/vendor/autoload.php');

$uniq_title_Data = "autotest_Dash_title_" .uniqid();

$localDashCopy = "http://local.sandsiv.com/api/visual/dashboards/". $newDashbAdd->dashbAdd() ."/copy";

$newDashbadd = new DashbAdd($uniq_title_Data, $localDashb, $localCookie);
$newDashbadd->dashbAdd();

$newDashbCopy = new DashbCopy($localDashCopy, $localCookie);
$newDashbCopy->dashbCopy($newDashbAdd->dashbAdd());
