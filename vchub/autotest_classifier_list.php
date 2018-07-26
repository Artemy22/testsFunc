<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList($vchubPath."classify/classifier/list", $vchubJwt);
$classifList->getList();
