<?php

namespace App\Model;

class Auth
{
    public static function authenticate($row) 
    {
        $_SESSION['USER'] = $row;
    }

    public static function logout() 
    {
        if(isset($_SESSION['USER']))
        {
            unset($_SESSION['USER']);
        }
    }

    public static function isLoggedIn() 
    {
        if(isset($_SESSION['USER']))
        {
            return true;
        }
        return false;
    }

    public static function access($role = 'client') 
    {
        if(!isset($_SESSION['USER']))
        {
            return true;
        }

        $loggedInRole = $_SESSION['USER']->role;
        
        $ROLE['admin'] = ['admin', 'supplier', 'client'];
        $ROLE['supplier'] = ['supplier', 'client'];
        $ROLE['client'] = ['client'];

        if(!isset($ROLE[$loggedInRole]))
        {
            return false;
        }

        if(in_array($role, $ROLE($loggedInRole)))
        {
            return true;
        }
        return false;
    }

    public static function getRole() {
        return $_SESSION['role'] ?? null;
    }

    public static function user()
    {
        if(isset($_SESSION['USER']))
        {
            return $_SESSION['USER']->username;
        }
        return false;
    }

    public static function __callStatic($method, $params)
    {   
        $prop = strtolower(str_replace("get","", $method));
        if(isset($_SESSION['USER']->$prop))
        {
            return $_SESSION['USER']->$prop;
        }
        return 'Unknown';
    }
}