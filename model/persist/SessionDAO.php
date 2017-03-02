<?php

/** 
 * Class that will connect the object with the DB
 * @name SessionDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class SessionDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertSession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $session Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertSession($session) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteSession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $session Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteSession($session) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifySession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $session Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifySession($session) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findSession()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $session Object to find
    * @return $foundSession Founded object
    */
    public static function findSession($session) {
        $foundSession = null;        
        return $foundSession;
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
