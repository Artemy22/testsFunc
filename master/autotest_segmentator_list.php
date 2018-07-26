<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($masterPath."store/segmentator/", $masterJwt);
$segmList->getList();
