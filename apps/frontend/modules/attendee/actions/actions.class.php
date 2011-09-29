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
  public function executeIndex(sfWebRequest $request)
  {
    $this->attendees = Doctrine_Core::getTable('Attendee')
      ->createQuery('a')
      ->execute();
    
    /*
    $this->event = Doctrine_Core::getTable('Event')
      ->createQuery('a')
      ->execute();
    
    print_r($this->event); */
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->attendee);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->user_id = $this->getUser()->getGuardUser()->getId();
    
    //$profile_id_obj = Doctrine_Core::getTable('Profile')->findBySfGuardUserId(array($this->user_id));
    //$this->profile_id = $profile_id_obj->getId();
    
    $this->form = new AttendeeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AttendeeForm();
    $postparam = $request->getPostParameters();
    $div_id = $postparam['attendee']['division_id'];
    
    //die(print_r($request->getPostParameters()));
    $post_disc = $postparam['attendee']['discipline'];
    //die(var_dump($post_disc));
    //
    //die(var_dump($div_id));
    //$this->form['profile_id'] = $this->getUser()->getGuardUser()->getId();
    $division = Doctrine_Core::getTable('Division')->find(array($div_id));
    if($division) {
        $division->setDisciplineId($post_disc);
    
        $division->save();
    }
    
    $this->processForm($request, $this->form);

    $this->setTemplate('new');
      /*
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AttendeeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');*/
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->user_id = $this->getUser()->getGuardUser()->getId();
    
    $this->id = $request->getParameter('id');
    $profile_id_obj = Doctrine_Core::getTable('Profile')->findBySfGuardUserId(array($this->user_id));
    
    
    foreach($profile_id_obj as $obj) //It's a Collection.
        $this->profile_id = $obj->getId();
    //var_dump($this->profile_id);
    
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->form = new AttendeeForm($attendee);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->form = new AttendeeForm($attendee);

    $this->processForm($request, $this->form);
    
    $this->redirect('attendee/index');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $attendee->delete();

    $this->redirect('attendee/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $attendee = $form->save();

      $this->redirect('attendee/edit?id='.$attendee->getId());
    }
  }
}
