<?php

use App\Model\Image;

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

function getImage($image, $gender = 'male') 
{
   
    if(!file_exists($image)) {

        $image = ASSETS_URL.'images/undraw_pic_profile_re_7g2h.svg';

        if($gender == 'female'){

            $image = ASSETS_URL.'images/undraw_profile_pic_re_iwgo';
        }
    }
    else {
        $imageModel = new Image();
        $image = BASE_URL . $imageModel->profileThumb($image);
    }

    return $image;
}

function getProductImage($image) 
{
   
    if(!file_exists($image)) {

        $image = ASSETS_URL.'images/undraw_posting_photo_re_plk8.svg';
    }
    else {
        $imageModel = new Image();
        $image = BASE_URL . $imageModel->profileThumb($image);
    }

    return $image;
}

function  escape($var) 
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

