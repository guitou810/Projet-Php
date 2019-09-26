<?php
    ini_set('display_errors', 1);
    include 'bugManager.php';
    $Bugs = [] ;
    $bugmanager = new bugManager($Bugs);
    $Bugs = $bugmanager->load();

?>


<html>
    <body>
    
        <h1>Bug list</h1>

        <ul>
            <?php  foreach ($Bugs as $bugs) { 
                
                echo 
            "<li>"
                 . $bugs->getId() .':'.$bugs->getDescription().
            "</li>";
            } ?>
       </ul>
    </body>
</html>
