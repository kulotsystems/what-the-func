<?php

/**
 * CASE #2
 * Calling a function "before" its definition in global scope.
 * This surprisingly works :)
 */

hello();

function hello()
{
    echo '<h1>HELLO FROM CASE #2</h1>';
}
