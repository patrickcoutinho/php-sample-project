<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users', 'Users');

        require view('users', compact('users'));
    }

    public function add()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
        ]);

        return redirect('users');
    }
}
