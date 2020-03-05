<?php

namespace BugApp\Models;
class Bug {
    private $_id;
    private $_description;
    private $_title ;
    private $_date;
    private $_status;
    private $_NDD;
    private $_IP;
            
            
    
    public function getId (){
        return $this->_id;
        
}
    public function getDescription(){
        return $this->_description;
        
}
    
    function set_id($_id) {
        $this->_id = $_id;
}

    function set_description($_description) {
       $this->_description = $_description;
}

    function __construct($_id, $_description, $_title, $_date,$_status,$_NDD,$_IP) {
        $this->_id = $_id;
        $this->_title = $_title;
        $this->_description = $_description;
        $this->_date = $_date;
        $this->_status = $_status;
        $this->_NDD = $_NDD;
        $this->_IP = $_IP;
        
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

function set_ndd($_NDD) {
    $this->_NDD = $_NDD;
}

function get_ndd(){
    return $this->_NDD;
}

function set_ip($_IP){
    $this->_IP = $_IP;
}

function get_ip(){
    return $this->_IP;
}

}





?>