<?php 

define("BASE_DIR", __DIR__);
define("DS", DIRECTORY_SEPARATOR);

require_once BASE_DIR.DS."Cards".DS."Card.php";
require_once BASE_DIR.DS."Cards".DS."Club.php";
require_once BASE_DIR.DS."Cards".DS."Diamond.php";
require_once BASE_DIR.DS."Cards".DS."Heart.php";
require_once BASE_DIR.DS."Cards".DS."Spade.php";
require_once BASE_DIR.DS."Cards".DS."CardsController.php";

require_once BASE_DIR.DS."DataBase".DS."DbController.php";