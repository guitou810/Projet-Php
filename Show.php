<?php
include 'bugManager.php';
$id = $_GET['id'];
$Bugs = [];
$bugmanager = new bugManager($Bugs);
$Bugs = $bugmanager->load();
$Bugs = $bugmanager->get_bug_id($id);


?>

<html>
    
    <body>
        <h1>BUG INFORMATIONS</h1>
        <?php
        
        echo 
          "<div class='form-example' style='width:100%'>
        <label for='name'>Title: </label>
            ".$Bugs->get_title()."
        </div>
        
        <div class='form-example' style='width:100%'>
        <label for='name'>Description: </label>
            ".$Bugs->getDescription()."
        </div>"

        ?>
    </body>

</html>