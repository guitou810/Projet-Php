<?php

include 'bug.php';

class bugManager {
    private $_bugs;
    
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
    function load() {
       
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