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

                if(count($_FILES) > 0) {
                   
                    $allowed[] = "image/jpeg";
                    $allowed[] = "image/png";

                    if($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                        
                        $folder = "uploads/";

                        if(!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }

                        $destination = $folder . $_FILES['image']['name'];

                        move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                        $_POST['image'] = $destination;
                    }
                }
    
                $user->update($id, $_POST);
                $this->redirect('profile');

            }
        }

        $data = $user->first('id', $id);

        $this->view('editProfile', [
            'rows' => $data
        ]);
    }

}