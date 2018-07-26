;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($trainingPath."store/upload/list", $trainingJwt);
$uploadList->getList();
