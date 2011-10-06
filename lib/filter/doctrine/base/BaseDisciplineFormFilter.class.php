<?php

/**
 * Discipline filter form base class.
 *
 * @package    kickboxing
 * @subpackage filter
 * @author     Derek Organ
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDisciplineFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sex'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'Male' => 'Male', 'Female' => 'Female'))),
      'event_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Event')),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'sex'        => new sfValidatorChoice(array('required' => false, 'choices' => array('Male' => 'Male', 'Female' => 'Female'))),
      'event_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Event', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discipline_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addEventListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.EventDiscipline EventDiscipline')
      ->andWhereIn('EventDiscipline.event_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Discipline';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'sex'        => 'Enum',
      'event_list' => 'ManyKey',
    );
  }
}
