<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($gspStPath."classify/classifier/list", $gspStJwt);
$classifList->getList();
