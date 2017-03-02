<?php

/** 
 * Class that will connect the object with the DB
 * @name PhaseDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class PhaseDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertPhase()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $phase Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertPhase($phase) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deletePhase()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $phase Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deletePhase($phase) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyPhase()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $phase Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyPhase($phase) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findPhase()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $phase Object to find
    * @return $foundPhase Founded object
    */
    public static function findPhase($phase) {
        $foundPhase = null;
        
        return $foundPhase;
    }
    
    /** 
    * Find an object using a clause
    * @name findWhere()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $whereClause Clause to find
    * @return array Founded objects
    */
    public function findWhere($whereClause) {
        return array();
    }
}
