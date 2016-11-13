<?php
namespace onepersongroup\hw4\views\elements;
class displayelement extends Element{
    function render($data){
        if($data['graph'] == 'LineGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            graph = new Chart("board", 
                {"Jan":7, "Feb":20, "Dec":5}, {"title":"Test Chart - Month v Value", "type":"LineGraph"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'PointGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            graph = new Chart("board", 
                {"Jan":7, "Feb":20, "Dec":5}, {"title":"Test Chart - Month v Value", "type":"PointGraph"});
            graph.draw();
            </script><?php
        }
    }
}
?>
