<?php
    session_start();
    ob_start();
    // Turn off when live
    //error_reporting(0);
    require 'database/dbConnect.php';
    require 'functions/general.php';
    require 'functions/users.php';

    $errors = array();
?>