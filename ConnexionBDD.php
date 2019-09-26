<?php
    class Connect{
    private $table="bug";
    private $_passwd='';
    private $_user='root';
    
    function __construct() {

    }
    function getTable() {
        return $this->table;
    }

    function get_passwd() {
        return $this->_passwd;
    }

    function get_user() {
        return $this->_user;
    }

    function setTable($table) {
        $this->table = $table;
    }

    function set_passwd($_passwd) {
        $this->_passwd = $_passwd;
    }

    function set_user($_user) {
        $this->_user = $_user;
    }


    }

?>