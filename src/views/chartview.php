<?php
namespace onepersongroup\hw4\views;
require_once 'View.php';
class chartview extends View{
    function render($data){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>XXXXX LineGraph - PasteChart</title>
    </head>
    <body>
        <h1>XXXXX LineGraph - PasteChart</h1>
        <p>Share your chart and data at the URLs below:</p>
        <p>As a LineGraph:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=LineGraph&arg2=XXXXX</p>
        <p>As a PointGraph:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=PointGraph&arg2=XXXXX</p>
        <p>As a Histogram:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=Histogram&arg2=XXXXX</p>
        <p>As XML data:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=xml&arg2=XXXXX</p>
        <p>As JSON data:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=json&arg2=XXXXX</p>
        <p>As JSONP data:<br>
        <?php echo BASE_URL ?>/?c=chart&a=show&arg1=jsonp&arg2=XXXXX&arg3=javascript_callback</p>
    </body>
</html>
<?php
    }
}
?>
