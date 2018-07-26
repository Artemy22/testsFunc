<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList($customPath."store/survey/list", $customJwt);
$surveList->getList();
