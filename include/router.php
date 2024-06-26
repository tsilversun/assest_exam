<?php
session_start();
require("backend.php");

if (isset($_POST['choice'])) {
    switch($_POST['choice']){
        case 'login':
            $backend = new backend();
            echo $backend->doLogin($_POST['email'], $_POST['password']);
            break;
        case 'register':
            $backend = new backend();
            echo $backend->doRegister($_POST['name'], $_POST['email'], $_POST['password'], $_POST['cpassword']);
            break;
        case 'adduser':
            $backend = new backend();
            echo $backend->doAddUser($_POST['name'], $_POST['company'], $_POST['phone'], $_POST['email']);
            break;
        case 'displayuser':
            $backend = new backend();
            echo $backend->displayUser();
            break;
        case 'updateuser':
            $backend = new backend();
            echo $backend->DoUpdateUser($_POST['id'],$_POST['name'], $_POST['company'], $_POST['phone'], $_POST['email']);
            break;
        case 'deleteuser':
            $backend = new backend();
            echo $backend->DoDeleteUser($_POST['name']);
            break;
        case 'logout':
            session_unset();
            session_destroy();
            echo "200";
            break;
        default:
            echo "404";
            break;
    }
}