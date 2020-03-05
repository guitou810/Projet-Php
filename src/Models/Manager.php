<?php
#include_once('ConnexionBDD.php');
namespace BugApp\Models;
use BugApp\Models\ConnexionBDD;

class Manager {
    public static function connectDB(){
        $Connect = new ConnexionBDD();
        $dbh = new \PDO('mysql:host=localhost;dbname='.$Connect->getTable().';charset=utf8', $Connect->get_user(), $Connect->get_passwd());
        return $dbh;
}

}
?>