<?php
/**
 * Description of Home_Model
 * 
 * This class is an extension of the Model class
 * Within this class we handle the data needed for the Home page
 * 
 *
 * @author Dennis Kuijpers
 * @copyright (c) 2014, Dennis Kuijpers
 * 
 */
class Home_Model extends Model{
    
    /**
     *  function __construct will automatically generate when method is called
     */
    
    function __construct(){
        parent::__construct(); // Insert __construct method from Class controller
            
        Debug::sentence("Home model");
    }
}


