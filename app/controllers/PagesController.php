<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        require view('index');
    }

    public function about()
    {
        $title = 'iStyle';

        require view('about', compact('title'));
    }
}
