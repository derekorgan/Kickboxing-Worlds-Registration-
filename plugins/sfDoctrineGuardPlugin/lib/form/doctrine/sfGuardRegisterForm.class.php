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
		         array('required' => true, 'min_length' => 4, 'max_length' => 20), 
		         array('min_length' => 'Your username must have at least 4 characters.', 
                               'max_length' => 'Your username cannot be longer than 20 characters.')
		         ),
		     new sfValidatorRegex(
		         array('pattern' => '/^[A-Za-z0-9]*$/i'),
		         array('invalid' => 'Your username can only have letters (A-Z) or numbers (0-9).')
		         ),
         ), array(), array('required' => 'Please enter a username.')));
		 
		 
		 
         $this->setValidator('first_name', new sfValidatorRegex(
	        array('pattern' => '/^[A-Za-z0-9]*$/i'),
	        array('invalid' => 'Your first name can only have letters (A-Z) or numbers (0-9).' ,
                       'required' => 'First name is required.'
	 )));
         
		
	        
         $this->setValidator('last_name', new sfValidatorRegex(
	         array('pattern' => '/^[A-Za-z0-9]*$/i'),
	         array('invalid' => 'Your last name can only have letters (A-Z) or numbers (0-9).' ,
                       'required' => 'Last name is required.')
	     ));
	     
	  $this->setValidator('email_address', new sfValidatorEmail(
			array(), 
			array('required' => 'Please enter an email.',
                              'invalid' => 'This email is not valid.'
	  )));
          
          
      
      
  }
}