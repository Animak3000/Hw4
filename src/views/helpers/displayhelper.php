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
            graph = new Chart("display", parsedData, {"title":title});
            graph.draw("LineGraph");
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
            graph = new Chart("display", parsedData, {"title":title});
            graph.draw("PointGraph");
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
            graph = new Chart("display", parsedData, {"title":title});
            graph.draw("Histogram");
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
