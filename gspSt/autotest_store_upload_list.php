;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($gspStPath."store/upload/list", $gspStJwt);
$uploadList->getList();
