;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList("https://customdemohub.".$mainPath."store/upload/list", $customJwt);
$uploadList->getList();
