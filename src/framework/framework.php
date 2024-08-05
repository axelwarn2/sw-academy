<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../vendor/autoload.php";

use Framework\CMain;
use Framework\CUser;
use Framework\Validators\UserValidator;

$APPLICATION = new CMain();
$USER = new CUser();
$VALIDATOR = new UserValidator();

// $VALIDATOR->validateUser(["name" => "P", "email" => "sobaka@.ru", "password" => ""]);
// dd($VALIDATOR->getErrors());
