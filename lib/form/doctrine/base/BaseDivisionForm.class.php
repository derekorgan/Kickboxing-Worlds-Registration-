<?php

/**
 * Division form base class.
 *
 * @method Division getObject() Returns the current form's model object
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDivisionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'discipline_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'), 'add_empty' => true)),
      'attende_id'    => new sfWidgetFormInputText(),
      'category'      => new sfWidgetFormInputText(),
      'weight'        => new sfWidgetFormInputText(),
      'status'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'discipline_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'), 'required' => false)),
      'attende_id'    => new sfValidatorInteger(array('required' => false)),
      'category'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'weight'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'status'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('division[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Division';
  }

}
