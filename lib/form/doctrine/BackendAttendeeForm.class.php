<?php

/**
 * Attendee form.
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendAttendeeForm extends AttendeeForm
{
    
        
  public function configure()
  {
      $this->widgetSchema['profile_id'] = new sfWidgetFormDoctrineChoice(array('model' => 
                        $this->getRelatedModelName('Profile'), 'add_empty' => true));
      $this->validatorSchema['profile_id'] = new sfValidatorDoctrineChoice(array('model' => 
                        $this->getRelatedModelName('Profile'), 'required' => false));

  }
  
  
	
		

  
  
}
