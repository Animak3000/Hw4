<?php
namespace onepersongroup\hw4\controllers;
use \onepersongroup\hw4\models\chartmodel;
use \onepersongroup\hw4\views\chartview;
class chartcontroller extends Controller{
    function __construct(){
        $data = array();
        $model = new chartmodel;
        $data = $model->retrieveGraph($data, $_REQUEST['arg2']);
        $coos = array();
        $lines = explode("\n", $data['data']);
        foreach ($lines as $line){
            $values = array();
            $coo = explode(",", $line);
            $line = trim($line);
            $i = 1;
            if(strlen(trim($line)) > 0){
                while($i < count($coo)){
                    $coo[$i] = str_replace("\r", '', $coo[$i]);
                    array_push($values, $coo[$i]);
        	    $i++;
                }
                $coos[$coo[0]] = $values;
            }
        }
        $data['graph'] = $_REQUEST['arg1'];
        $data['data'] = $coos;
        $view = new chartview;
        $view->render($data);
    }
}
?>
