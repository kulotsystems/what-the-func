<?php

/**
 * CASE #1
 * Calling a function "after" its definition in global scope.
 * This obviously works :)
 */

function hello()
{
    echo '<h1>HELLO FROM CASE #1</h1>';
}

hello();
