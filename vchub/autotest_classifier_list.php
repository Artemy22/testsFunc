<?php

require ('../config.php');
require('../MainLogicList.php');

$classifList = new MainLogicList("https://vchub.".$mainPath."classify/classifier/list", $vchubJwt);
$classifList->getList();
