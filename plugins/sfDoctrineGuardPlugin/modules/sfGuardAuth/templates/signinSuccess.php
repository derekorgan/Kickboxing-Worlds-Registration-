<?php use_helper('I18N') ?>



		<h2 class="header-padding">World Kick Boxing Championship 2011 Registration</h2>
                
                
              <?php if($sf_user->hasFlash('notice')): ?>
                    <div class="capt-err success">
                      <?php echo $sf_user->getFlash('notice');?>
                    </div>
             <?php endif; ?>
                    
                
		<div class="login-left" style="margin-top: 20px">
                    

                    <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
                     
		</div>
		
		<div class="login-right" style="margin-top: 20px">
			<h3>Create an account to register attendees.</h3>


			<div class="buttonrow">


	<?php /* <form action="createaccount.html" method="post">   
                            <button class="btn btn-black btn-login">Create Account</button>  */ ?>
                            
                            <a style="text-align: center; text-decoration: none" class="btn btn-black btn-login" href="<?php echo url_for('sf_guard_register'); ?>">Create Account</a>
                <?php /*    </form>*/  //why post request? why form for a link? ?>

            </div>
                        
                        
		</div>



<h1><?php //echo __('Signin', null, 'sf_guard') ?></h1>




<?php //echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>