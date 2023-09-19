<?php

class ViewController
{
    public function login()
    {
        include 'app/views/auth/login.php';
    }

    public function register()
    {
        include 'app/views/auth/register.php';
    }

    public function create()
    {
        include 'app/views/auth/create.php';
    }
}