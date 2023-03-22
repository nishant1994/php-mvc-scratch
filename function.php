<?php

function test_var($val){
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
    die();
}

function urlIs($val){
    return $_SERVER['REQUEST_URI'] === $val;
}

?>