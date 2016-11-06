<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\views\landingview;
require_once 'Controller.php';
class landcontroller extends Controller{
    function __construct(){
        $data = array();
        $view = new landingview;
        $view->render($data);
    }
}
?>
