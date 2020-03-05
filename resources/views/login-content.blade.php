                <div class="row">
                    <div class="col-lg-12">
					  <div id="debug"></div>
					</div>
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">USA SMS Sender</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{url('login')}}" method="post" enctype="multipart/form-data">
								   <input type="hidden" id="uuu" name="_token" value="{{csrf_token()}}">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Log In</h3>
                                        <hr>
										<div class="row p-t-20">
										<div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text"  name="id" class="form-control" placeholder="Username">
                                                    <small id="error-username" class="form-control-feedback text-danger"> This field is required. </small>  
											    </div><br>		
                                            </div>
                                            <!--/span--> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                     <input type="password"  name="pass" class="form-control" placeholder="Password">
                                                    <small id="error-pass" class="form-control-feedback text-danger"> This field is required. </small>  
											    </div><br>		
                                            </div>
                                            <!--/span--> 
											                                         
                                        </div>
                                        <!--/row-->
                                       
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-12">
					    <div class="card">
						    <div class="card-body">
							    <h4 class="card-title">Results</h4>
								<div id="logs-loading"></div><br>
								<div id="mailer-results">
								    Results of this batch will be displayed here.
								</div>
							</div>
						</div>
                    </div>
                </div>					
                <!-- End PAge Content -->