;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($customPath."store/upload/list", $customJwt);
$uploadList->getList();
