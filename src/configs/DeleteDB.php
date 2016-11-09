<?php
namespace onepersongroup\hw4\configs;
include "Config.php";
$db = DB;
// Create connection
$sql = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete database
if(!mysqli_query($sql, "DROP DATABASE $db")) {
    die("Could not delete database $db: " . mysql_error());
}
echo "Database deleted\n";
   
mysqli_close($sql);
?>
