<?php
    $errors = array();

    require_once('shutdown.php');

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        exit(1);
    }
    
    if(isset($_POST['first-name']) !== true) {
        $errors[] = array(
            'input' => 'first-name',
            'message' => 'You haven\'t filled in your first name.'
        );
    }

    if(isset($_POST['last-name']) !== true) {
        $errors[] = array(
            'input' => 'last-name',
            'message' => 'You haven\'t filled in your last name.'
        );   
    }

    if(isset($_POST['email']) !== true) {
        $errors[] = array(
            'input' => 'email',
            'message' => 'You haven\'t filled in your email.'
        );
    } else {
        /* TODO: VALIDATE REGEX PATTERN */
    }

    if(isset($_POST['subject']) !== true) {
        $errors[] = array(
            'input' => 'subject',
            'message' => 'You haven\'t filled in the subject.'
        );
    }

    if(isset($_POST['message']) !== true) {
        $errors[] = array(
            'input' => 'message',
            'message' => 'You haven\'t filled in the message.'
        );
    }

    if(sizeof($errors) > 0) {
        http_response_code(400);
        exit(1);
    }

    $config = (require_once('../../includes/config.php'))['email'];
    $pdo = require_once('../../includes/database.php');

    $mailed = mail($config['email'], $_POST['subject'], ('From: ' . $_POST['first-name'] . ' ' . $_POST['last-name'] . '\n\n' . $_POST['message']));

    if($mailed !== true) {
        http_response_code(500);
        exit(1);
    }
?>