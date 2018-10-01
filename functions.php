<?php
session_start();

    function greeting ($name = 'Friend') {
        if (isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }

        if (isset($_SESSION['name'])) {
            return "Welcome, {$_SESSION['name']}";
        } else {
            return "Welcome, {$name}";
        }
    }

?>