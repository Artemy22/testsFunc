<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($trainingPath."classify/classifier/list", $trainingJwt);
$classifList->getList();
