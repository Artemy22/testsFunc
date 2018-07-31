<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList("https://master.".$mainPath."classify/classifier/list", $masterJwt);
$classifList->getList();
