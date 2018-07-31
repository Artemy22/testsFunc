<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList("https://gcp-st-activate.".$mainPath."store/segmentator/", $gspStJwt);
$segmList->getList();
