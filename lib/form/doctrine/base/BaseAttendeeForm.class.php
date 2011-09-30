<?php

/**
 * Attendee form base class.
 *
 * @method Attendee getObject() Returns the current form's model object
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAttendeeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'profile_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => false)),
      'division_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Division'), 'add_empty' => true)),
      'type_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Type'), 'add_empty' => false)),
      'first_name'      => new sfWidgetFormInputText(),
      'last_name'       => new sfWidgetFormInputText(),
      'sex'             => new sfWidgetFormChoice(array('choices' => array('Male' => 'Male', 'Female' => 'Female'))),
      'club_name'       => new sfWidgetFormInputText(),
      'accomodation'    => new sfWidgetFormInputText(),
      'sharing_with1'   => new sfWidgetFormInputText(),
      'sharing_with2'   => new sfWidgetFormInputText(),
      'flight_datetime' => new sfWidgetFormDateTime(),
      'flight_time'     => new sfWidgetFormTime(),
      'flight_number'   => new sfWidgetFormInputText(),
      'visa'            => new sfWidgetFormInputText(),
      'dob'             => new sfWidgetFormDate(),
      'passport'        => new sfWidgetFormInputText(),
      'expiry_date'     => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'profile_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'))),
      'division_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Division'), 'required' => false)),
      'type_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Type'))),
      'first_name'      => new sfValidatorString(array('max_length' => 255)),
      'last_name'       => new sfValidatorString(array('max_length' => 255)),
      'sex'             => new sfValidatorChoice(array('choices' => array(0 => 'Male', 1 => 'Female'), 'required' => false)),
      'club_name'       => new sfValidatorString(array('max_length' => 255)),
      'accomodation'    => new sfValidatorString(array('max_length' => 45)),
      'sharing_with1'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sharing_with2'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'flight_datetime' => new sfValidatorDateTime(array('required' => false)),
      'flight_time'     => new sfValidatorTime(array('required' => false)),
      'flight_number'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'visa'            => new sfValidatorInteger(array('required' => false)),
      'dob'             => new sfValidatorDate(array('required' => false)),
      'passport'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'expiry_date'     => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('attendee[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Attendee';
  }

}
