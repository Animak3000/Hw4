<?php
namespace onepersongroup\hw4\views;
use \onepersongroup\hw4\views\elements\displayelement;
class chartview extends View{
    function render($data){
        $display = new displayelement;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $data['hash'] ?> <?php echo $data['graph'] ?> - PasteChart</title>
    </head>
    <body>
        <h1><?php echo $data['hash'] ?> <?php echo $data['graph'] ?> - PasteChart</h1>
        <div id="board"> </div>
        <?php $display->render($data); ?>
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
