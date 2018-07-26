;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList($vchubPath."store/upload/list", $vchubJwt);
$uploadList->getList();
