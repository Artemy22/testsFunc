<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList("https://master.".$mainPath."store/segmentator/", $masterJwt);
$segmList->getList();
