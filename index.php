<?php
namespace onepersongroup\hw4;

//require_once '/src/configs/Config.php';

// load composer
require_once 'vendor/autoload.php';

use \onepersongroup\hw4\configs\Config;
use \onepersongroup\hw4\controllers\landcontroller;
use \onepersongroup\hw4\controllers\chartcontroller;

define ("BASE_URL", "http://localhost/Hw4");

//MySql Constants. Edit when needed.
define ("SERVERNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "123456qwerty");
define ("DB", "hw4");

//Determine which controller to use.
if(isset($_GET['c'])){
    if("chart"==$_GET['c']){
        new chartcontroller;
    }
}
else{
    new landcontroller;
}
?>
