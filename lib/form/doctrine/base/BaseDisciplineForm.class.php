<?php

/**
 * Discipline form base class.
 *
 * @method Discipline getObject() Returns the current form's model object
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDisciplineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'name' => new sfWidgetFormInputText(),
      'sex'  => new sfWidgetFormChoice(array('choices' => array('Male' => 'Male', 'Female' => 'Female'))),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sex'  => new sfValidatorChoice(array('choices' => array(0 => 'Male', 1 => 'Female'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discipline[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discipline';
  }

}
