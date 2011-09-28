<?php

/**
 * EventDiscipline form base class.
 *
 * @method EventDiscipline getObject() Returns the current form's model object
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventDisciplineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'event_id'      => new sfWidgetFormInputHidden(),
      'discipline_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'event_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('event_id')), 'empty_value' => $this->getObject()->get('event_id'), 'required' => false)),
      'discipline_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('discipline_id')), 'empty_value' => $this->getObject()->get('discipline_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event_discipline[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EventDiscipline';
  }

}
