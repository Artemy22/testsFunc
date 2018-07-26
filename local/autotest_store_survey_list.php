<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($localPath."store/survey/list", $localJwt);
$surveList->getList();
