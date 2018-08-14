<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList('http://local.'.$mainPath."classify/classifier/list", $localCookie);
$classifList->getList();
