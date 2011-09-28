<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EventDiscipline', 'doctrine');

/**
 * BaseEventDiscipline
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $event_id
 * @property integer $discipline_id
 * @property Event $Event
 * @property Discipline $Discipline
 * 
 * @method integer         getId()            Returns the current record's "id" value
 * @method integer         getEventId()       Returns the current record's "event_id" value
 * @method integer         getDisciplineId()  Returns the current record's "discipline_id" value
 * @method Event           getEvent()         Returns the current record's "Event" value
 * @method Discipline      getDiscipline()    Returns the current record's "Discipline" value
 * @method EventDiscipline setId()            Sets the current record's "id" value
 * @method EventDiscipline setEventId()       Sets the current record's "event_id" value
 * @method EventDiscipline setDisciplineId()  Sets the current record's "discipline_id" value
 * @method EventDiscipline setEvent()         Sets the current record's "Event" value
 * @method EventDiscipline setDiscipline()    Sets the current record's "Discipline" value
 * 
 * @package    my_derek
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEventDiscipline extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('event_discipline');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('event_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('discipline_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Event', array(
             'local' => 'event_id',
             'foreign' => 'id'));

        $this->hasOne('Discipline', array(
             'local' => 'discipline_id',
             'foreign' => 'id'));
    }
}