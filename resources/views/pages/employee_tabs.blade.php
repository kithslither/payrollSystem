@extends('employees.index2') 
@section('tabs')
 <!-- START TABS -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#info"><i class="glyphicon glyphicon-user"></i> Information</a></li>
                                    <li><a data-toggle="tab" href="#add"><i class="glyphicon glyphicon-plus"></i>Add</a></li>
                                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-toggle="tab" href="#dropdown1">Dropdown1</a></li>
                                            <li><a data-toggle="tab" href="#dropdown2">Dropdown2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="info" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-lg-6"><h3>Information</h3></div>
                                        <div class="col-lg-6">
                                            <form role="search" class="navbar-form navbar-right">
                                        <div class="form-group">
                                            <input type="text" placeholder="Search" class="form-control">
                                        </div>
                                             <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                    </form>
                                        </div> 
                                    </div>
                                    <hr>

                                        <!-- Thumbs start here -->
                                        <!-- Modal -->
                                <div class="modal fade" id="details" role="dialog">
                                <div class="modal-dialog">
    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target='#Edit'>Edit</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                    </div>
      
                                 </div>
                                 </div>
                                     <!-- End Modal -->

                                     <!-- Modal -->
                                    <div class="modal fade" id="delete" role="dialog">
                                    <div class="modal-dialog">
    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete "employe name here" from the database?.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                    </div>
      
                                    </div>
                                    </div>
                                    <!-- End Modal -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="Edit" role="dialog">
                                    <div class="modal-dialog">
    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit</h4>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6"><h3>Edit Employee info</h3></div>
                                        <br><br><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Employee ID</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="ID"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Name</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"><input class="form-control" placeholder="Last"></div>
                                        <div class="col-lg-4"><input class="form-control" placeholder="First"></div>
                                        <div class="col-lg-4"><input class="form-control" placeholder="Middle"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Password</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="Password"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Confirm password</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="Confirm password"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Address</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12"><input class="form-control" placeholder="Address"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Birthday</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <select class="form-control">
                                                <option>Date</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-control">
                                                <option>Month</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-control">
                                                <option>Year</option>
                                            </select>
                                        </div> 
                                        <br>   
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-2"><label>Gender</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"><label class="checkbox-inline"><input type="checkbox">Male</label></div>
                                        <div class="col-lg-3"><label class="checkbox-inline"><input type="checkbox">Female</label></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Contact Number</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="+63"></div>
                                        <div class="col-lg-6"><input class="form-control" placeholder="+63"></div>
                                    </div>
                        
                                    
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        
                                    </div>
                                    </div>
      
                                    </div>
                                    </div>
                                    <!-- End Modal -->
                                        <div class="row">
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img class="emp_thumb"src="{{asset('assets/images/Legaspi M.jpg') }}"/>
                                <h4>Legaspi, Melody Joy G.</h4>
                                <p>School Nurse</p>
                                <p>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#details">Details</button>
                                <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button> -->
                                <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                                        <!-- Thumbs end here -->

                                <div id="add" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-6"><h3>Add Employee</h3></div>
                                        <br><br><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Employee ID</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"><input class="form-control" placeholder="ID"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Name</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"><input class="form-control" placeholder="Last"></div>
                                        <div class="col-lg-3"><input class="form-control" placeholder="First"></div>
                                        <div class="col-lg-3"><input class="form-control" placeholder="Middle"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Password</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="Password"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Confirm password</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"><input class="form-control" placeholder="Confirm password"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Address</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12"><input class="form-control" placeholder="Address"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Birthday</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <select class="form-control">
                                                <option>Date</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1">
                                            <select class="form-control">
                                                <option>Month</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1">
                                            <select class="form-control">
                                                <option>Year</option>
                                            </select>
                                        </div> 
                                        <br>   
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-2"><label>Gender</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1"><label class="checkbox-inline"><input type="checkbox">Male</label></div>
                                        <div class="col-lg-1"><label class="checkbox-inline"><input type="checkbox">Female</label></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6"><label>Contact Number</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"><input class="form-control" placeholder="+63"></div>
                                        <div class="col-lg-3"><input class="form-control" placeholder="+63"></div>
                                    </div>
                        
                                    <div class="row">
                                        <br>
                                        <div class="col-lg-6">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Reset</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        </div>
                                     
                                    </div>
                                  
                                </div>
@stop
                             

                        <!-- END TABS -->