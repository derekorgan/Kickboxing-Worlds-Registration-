<?php

/**
 * EventDiscipline form base class.
 *
 * @method EventDiscipline getObject() Returns the current form's model object
 *
 * @package    registration
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventDisciplineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'event_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => false)),
      'discipline_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'event_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Event'))),
      'discipline_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'))),
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
