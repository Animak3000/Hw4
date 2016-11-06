<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\views\chartview;
require_once 'Controller.php';
class chartcontroller extends Controller{
    function __construct(){
        $data = array();
        $view = new chartview;
        $view->render($data);
    }
}
?>
