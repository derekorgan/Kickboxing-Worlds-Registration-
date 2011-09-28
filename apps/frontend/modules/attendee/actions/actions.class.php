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
    
    
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->attendee);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AttendeeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AttendeeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->form = new AttendeeForm($attendee);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($attendee = Doctrine_Core::getTable('Attendee')->find(array($request->getParameter('id'))), sprintf('Object attendee does not exist (%s).', $request->getParameter('id')));
    $this->form = new AttendeeForm($attendee);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

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
