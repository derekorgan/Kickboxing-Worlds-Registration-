<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
              
        $this->setValidator('username', new sfValidatorAnd(array(
		     new sfValidatorString(
		         array('required' => true, 'min_length' => 3, 'max_length' => 20), 
		         array('min_length' => 'Your username must have at least 3 characters.', 
                               'max_length' => 'Your username cannot be longer than 20 characters.')
		         )/*,
		     new sfValidatorRegex(
		         array('pattern' => '/^[A-Za-z0-9]*$/i'),
		         array('invalid' => 'Your username can only have letters (A-Z) or numbers (0-9).')
		         ),*/
         ), array(), array('required' => 'Please enter a username.')));
		 
	 
	 $this->mergePostValidator(
	      new sfValidatorCallback(array('callback' => array($this, 'checkToken')))
	 );
         

        
      $this->widgetSchema['token'] = new sfWidgetFormInput(array());
      $this->setValidator('token', new sfValidatorString(
		         array('required' => true), array('required' => 'The token does not match the one sent to you by the event organizer.')));
      /*
         $this->setValidator('token', new sfValidatorRegex(
	         //array('pattern' => '/^[A-Za-z0-9]*$/i'),
	         array(//'invalid' => 'Your last name can only have letters (A-Z) or numbers (0-9).' ,
                       'pattern' => '/^Dublin 11$/',
                       'required' => 'Token is required.',
                        //'invalid' => 'Invalid token.'
                     )
	     ));*/
      
      //$this->validatorSchema['token'] = new sfValidatorPass(); //NEEDED!
		/* 
         $this->setValidator('first_name', new sfValidatorRegex(
	        //array('pattern' => '/^[A-Za-z0-9]*$/i'),
	        array(//'invalid' => 'Your first name can only have letters (A-Z) or numbers (0-9).' ,
                       'required' => 'First name is required.'
	 )));
         
		
	        
         $this->setValidator('last_name', new sfValidatorRegex(
	         //array('pattern' => '/^[A-Za-z0-9]*$/i'),
	         array(//'invalid' => 'Your last name can only have letters (A-Z) or numbers (0-9).' ,
                       'required' => 'Last name is required.')
	     ));
	     */
	  $this->setValidator('email_address', new sfValidatorEmail(
			array(), 
			array('required' => 'Please enter an email.',
                              'invalid' => 'This email is not valid.'
	  )));
          
      
      //country
      $this->widgetSchema['country'] = new sfWidgetFormInputText(array()
      );
      $this->validatorSchema['country'] = new sfValidatorPass();
      
      
  } 

  
	//callback validator http://www.symfony-project.org/cookbook/1_2/en/conditional-validator
	public function checkToken($validator, $values)
	{
            $parameter = sfConfig::get('app_event_id', 1); //1 is default value if nothing is found
            
            $event = Doctrine_Core::getTable('Event')->find(array($parameter));
            
            if(!empty($values['token']) && (strtolower($values['token']) != trim(strtolower($event->getToken())))) {
		//throw new sfValidatorError($validator, 'The username does not exists.', array('invalid' => 'Its invalid'));
		$error = new sfValidatorError($validator, 'The token does not match the one sent to you by the event organizer.');
 
    		// throw an error bound to the x field
    		throw new sfValidatorErrorSchema($validator, array('token' => $error));
            } 
            return $values;
            
            //find 
            /*
		if(empty($values['reffered_by']))
			return $values;
		$num = Doctrine_Query::create()
		   ->select('COUNT(t.username) AS num_users')
		   ->from('sfGuardUser t')
		   ->where('t.username = ?', $values['referred_by']);
		   
		$data = $num->execute();
		//foreach($data as $dat)
		//	var_dump($dat['num_users']);
		$num = $data[0]['num_users'];
		
		//var_dump($num);
		//var_dump($num == '0');
		if($num == '0')
		{
			//throw new sfValidatorError($validator, 'The username does not exists.', array('invalid' => 'Its invalid'));
			$error = new sfValidatorError($validator, 'This username does not exists.');
 
    		// throw an error bound to the x field
    		throw new sfValidatorErrorSchema($validator, array('referred_by' => $error));
		}
		return $values;

            */
        }
		
}