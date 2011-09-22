<?php

/**
 * Attendee filter form base class.
 *
 * @package    registration
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAttendeeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'team_administrator_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamAdministrator'), 'add_empty' => true)),
      'division_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Division'), 'add_empty' => true)),
      'type_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Type'), 'add_empty' => true)),
      'first_name'            => new sfWidgetFormFilterInput(),
      'last_name'             => new sfWidgetFormFilterInput(),
      'accomodation'          => new sfWidgetFormFilterInput(),
      'sharing_with'          => new sfWidgetFormFilterInput(),
      'flight_datetime'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'flight_number'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'team_administrator_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamAdministrator'), 'column' => 'id')),
      'division_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Division'), 'column' => 'id')),
      'type_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Type'), 'column' => 'id')),
      'first_name'            => new sfValidatorPass(array('required' => false)),
      'last_name'             => new sfValidatorPass(array('required' => false)),
      'accomodation'          => new sfValidatorPass(array('required' => false)),
      'sharing_with'          => new sfValidatorPass(array('required' => false)),
      'flight_datetime'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'flight_number'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('attendee_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Attendee';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'team_administrator_id' => 'ForeignKey',
      'division_id'           => 'ForeignKey',
      'type_id'               => 'ForeignKey',
      'first_name'            => 'Text',
      'last_name'             => 'Text',
      'accomodation'          => 'Text',
      'sharing_with'          => 'Text',
      'flight_datetime'       => 'Date',
      'flight_number'         => 'Text',
    );
  }
}
