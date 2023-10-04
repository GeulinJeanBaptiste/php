<?php

function dbug($value)
{
    echo '<pre style="background-color:black; color:white;overflow: auto;padding: 10px;">';
    print_r($value);
    // var_dump($tableau);
    echo '</pre>';
}


function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}
