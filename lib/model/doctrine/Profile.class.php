<?php

/**
 * Profile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    my_derek
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Profile extends BaseProfile
{
   
   public function getId()
   {
       return $this->first_name . " " . $this->last_name;
   }
}