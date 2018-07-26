<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($trainingPath."store/segmentator/", $trainingJwt);
$segmList->getList();
