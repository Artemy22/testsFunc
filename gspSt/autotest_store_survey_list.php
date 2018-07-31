<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList("https://gcp-st-activate.".$mainPath."store/survey/list", $gspStJwt);
$surveList->getList();
