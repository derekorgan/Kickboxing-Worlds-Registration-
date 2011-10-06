<?php

/**
 * Event form base class.
 *
 * @method Event getObject() Returns the current form's model object
 *
 * @package    kickboxing
 * @subpackage form
 * @author     Derek Organ
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormInputText(),
      'starts'             => new sfWidgetFormDate(),
      'ends'               => new sfWidgetFormDate(),
      'register_by'        => new sfWidgetFormDate(),
      'disciplines_e_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Discipline')),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'        => new sfValidatorPass(array('required' => false)),
      'starts'             => new sfValidatorDate(array('required' => false)),
      'ends'               => new sfValidatorDate(array('required' => false)),
      'register_by'        => new sfValidatorDate(array('required' => false)),
      'disciplines_e_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Discipline', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['disciplines_e_list']))
    {
      $this->setDefault('disciplines_e_list', $this->object->Disciplines_E->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveDisciplines_EList($con);

    parent::doSave($con);
  }

  public function saveDisciplines_EList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['disciplines_e_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Disciplines_E->getPrimaryKeys();
    $values = $this->getValue('disciplines_e_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Disciplines_E', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Disciplines_E', array_values($link));
    }
  }

}
