 <!--Modal HTML -->
    <div id="modalQuestion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="app">
        <div class="modal-dialog modal-lg"  ng-controller="appCtrl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">
                     <i class="fa fa-fw fa-question-circle"></i>
                      Please answer the following questions to apply this job
                  	</h4>

                    <hr style="margin-top:5px;">
                </div>
                <div class="modal-body" >
                	<div class="well" style="padding-bottom:0px;">
	                   	<div class="row">
	                   		<div class="col col-md-6">
	                   			<span><strong>How do you know the job opening :</strong></span>

	                   		</div>
	                   		<div class="col col-md-6" style="margin-left:0px;padding-left:0px;">
	                   			<input type="text" class="form-control" placeholder="job opening" style="font-size:1.2em;">
	                   			<!--select-->
	                            <!-- <select ng-model="knowjob" class="form-control scrollable-menu" id="knowjob" name="knowjob"
	                                    ng-options="jobOpen as jobOpen for jobOpen in jobOpenings">
	                            	<option value="">Select</option>
	                            </select> --> 
	                   		</div>
	                   		<!-- <div class="col col-md-3">

	                   			
	                   		</div> -->

	                   	</div>
                   	</div>

                   	<div class="container" style="width:100%;height:300px; overflow-y: scroll; font-size:1.2em;">
                   		<?php $i=0; ?>
                   		@foreach($questions as $question)
	                   		<?php $i++; ?>
		                   	<div class="row">
		                   		<div class="col col-md-12 ">
			                   		<div class="form-group">
			                   			<span><strong>{{ $i }}) {{ $question->question }}</strong></span>
			                   			<div class="col-md-offset-1">
			                   				<?php $j=0; ?>
			                   				@foreach($question->answer()->get() as $answer)
			                   					<?php $j++; ?>
												<div class="radio">
													<label>
														<input type="radio" name="question_{{ $i }}" value="{{ $j }}">
														{{ $answer->name }} </label> ({{ $answer->point }})
												</div>
											@endforeach
										</div>
									</div>
								</div>
		                   	</div>
	                   	@endforeach

                   	</div><!--end container-->
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <!-- <button type="button" class="btn btn-success">Apply</button> -->
                	
                	<a href="#modalApplySuccess" data-toggle="modal" data-dismiss="modal" type="button" class="btn btn-success">Apply</a>
                </div>
            </div>
        </div>
    </div>
<!--end Modal HTML