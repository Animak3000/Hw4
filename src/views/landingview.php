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
                alert('Error: Empty');
                return false;
            }
            //alert(values); //testing
            var array = values.split('\n');
            for (i = 0; i < array.length; i++) {
                //alert(array[i]); //testing. Reject coordinates if any do not match RegEx format.
                if (/\w+,\d*,\d*,\d*,\d*/i.test(array[i]) == false){
                    alert('Error: Coordinates in wrong format');
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
            <input type='text' id='title' name='title'>
        </div><br>
        <div>
            <textarea id='values' name='values' rows='50' cols='80' placeholder='Jan,6,4,3,4,3
Feb,4,8,4,4,5
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
