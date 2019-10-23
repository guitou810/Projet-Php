
<?php $title = 'Bug'; ?>
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
<?php $content2 = ob_get_clean(); ?>
<?php require('../Views/Show.php'); ?>
