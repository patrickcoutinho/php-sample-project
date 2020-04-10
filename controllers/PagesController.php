<?php

class PagesController
{
    public function home()
    {
        require view('index', compact('users'));
    }

    public function about()
    {
        $title = 'iStyle';

        require view('about', compact('title'));
    }
}
