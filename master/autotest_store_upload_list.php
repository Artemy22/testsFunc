;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($masterPath."store/upload/list", $masterJwt);
$uploadList->getList();
