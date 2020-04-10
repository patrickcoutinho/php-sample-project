<?php

class UsersController
{
    public function index()
    {
        require  'model/Task.php';

        $users = App::get('database')->selectAll('users');

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
