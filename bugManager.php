<?php

include 'bug.php';
include 'Manager.php';

class bugManager {
    private $_bugs = [];
    private $_ressource;
    private $_id;

    
    function find($id){
        $Connectdb = new ConnectBDD();
        $dbh=$Connectdb->connectDB();
        $bugs = $dbh->query("SELECT * FROM `bug` ORDER BY id='$id'",PDO::FETCH_ASSOC);
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['createdAt'],$donnees['closed']);       
        }
        return $Bug;
    }

    // load sur base de données
    function find_all(){
        $Connectdb = new ConnectBDD();
        $dbh=$Connectdb->connectDB();
        $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`',PDO::FETCH_ASSOC);
        if (!$bugs) {
                echo "\nPDO::errorInfo():\n";
                print_r($dbh->errorInfo());
        }
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['createdAt'],$donnees['closed']);
               $this->_bugs[]=$Bug;
        }
        return $this->_bugs;
    }
// Ajouter un bug à la liste
    function add(Bug $bug) {
        $Connectdb = new ConnectBDD();
        $dbh=$Connectdb->connectDB();
        $stmt = $dbh->prepare("INSERT INTO bug (id,titre,description,createdAt,closed) VALUES (:id, :titre, :desc, :createdAt,:closed)");// si formulaire soumis 
                $ID = NULL;
                $stmt->bindParam(':id',$ID);
                $stmt->bindParam(':titre', $_POST['Titre']);
                $stmt->bindParam(':desc', $_POST['Description']);
                $stmt->bindParam(':status', $_POST['Date']);
                $stmt->bindParam(':status', $_POST['Status']);
                $stmt->execute();

    }

    
    
    
    
}




















?>