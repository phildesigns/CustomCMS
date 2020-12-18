<?php
ini_set("display_errors", true);
date_default_timezone_set("Europe/Paris");  // http://www.php.net/manual/en/timezones.php
define("DB_DSN", "mysql:host=localhost;dbname=customcms");
define("DB_USERNAME", "customcms_user");
define("DB_PASSWORD", "AnyCage39");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "AnyCage39");
require(CLASS_PATH . "/article.php");

function handleException($exception)
{
    echo "Sorry, a problem occurred. Please try later.";
    error_log($exception->getMessage());
}

set_exception_handler('handleException');
?>