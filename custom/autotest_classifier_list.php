<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($customPath."classify/classifier/list", $customJwt);
$classifList->getList();
