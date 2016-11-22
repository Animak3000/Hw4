<?php
namespace onepersongroup\hw4\views;
use \onepersongroup\hw4\views\helpers\displayhelper;
class chartview extends View{
    function render($data){
        $display = new displayhelper;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $data['hash'] ?> <?php echo $data['graph'] ?> - PasteChart</title>
    </head>
    <body>
        <h1><?php echo $data['hash'] ?> <?php echo $data['graph'] ?> - PasteChart</h1>
        <div id="display"> </div>
        <?php $display->render($data); ?>
        <p>Share your chart and data at the URLs below:</p>
        <p>As a LineGraph:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=LineGraph&arg2=<?php echo $data['hash'] ?>"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=LineGraph&arg2=<?php echo $data['hash'] ?></a></p>
        <p>As a PointGraph:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=PointGraph&arg2=<?php echo $data['hash'] ?>"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=PointGraph&arg2=<?php echo $data['hash'] ?></a></p>
        <p>As a Histogram:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=Histogram&arg2=<?php echo $data['hash'] ?>"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=Histogram&arg2=<?php echo $data['hash'] ?></a></p>
        <p>As XML data:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=xml&arg2=<?php echo $data['hash'] ?>"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=xml&arg2=<?php echo $data['hash'] ?></a></p>
        <p>As JSON data:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=json&arg2=<?php echo $data['hash'] ?>"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=json&arg2=<?php echo $data['hash'] ?></a></p>
        <p>As JSONP data:<br>
        <a href="<?php echo BASE_URL ?>/?c=chart&a=show&arg1=jsonp&arg2=<?php echo $data['hash'] ?>&arg3=javascript_callback"><?php echo BASE_URL ?>/?c=chart&a=show&arg1=jsonp&arg2=<?php echo $data['hash'] ?>&arg3=javascript_callback</a></p>
    </body>
</html>
<?php
    }
}
?>
