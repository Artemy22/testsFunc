<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList("https://training.".$mainPath."store/survey/list", $trainingJwt);
$surveList->getList();
