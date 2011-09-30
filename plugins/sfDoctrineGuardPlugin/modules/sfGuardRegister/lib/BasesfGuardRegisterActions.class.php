<?php

class BasesfGuardRegisterActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    if ($this->getUser()->isAuthenticated())
    {
      $this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      $this->redirect('@atten');
    }

    $this->form = new sfGuardRegisterForm();

    if ($request->isMethod('post'))
    {
      
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $user = $this->form->save();
        $this->getUser()->signIn($user);
        
        $profile = new Profile();
        
        $profile->setSfGuardUserId($user->getId());
        $profile->setEventId(1); //change later
        $profile->setFirstName($user->getFirstName());
        $profile->setLastName($user->getLastName());
        $profile->setEmailAddress($user->getEmailAddress());
        
        $post_params = $request->getPostParameters();
        $profile->setCountry($post_params['sf_guard_user']['country']);
        
        $profile->save();
        
        
        $this->redirect('@atten');
      }
    }
  }
}