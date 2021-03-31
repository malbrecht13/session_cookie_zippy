<?php

    switch($action) {
        case 'show_register':
            include('../view/register.php');
        case 'register':
            include('../util/valid_register.php');
            $errors = valid_registration($username, $password, $confirm_password);
            if ($errors) {
                include('../view/register.php');
            } else {
                add_admin($username, $password);
                $_SESSION['is_valid_admin'] = true;
                header('Location: .?action=list_vehicles');
            }
            break;
    }
?>