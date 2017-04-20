<?php
    $errors = array();

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        exit();
    }
    
    if((isset($_POST['first-name']) !== true) || (strlen($_POST['first-name']) === 0)) {
        $errors['first-name'] = ('You haven\'t filled in your first name.');
    }

    if((isset($_POST['last-name']) !== true) || (strlen($_POST['last-name']) === 0)) {
        $errors['last-name'] = ('You haven\'t filled in your last name.');   
    }

    if((isset($_POST['email']) !== true) || (strlen($_POST['email']) === 0)) {
        $errors['email'] = ('You haven\'t filled in your email.');
    } else {
        if(preg_match('/^[a-z][a-zA-Z0-9_.]*(\.[a-zA-Z][a-zA-Z0-9_.]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/', $_POST['email']) !== 1) {
            $errors['email'] = ('You haven\'t filled in a valid email.');
        }
    }

    if((isset($_POST['subject']) !== true) || (strlen($_POST['subject']) === 0)) {
        $errors['subject'] = ('You haven\'t filled in the subject.');
    }

    if((isset($_POST['message']) !== true) || (strlen($_POST['message']) === 0)) {
        $errors['message'] = ('You haven\'t filled in the message.');
    }

    if(sizeof($errors) == 0) {
        /* TODO: Put the contact request in the database. */
    } else {
        http_response_code(400);
        print(json_encode($errors));
    }
?>