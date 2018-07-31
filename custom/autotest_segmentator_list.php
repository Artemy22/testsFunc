<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList("https://customdemohub.".$mainPath."store/segmentator/", $customJwt);
$segmList->getList();
