<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($localPath."classify/classifier/list", $localJwt);
$classifList->getList();
