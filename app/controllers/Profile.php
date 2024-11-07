<?php

namespace App\Controllers;

use App\Model\Auth;
use App\Model\User;
use Core\Controller;

class Profile extends Controller
{
    public function index()
    {
        $user = $this->load_model('User');

        $data = $user->first('id', Auth::getId());

        $this->view('profile', [
            'rows' => $data
        ]);
    } 

    public function edit($id = null)
    {
        $user = new User();
        $id = Auth::getId();


        if(count($_POST)) {

            unset($_POST['password2']);

            if($user->validate($_POST)) {
                
                $user->update($id, $_POST);
                $this->redirect('profile');

            }
            else {

               die;

            }
        }

        $data = $user->first('id', $id);


        $this->view('editProfile', [
            'rows' => $data
        ]);
    }

}