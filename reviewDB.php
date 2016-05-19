<!--
Author: Chau (Joe) Duong
5/18/16
Establish connection to reviewmyresume databse
-->

<?php
    $dsn = "mysql:host=localhost; dbname=review_DB; charset=utf8";
    $username = "review";
    $password = "GL2RIdtQNTih";
    $hostname = "reviewmyresume.greenrivertech.net";
    $dbname = "review_DB";
 
    // Using PDO
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>