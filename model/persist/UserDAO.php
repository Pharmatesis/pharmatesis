<?php

/** 
 * Class that will connect the object with the DB
 * @name UserDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class UserDAO {
    
   /** 
    * Inserts the object into the DB
    * @name insertUser()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $user Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertUser($user) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteUser()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $user Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteUser($user) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyUser()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $user Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyUser($user) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findUser()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $user Object to find
    * @return $foundUser Founded object
    */
    public static function findUser($user) {        
        $foundUser = null;
        return $foundUser;
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
