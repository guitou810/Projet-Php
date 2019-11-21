<?php

require ('Controllers/controller.php');

$uri = explode("/",$_SERVER['REQUEST_URI']);



switch(true) {

    case ($uri[4] == 'list') :

        return (new bugController())->list();

        break;
    
    case ($uri[4] == 'ajoutbug'):

    return (new bugController())->add();

    break;
    
    case (preg_match('/^show/',$uri[4])):

        $id = substr($uri[4], -1);
        return (new bugController())->show($id);

        break;



    default :
        return (new bugController())->list();
        

                
}


