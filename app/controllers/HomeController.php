<?php

class HomeController
{
    public function index()
    {
        include 'app/views/index.php';
    }

    public function dashboard()
    {
        require 'app/views/dashboard.php';
    }
}
