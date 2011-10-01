<?php

/**
 * attendee actions.
 *
 * @package    my_derek
 * @subpackage attendee
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class attendeeActions extends sfActions
{
  
    
    public function getProfileId()
    {
        $this->user_id = $this->getUser()->getGuardUser()->getId();

        $profile_id_obj = Doctrine_Core::getTable('Profile')->findBySfGuardUserId(array($this->user_id));


        foreach($profile_id_obj as $obj) //It's a Collection.
            $this->profile_id = $obj->getId();
        
        return $this->profile_id;
    }
    
    
  public function executeIndex(sfWebRequest $request)
  {
    $this->user_id = $this->getUser()->getGuardUser()->getId();
    
    //single profile
    
    $profile_coll = Doctrine_Core::getTable('Profile')->findBySfGuardUserId(array($this->user_id));
    $profile = $profile_coll[0];
    
    $profile_id = $profile->getId();
    
    
    $this->attendees = Doctrine_Core::getTable('Attendee')->findByProfileId(array($profile_id));
  }
 
    
    
  public function executeAjax(sfWebRequest $request)
  {
        $this->setLayout(false);
	$q = Doctrine::getTable('Division')
	     ->createQuery('u')
	     ->select('u.category as category')
             ->Where('u.discipline_id = ?', $request->getParameter('id'))
             ->andWhere('u.status = ?', 1);
        
        $this->divisions = $q->execute();
        
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->attendee);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AttendeeForm();
    
    $this->profile_id = $this->getProfileId();
    
    
  }


  public function executeCreate(sfWebRequest $request)
  {
      
    $this->profile_id = $this->getProfileId();
    
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    
    $this->form = new AttendeeForm();
    
    
    
    //RIGHT HERE
    
    //END

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    
   
  }

  public function executeEdit(sfWebRequest $request)
  {
      
     $this->profile_id = $this->getProfileId();
      
     //$this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->findOneByProfileId(array($this->profile_id)), sprintf('Object address does not exist.'));
    //$this->forward404Unless($address = Doctrine_Core::getTable('Address')->findOneByUserId(array($this->id)), sprintf('Object address does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($attendee->getProfileId() == $this->profile_id);
    
    
     $this->form = new AttendeeForm($attendee);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->profile_id = $attendee->getProfileId();
    $this->form = new AttendeeForm($attendee);
    
    
    
    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

     $this->profile_id = $this->getProfileId();
     
     
      
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->forward404Unless($attendee->getProfileId() == $this->profile_id);
    
    $attendee->delete();

    $this->redirect('attendee/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $attendee = $form->save();

      $this->redirect('attendee/index');
    }
  }
}
