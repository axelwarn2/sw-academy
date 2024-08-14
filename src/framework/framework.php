<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CUser;
use Framework\Validators\UserValidator;
use App\framework\Base\CApi;

$APPLICATION = new CMain();
$USER = new CUser();
$VALIDATOR = new UserValidator();
$API = new CApi();
