<?php
    $config = (require_once('config/production.php'))['mysql'];
    return new mysqli($config['host'], $config['username'], $config['password'], $config['database'], $config['port']);
?>