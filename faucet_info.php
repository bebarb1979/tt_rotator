<?php ?>
<script>

</script>
	<div id="faucet_info" class="container">      
		  
		  <form align="center">
		 	<div class="form-group row">
			      <label for="faucet_name"  class="col-sm-1 col-form-label">Faucet Name</label>
			      <div class="col-sm-2">
			        <?php if($admin){?>
			        <input type="text" class="form-control"  id="faucet_name" placeholder="Faucet Name">
			      	<?php }else{ ?>
			      	<input type="text" class="form-control"  id="faucet_name" placeholder="Faucet Name" readonly>
			      	<?php } ?>
			      </div>
			      <label for="faucet_timer"  class="col-sm-1 col-form-label">Faucet Timer</label>
			      <div class="col-sm-2">
			        <?php if($admin){?>
			        <input type="text" class="form-control"  id="faucet_timer" placeholder="XX Minutes">
			      	<?php }else{ ?>
			      	<input type="text" class="form-control"  id="faucet_timer" placeholder="XX Minutes" readonly>
			      	<?php } ?>
			      </div>
			      <label for="faucet_captcha_type"  class="col-sm-1 col-form-label">Captcha Type</label>
			      <div class="col-sm-2">
			        <?php if($admin){?>
			        <input type="text" class="form-control"  id="faucet_captcha_type" placeholder="CAPTCHA">
			      	<?php }else{ ?>
			      	<input type="text" class="form-control"  id="faucet_captcha_type" placeholder="CAPTCHA" readonly>
			      	<?php } ?>
			      </div>	
			      <label for="faucet_verified_date"  class="col-sm-1 col-form-label">Last Verified Date</label>
			      <div class="col-sm-2">
			        <?php if($admin){?>
			        <input type="text" class="form-control"  id="faucet_verified_date" placeholder="DATE">
			      	<?php }else{ ?>
			      	<input type="text" class="form-control"  id="faucet_verified_date" placeholder="DATE" readonly>
			      	<?php } ?>
			      </div>			      
			</div>
			<div class="form-group row">
	        	<h4 style= "color: red;">NEW!&nbsp</h4>
	        	<div class="col-sm-2 nowrap">
		        	<button type="button" class="btn btn-INFO" data-toggle="modal" data-target="#filterModal">
	  						Filter Faucets
					</button>
					<span style="font-size:18;"><span id="counter">0</span>/<?php echo $faucet_count;?></span>
				</div>
				<div class="col-sm-2">

		        	<label class="custom-control custom-checkbox">
						
						<?php if($admin){?>
						<input class="custom-control-input" id="frames" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="framesSpan">Works in this rotator</span>
						<?php }else{ ?>
						<input class="custom-control-input" id="frames" type="checkbox" disabled>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="framesSpan">Works in this rotator</span>
						<?php } ?>
					</label>
			      </div>
			      <div class="col-sm-2">
		        	<label class="custom-control custom-checkbox">
						<?php if($admin){?>
						<input class="custom-control-input" id="directPayout" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="payoutSpan">Direct Payout</span>
						<?php }else{ ?>
						<input class="custom-control-input" id="directPayout" type="checkbox" disabled>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="payoutSpan">Direct Payout</span>
						<?php } ?>
					</label>
			      </div>
			      <div class="col-sm-2">
		        	<label class="custom-control custom-checkbox">
						<?php if($admin){?>
						<input class="custom-control-input" id="popups" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="popUpsSpan">Annoying or Excessive Pop-ups</span>
						<?php }else{ ?>
						<input class="custom-control-input" id="popups" type="checkbox" disabled>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="popUpsSpan">Annoying or Excessive Pop-ups</span>
						<?php } ?>
					</label>
			      </div>
			      <div class="col-sm-2">
		        	<label class="custom-control custom-checkbox">
						<?php if($admin){?>
						<input class="custom-control-input" id="shortlink" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="shortlinkSpan">Shortlink visit Required</span>
						<?php }else{ ?>
						<input class="custom-control-input" id="shortlink" type="checkbox" disabled>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="shortlinkSpan">Shortlink visit Required</span>
						<?php } ?>
					</label>
			      </div>
			      <?php if (!$admin){		      	
			      	?>
			      <!-- <input type="button" class="btn btn-danger"  name="report" id="report"  value = "REPORT AN ISSUE" onclick="reportMe()"/> -->	
			      
			      <button type="button" id="report_button" class="btn btn-danger" data-toggle="modal"  data-target="#reportModal" >
	  						REPORT AN ISSUE
					</button>
					
			      <?php }?>
			      <?php if($admin){ ?>				      
		        	<label class="custom-control custom-checkbox">	
						<input class="custom-control-input" id="admin_empty" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="admin_emptySpan">Empty/Disabled/Broken</span>						
					</label>			      
				</div>
				<div class="form-group row ">
					<label for="admin_link"  class="col-sm-1 col-form-label">Admin Link</label>
			  		<div class="col-sm-10">
			  			<input type="text" class="form-control"  id="admin_link" placeholder="http://somefaucet.com">
		  			</div>
				</div>
				<div class="form-group row ">
					<label for="ref_link"  class="col-sm-1 col-form-label">Referral Link</label>
			  		<div class="col-sm-10">
			  			<input type="text" class="form-control"  id="ref_link" placeholder="http://somefaucet.com/?r=sdfsfd">
		  			</div>
				</div>
				
					<input type="button" class="btn btn-success" value="UPDATE" name="submit" id="update" onclick="updateMe()"/>				    
					<input type="button" class="btn btn-danger" value="DELETE" name="delete" id="delete" onclick="deleteMe()"/>
					<input type="button" class="btn btn-warning" value="Logout" name="logout" id="logout" onclick="logMeOut()"/>
					
				
			   <?php } ?>
			   <!-- <label for="faucet_name"  class="col-sm-1 col-form-label">Faucet Name</label> -->
			  <!--  <input type="text" class="form-control"  id="faucet_name" placeholder="Faucet Name"> -->
		  </form>
		  
	</div>
	
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="filterModalLabel">Faucet Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include("faucet_filter.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="updateFilters">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reportModal" tabindex="-2" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="reportModalLabel">Report an Issue With a Faucet</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		
      		</div>
			<div class="modal-body" id="report_modal_body">
			 	<h1>Please specify the problem encountered</h1>
				<form id="contact-form"  role="form">
		    		<div class="messages"></div>
						<div class="controls">
		        			<div class="row">
		            			<div class="col-md-6">
		                			<div class="form-group">
					                    <label for="form_name">Faucet Name *</label>
		            				        <input id="form_name" type="text" name="form_name" style="color:#FFF;"class="form-control" value="<?php echo $name;?>"required="required" data-error="Faucet Name is required" readonly>
		                    				<div class="help-block with-errors"></div>
		                			</div>
		            			</div>
		           
		        			</div>
				        <div class="form-group row">
								<div class="col-sm-6">
						        	<label class="custom-control custom-checkbox">
										<input class="custom-control-input" name = "form_frames" id="form_frames" type="checkbox" >
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description" id="form_framesSpan">Not Working in this rotator</span>						
									</label>
							      </div>
				      	</div>
				      	<div class="form-group row">
							      <div class="col-6">
						        	<label class="custom-control custom-checkbox">
										<input class="custom-control-input" name="form_directPayout" id="form_directPayout" type="checkbox">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description" id="payoutSpan">Payout method incorrect(Direct or Withdrawl)</span>
										
									</label>
							      </div>
					      </div>
					      <div class="form-group row">
							      <div class="col-6">
						        	<label class="custom-control custom-checkbox">
										
										<input class="custom-control-input" name = "form_popups" id="form_popups" type="checkbox">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description" id="popUpsSpan">This rotator has Annoying or Excessive Pop-ups and that's not noted</span>
										
									</label>
							      </div>
						      </div>
						      <div class="form-group row">
							      <div class="col-6">
						        	<label class="custom-control custom-checkbox">
										
										<input class="custom-control-input" name = "form_shortlink" id="form_shortlink" type="checkbox">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description" id="shortlinkSpan">This faucet requires a Shortlink visit and that's not noted</span>
										
									</label>
							      </div>
						      </div>
						      <div class="form-group row">
							      <div class="col-6">
						        	<label class="custom-control custom-checkbox">
										
										<input class="custom-control-input" name="form_broken" id="form_broken" type="checkbox">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description" id="brokenSpan">This faucet is empty, broken or disabled</span>
										
									</label>
							      </div>
						      </div>
					      </div>
				        <div class="row">
				            <div class="col-md-12">
				                <div class="form-group">
				                    <label for="form_message">Additional details about the problem</label>
				                    <textarea id="form_message" name="form_message" class="form-control" placeholder="Please, tell us any details you think will be helpful" rows="4" ></textarea>
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-12" id="send_button">
				                <input type="submit" class="btn btn-success btn-send" value="Send message" onclick="reportMe()">
			            	</div>
			        	</div>
				        <div class="row">
				            <div class="col-md-12">
				                <p class="text-muted"><strong>*</strong> These fields are required. </p>
				            </div>
				        </div>  			
				</form> 
      		</div>
	      <div class="modal-footer">
	      
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	
	      </div>
		</div>
	</div>
</div> 

