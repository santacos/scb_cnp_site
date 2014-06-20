 <!--Modal HTML -->
    <div id="modalIncomplete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="app">
        <div class="modal-dialog "  ng-controller="appCtrl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  	<h4 class="modal-title">
                     <i class="fa fa-fw fa-warning"></i>
                      Your Profile is now INCOMPLETE
                  	</h4>
                  	<hr style="margin-top:5px;">
                </div>
                <div class="modal-body" >
                	<div class="container">
                		<div class="row">
                			<div class="col-md-offset-1">
                				
                					<strong>Please add your information as followings:</strong><br>
                				
                			</div><br>
                		</div>
                		<div class="row">
                			<div class="col col-md-3 col-md-offset-1">
                				<ul class="list-group">
								  <li class="list-group-item">Cras justo odio</li>
								  <li class="list-group-item">Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul>
                			</div>
                		</div>



                	</div>
                
					
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-inverse" data-dismiss="modal">Cancel</button>
                    <!-- <button type="button" class="btn btn-success">Apply</button> -->
                	
                	<a href="#modalApplySuccess" data-toggle="modal" data-dismiss="modal" type="button" class="btn btn-danger">
                		Go to edit profile
                	</a>
                </div>
            </div>
        </div>
    </div>
<!--end Modal HTML