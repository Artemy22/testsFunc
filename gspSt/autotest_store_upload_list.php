;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList("https://gcp-st-activate.".$mainPath."store/upload/list", $gspStJwt);
$uploadList->getList();
