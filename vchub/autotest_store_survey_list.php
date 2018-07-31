<?php

require ('../config.php');
require('../MainLogicList.php');

$surveList = new MainLogicList("https://vchub.".$mainPath."store/survey/list", $vchubJwt);
$surveList->getList();
