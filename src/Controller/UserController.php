<?php

namespace App\Controller;

use App\Model\User;

class UserController implements Controller
{
    public function render(): void
    {
        $users = User::findAll();
        $page = 'user.phtml';
        include __DIR__ . '/../View/main.phtml';
    }

    public function create(): void
    {
        if ($_POST) {
            $user = new User(
                name: $_POST['user_name'],
                email: $_POST['user_email'],
                password: $_POST['user_password']
            );
            $user->save();
            echo "Usuário salvo com sucesso!!";
        }

        $this->render();
    }
    
}
