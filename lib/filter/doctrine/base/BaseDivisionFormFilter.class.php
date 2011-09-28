<?php

/**
 * Division filter form base class.
 *
 * @package    my_derek
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDivisionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'discipline_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Discipline'), 'add_empty' => true)),
      'attende_id'    => new sfWidgetFormFilterInput(),
      'category'      => new sfWidgetFormFilterInput(),
      'weight'        => new sfWidgetFormFilterInput(),
      'status'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'discipline_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Discipline'), 'column' => 'id')),
      'attende_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'category'      => new sfValidatorPass(array('required' => false)),
      'weight'        => new sfValidatorPass(array('required' => false)),
      'status'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('division_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Division';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'discipline_id' => 'ForeignKey',
      'attende_id'    => 'Number',
      'category'      => 'Text',
      'weight'        => 'Text',
      'status'        => 'Number',
    );
  }
}
