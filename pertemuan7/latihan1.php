<?php

// variable scoop atau lingkup variale
$x = 90;

function tampilX()
{
    global $x;
    echo $x;
}
tampilX();
