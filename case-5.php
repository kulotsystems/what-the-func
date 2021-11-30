<?php

/**
 * CASE #5
 * Calling a function INSIDE A SUB-BLOCK "before" its definition outside of that block
 * This still does not work - what the func !?
 */

if(true) {

    if(true) {
        hello();
    }

    function hello()
    {
        echo '<h1>HELLO FROM CASE #5</h1>';
    }

}