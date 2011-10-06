<?php

/**
 * EventDiscipline filter form base class.
 *
 * @package    kickboxing
 * @subpackage filter
 * @author     Derek Organ
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEventDisciplineFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('event_discipline_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EventDiscipline';
  }

  public function getFields()
  {
    return array(
      'event_id'      => 'Number',
      'discipline_id' => 'Number',
    );
  }
}
