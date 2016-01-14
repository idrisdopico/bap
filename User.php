<?php

class User {

    protected $_name;
    protected $_type;
    protected $_email;

    public function __construct($name, $email){
        $this->_name = $name;
        $this->_email = $email;
    }

    public function getName() {
        return $this->_name;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getType (){
        return $this->_type;
    }
}