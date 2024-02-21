<?php
    try {
        $dsn = 'mysql:dbname=testdb;host=db';
        $db = new PDO($dsn, 'testuser', 'testpass');
        echo 'success';
    } catch (PDOException $e) {
        echo 'fail';
        echo $e->getMessage();
        exit;
    }