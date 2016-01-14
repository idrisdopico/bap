<?php

class Viewer extends User{

    protected $_date;

    public function __construct ($name,$email){
        $this->_date= "11-01-1996";
        $this->_type = "Viewer";
        $this->_level = 1;
        parent::__construct($name,$email);
    }

    public function getDate() {
        return $this->_date;
    }
}