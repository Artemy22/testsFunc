<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($masterPath."store/survey/list", $masterJwt);
$surveList->getList();
