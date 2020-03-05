                <div class="row">
                    <div class="col-lg-12">
					  <div id="debug"></div>
					</div>
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Async Sender 1.0</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{url('sendd')}}" method="post" enctype="multipart/form-data">
									{!! csrf_field() !!}
								   <input type="hidden" id="uuu" name="_token" value="{{csrf_token()}}">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Content</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sender Name</label>
                                                    <input type="text" id="senderName" name="sn" class="form-control" placeholder="John doe" value="SecureFileHub (OneDrive)">
                                                    <small id="error-sender-name" class="form-control-feedback text-danger"> This field is required. </small>  
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Sender Email</label>
                                                    <input type="text" id="senderEmail" name="se" class="form-control form-control-danger" placeholder="john@yahoo.com" value="postman@securefilehub.gq">
                                                    <small id="error-sender-email" class="form-control-feedback text-danger"> This field is required. </small> 
													</div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
										<div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Subject</label>
                                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject" value="New file from User">
                                                    <small id="error-subject" class="form-control-feedback text-danger"> This field is required. </small>  
												</div><br>
												<div class="form-group">
                                                    <label class="control-label">Message</label>
                                                     <textarea  id="msg" name="msg" class="form-control" rows="15" placeholder="Enter message here (plain text or html)" style="height:450px"></textarea>
                                                    <small id="error-msg" class="form-control-feedback text-danger"> This field is required. </small>  
												</div>
												<div class="form-group">
                                                    <label class="control-label">Add attachment?</label>
                                                     <select name="add-attachment" id="add-attachment" class="form-control">
													    <option value="none">Add attachment?</option>
													    <option value="yes">Yes</option>
													    <option value="no">No</option>
													 </select>
                                                    <small id="error-msg" class="form-control-feedback text-danger"> This field is required. </small>  
												</div>
												<div class="form-group" id="attachment-div">
                                                    <label class="control-label">Attachment</label>
                                                     <input type="file" name="att" id="attachment" class="form-control">
                                                    <small id="error-msg" class="form-control-feedback text-danger"> This field is required. </small>  
												</div>
                                            </div>
                                            <!--/span-->                                            
                                        </div>
                                        <!--/row-->
                                        
                                       
										  <h3 class="box-title m-t-40">Content</h3>
										  <hr>
										 <div class="row">
											<div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Leads</h4>
                                                    <h6 class="card-subtitle">Paste your leads here</h6>
                                                        <div class="form-group">
                                                            <textarea  id="leads" class="form-control" rows="15" placeholder="Enter leads here (one per line)" style="height:450px"></textarea>
															<small id="error-leads" class="form-control-feedback text-danger"> This field is required. </small> 
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