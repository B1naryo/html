<?php
$is_ajax = $_REQUEST['is_ajax'] ?? false;

if ($is_ajax) {
    $username = $_REQUEST['username'] ?? '';
    $password = $_REQUEST['password'] ?? '';

    $valid_credentials = ($username === 'admin' && ($password === '123' || $password === 'admin'));

    if ($valid_credentials) {
        echo 'success';
    }
}