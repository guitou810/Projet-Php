<?php
    include 'bugManager.php';

    $Bugs = [] ;
    $bugmanager = new bugManager($Bugs);
    $bugmanager->load();
    echo $bugmanager;
    
    
    

?>




