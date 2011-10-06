<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Division', 'doctrine');

/**
 * BaseDivision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $discipline_id
 * @property string $category
 * @property string $weight
 * @property integer $status
 * @property Discipline $Discipline
 * @property Doctrine_Collection $Attendees_Div
 * 
 * @method integer             getDisciplineId()  Returns the current record's "discipline_id" value
 * @method string              getCategory()      Returns the current record's "category" value
 * @method string              getWeight()        Returns the current record's "weight" value
 * @method integer             getStatus()        Returns the current record's "status" value
 * @method Discipline          getDiscipline()    Returns the current record's "Discipline" value
 * @method Doctrine_Collection getAttendeesDiv()  Returns the current record's "Attendees_Div" collection
 * @method Division            setDisciplineId()  Sets the current record's "discipline_id" value
 * @method Division            setCategory()      Sets the current record's "category" value
 * @method Division            setWeight()        Sets the current record's "weight" value
 * @method Division            setStatus()        Sets the current record's "status" value
 * @method Division            setDiscipline()    Sets the current record's "Discipline" value
 * @method Division            setAttendeesDiv()  Sets the current record's "Attendees_Div" collection
 * 
 * @package    kickboxing
 * @subpackage model
 * @author     Derek Organ
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDivision extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('division');
        $this->hasColumn('discipline_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('category', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('weight', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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

        $this->hasMany('Attendee as Attendees_Div', array(
             'local' => 'id',
             'foreign' => 'division_id'));
    }
}