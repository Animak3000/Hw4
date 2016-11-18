<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\models\landmodel;
use \onepersongroup\hw4\views\landingview;
class landcontroller extends Controller{
    function __construct(){
        $data = array();
        if(isset($_REQUEST["title"], $_REQUEST["values"])){
            $title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            $data = filter_input(INPUT_GET, "values", FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
            $check = true;
            $lines = explode("\n", $data);
            if (count($lines) > 50){
                echo 'Error: More than fifty lines';
                $check = false;
            }
            foreach ($lines as $line){
                $values = explode(",", $line);
                if (strlen($line) > 80){
                    echo 'Error: More than eighty characters';
                    $check = false;
                }
                else if (count($values) > 6){
                    echo 'Error: More than five coordinates found';
                    $check = false;
                }
            }
            if ($check == true){
                $model = new landmodel;
                $sql = $model->connectToDB();
                $hash = hash('md5', $data);
                $model->addToDB($sql, $hash, $title, $data);
                header("Location: " . BASE_URL . "/?c=chart&a=show&arg1=LineGraph&arg2=" . $hash);
            }
        }
        $view = new landingview;
        $view->render($data);
    }
}
?>
