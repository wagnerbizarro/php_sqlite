<?php

    //CREATE DATABASE
    $db = new SQLite3('db.db');

    //CREATE TABLES
    //$db->exec('create table users(firstName varchar(50), lastName varchar(50))');
    
    //INSERT
    //$db->exec("insert into users(firstName, lastName) values('Wagner','Bizarro')");

    //SELECT 
    $result = $db->query('select rowid,* from users');

    //var_dump($result->fetchArray(SQLITE3_ASSOC));

    $users = [];

    while ($data = $result->fetchArray(SQLITE3_ASSOC)) {
        array_push($users, $data);
    }

    //var_dump($users);
    foreach ($users as $key => $users) {
        echo $users['firstName'];
    }
    


?>
