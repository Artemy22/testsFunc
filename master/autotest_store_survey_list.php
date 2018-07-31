<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList("https://master.".$mainPath."store/survey/list", $masterJwt);
$surveList->getList();
