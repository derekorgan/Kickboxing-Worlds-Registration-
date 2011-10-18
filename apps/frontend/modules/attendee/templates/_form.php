<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


<div class="login-box">
	<h2 class="header-padding"><?php echo $msg ?><span class="logout"><a href="<?php echo url_for("sf_guard_signout") ?>">Logout</a> &nbsp; &nbsp; &nbsp; <span style="color: #778092">|</span> &nbsp; &nbsp; &nbsp;<a  href="<?php echo url_for("@attendee"); ?>">Back</a></span></h2></span></h2>
<!-- <div class="login-left  no-border"> -->


<form id="add-form" class="form label-inline uniform" action="<?php echo url_for('attendee/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

          <?php echo $form->renderHiddenFields(false) ?>
          <?php /*if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'attendee/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; */ ?>
          

          
      <?php echo $form->renderGlobalErrors() ?>
      
	<fieldset title="Personal Info" class="fieldset-style">
	<legend>Personal Info</legend>
          
        
        
             <div class="field">
        <?php echo $form['first_name']->renderLabel('First Name') ?>
        
          
          <?php echo $form['first_name'] ?>
                 <?php echo $form['first_name']->renderError() ?>
        </div>
 
      <div class="field">
        <?php echo $form['last_name']->renderLabel('Last Name') ?>
        
          
          <?php echo $form['last_name'] ?>
          <?php echo $form['last_name']->renderError() ?>
        
      </div>
      <div class="field">
        <?php echo $form['club_name']->renderLabel('Club Name') ?>
        
          
          <?php echo $form['club_name'] ?>
          <?php echo $form['club_name']->renderError() ?>
      </div>
        
       <div class="field">
        <?php echo $form['type_id']->renderLabel('Type of Attendee') ?>
        
          
          <?php echo $form['type_id'] ?>
           <?php echo $form['type_id']->renderError() ?>
        </div>
        
        

<div id="compeditor-info">


     <div class="field">               
		<?php echo $form['sex']->renderLabel('Sex') ?>
		<?php echo $form['sex'] ?>
		<?php echo $form['sex']->renderError() ?>
	</div>

	
    
<div class="field">
        <?php echo $form['discipline']->renderLabel('Discipline') ?>
        <?php echo $form['discipline']->render() ?>
        <?php echo $form['discipline']->renderError() ?>
</div> 
      
         <div class="field">
             
        <?php echo $form['division_id']->renderLabel() ?>
        
          
          <?php echo $form['division_id'] ?>
             <?php echo $form['division_id']->renderError() ?>
         </div>
        
</div>
        
        
        </fieldset>
      

<fieldset title="Accomodation" class="fieldset-style">
	<legend>Accomodation</legend>
        
      <div class="field">
        <?php echo $form['accomodation']->renderLabel('Type of Accommodation') ?>
        
          
          <?php echo $form['accomodation'] ?>
          <?php echo $form['accomodation']->renderError() ?>
      </div>
        
        
        <div id="share-input1">
          <div class="field">
        <?php echo $form['sharing_with1']->renderLabel('Sharing With:') ?>
        
        
          <?php echo $form['sharing_with1'] ?>
                <?php echo $form['sharing_with1']->renderError() ?>
        </div>
            </div>
      
        
        <div id="share-input2">
      <div class="field">
        <?php echo $form['sharing_with2']->renderLabel('-') ?>
        
          
          <?php echo $form['sharing_with2'] ?>
          <?php echo $form['sharing_with2']->renderError() ?>
        </div>
        
        </div>
</fieldset>


  
      
         <div class="field">
        <?php /*echo $form['profile_id']->renderLabel() ?>
        
         
          <?php echo $form['profile_id'] ?>
              <?php echo $form['profile_id']->renderError() */ ?>
             <?php echo $form['profile_id']->render(array('value' => $profile_id)) ?>
         </div>
      

    <fieldset title="Flight Details" class="fieldset-style">
	<legend>Flight Details</legend>

      
      <div class="field">
        <?php echo $form['flight_datetime']->renderLabel('Arrival Date') ?>
        
        
          <?php echo $form['flight_datetime'] ?>
            <?php echo $form['flight_datetime']->renderError() ?>
        </div>
      
      <div class="field">
        <?php echo $form['flight_time']->renderLabel('Arrival Time') ?>
        
       
          <?php echo $form['flight_time'] ?>
             <?php echo $form['flight_time']->renderError() ?>
        </div>
      
      <div class="field">
        <?php echo $form['flight_number']->renderLabel('Flight No.') ?>
        
         
          <?php echo $form['flight_number'] ?>
           <?php echo $form['flight_number']->renderError() ?>
        </div>
        
    
      
      
		
                    
		<?php echo $form['visa']->renderLabel('Visa') ?>
		<?php echo $form['visa'] ?>
		<?php echo $form['visa']->renderError() ?>

	
      
        <div id="visa-info" style="display: none">
      <div class="field">
        <?php echo $form['dob']->renderLabel() ?>
        
          
          <?php echo $form['dob'] ?>
          <?php echo $form['dob']->renderError() ?>
        
      </div>
      <div class="field">
        <?php echo $form['passport']->renderLabel('Passport No.') ?>
        
     
          <?php echo $form['passport'] ?>
               <?php echo $form['passport']->renderError() ?>
        </div>
      
      <div class="field">
        <?php echo $form['expiry_date']->renderLabel('Expiry Date') ?>
        
   
          <?php echo $form['expiry_date'] ?>
                 <?php echo $form['expiry_date']->renderError() ?>
          
      </div>
        </div>
        
</fieldset>
        
      <input class="btn btn-black btn-login" type="submit" value="Save" /> 
      
</form>

    
<!-- </div> -->
</div> 

<?php /*
<script type="text/javascript">
 var hard = '<option value="1">Senior -57 kg</option><option value="2">Senior -63 kg</option><option value="3">Senior -69 kg</option><option value="4">Senior -74 kg</option><option value="5">Senior -79 kg</option><option value="6">Senior -84 kg</option><option value="7">Senior -89 kg</option><option value="8">Senior -94 kg</option><option value="9">Senior +94 kg</option><option value="10">Veteran -63 kg</option><option value="11">Veteran -74 kg</option><option value="12">Veteran -84 kg</option><option value="13">Veteran -94 kg</option><option value="14">Veteran +94 kg</option>';
 var hard="hi there";
 
 
 				$('#attendee_discipline').change(function() {
	    				//attendee_division_id //container
                                        
                                        $("attendee_division_id").html(hard);
				});
</script> 
 */ ?>
<script type="text/javascript">
 $(document).ready(function() {
     
    $('#attendee_division_id').attr("disabled", true);  
     
    $("#attendee_discipline").change(function() {

    var id = parseInt($("#attendee_discipline").val());
    
    //alert(id);
    
    aj_url ="/kickboxing/web/attendee/ajax?id=" + id;
    $.ajax({
                url: aj_url,
                dataType: 'html',
                type: 'GET',
                success: function(data) {
                    $("#attendee_division_id").html(data);
                    
                    if($("#attendee_discipline").val() == 0) {
                         $('#attendee_division_id').attr("disabled", true);  
                    } else {
                         $('#attendee_division_id').attr("disabled", false);  
                    }
                   
                }
    });
    

  var hard = '<option value="1">Senior -52 kg</option><option value="2">Senior -63 kg</option><option value="3">Senior -69 kg</option><option value="4">Senior -74 kg</option><option value="5">Senior -79 kg</option><option value="6">Senior -84 kg</option><option value="7">Senior -89 kg</option><option value="8">Senior -94 kg</option><option value="9">Senior +94 kg</option><option value="10">Veteran -63 kg</option><option value="11">Veteran -74 kg</option><option value="12">Veteran -84 kg</option><option value="13">Veteran -94 kg</option><option value="14">Veteran +94 kg</option>'; 
  
  $("#attendee_division_id").html(hard);
  
  
  

    });
    
    

    

 });
</script> 
