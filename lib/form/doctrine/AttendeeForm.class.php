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
            'Aug',
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
      $new_disc[0] = 'Select One';
      foreach($discs as $key => $value) 
      {
          $new_disc[$value] = $key;
      }
      
      
      $this->widgetSchema['discipline'] = new sfWidgetFormChoice(array(
		'choices' => $new_disc,
                /*'add_empty' => 'Select One'*/)
      );
      
      $this->validatorSchema['discipline'] = new sfValidatorPass();  
      
      $this->widgetSchema['sex'] = new sfWidgetFormChoice(array(
				'choices' => array('Male' => 'Male', 'Female' => 'Female'),
				'expanded' => true)
	  );
      $this->setDefault('sex', 'Male');
      
      
      
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
		'choices' => array('0' => 'Select One'))
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
                    //'format' => '%month% - %day%',
	  		'months' => $this->getMonths(), //get months to show
                        'years' => $this->getYears(2011, 2020),
	 		'label' => 'Date of Birth'
	  )
	);
      
      
      $this->widgetSchema['visa'] = new sfWidgetFormSelectRadio(array('choices' => array(1 => 'Yes', 0 => 'No')));
      
      
      
      
      //dob stuff
	//years available to the form

    
	$this->widgetSchema['dob'] = new sfWidgetFormDate(
	  array(//'format' => '%year% - %month% - %day%',
	  		'years' => $this->getYears(1920, 2005), //get years to show 
	  		'months' => $this->getMonths(), //get months to show
	 		'label' => 'Date of Birth'
	  )
	);
        
        
        
        
	$this->widgetSchema['expiry_date'] = new sfWidgetFormDate(
	  array(//'format' => '%year% - %month% - %day%',
	  		'years' => $this->getYears(1920, 2050), //get years to show 
	  		'months' => $this->getMonths(), //get months to show
	 		'label' => 'Date of Birth'
	  )
	);
        
       
	$this->widgetSchema['profile_id'] = new sfWidgetFormInputHidden();
        $this->validatorSchema['profile_id'] = new sfValidatorPass();
       
        //get attendee division discipline id
        //$this->attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id')));
       
//$this->setDefaults(array('flight_datetime' => array('month' => 1, 'day' => 1, 'year' => 2011)));

       
        
        //till here 
        /*
        $this->setValidator('first_name', new sfValidatorString(
	         array('required' => true, 'min_length' => 2, 'max_length' => 45), 
	         array('min_length' => 'Your first name must have at least 2 characters.', 
	               'max_length' => 'Your username cannot be longer than 45 characters.')
        ));*/
        //first_name and last_name not blank
        /*
	 $this->setValidator('first_name', new sfValidatorAnd(array(
	     new sfValidatorString(
	         array('required' => true, 'min_length' => 2, 'max_length' => 45), 
	         array('min_length' => 'Your first name must have at least 2 characters.', 
	        	  'max_length' => 'Your username cannot be longer than 45 characters.')
	         ),
	     new sfValidatorRegex(
	         array('pattern' => '/^[A-Za-z]*$/i'),
	         array('invalid' => 'Your first name can only have letters (a-z)')
	         ),
	 ), array(), array('required' => 'Please enter a first name.')));
         
	 $this->setValidator('last_name', new sfValidatorAnd(array(
	     new sfValidatorString(
	         array('required' => true, 'min_length' => 2, 'max_length' => 45), 
	         array('min_length' => 'Your last name must have at least 2 characters.', 
	        	  'max_length' => 'Your last name cannot be longer than 45 characters.')
	         ),
	     new sfValidatorRegex(
	         array('pattern' => '/^[A-Za-z]*$/i'),
	         array('invalid' => 'Your last name can only have letters (a-z).')
	         ),
	 ), array(), array('required' => 'Please enter a last name.')));
        
        */
        //omg
        // $this->setDefaults(array('flight_datetime' => array('month' => 1, 'day' => 1, 'year' => 2011),
        //                        'flight_time' => array('hour' => 0, 'minute' => 0)));
        
         
  }
  
  
	
		

  
  
}
