<?php

namespace App\Model;
use Core\Model;

class User extends Model 
{
    protected $allowedColumns = [
        'username',
        'email',
        'password',
        'gender',
        'role',
    ];

    public $beforeInsert = [
        'hash_password'
    ];

    public function validate($DATA) 
    {
       $this->errors = [];

       if (empty($DATA['username'])) {
        $this->errors['username'] = "Please enter a valid name";
       }

       if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
        $this->errors['email'] = "Enter a valid email please";
       }

       if (empty($DATA['password']) || $DATA['password'] != $DATA['password']) {
        $this->errors['password'] = "The Password does not match";
       }

       if ($DATA['password'] <= 4) {
        $this->errors['password'] = "Password must be at least 8 carecters long";
       }

       $gender = ['Female', 'Male'];
       if (empty($DATA['gender']) || !in_array($DATA['gender'], $gender) ) {
        $this->errors['gender'] = "Please Select a gender";
       }

       $role = ['client', 'supplier', 'admin', 'super-admin'];
       if (empty($DATA['role']) || !in_array($DATA['role'], $role) ) {
        $this->errors['role'] = "Please Select a role";
       }


       if(count($this->errors) == 0) {
        return true;
       }
       
       return false;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}