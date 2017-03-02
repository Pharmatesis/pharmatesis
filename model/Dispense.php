<?php

/** 
 * Class to manage the Profession objects
 * @name Dispense.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
 * @param id: ID of the dispense
        * name: Dispense's name
        * surnames: Dispense's surnames
        * email: Dispense's email
        * phone: Dispense's phone number
        * $bornDate: Dispense's born date
        * $specialism: Dispense's specialism
        * $professionId: Dispense's profession ID (relation with Profession)
*/
class Dispense {
    
    //Attributes
    private $projectId;
    private $subjectId;
    private $phaseId;
    private $sessionId;
    private $viability;
    private $sideEffects;
    private $dose;
    private $reaction;
    
    //Constructor
    function __construct($projectId, $subjectId, $phaseId, $sessionId, $viability, $sideEffects, $dose, $reaction) {
        $this->projectId = $projectId;
        $this->subjectId = $subjectId;
        $this->phaseId = $phaseId;
        $this->sessionId = $sessionId;
        $this->viability = $viability;
        $this->sideEffects = $sideEffects;
        $this->dose = $dose;
        $this->reaction = $reaction;
    }
    
    //Getters & Setters
    function getProjectId() {
        return $this->projectId;
    }

    function getSubjectId() {
        return $this->subjectId;
    }

    function getPhaseId() {
        return $this->phaseId;
    }

    function getSessionId() {
        return $this->sessionId;
    }

    function getViability() {
        return $this->viability;
    }

    function getSideEffects() {
        return $this->sideEffects;
    }

    function getDose() {
        return $this->dose;
    }

    function getReaction() {
        return $this->reaction;
    }

    function setProjectId($projectId) {
        $this->projectId = $projectId;
    }

    function setSubjectId($subjectId) {
        $this->subjectId = $subjectId;
    }

    function setPhaseId($phaseId) {
        $this->phaseId = $phaseId;
    }

    function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    function setViability($viability) {
        $this->viability = $viability;
    }

    function setSideEffects($sideEffects) {
        $this->sideEffects = $sideEffects;
    }

    function setDose($dose) {
        $this->dose = $dose;
    }

    function setReaction($reaction) {
        $this->reaction = $reaction;
    }
    
    //Own methods
    public function __toString() {
        return sprintf("ProjectID=%s, SubjectID=%s, PhaseID=%s, SessionID=%s, Viability=%s, SideEffects=%s, Dose=%s, Reaction=%s",
                $this->projectId,$this->subjectId,$this->phaseId, $this->sessionId, $this->viability, $this->sideEffects, $this->dose, $this->reaction);
    }
}
