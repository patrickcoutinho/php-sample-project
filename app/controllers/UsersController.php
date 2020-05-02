<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    protected $db;

    public function __construct()
    {
        $this->db = App::get('database');
    }

    public function index()
    {
        $users = $this->db->selectAll('users', 'Users');

        require view('users.view.php', compact('users'));
    }

    public function add()
    {
        $this->db->insert('users', [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
        ]);

        return redirect('users');
    }
}
