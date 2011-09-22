<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Type', 'doctrine');

/**
 * BaseType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Attendee
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getName()     Returns the current record's "name" value
 * @method Doctrine_Collection getAttendee() Returns the current record's "Attendee" collection
 * @method Type                setId()       Sets the current record's "id" value
 * @method Type                setName()     Sets the current record's "name" value
 * @method Type                setAttendee() Sets the current record's "Attendee" collection
 * 
 * @package    registration
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('type');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Attendee', array(
             'local' => 'id',
             'foreign' => 'type_id'));
    }
}