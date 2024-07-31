<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CDatabase;
use Framework\CUser;

$APPLICATION = new CMain();
$DB = new CDatabase();
$USER = new CUser();
