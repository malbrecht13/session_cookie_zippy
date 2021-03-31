<?php


    switch($action) {
        case 'show_register':
            $page = 'register';
            include('view/register.php');
            break;
        case 'register':
            include('util/valid_register.php');
            $errors = valid_registration($username, $password, $confirm_password);
            if ($errors) {
                $page = 'register';
                include('view/register.php');
            } else {
                try {
                    add_admin($username, $password);
                    $_SESSION['is_valid_admin'] = true;
                    header('Location: .?action=list_vehicles');
                } catch(Exception $e) {
                    echo $e->getMessage();
                }
                
            }
            break;
    }
?>