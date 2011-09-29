

<div class="login-box">
		<h2 class="header-padding">Edit Attendee<span class="logout"><a href="login.html">Logout</a></span></h2>
		<div class="login-left  no-border">
			

   <form id="add-form" class="form label-inline uniform" method="post" action="<?php echo url_for("@atten_update?id=".$id) ?>">
				
							<fieldset title="Personal Info" class="fieldset-style">
								 <legend>Personal Info</legend>
	

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
        <?php echo $form['club_name']->renderLabel('Club Name') ?>
        <?php echo $form['club_name']->render() ?>
        <?php echo $form['club_name']->renderError() ?>
</div>
						
<div class="field">

        <?php echo $form['type_id']->renderLabel('Type of Attendee') ?>

        <?php echo $form['type_id']->render() ?>
    
        <?php echo $form['type_id']->renderError() ?>
     
</div> 
							
<div id="compeditor-info">
   <div class="field">
        <?php echo $form['sex']->renderLabel('Sex') ?>
        <?php echo $form['sex']->render() ?>
        <?php echo $form['sex']->renderError() ?>
   </div> 
    
    
<div class="field">
        <?php echo $form['discipline']->renderLabel('Discipline') ?>
        <?php echo $form['discipline']->render() ?>
        <?php echo $form['discipline']->renderError() ?>
</div> 
    
    
<div class="field">

                <?php echo $form['division_id']->renderLabel('Division') ?>
                <?php echo $form['division_id']->render() ?>
                <?php echo $form['division_id']->renderError() ?>
                <?php /* Here's the discipline

                         */ ?>

</div> 
							

</div>
							
                                                        
                                                        
        </fieldset>
							
<fieldset title="Accomodation" class="fieldset-style">
	<legend>Accomodation</legend>
								
<div class="field">

                <?php echo $form['accomodation']->renderLabel('Type of Accomodation') ?>
                <?php echo $form['accomodation']->render() ?>
                <?php echo $form['accomodation']->renderError() ?>

</div>
							
							<div id="share-input1">
								<div class="field"><label for="sharew">Sharing With: </label> <input type="text" class="medium" size="20" name="sharew" id="sharew"></div>
							</div>
							
							<div id="share-input2">
								<div class="field"><label for="sharew2">&nbsp;&nbsp;&nbsp;&nbsp; </label> <input type="text" class="medium" size="20" name="sharew2" id="sharew2"></div>
							</div>	
									
							<div id="share-input3">
								<div class="field"><label for="sharew2">&nbsp;&nbsp;&nbsp;&nbsp; </label> <input type="text" class="medium" size="20" name="sharew3" id="sharew3"></div>
							</div>
							
</fieldset>
							
                            
                            
<fieldset title="Flight Details" class="fieldset-style">
	<legend>Flight Details</legend>
							
<div class="field">
                <?php echo $form['flight_datetime']->renderLabel('Arrival Date') ?>
                <?php echo $form['flight_datetime']->render() ?>
                <?php echo $form['flight_datetime']->renderError() ?>
</div>
							

        
        <div class="field">
                <?php echo $form['flight_datetime']->renderLabel('Arrival Time') ?>
                <?php echo $form['flight_datetime']->render() ?>
                <?php echo $form['flight_datetime']->renderError() ?>
        
        
        </div>
        
        
							
		<div class="field">
                    <?php echo $form['flight_number']->renderLabel('Flight No.') ?>
                    <?php echo $form['flight_number']->render() ?>
                    <?php echo $form['flight_number']->renderError() ?>
                </div>
							
		<div class="controlset field">
                    
		<span class="label">Visa Required?</span> 

			<?php echo $form['visa']->render() ?>	
                 <?php /* NEEDED
		<div class="radio" id="uniform-radio1"><span><input type="radio" value="1" id="radio1" name="radio1" class="radio-label" style="opacity: 0;"></span></div><label for="radio1" class="radio-label">Yes</label>

		<div class="radio" id="uniform-radio2"><span><input type="radio" value="1" id="radio2" name="radio1" class="radio-label" style="opacity: 0;"></span></div><label for="radio2" class="radio-label">No</label>
                        */ ?>

		</div>	
							<div style="display:none" id="visa-info">
								<div class="field">
                                                                    <?php echo $form['dob']->renderLabel('Date of Birth') ?>
                                                                    <?php echo $form['dob']->render() ?>
                                                                    <?php echo $form['dob']->renderError() ?>
                                                                </div>
								<div class="field">
                                                                    <?php echo $form['passport']->renderLabel('Passport') ?>
                                                                    <?php echo $form['passport']->render() ?>
                                                                    <?php echo $form['passport']->renderError() ?>
                                                                </div>
								<div class="field">
                                                                    <?php echo $form['expiry_date']->renderLabel('Expiry Date') ?>
                                                                    <?php echo $form['expiry_date']->render() ?>
                                                                    <?php echo $form['expiry_date']->renderError() ?>
                                                                   
                                                                </div>
							</div>
							</fieldset>


							<div class="buttonrow">
                                                                <div><?php echo $form['_csrf_token']->render() ?></div>

            <div class="buttonrow my_button" style="margin-left: 35px;">


		<input class="btn btn-black btn-login" type="submit" value="Edit" /> 


	  </div>
                                         </div>
                            

                            
								<div class="field">
                                                                    <?php echo $form['profile_id']->render(array('value' => $profile_id)) ?>
                                                                </div>	
                        
                        </form>
                    
                    
                    
                    
                    
                    
                    
		</div>
		
		<div class="login-right">
			<br>

			<h4>Please fill in the information about the attendee you wish to add.</h4>
			<h4>All active fields must be filled in. You will be sent back to the registered attendees page once you have confirmed you wish to add your attendee.</h4>



		</div>
	</div>
<?php //include_partial('form', array('form' => $form)) ?>




<?php //include_partial('form', array('form' => $form)) ?>


<?php //include_partial('form', array('form' => $form)) ?>
