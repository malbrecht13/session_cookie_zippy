<?php
    if (!isset($_SERVER['HTTPS'])) {
        $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL'];
        header('Location: ' . $url);
        exit();
    }
?>