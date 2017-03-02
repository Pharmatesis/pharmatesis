<?php

/** 
 * Class that will connect the object with the DB
 * @name SubjectDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class SubjectDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertSubject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $subject Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertSubject($subject) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteSubject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $subject Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteSubject($subject) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifySubject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $subject Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifySubject($subject) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findSubject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $subject Object to find
    * @return $foundSubject Founded object
    */
    public static function findSubject($subject) {
        $foundSubject = null;        
        return $foundSubject;
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
