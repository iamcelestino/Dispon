<?php

namespace App\Model;
use Core\Model;

class User extends Model 
{
    public function validate($DATA) 
    {
       $this->errors = [];

       if (empty($DATA['username'])) {
        $this->errors['username'] = "your name is correct";
       }

       if (empty($DATA['password']) || $DATA['password'] != $DATA['password']) {
        $this->errors['password'] = "The Password does not match";
       }

       $gender = ['female', 'male'];
       if (empty($DATA['gender']) || in_array($DATA['gender'], $gender) ) {
        $this->errors['gender'] = "The gender does not match";
       }

       $role = ['Client', 'Admin', 'Supllier', 'Super-Admin'];
       if (empty($DATA['role']) || in_array($DATA['role'], $role) ) {
        $this->errors['role'] = "The role does not match";
       }

       if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
        $this->errors['email'] = "";
       }

       if(count($this->errors) == 0) {
        return true;
       }
       return false;
    }
}