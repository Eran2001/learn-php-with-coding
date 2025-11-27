<?php

$heading = "Home";

function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

require "views/index.view.php";