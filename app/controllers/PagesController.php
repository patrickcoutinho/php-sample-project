<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        require view('index.view.php');
    }

    public function about()
    {
        $title = 'iStyle';

        require view('about.view.php', compact('title'));
    }
}
