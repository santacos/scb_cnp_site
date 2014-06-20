 <!--Modal HTML -->
    <div id="modalApplySuccess" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="app">
        <div class="modal-dialog "  ng-controller="appCtrl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  	<hr style="margin-top:5px;">
                </div>
                <div class="modal-body" >
                	<div class="big-icon bg-warning">
					  <div class="livicon" data-n="check" data-c="#fff" data-s="64" data-hc="0"></div>
					</div>
                	<h3 class="text-center">
                		Apply Job Successfully!
                	</h3>
					
                </div>
                <div class="modal-footer">
                   <a href="{{ URL::to('/cd/jobstatus')}}" type="button" class="btn btn-warning" >OK</a>
                	
                </div>
            </div>
        </div>
    </div>
<!--end Modal HTML