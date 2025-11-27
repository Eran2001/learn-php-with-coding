<?php

$heading = "Contact";

function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

include "views/contact.views.php";