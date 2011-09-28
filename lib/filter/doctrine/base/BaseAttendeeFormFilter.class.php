<?php

/**
 * Attendee filter form base class.
 *
 * @package    my_derek
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAttendeeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'profile_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => true)),
      'division_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Division'), 'add_empty' => true)),
      'type_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Type'), 'add_empty' => true)),
      'first_name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sex'             => new sfWidgetFormChoice(array('choices' => array('' => '', 'Male' => 'Male', 'Female' => 'Female'))),
      'club_name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'accomodation'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sharing_with1'   => new sfWidgetFormFilterInput(),
      'sharing_with2'   => new sfWidgetFormFilterInput(),
      'flight_datetime' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'flight_number'   => new sfWidgetFormFilterInput(),
      'visa'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dob'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'passport'        => new sfWidgetFormFilterInput(),
      'expiry_date'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'profile_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Profile'), 'column' => 'id')),
      'division_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Division'), 'column' => 'id')),
      'type_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Type'), 'column' => 'id')),
      'first_name'      => new sfValidatorPass(array('required' => false)),
      'last_name'       => new sfValidatorPass(array('required' => false)),
      'sex'             => new sfValidatorChoice(array('required' => false, 'choices' => array('Male' => 'Male', 'Female' => 'Female'))),
      'club_name'       => new sfValidatorPass(array('required' => false)),
      'accomodation'    => new sfValidatorPass(array('required' => false)),
      'sharing_with1'   => new sfValidatorPass(array('required' => false)),
      'sharing_with2'   => new sfValidatorPass(array('required' => false)),
      'flight_datetime' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'flight_number'   => new sfValidatorPass(array('required' => false)),
      'visa'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dob'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'passport'        => new sfValidatorPass(array('required' => false)),
      'expiry_date'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('attendee_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Attendee';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'profile_id'      => 'ForeignKey',
      'division_id'     => 'ForeignKey',
      'type_id'         => 'ForeignKey',
      'first_name'      => 'Text',
      'last_name'       => 'Text',
      'sex'             => 'Enum',
      'club_name'       => 'Text',
      'accomodation'    => 'Text',
      'sharing_with1'   => 'Text',
      'sharing_with2'   => 'Text',
      'flight_datetime' => 'Date',
      'flight_number'   => 'Text',
      'visa'            => 'Number',
      'dob'             => 'Date',
      'passport'        => 'Text',
      'expiry_date'     => 'Date',
    );
  }
}
