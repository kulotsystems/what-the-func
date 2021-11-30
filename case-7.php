<?php

/**
 * CASE #7
 * Calling a function INSIDE A SUB-BLOCK "after" its definition globally
 * This works - just the same with Case #2
 */

if(true) {

    if(true) {
        hello();
    }

}

function hello()
{
    echo '<h1>HELLO FROM CASE #7</h1>';
}