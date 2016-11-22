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
            <script type="text/javascript">
            var unparsedData = '<?php echo $values;?>';
            var parsedData = JSON.parse(unparsedData);
            for (var key in parsedData){
                for(var value in parsedData[key]){
                    parsedData[key][value] = parseFloat(parsedData[key][value]);
                }
            }

            document.write('<?php echo '&lt;Chart Title="'; echo $data['title']; echo'"&gt'; echo '<br>'?>');
	    for (var key in parsedData) {
		document.write('&ltValue Label="'+ key +'"&gt<br>');
   		for(var value in parsedData[key]){
        	    document.write('&ltValue&gt'+ parsedData[key][value] +'&lt/Value&gt'+'<br>');
   		}
   		document.write('&lt/Value&gt<br>');
	    }
	    document.write('<?php echo '&lt;/Chart&gt'?>');
            </script><?php

        }
        else if($data['graph'] == 'json'){
            
        }
        else if($data['graph'] == 'jsonp'){
            
        }
    }
}
?>
