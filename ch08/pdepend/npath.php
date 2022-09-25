<?php

class Test2
{

    function foo($a, $b, $c)
    {
        if ($a > 10) {
            echo 1;
        } else {
            echo 2;
        }
        if ($a > $b) {
            echo 3;
        } else {
            echo 4;
        }
    }
}
