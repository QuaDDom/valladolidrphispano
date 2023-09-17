<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    $_SESSION["user_id"] = null;
}
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL, "es.utf8");
define("APP_PATH", __DIR__);
define("APP_HOST", "http://localhost");
require("./controller/controller.php");
spl_autoload_register(function ($class) {
    if (file_exists('./app/' . $class . '.php')) {
        require_once('./app/' . $class . '.php');
    } else if (file_exists('./controller/' . $class . '.php')) {
        require_once('./controller/' . $class . '.php');
    }
});

require_once("Routes.php");

?>