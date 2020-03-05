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
                                <form action="{{url('sendd')}}" method="post" enctype="multipart/form-data">
									{!! csrf_field() !!}
								   <input type="hidden" id="uuu" name="_token" value="{{csrf_token()}}">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Content</h3>
                                        <hr>
										<div class="row p-t-20">
										<div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">From</label>
                                                    <input type="text" id="from" name="from" class="form-control" placeholder="From" value="+14243061051" readonly>
                                                    <small id="error-from" class="form-control-feedback text-danger"> This field is required. </small>  
											    </div><br>		
                                            </div>
                                            <!--/span--> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Message</label>
                                                    <textarea  id="msg" class="form-control" rows="15" placeholder="Enter text message here" style="height:150px"></textarea>
                                                    <small id="error-msg" class="form-control-feedback text-danger"> This field is required. </small>  
											    </div><br>		
                                            </div>
                                            <!--/span--> 
											                                         
                                        </div>
                                        <!--/row-->
                                        <br><br>
										 <div class="row">
											<div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Recipients</h4>
                                                    <h6 class="card-subtitle">Paste your recipient phone numbers here</h6>
                                                        <div class="form-group">
                                                            <textarea  id="to" class="form-control" rows="15" placeholder="Enter numbers here (one per line, each number must start with +1)" style="height:450px"></textarea>
                                                           <small id="error-to" class="form-control-feedback text-danger"> This field is required. </small>
                                                        </div>
                                                </div>
                                            </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="form-actions">
                                        <button id="form-submit" class="btn btn-success"> <i class="fa fa-check"></i> Send</button>
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