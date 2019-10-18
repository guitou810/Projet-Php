<?php

class Bug {
    private $_id;
    private $_description;
    private $_title ;
    private $_date;
    private $_status;
            
            
    
    public function getId (){
        return $this->_id;
        
}
    public function getDescription (){
        return $this->_description;
        
}
    
    function set_id($_id) {
        $this->_id = $_id;
}

    function set_description($_description) {
       $this->_description = $_description;
}

    function __construct($_id, $_description, $_title, $_date,$_status) {
        $this->_id = $_id;
        $this->_title = $_title;
        $this->_description = $_description;
        $this->_date = $_date;
        $this->_status = $_status;
        
}
function get_status() {
    return $this->_status;
}

function set_status($_status) {
    $this->_status = $_status;
}

function get_title() {
    return $this->_title;
}

function set_title($_title) {
    $this->_title = $_title;
}
function get_date() {
    return $this->_date;
}

function set_date($_date) {
    $this->_date = $_date;
}




}





?>