<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList("https://gcp-st-activate.".$mainPath."classify/classifier/list", $gspStJwt);
$classifList->getList();
