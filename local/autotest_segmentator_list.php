<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList('local.'.$mainPath."store/segmentator/", $localCookie);
$segmList->getList();
