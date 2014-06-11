<!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Log in</h4><br>
                        </div>
                        <div class="modal-body">
                            @if ( Session::get('error') )
							<div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
							@endif

							@if ( Session::get('notice') )
							<div class="alert alert-success">{{{ Session::get('notice') }}}</div>
							@endif
							
							<!--login form-->
							<form method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8">
								<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
								<fieldset>
									<div class="form-group">
										<label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
										<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
									</div>
									<div class="form-group">
										<label for="password">
											{{{ Lang::get('confide::confide.password') }}}
											<small>
												<a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
											</small>
										</label>

										

										<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
									</div>


									<div class="form-group">
										<label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
											
											<input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
											<input type="hidden" name="remember" value="0">
										</label>
									</div>



									<hr>
									<div class="form-group">
										<button tabindex="3" type="submit" class="btn btn-primary btn-lg btn-block">{{{ Lang::get('confide::confide.login.submit') }}}</button>
									</div>
									<hr>
									<div class="sbtnf sbtnf-rounded sbtnf-icon-white sbtnf-icon-bg-black color icon-facebook"></div>
										
								</fieldset>
							</form>
							<div>
								Don't have an account? <a href="{{{ URL::to('user/create')}}}">Register now.</a>
							</div>

                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
        <!--end Modal HTML-->