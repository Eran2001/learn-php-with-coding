<?php

$heading = "About";

function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

include "views/about.views.php";