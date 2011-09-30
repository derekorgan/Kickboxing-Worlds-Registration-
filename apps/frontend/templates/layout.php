<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
<div class="xgrid" id="content">
               
                
<div class="x12 pad-top">
	
	<div class="login-box">
      
      
    <?php echo $sf_content ?>
            
            
            
                
	</div>
			
   </div> <!-- .x12 -->
               
</div>
      
       
        <script src="/kickboxing/web/js/jquery-1.5.2.min.js">
        </script>
        <script src="/kickboxing/web/js/jquery-ui-1.8.12.custom.min.js">
        </script>
      <!--
        <script src="/kickboxing/web/js/excanvas.min.js">
        </script>
        <script src="/kickboxing/web/js/facebox.js">
        </script>
        <script src="/kickboxing/web/js/jquery.visualize.js">
        </script>
        <script src="/kickboxing/web/js/jquery.dataTables.min.js">
        </script>
        <script src="/kickboxing/web/js/jquery.tablesorter.min.js">
        </script>
        <script src="/kickboxing/web/js/jquery.uniform.min.js">
        </script>
        <script src="/kickboxing/web/js/jquery.placeholder.min.js">
        </script>
        <script src="/kickboxing/web/js/widgets.js">
        </script>
        <script src="/kickboxing/web/js/dashboard.js">
        </script>
        <script type="text/javascript">
            
            $(document).ready(function(){
                Dashboard.init();
				
            });
            
        </script>

		<script type="text/javascript">
			
				$('#typeattend').change(function() {
    				($(this).val() == "Compeditor") ? $('#compeditor-info').show() : $('#compeditor-info').hide();
				});
 		</script>
		
		<script type="text/javascript">
				$('#acctype').change(function() {
	    				($(this).val() == "Double") ? $('#share-input1').show() :  $('#share-input1').hide();
				});
				
				$('#acctype').change(function() {
	    				($(this).val() == "Triple") ? $('#share-input1').show() :  $('#share-input2').hide();
				});
				
				$('#acctype').change(function() {
	    				($(this).val() == "Triple") ? $('#share-input2').show()  :  $('#share-input2').hide() ;
				});
 		</script>
		
		<script type="text/javascript">
			$('#add-form').change(function() {
			    if ($('#radio1').attr('checked')) {
			        $('#visa-info').show();
			    } else {
			        $('#visa-info').hide();
			    }
			});
		</script>
       -->
       
		<script type="text/javascript">
			
				$('#attendee_type_id').change(function() {
    				   ($(this).val() == 1) ? $('#compeditor-info').show() : $('#compeditor-info').hide();
				});
 		</script>
       
       
		<script type="text/javascript">
				$('#attendee_accomodation').change(function() {
	    				($(this).val() == "Double") ? $('#share-input1').show() :  $('#share-input1').hide();
				});
				
				$('#attendee_accomodation').change(function() {
	    				($(this).val() == "Triple") ? $('#share-input1').show() :  $('#share-input2').hide();
				});
				
				$('#attendee_accomodation').change(function() {
	    				($(this).val() == "Triple") ? $('#share-input2').show()  :  $('#share-input2').hide() ;
				});
 		</script>
       
       <script type="text/javascript">
			$('#add-form').change(function() {
			    if ($('#attendee_visa_1').attr('checked')) {
			        $('#visa-info').show();
			    } else {
			        $('#visa-info').hide();
			    }
			});

       </script>

       
  </body>
</html>
