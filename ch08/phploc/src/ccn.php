<?php

class Test
{
    function someExample($a, $b)
    {
        if ($a < $b) {
            echo "1";
        } else {
            if ($a == $b) {
                echo "2";
            } else {
                echo "3";
            }
        }
    }
}