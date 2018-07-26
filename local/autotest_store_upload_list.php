;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($localPath."store/upload/list", $localJwt);
$uploadList->getList();
