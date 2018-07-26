<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($gspStPath."store/segmentator/", $gspStJwt);
$segmList->getList();
