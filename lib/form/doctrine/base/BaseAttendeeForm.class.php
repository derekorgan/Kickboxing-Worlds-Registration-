<?php

/**
 * Attendee form base class.
 *
 * @method Attendee getObject() Returns the current form's model object
 *
 * @package    registration
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAttendeeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'team_administrator_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamAdministrator'), 'add_empty' => false)),
      'division_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Division'), 'add_empty' => false)),
      'type_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Type'), 'add_empty' => false)),
      'first_name'            => new sfWidgetFormInputText(),
      'last_name'             => new sfWidgetFormInputText(),
      'accomodation'          => new sfWidgetFormInputText(),
      'sharing_with'          => new sfWidgetFormInputText(),
      'flight_datetime'       => new sfWidgetFormDateTime(),
      'flight_number'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'team_administrator_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TeamAdministrator'))),
      'division_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Division'))),
      'type_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Type'))),
      'first_name'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'last_name'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'accomodation'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sharing_with'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'flight_datetime'       => new sfValidatorDateTime(array('required' => false)),
      'flight_number'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
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
