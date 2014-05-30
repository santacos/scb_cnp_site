<!-- first data table for requisition-->
                       <div class="box box-solid box-primary">
                            <div class="box-header">
                            <h1 class="box-title">Requisition</h1>

                       <div class="box-tools">
                           <div class="input-group">
                               <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <!--table style "table-striped"-->
                                <div class="box-body table-responsive no-padding">
                                    
                                    <table class="table table-bordered  text-center  table-hover ">
                                        <thead>
                                        <tr>
                                            <th width="5%">ID</th>
                                            <th width="10%">Job title</th>
                                            <th width="10%">Location</th>
                                            <th width="5%">Status</th>
                                            <th width="25%">Detail</th>
                                            <th width="10%">SLA</th>
                                            <th width="10%">Date Order</th>
                                            <th width="10%">Deadline</th>
                                            <th width="5%">Note</th>
                                  
                                            <th width="10%">Progress</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <tr  class="danger">
                                            <td><span class="badge bg-grey">13</span></td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-success">Waiting for posting job</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td>
                                            	       <div id="demoLightbox" class="lightbox hide fade" tabindex = "-1" role="dialog" aria-hidden="true">
												            <div class="lightbox-caption">
												                <div class="lightbox-caption">
												                <p>Hi!</p>
												                </div>
												            </div>
												        </div>
                                            	<a data-toggle="lightbox" href = "#demoLightbox">
                                            		<i class="fa fa-fw fa-envelope-o"></i>
                                            	</a>
                                            </td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                   
                                        <tr class="warning">
                                            <td><span class="badge bg-grey">219</span></td>
                                            <td>Jane Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>9 / 13 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-grey">657</span></td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-grey">175</span></td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-default">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-grey">183</span></td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-grey">219</span></td>
                                            <td>Jane Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-grey">657</span></td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                              <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="label label-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td>8 / 7 days </td>
                                            <td>24 Apr 2014</td>
                                            <td>1 May 2014 </td>
                                            <td><i class="fa fa-fw fa-envelope-o"></i></td>
                                            <td>
                                                <div class="progressbar-xs no-margin progress ng-isolate-scope" value="55">
                                                    <div class="progress-bar"   ng-transclude="" style="width: 55%;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                        </div>
                    </div><!-- /.box -->