<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Division', 'doctrine');

/**
 * BaseDivision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $discipline_id
 * @property string $category
 * @property string $weight
 * @property integer $status
 * @property Discipline $Discipline
 * @property Doctrine_Collection $Attendee
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getDisciplineId()  Returns the current record's "discipline_id" value
 * @method string              getCategory()      Returns the current record's "category" value
 * @method string              getWeight()        Returns the current record's "weight" value
 * @method integer             getStatus()        Returns the current record's "status" value
 * @method Discipline          getDiscipline()    Returns the current record's "Discipline" value
 * @method Doctrine_Collection getAttendee()      Returns the current record's "Attendee" collection
 * @method Division            setId()            Sets the current record's "id" value
 * @method Division            setDisciplineId()  Sets the current record's "discipline_id" value
 * @method Division            setCategory()      Sets the current record's "category" value
 * @method Division            setWeight()        Sets the current record's "weight" value
 * @method Division            setStatus()        Sets the current record's "status" value
 * @method Division            setDiscipline()    Sets the current record's "Discipline" value
 * @method Division            setAttendee()      Sets the current record's "Attendee" collection
 * 
 * @package    registration
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDivision extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('division');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('discipline_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('category', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('weight', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Discipline', array(
             'local' => 'discipline_id',
             'foreign' => 'id'));

        $this->hasMany('Attendee', array(
             'local' => 'id',
             'foreign' => 'division_id'));
    }
}