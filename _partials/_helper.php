<?php

function url($path)
{
    return '/bar/' . $path . '.php';
}

function ensureLogIn()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        header('location: ' . url('auth/log_form'));
        die;
    }
}
