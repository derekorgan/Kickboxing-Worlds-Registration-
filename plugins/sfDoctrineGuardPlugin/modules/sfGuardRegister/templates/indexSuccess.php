<?php use_helper('I18N') ?>






            
		<h2 class="header-padding">Create Account<a style="float: right; color: black" href="<?php echo url_for("@sf_guard_signin"); ?>">&lt; Back</a></h2>
		<div class="login-left">
                    
                    <?php echo get_partial('sfGuardRegister/form', array('form' => $form)) ?>
			
			
		</div>
		
		<div class="login-right">

			<h4>In order to create an account you will need the token that was sent to you by the event organizer. If you have not recieved this, please get in touch with us.</h4>
		</div>
                



<h1><?php //echo __('Register', null, 'sf_guard') ?></h1>

<?php //echo get_partial('sfGuardRegister/form', array('form' => $form)) ?>


<?php 

?>