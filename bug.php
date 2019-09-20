<?php

class Bug {
    private $_id;
    private $_description;
    
    public function getId (){
        return $this->_id;
        
}
    public function getDescription (){
        return $this->_Description;
        
}
    
    function set_id($_id) {
        $this->_id = $_id;
}

    function set_description($_description) {
       $this->_description = $_description;
}

    function __construct($_id, $_description) {
        $this->_id = $_id;
        $this->_description = $_description;
}


}





?>