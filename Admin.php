<?php

class Admin extends User {

    protected $_level;

    public function __construct ($name, $email){
        $this->_type = "Admin";
        $this->_level = 3;
        parent::__construct($name,$email);
    }
    public function getLevel() {
        return $this->_level;
    }
}