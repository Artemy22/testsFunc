<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($localPath."store/segmentator/", $localJwt);
$segmList->getList();
