<?php

/**
 * ProfileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProfileTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProfileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Profile');
    }
    
    
   public function getId()
   {
       return $this->getFirstName . " " . $this->getLastName();
   }
}