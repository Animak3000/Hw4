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
                alert('no coordinates found');
                return false;
            }
            //alert(values); //testing
            var array = values.split('\n');
            for (i = 0; i < array.length; i++) {
                //alert(array[i]); //testing. Reject coordinates if any do not match RegEx format.
                if (/\w+,\d*,\d*/i.test(array[i]) == false){
                    alert('coordinates in wrong format');
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
