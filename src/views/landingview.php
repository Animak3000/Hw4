<?php
namespace onepersongroup\hw4\views;
require_once 'View.php';
class landingview extends View{
    function render($data){
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>PasteChart</title>
        <script type='text/javascript'>
        function validateForm(){
            var x = document.getElementById('values').value;
            if (x == null || x == '') {
                alert('no coordinates found');
                return false;
            }
            /*
            else if(){
                alert('coordinates in wrong format');
                return false;
            }
            */
            else{
                alert('coordinates accepted');
                return true;
            }
        }
        </script>
    </head>
    <body>
        <h1>PasteChart</h1>
        <p>Share your data in charts!</p>
        <form onsubmit="return validateForm()">
        <div><label for='chart'>Chart Title</label>
            <input type='text' id='title' name='title'>
        </div><br>
        <div>
            <textarea id='values' name='values' rows='50' cols='80' placeholder='Jan,600,5.4
Feb,450,5.0
...'></textarea>
        </div>
        <div>
            <button type='submit'>Share</button>
        </div>
        </form>
    </body>
</html>
<?php
    }
}
?>
