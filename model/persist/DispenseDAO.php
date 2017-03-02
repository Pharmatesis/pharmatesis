<?php

/** 
 * Class that will connect the object with the DB
 * @name DispenseDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class DispenseDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $dispense Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertDispense($dispense) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $dispense Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteDispense($dispense) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $dispense Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyDispense($dispense) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $dispense Object to find
    * @return $foundDispense Founded object
    */
    public static function findDispense($dispense) {
        $foundDispense = null;
        
        return $foundDispense;
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
