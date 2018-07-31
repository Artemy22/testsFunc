;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList("https://master.".$mainPath."store/upload/list", $masterJwt);
$uploadList->getList();
