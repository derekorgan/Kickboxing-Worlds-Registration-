<?php use_helper('I18N') ?>

<form class="form label-inline uniform" action="<?php echo url_for('@sf_guard_register') ?>" method="post">
    
    
    <div class="field">
        
        <?php echo $form['first_name']->renderLabel('First Name') ?>
        <?php echo $form['first_name']->render() ?>
        <?php echo $form['first_name']->renderError() ?>
    </div>
    
    <div class="field">
        <?php echo $form['last_name']->renderLabel('Last Name') ?>
        <?php echo $form['last_name']->render() ?>
        <?php echo $form['last_name']->renderError() ?>
    </div>
    
    
    <div class="field">
        <?php echo $form['country']->renderLabel() ?>
        <?php echo $form['country']->render() ?>
        <?php echo $form['country']->renderError()   ?>
    </div>
    
    
    <div class="field">
        <?php echo $form['username']->renderLabel() ?>
        <?php echo $form['username']->render() ?>
        <?php echo $form['username']->renderError() ?>
    </div>
    
    
    <div class="field">
        <?php echo $form['email_address']->renderLabel('Email') ?>
        <?php echo $form['email_address']->render() ?>
        <?php echo $form['email_address']->renderError() ?>
    </div>
    <div class="field">
        <?php /* echo $form['email_again']->renderLabel('Re-Enter Email') ?>
        <?php echo $form['email_again']->render() ?>
        <?php echo $form['email_again']->renderError()  */ ?>
    </div>
    
    <div class="field">
        <?php echo $form['password']->renderLabel() ?>
        <?php echo $form['password']->render() ?>
        <?php echo $form['password']->renderError() ?>
    </div>
    
    
    <div class="field">
        <?php echo $form['password_again']->renderLabel('Re-Enter Password') ?>
        <?php echo $form['password_again']->render() ?>
        <?php echo $form['password_again']->renderError() ?>
    </div>
    
    
    <div><?php echo $form['_csrf_token']->render() ?></div>
    
    
    <div class="buttonrow">
          <input class="btn btn-black btn-login" type="submit" name="register" value="<?php echo __('Create Account', null, 'sf_guard') ?>" />
    </div>
</form>