<?php

require ('../config.php');
require('../MainLogicList.php');

$segmList = new MainLogicList("https://vchub.".$mainPath."store/segmentator/", $vchubJwt);
$segmList->getList();
