<?php

require_once('/home/artem/PhpstormProjects/autotests/config.php');
require_once('/home/artem/PhpstormProjects/autotests/DashbAdd.php');
require "/home/artem/PhpstormProjects/autotests/vendor/autoload.php";


$uniq_title_Data = "autotest_Dash_title_" .uniqid();


$newDashbAdd = new DashbAdd($uniq_title_Data, "http://local.".$newDashb, $localCookie);

$newDashbAdd->dashbAdd();
