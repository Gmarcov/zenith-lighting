<?php

if (isset($_POST['logout'])) {
    setcookie('user_id', '', time() - 3600, '/');
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../../index.php');
}