<?php

/**
 * CASE #4
 * Calling a function INSIDE A BLOCK "before" its definition in that block
 * This does not work. What the func !?
 */

if(true) {

    hello();

    function hello()
    {
        echo '<h1>HELLO FROM CASE #4</h1>';
    }

}