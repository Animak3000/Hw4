<?php
namespace onepersongroup\hw4\models;
class chartmodel extends Model{
    function retrieveGraph($data, $hash){
        $sql = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB);
        $result = mysqli_query($sql, "SELECT * FROM graphs WHERE hash='$hash'");
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
}
?>
