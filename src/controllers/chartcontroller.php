<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\models\chartmodel;
use \onepersongroup\hw4\views\chartview;
require_once 'Controller.php';
class chartcontroller extends Controller{
    function __construct(){
        $data = array();
        $model = new chartmodel;
        $data = $model->retrieveGraph($data, $_REQUEST["arg2"]);
        $view = new chartview;
        $view->render($data);
    }
}
?>
