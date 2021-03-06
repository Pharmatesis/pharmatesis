<?php

/** 
 * Class that will connect the object with the DB
 * @name ProjectDAO.php
 * @author Joan Fernández
 * @date 2017-02-23
 * @version 1.0
*/
class ProjectDAO {
    
    /** 
    * Inserts the object into the DB
    * @name insertProject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $project Object to insert
    * @return $rowsAffected Number of rows affected
    */
    public static function insertProject($project) {
        return 0;
    }
    
    /** 
    * Erases the object from the DB
    * @name deleteProject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $project Object to delete
    * @return $rowsAffected Number of rows affected
    */
    public static function deleteProject($project) {
        return 0;
    }
    
    /** 
    * Modifies the object into the DB
    * @name modifyProject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $project Object to modify
    * @return $rowsAffected Number of rows affected
    */
    public static function modifyProject($project) {
        return 0;
    }
    
    /** 
    * Finds an object into the DB
    * @name findProject()
    * @author Joan Fernández
    * @date 2017-02-23
    * @version 1.0
    * @param $project Object to find
    * @return $foundProject Founded object
    */
    public static function findProject($project) {
        $foundProject = null;        
        return $foundProject;
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
