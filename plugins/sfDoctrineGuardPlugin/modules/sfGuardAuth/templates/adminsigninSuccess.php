<?php use_helper('I18N') ?>

<?php use_stylesheet('main.css') ?>
<?php use_stylesheet('reset.css') ?>
<?php use_stylesheet('text.css') ?>

<?php use_stylesheet('form.css') ?>
<?php use_stylesheet('buttons.css') ?>
<?php use_stylesheet('grid.css') ?>

<?php use_stylesheet('layout.css') ?>
<?php use_stylesheet('custom.css') ?>
<?php use_stylesheet('uniform.default.css') ?>



		<h2 class="header-padding">Admin - Login</h2>
                
                
              <?php if($sf_user->hasFlash('notice')): ?>
                    <div class="capt-err success">
                      <?php echo $sf_user->getFlash('notice');?>
                    </div>
             <?php endif; ?>
                    
                
		<div class="login-left" style="margin-top: 20px">
                    

                    <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
                     
		</div>
		




<h1><?php //echo __('Signin', null, 'sf_guard') ?></h1>




<?php //echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>