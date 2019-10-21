<?php
require_once('../Controllers/index.php');

?>
<html>
    
    <body>
        <h1>BUG INFORMATIONS</h1>
        <?php
        
        echo 
          "<div class='form-example' style='width:100%'>
        <label for='name'>Title: </label>
            ".$Bugss->get_title()."
        </div>
        
        <div class='form-example' style='width:100%'>
        <label for='name'>Description: </label>
            ".$Bugss->getDescription()."
        </div>"

        ?>
        <a href="list.php"><input class="favorite styled "type="button" value="Retour" name="action"</a>
    </body>

</html>