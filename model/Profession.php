<?php

/** 
 * Class to manage the Profession objects
 * @name Profession.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
 * @param id: ID of the profession
        * id: Profession's id
        * name: Profession's name
*/
class Profession {
    
    //Atributtes
    private $id;
    private $name;
    
    //Constructor
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    
    //Getters & Setters
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    //Own methods
    public function __toString() {
        return sprintf("ID=%s, Name=%s", $this->id,$this->name);
    }
}
