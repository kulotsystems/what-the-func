<?php

/**
 * CASE #6
 * Calling a function INSIDE A SUB-BLOCK "after" its definition outside of that block
 * This works! Ugh!
 */

if(true) {

    function hello()
    {
        echo '<h1>HELLO FROM CASE #6</h1>';
    }

    if(true) {
        hello();
    }

}