<?php

declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:black; color:white;overflow: auto;font-family:monospace;padding: 1rem;">';
    print_r($value);
    // var_dump($tableau);
    echo '</pre>';
}


function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}
