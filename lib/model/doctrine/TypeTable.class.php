<?php

/**
 * TypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TypeTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Type');
    }
   public function __toString()
   {
       return $this->getName();
   }
}