<?php
namespace onepersongroup\hw4\views\elements;
class displayelement extends Element{
    function render($data){
        if($data['graph'] == 'LineGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("board", 
                {"Jan":7, "Feb":20, "Dec":5}, {"title":title, "type":"LineGraph"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'PointGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("board", 
                {"Jan":7, "Feb":20, "Dec":5}, {"title":title, "type":"PointGraph"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'Histogram'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("board", 
                {"Jan":7, "Feb":20, "Dec":5}, {"title":title, "type":"Histogram"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'xml'){

        }
        else if($data['graph'] == 'json'){
            
        }
        else if($data['graph'] == 'jsonp'){
            
        }
    }
}
?>
