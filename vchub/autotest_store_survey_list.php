<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($vchubPath."store/survey/list", $vchubJwt);
$surveList->getList();
