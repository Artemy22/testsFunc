<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList("https://training.".$mainPath."store/segmentator/", $trainingJwt);
$segmList->getList();
