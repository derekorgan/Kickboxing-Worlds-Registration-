<?php

/**
 * Attendee form.
 *
 * @package    my_derek
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AttendeeForm extends BaseAttendeeForm
{
    
    
	public function getYears($from, $to)
	{
		$years = range($from, $to);
		return array_combine($years, $years);
	}
	
	static public $months = array(
		/*'1' => 'January', //important key
		'February', 
		'March', 
		'April', 
		'May', 
		'June', 
		'July', 
		'August', 
		'September',
	  	'October', 
	  	'November', 
	  	'December'*/
              '1' => 'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
                
	); 
	
	public function getMonths()
	{
		return self::$months;
	}
        
        
  public function configure()
  {
        $this->disciplines = Doctrine_Core::getTable('Discipline')
          ->createQuery('a')
          ->execute();
        
      $discs = array();
      foreach($this->disciplines as $disc)
      {
          $discs[$disc->getName() . " - " . $disc->getSex()] = $disc->getId();
          //var_dump($disc->getName());
      }
      
      $new_disc = array();
      foreach($discs as $key => $value) 
      {
          $new_disc[$value] = $key;

      }
      
      
      $this->widgetSchema['discipline'] = new sfWidgetFormChoice(array(
		'choices' => $new_disc)
      );
      
      $this->validatorSchema['discipline'] = new sfValidatorPass();  
      
      
      
      
      
      
      
      
      //DIVISION
      
        $this->divisions = Doctrine_Core::getTable('Division')
          ->createQuery('a')
          ->execute();
        
      $divs = array();
      foreach($this->divisions as $disc)
      {
          $divs[$disc->getCategory() . " - Under " . $disc->getWeight()] = $disc->getId();
          //var_dump($disc->getName());
      }
      
      $new_divs = array();
      foreach($divs as $key => $value) 
      {
          $new_divs[$value] = $key;

      }
      $this->widgetSchema['division_id'] = new sfWidgetFormChoice(array(
		'choices' => $new_divs)
      );
      
      

      
      
      //accomodation
      $accomodations = array (
           'Single' => 'Single',
           'Double' => 'Double',
           'Triple' => 'Triple'
      );
      $this->widgetSchema['accomodation'] = new sfWidgetFormChoice(array(
		'choices' => $accomodations)
      );
      

	$this->widgetSchema['flight_datetime'] = new sfWidgetFormDate(
	  array(//'format' => '%year% - %month% - %day%',
                    'format' => '%month% - %day%',
	  		 //get years to show /*array_combine($years, $years)*/
	  		'months' => $this->getMonths(), //get months to show
	 		'label' => 'Date of Birth'
	  )
	);
      
      
      $this->widgetSchema['visa'] = new sfWidgetFormSelectRadio(array('choices' => array(1 => 'Yes', 0 => 'No')));
      
      
      
      
      //dob stuff
	//years available to the form

    
	$this->widgetSchema['dob'] = new sfWidgetFormDate(
	  array(//'format' => '%year% - %month% - %day%',
	  		'years' => $this->getYears(1920, 2005), //get years to show /*array_combine($years, $years)*/
	  		'months' => $this->getMonths(), //get months to show
	 		'label' => 'Date of Birth'
	  )
	);
        
        
        
        
	$this->widgetSchema['expiry_date'] = new sfWidgetFormDate(
	  array(//'format' => '%year% - %month% - %day%',
	  		'years' => $this->getYears(1920, 2050), //get years to show /*array_combine($years, $years)*/
	  		'months' => $this->getMonths(), //get months to show
	 		'label' => 'Date of Birth'
	  )
	);
        
       
	$this->widgetSchema['profile_id'] = new sfWidgetFormInputHidden();
        $this->validatorSchema['profile_id'] = new sfValidatorPass();
       
        
        
        
        //omg
        // $this->setDefaults(array('flight_datetime' => array('month' => 1, 'day' => 1, 'year' => 2011),
        //                        'flight_time' => array('hour' => 0, 'minute' => 0)));
        
         
  }
  
  
	
		

  
  
}
