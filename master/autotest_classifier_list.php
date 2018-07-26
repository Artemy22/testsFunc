<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($masterPath."classify/classifier/list", $masterJwt);
$classifList->getList();
