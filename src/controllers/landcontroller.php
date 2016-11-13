<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\models\landmodel;
use \onepersongroup\hw4\views\landingview;
class landcontroller extends Controller{
    function __construct(){
        $data = array();
        if(isset($_REQUEST["title"], $_REQUEST["values"])){
            $model = new landmodel;
            $sql = $model->connectToDB();
            $title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            $data = filter_input(INPUT_GET, "values", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            $hash = hash('md5', $data);
            $model->addToDB($sql, $hash, $title, $data);
            header("Location: " . BASE_URL . "/?c=chart&a=show&arg1=LineGraph&arg2=" . $hash);
        }
        $view = new landingview;
        $view->render($data);
    }
}
?>
