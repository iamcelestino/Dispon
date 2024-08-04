<?php

namespace App\Model;
use Core\Model;

class User extends Model 
{
    public function validate($DATA) 
    {
       $this->errors = [];

       if (empty($DATA['username'])) {
        $this->errors['username'] = "Please enter a valid name";
       }

       if (empty($DATA['password']) || $DATA['password'] != $DATA['password']) {
        $this->errors['password'] = "The Password does not match";
       }

       if ($DATA['password'] <= 8) {
        $this->errors['password'] = "Password must be at least 8 carecters long";
       }

       $gender = ['Female', 'Male'];
       if (empty($DATA['gender']) || !in_array($DATA['gender'], $gender) ) {
        $this->errors['gender'] = "Please Select a gender";
       }

       $role = ['Client', 'Supplier', 'Admin', 'Super-Admin'];
       if (empty($DATA['role']) || !in_array($DATA['role'], $role) ) {
        $this->errors['role'] = "Please Select a role";
       }

       if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
        $this->errors['email'] = "Enter a valid email please";
       }

       if(count($this->errors) == 0) {
        return true;
       }
       
       return false;
    }
}