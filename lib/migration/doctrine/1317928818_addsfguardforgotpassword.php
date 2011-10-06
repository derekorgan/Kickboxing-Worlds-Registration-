<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfguardforgotpassword extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_guard_forgot_password', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'unique_key' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'expires_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_guard_forgot_password');
    }
}