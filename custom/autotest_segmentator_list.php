<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($customPath."store/segmentator/", $customJwt);
$segmList->getList();
