<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($trainingPath."store/survey/list", $trainingJwt);
$surveList->getList();
