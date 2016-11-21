<?php
namespace onepersongroup\hw4\views;
class landingview extends View{
    function render($data){
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>PasteChart</title>
        <script type='text/javascript'>
        function validateForm(){
            var values = document.getElementById('values').value;
            if (values == null || values == '') {
                document.getElementById("message").innerHTML = 'Error: Empty';
                return false;
            }
            var lines = values.split('\n');
            if (lines.length > 50){
                document.getElementById("message").innerHTML = 'Error: More than fifty lines';
                return false;
            }
            for (var i = 0; i < lines.length; i++){
                if (lines[i].length > 80){
                    document.getElementById("message").innerHTML = 'Error: A line has more than eighty characters';
                    return false;
                }
            }
            for (i = 0; i < lines.length; i++) {
                var coordinates = lines[i].split(",");
                if (coordinates.length < 2 || coordinates.length > 6){
                    document.getElementById("message").innerHTML = 'Error: Coordinates must be between 1 and 5';
                    return false;
                }
            }
            for (var i = 0; i < lines.length; i++){
                var coordinates = lines[i].split(",");
                if (!coordinates[0]){
                    document.getElementById("message").innerHTML = 'Error: First coordinate must be nonempty';
                    return false;
                }
            }
            alert('coordinates accepted');
            return true;
        }
        </script>
    </head>
    <body>
        <h1>PasteChart</h1>
        <p>Share your data in charts!</p>
        <form onsubmit="return validateForm()">
        <div><label for='chart'>Chart Title</label>
            <input type='text' id='title' name='title' value=<?php echo $data['title']?>>
        </div><br>
        <div>
            <textarea id='values' name='values' rows='10' cols='80' placeholder='Jan,6,4,3,4,3
Feb,4,8,4,4,5
...'><?php echo $data['values']?></textarea>
        </div>
        <div>
            <button type='submit'>Share</button>
        </div>
        </form>
        <p id="message"></p>
    </body>
</html>
<?php
    }
}
?>
