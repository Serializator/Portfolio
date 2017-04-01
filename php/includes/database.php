<?php
    $config = (require_once('config.php'))['pdo'];
    return new PDO(('mysql:host=' . $config['host'] . ';dbname=' . $config['database']), $config['username'], $config['password']);
?>