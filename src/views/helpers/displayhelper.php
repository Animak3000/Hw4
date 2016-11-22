<?php
namespace onepersongroup\hw4\views\helpers;
class displayhelper extends Helper{
    function render($data){
        $values = json_encode($data['data']);
        if($data['graph'] == 'LineGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var unparsedData = '<?php echo $values;?>';
            var parsedData = JSON.parse(unparsedData);
            for (var key in parsedData){
                for(var value in parsedData[key]){
                    parsedData[key][value] = parseFloat(parsedData[key][value]);
                }
            }
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("display", parsedData, {"title":title, "type":"LineGraph"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'PointGraph'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var unparsedData = '<?php echo $values;?>';
            var parsedData = JSON.parse(unparsedData);
            for (var key in parsedData){
                for(var value in parsedData[key]){
                    parsedData[key][value] = parseFloat(parsedData[key][value]);
                }
            }
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("display", parsedData, {"title":title, "type":"PointGraph"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'Histogram'){?>
            <script type="text/javascript" src="./src/resources/chart.js"></script>
            <script type="text/javascript">
            var unparsedData = '<?php echo $values;?>';
            var parsedData = JSON.parse(unparsedData);
            for (var key in parsedData){
                for(var value in parsedData[key]){
                    parsedData[key][value] = parseFloat(parsedData[key][value]);
                }
            }
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("display", parsedData, {"title":title, "type":"Histogram"});
            graph.draw();
            </script><?php
        }
        else if($data['graph'] == 'xml'){?>
            <script type="text/javascript" scr="./scr/resources/chart.js"></script>
            <script type="text/javascript">
            var unparsedData = '<?php echo $values;?>';
            var parsedData = JSON.parse(unparsedData);
            for (var key in parsedData){
                for(var value in parsedData[key]){
                    parsedData[key][value] = parseFloat(parsedData[key][value]);
                }
            }
            var title = <?php echo json_encode($data['title']); ?>;
            graph = new Chart("display", parsedData, {"title":title, "type":"xml"});
            graph.draw();
            </script><?php

        }
        else if($data['graph'] == 'json'){
            
        }
        else if($data['graph'] == 'jsonp'){
            
        }
    }
}
?>
