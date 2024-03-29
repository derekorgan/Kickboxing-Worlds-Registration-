<?php

/**
 * BaseEvent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property text $description
 * @property date $starts
 * @property date $ends
 * @property date $register_by
 * @property string $token
 * @property Doctrine_Collection $Disciplines_E
 * @property Doctrine_Collection $Profiles_E
 * @property Doctrine_Collection $EventDisciplines
 * 
 * @method string              getName()             Returns the current record's "name" value
 * @method text                getDescription()      Returns the current record's "description" value
 * @method date                getStarts()           Returns the current record's "starts" value
 * @method date                getEnds()             Returns the current record's "ends" value
 * @method date                getRegisterBy()       Returns the current record's "register_by" value
 * @method string              getToken()            Returns the current record's "token" value
 * @method Doctrine_Collection getDisciplinesE()     Returns the current record's "Disciplines_E" collection
 * @method Doctrine_Collection getProfilesE()        Returns the current record's "Profiles_E" collection
 * @method Doctrine_Collection getEventDisciplines() Returns the current record's "EventDisciplines" collection
 * @method Event               setName()             Sets the current record's "name" value
 * @method Event               setDescription()      Sets the current record's "description" value
 * @method Event               setStarts()           Sets the current record's "starts" value
 * @method Event               setEnds()             Sets the current record's "ends" value
 * @method Event               setRegisterBy()       Sets the current record's "register_by" value
 * @method Event               setToken()            Sets the current record's "token" value
 * @method Event               setDisciplinesE()     Sets the current record's "Disciplines_E" collection
 * @method Event               setProfilesE()        Sets the current record's "Profiles_E" collection
 * @method Event               setEventDisciplines() Sets the current record's "EventDisciplines" collection
 * 
 * @package    kickboxing
 * @subpackage model
 * @author     Derek Organ
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEvent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('event');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('starts', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('ends', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('register_by', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Discipline as Disciplines_E', array(
             'refClass' => 'EventDiscipline',
             'local' => 'event_id',
             'foreign' => 'discipline_id'));

        $this->hasMany('Profile as Profiles_E', array(
             'local' => 'id',
             'foreign' => 'event_id'));

        $this->hasMany('EventDiscipline as EventDisciplines', array(
             'local' => 'id',
             'foreign' => 'event_id'));
    }
}