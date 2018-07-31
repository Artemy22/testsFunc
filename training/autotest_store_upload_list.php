;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList("https://training.".$mainPath."store/upload/list", $trainingJwt);
$uploadList->getList();
