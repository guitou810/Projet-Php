<?php

include 'bug.php';
include 'ConnexionBDD.php';

class bugManager {
    private $_bugs = [];
    private $_ressource;
    private $_id;
    
    function get_bugs() {
        return $this->_bugs;
    }
    function get_bug_id($_id){
        return $this->_bugs[$_id];
        
    }

    function set_bugs($_bugs) {
        $this->_bugs = $_bugs;
    }

    function __construct($_bugs) {
        $this->_bugs = $_bugs;
    }
//Obejctif : chargé en mémoire ce qu'il ce trouve en source de données 
// récupéerer CSV -> Parser le CSV -> pour chaque ligne créer un nouveau bug et insérer le bug dans $this->_bugs
    function loadcsv() {
       $_ressource = fopen('data.txt', 'rb');
       
       while(!feof($_ressource)){
                $_ligne = fgets($_ressource);
                list($_id,$_des) = explode(';',$_ligne);
                $Bug = new Bug($_id,$_des);
                $this->_bugs[]=$Bug;
            }
        return $this->_bugs;
    }
    // load sur base de données
    function load(){
        $Connect = new Connect();
        $dbh = new PDO('mysql:host=localhost;dbname='.$Connect->getTable().';charset=utf8', $Connect->get_user(), $Connect->get_passwd());
        $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`',PDO::FETCH_ASSOC);
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['status']);
               $this->_bugs[]=$Bug;
        }
        return $this->_bugs;
    }
// Ajouter un bug à la liste
    function add(Bug $_bug) {
        $this->_bugs[]=$_bug;
    }
// Supprimer un bug de la liste   
    function remove(Bug $_bug){
        if(in_array($_bug, $this->_bugs)){
            unset($this->_bugs[array_search($_bug,$this->_bugs)]);
            
        }
    }
    
    
    
    
}




















?>