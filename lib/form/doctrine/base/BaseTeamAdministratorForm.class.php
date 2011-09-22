<?php

/**
 * TeamAdministrator form base class.
 *
 * @method TeamAdministrator getObject() Returns the current form's model object
 *
 * @package    registration
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamAdministratorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'event_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => false)),
      'first_name' => new sfWidgetFormInputText(),
      'last_name'  => new sfWidgetFormInputText(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'team_name'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'event_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Event'))),
      'first_name' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'last_name'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'username'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'password'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'team_name'  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('team_administrator[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamAdministrator';
  }

}
