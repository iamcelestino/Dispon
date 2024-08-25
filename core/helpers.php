<?php

function getVar($key, $default = '') 
{

    if (isset($_POST[$key])) {

        return $_POST[$key];
    } 
    return $default;
}

function getSelect($key, $value) 
{

    if (isset($_POST[$key])) {

        if ($_POST[$key] === $value ) {

            return "selected";
        }
    }
    return "";
}

function escape($var) 
{
    return htmlspecialchars($var);
}

function get_Date($date) 
{
    return date("jS F,Y", strtotime($date));
}

function dd($data) {
    echo "<pre";
        print_r($data);
    echo "</pre>";
}

