<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList("https://customdemohub.".$mainPath."store/survey/list", $customJwt);
$surveList->getList();
