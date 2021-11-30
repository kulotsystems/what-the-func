<?php

/**
 * CASE #3
 * Calling a function INSIDE A BLOCK "after" its definition in that block
 * This should work :)
 */

if(true) {

    function hello()
    {
        echo '<h1>HELLO FROM CASE #3</h1>';
    }

    hello();

}



