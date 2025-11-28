<?php

require "uriFunction.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/") {
    require "controllers/index.php";
} elseif ($uri === "/about") {
    require "controllers/about.php";
} else {
    require "controllers/contact.php";
}