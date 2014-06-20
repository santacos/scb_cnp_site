 <!--Modal HTML -->
    <div id="modalQuestion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="app">
        <div class="modal-dialog "  ng-controller="appCtrl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">
                     <i class="fa fa-fw fa-question-circle"></i>
                      Please answer the following questions to apply this job
                  	</h4>

                    <hr style="margin-top:5px;">
                </div>
                <div class="modal-body">
                	<div class="well" style="padding-bottom:0px;">
	                   	<div class="row">
	                   		<div class="col col-md-4">
	                   			<span>How do you know the job opening :</span>

	                   		</div>
	                   		<div class="col col-md-4" style="margin-left:0px;padding-left:0px;">
	                   			<input type="text" class="form-control" placeholder="job opening" style="font-size:1.2em;">
	                   			<!--select-->
	                            <!-- <select ng-model="knowjob" class="form-control scrollable-menu" id="knowjob" name="knowjob"
	                                    ng-options="jobOpen as jobOpen for jobOpen in jobOpenings">
	                            	<option value="">Select</option>
	                            </select> --> 
	                   		</div>
	                   		<div class="col col-md-4">

	                   			
	                   		</div>

	                   	</div>
                   	</div>
                   	<div class="container">
	                   	<div class="row">
	                   		<div class="col col-md-12">
		                   		<div class="form-group">
		                   			<span>1) Do you have JAVA skill?</span>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Yes&mdash;be sure to include why it's great </label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											No</label>
									</div>
									
								</div>
							</div>
	                   	</div>
                   	 	<div class="row">
	                   		<div class="col col-md-12">
		                   		<div class="form-group">
		                   			<span>2) Do you have JAVA skill?</span>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Yes&mdash;be sure to include why it's great </label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											No</label>
									</div>
									
								</div>
							</div>
	                   	</div>
                   	 	<div class="row">
	                   		<div class="col col-md-12">
		                   		<div class="form-group">
		                   			<span>3) Do you have JAVA skill?</span>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Yes&mdash;be sure to include why it's great </label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											No</label>
									</div>
									
								</div>
							</div>
	                   	</div>

                   	</div><!--end container-->
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Apply</button>
                	
                </div>
            </div>
        </div>
    </div>
<!--end Modal HTML