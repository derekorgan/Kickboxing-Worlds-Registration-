<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Attendee', 'doctrine');

/**
 * BaseAttendee
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $profile_id
 * @property integer $division_id
 * @property integer $type_id
 * @property string $first_name
 * @property string $last_name
 * @property enum $sex
 * @property string $club_name
 * @property string $accomodation
 * @property string $sharing_with1
 * @property string $sharing_with2
 * @property timestamp $flight_datetime
 * @property time $flight_time
 * @property string $flight_number
 * @property integer $visa
 * @property date $dob
 * @property string $passport
 * @property date $expiry_date
 * @property Division $Division
 * @property Type $Type
 * @property Profile $Profile
 * 
 * @method integer   getProfileId()       Returns the current record's "profile_id" value
 * @method integer   getDivisionId()      Returns the current record's "division_id" value
 * @method integer   getTypeId()          Returns the current record's "type_id" value
 * @method string    getFirstName()       Returns the current record's "first_name" value
 * @method string    getLastName()        Returns the current record's "last_name" value
 * @method enum      getSex()             Returns the current record's "sex" value
 * @method string    getClubName()        Returns the current record's "club_name" value
 * @method string    getAccomodation()    Returns the current record's "accomodation" value
 * @method string    getSharingWith1()    Returns the current record's "sharing_with1" value
 * @method string    getSharingWith2()    Returns the current record's "sharing_with2" value
 * @method timestamp getFlightDatetime()  Returns the current record's "flight_datetime" value
 * @method time      getFlightTime()      Returns the current record's "flight_time" value
 * @method string    getFlightNumber()    Returns the current record's "flight_number" value
 * @method integer   getVisa()            Returns the current record's "visa" value
 * @method date      getDob()             Returns the current record's "dob" value
 * @method string    getPassport()        Returns the current record's "passport" value
 * @method date      getExpiryDate()      Returns the current record's "expiry_date" value
 * @method Division  getDivision()        Returns the current record's "Division" value
 * @method Type      getType()            Returns the current record's "Type" value
 * @method Profile   getProfile()         Returns the current record's "Profile" value
 * @method Attendee  setProfileId()       Sets the current record's "profile_id" value
 * @method Attendee  setDivisionId()      Sets the current record's "division_id" value
 * @method Attendee  setTypeId()          Sets the current record's "type_id" value
 * @method Attendee  setFirstName()       Sets the current record's "first_name" value
 * @method Attendee  setLastName()        Sets the current record's "last_name" value
 * @method Attendee  setSex()             Sets the current record's "sex" value
 * @method Attendee  setClubName()        Sets the current record's "club_name" value
 * @method Attendee  setAccomodation()    Sets the current record's "accomodation" value
 * @method Attendee  setSharingWith1()    Sets the current record's "sharing_with1" value
 * @method Attendee  setSharingWith2()    Sets the current record's "sharing_with2" value
 * @method Attendee  setFlightDatetime()  Sets the current record's "flight_datetime" value
 * @method Attendee  setFlightTime()      Sets the current record's "flight_time" value
 * @method Attendee  setFlightNumber()    Sets the current record's "flight_number" value
 * @method Attendee  setVisa()            Sets the current record's "visa" value
 * @method Attendee  setDob()             Sets the current record's "dob" value
 * @method Attendee  setPassport()        Sets the current record's "passport" value
 * @method Attendee  setExpiryDate()      Sets the current record's "expiry_date" value
 * @method Attendee  setDivision()        Sets the current record's "Division" value
 * @method Attendee  setType()            Sets the current record's "Type" value
 * @method Attendee  setProfile()         Sets the current record's "Profile" value
 * 
 * @package    kickboxing
 * @subpackage model
 * @author     Derek Organ
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAttendee extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('attendee');
        $this->hasColumn('profile_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('division_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('type_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sex', 'enum', 6, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'Male',
              1 => 'Female',
             ),
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('club_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('accomodation', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('sharing_with1', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sharing_with2', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('flight_datetime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('flight_time', 'time', null, array(
             'type' => 'time',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('flight_number', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('visa', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('dob', 'date', 25, array(
             'type' => 'date',
             'notnull' => false,
             'length' => 25,
             ));
        $this->hasColumn('passport', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('expiry_date', 'date', 25, array(
             'type' => 'date',
             'notnull' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Division', array(
             'local' => 'division_id',
             'foreign' => 'id'));

        $this->hasOne('Type', array(
             'local' => 'type_id',
             'foreign' => 'id'));

        $this->hasOne('Profile', array(
             'local' => 'profile_id',
             'foreign' => 'id'));
    }
}