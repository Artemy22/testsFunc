<?php

require('../config.php');
require('../DashbAdd.php');


$uniq_title_Data = "autotest_Dash_title_" .uniqid();


$newDashbAdd = new DashbAdd($uniq_title_Data, $localDashb, $localCookie);


$localDashCopy = 'https://master.sandsiv.com/api/visual/dashboards/'. $newDashbAdd->dashbAdd(). '/copy';

