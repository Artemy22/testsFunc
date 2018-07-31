;<?php

require ('../config.php');
require('../MainLogicList.php');

$uploadList = new MainLogicList("https://vchub.".$mainPath."store/upload/list", $vchubJwt);
$uploadList->getList();
