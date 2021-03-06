<?php

/** 
 * Class that will connect the object with the DB
 * @name DiseaseDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class DiseaseDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertDisease()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $disease Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertDisease($disease) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteDisease()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $disease Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteDisease($disease) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyDisease()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $disease Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyDisease($disease) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findDisease()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $disease Object to find
    * @return $foundDisease Founded object
    */
    public static function findDisease($disease) {
        $foundDisease = null;        
        return $foundDisease;
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
