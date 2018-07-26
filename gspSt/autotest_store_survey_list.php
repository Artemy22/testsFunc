<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($gspStPath."store/survey/list", $gspStJwt);
$surveList->getList();
