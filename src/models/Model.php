<?php
namespace onepersongroup\hw4\models;
abstract class Model{
    function connectToDB(){
        $sql = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);
        return $sql;
    }
}
?>
