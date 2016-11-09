<?php
namespace onepersongroup\hw4\models;
class landmodel extends Model{
    function addToDB($sql, $hash, $title, $data){
        $db = DB;
        mysqli_query($sql, "CREATE DATABASE IF NOT EXISTS $db");
        $sql = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB);
        mysqli_query($sql, 'CREATE TABLE IF NOT EXISTS graphs (
        hash CHAR(32) NOT NULL PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        data TEXT NOT NULL
        )');
        mysqli_query($sql, "INSERT INTO graphs (hash, title, data) VALUES ('$hash', '$title', '$data')");
    }
}
?>
