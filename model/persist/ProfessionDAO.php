<?php

/** 
 * Class that will connect the object with the DB
 * @name ProfessionDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class ProfessionDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $profession Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertProfession($profession) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $profession Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteProfession($profession) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $profession Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyProfession($profession) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findProfession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $profession Object to find
    * @return $foundProfession Founded object
    */
    public static function findProfession($profession) {
        $foundProfession = null;
        
        return $foundProfession;
    }
    
    /** 
    * Find an object using a clause
    * @name findWhere()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $whereClause Clause to fins
    * @return array Founded objects
    */
    public function findWhere($whereClause) {
        return array();
    }
}
