<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList("https://training.".$mainPath."classify/classifier/list", $trainingJwt);
$classifList->getList();
