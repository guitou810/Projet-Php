<?php
require "vendor/autoload.php";
#require ('Controllers/controller.php');
use BugApp\Controllers\bugController;

$uri = explode("/",$_SERVER['REQUEST_URI']);


switch(true) {

    case ($uri[4] == 'list') :

        return (new bugController())->list();

        break;
    
    case ($uri[4] == 'ajoutbug'):

    return (new bugController())->add();

    break;

    case (preg_match('/^update/',$uri[4])):
        
        $id = explode("?",$uri[4]);
        return (new bugController())->update($id[1]);
     
    break;

    
    case (preg_match('/^modify/',$uri[4])):
        
        $id = explode("?",$uri[4]);
        return (new bugController())->modify($id[1]);
        
    break;
        
    
    case (preg_match('/^show/',$uri[4])):

        $id = substr($uri[4], -1);
        return (new bugController())->show($id);

        break;




    default :
        return (new bugController())->list();
        

                
}


