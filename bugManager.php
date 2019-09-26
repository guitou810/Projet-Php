<?php

include 'bug.php';

class bugManager {
    private $_bugs = [];
    private $_ressource;
    
    function get_bugs() {
        return $this->_bugs;
    }

    function set_bugs($_bugs) {
        $this->_bugs = $_bugs;
    }

    function __construct($_bugs) {
        $this->_bugs = $_bugs;
    }
//Obejctif : chargé en mémoire ce qu'il ce trouve en source de données 
// récupéerer CSV -> Parser le CSV -> pour chaque ligne créer un nouveau bug et insérer le bug dans $this->_bugs
    function load() {
       $_ressource = fopen('data.txt', 'rb');
       
       while(!feof($_ressource)){
                $_ligne = fgets($_ressource);
                list($_id,$_des) = explode(';',$_ligne);
                $Bug = new Bug($_id,$_des);
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