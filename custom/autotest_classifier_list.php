<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList("https://customdemohub.".$mainPath."classify/classifier/list", $customJwt);
$classifList->getList();
