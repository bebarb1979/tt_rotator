<?php
?>
<div class="controls">

        <div class="form-group row">
            <h1>&nbsp&nbspPlease Select your Filter options</h1>
            <h3>&nbsp&nbspFaucets with attributes noted will not be shown in the rotator if selected below</h3>
           
        </div>
        <div class="form-group row">
				<div class="col-sm-6">
		        	<label class="custom-control custom-checkbox">
						<input class="custom-control-input" name = "framesFilter" id="framesFilter" type="checkbox" >
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="framesFilterSpan">Doesn't work in iframes(inside rotator)<p style="color: red">WARNING this option may limit faucets shown dramatically</p></span>						
					</label>
			      </div>
      	</div>
      	<div class="form-group row">
			      <div class="col-6">
		        	<label class="custom-control custom-checkbox">
						<input class="custom-control-input" name="directPayoutFilter" id="directPayoutFilter" type="checkbox" >
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="payoutFilterSpan">Withdrawl required(No Direct Payout)</span>
						
					</label>
			      </div>
	      </div>
	      <div class="form-group row">
			      <div class="col-6">
		        	<label class="custom-control custom-checkbox">
						
						<input class="custom-control-input" name = "popupsFilter" id="popupsFilter" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="popUpsFilterSpan">Annoying or Excessive Pop-ups</span>
						
					</label>
			      </div>
		      </div>
		      <div class="form-group row">
			      <div class="col-6">
		        	<label class="custom-control custom-checkbox">
						
						<input class="custom-control-input" name = "shortlinkFilter" id="shortlinkFilter" type="checkbox">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="shortlinkFilterSpan">Forced Shortlink Visits</span>
						
					</label>
			      </div>
		      </div>
		      <div class="form-group row">
			      <div class="col-6">
		        	<label class="custom-control custom-checkbox  active">
						
						<input class="custom-control-input" name="brokenFilter" id="brokenFilter" type="checkbox" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description" id="brokenFilterSpan">Empty, Broken or Disabled</span>
						
					</label>
			      </div>
		      </div>
	      </div>
        