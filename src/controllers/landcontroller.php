<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\models\landmodel;
use \onepersongroup\hw4\views\landingview;
class landcontroller extends Controller{
    function __construct(){
        $data = array();
        if(isset($_REQUEST["title"], $_REQUEST["values"])){
            $title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            $values = filter_input(INPUT_GET, "values", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            if ($this->checkForm($title, $values)){
                $model = new landmodel;
                $sql = $model->connectToDB();
                $hash = hash('md5', $values);
                $model->addToDB($sql, $hash, $title, $values);
                header("Location: " . BASE_URL . "/?c=chart&a=show&arg1=LineGraph&arg2=" . $hash);
            }
            else{
                $data['title'] = $title;
                $data['values'] = $values;
            }
        }
        $view = new landingview;
        $view->render($data);
    }
    function checkForm($title, $values){
        $lines = explode("\n", $values);
        if (count($lines) > 50){
            echo 'Error: More than fifty lines';
            return false;
        }
        foreach ($lines as $line){
            $coo = explode(",", $line);
            if (strlen($line) > 80){
                echo 'Error: A line has more than eighty characters';
                return false;
            }
            else if (count($coo) < 2 || count($coo) > 6){
                echo 'Error: Coordinates must be between 1 and 5.';
                return false;
            }
            else if (empty(reset($coo))){
                echo 'Error: First coordinate must be nonempty';
                return false;
            }
        }
        return true;
    }
}
?>
