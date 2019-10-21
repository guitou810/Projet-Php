<?php
include_once('ConnexionBDD.php');

class ConnectBDD {
    public static function connectDB(){
        $Connect = new Connect();
        $dbh = new PDO('mysql:host=localhost;dbname='.$Connect->getTable().';charset=utf8', $Connect->get_user(), $Connect->get_passwd());
        return $dbh;
}

}
?>