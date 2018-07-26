<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList($vchubPath."store/segmentator/", $vchubJwt);
$segmList->getList();
