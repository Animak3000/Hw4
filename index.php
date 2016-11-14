<?php
namespace onepersongroup\hw4;

require_once '/src/configs/Config.php';

// load composer
require_once 'vendor/autoload.php';

use \onepersongroup\hw4\configs\Config;
use \onepersongroup\hw4\controllers\landcontroller;
use \onepersongroup\hw4\controllers\chartcontroller;

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
