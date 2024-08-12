<?php

function getVar($key) {

    if (isset($_POST[$key])) {

        return $_POST[$key];
    } 
    return "";
}

function getSelect($key, $value) {

    if (isset($_POST[$key])) {

        if ($_POST[$key] === $value ) {

            return "selected";
        }
    }
    return "";
}

function escape($var) {
    
    return htmlspecialchars($var);

}

