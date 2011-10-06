<?php

/**
 * Division form base class.
 *
 * @method Division getObject() Returns the current form's model object
 *
 * @package    kickboxing
 * @subpackage form
 * @author     Derek Organ
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDivisionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'discipline_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'), 'add_empty' => false)),
      'category'      => new sfWidgetFormInputText(),
      'weight'        => new sfWidgetFormInputText(),
      'status'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'discipline_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'))),
      'category'      => new sfValidatorString(array('max_length' => 255)),
      'weight'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
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
