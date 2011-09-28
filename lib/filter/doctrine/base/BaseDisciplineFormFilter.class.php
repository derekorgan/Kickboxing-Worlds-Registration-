<?php

/**
 * Discipline filter form base class.
 *
 * @package    my_derek
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDisciplineFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name' => new sfWidgetFormFilterInput(),
      'sex'  => new sfWidgetFormChoice(array('choices' => array('' => '', 'Male' => 'Male', 'Female' => 'Female'))),
    ));

    $this->setValidators(array(
      'name' => new sfValidatorPass(array('required' => false)),
      'sex'  => new sfValidatorChoice(array('required' => false, 'choices' => array('Male' => 'Male', 'Female' => 'Female'))),
    ));

    $this->widgetSchema->setNameFormat('discipline_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discipline';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'name' => 'Text',
      'sex'  => 'Enum',
    );
  }
}
