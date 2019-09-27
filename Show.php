<?php
include 'bugManager.php';
$id = $_GET['id'];
$Bugs = [];
$bugmanager = new bugManager($Bugs);
$Bugs = $bugmanager->load();
$Bugss = $bugmanager->get_bug_id($id-1);


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
    </body>

</html>