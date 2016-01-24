<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employees</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-toggle.css') }}" rel="stylesheet">



    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ACLC PAYROLL</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Rolando Precioso</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Payroll Concern</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Monaliza Paculba</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Payroll Concern</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Bhing Estenzo</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                         <p>Payroll Concern</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    
                    <ul class="dropdown-menu alert-dropdown">
                        
                        <li class="divider"></li>
                        
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Melody Legaspi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="glyphicon glyphicon-user"></i> Employees</a>
                    </li>
                     <li>
                        <a href="payroll.html"><i class="glyphicon glyphicon-list"></i> Payroll</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Employees
                        </h1>
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

                             

                        <!-- END TABS -->
                  
              

                

                

                    
                    
                </div>


            </div>
                <!-- /.row -->
                
                
                    
            
                <!-- /.row -->

                
                <!-- /.row -->

                
                    
              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- toggle -->
    <script src="{{ asset('assets/js/bootstrap-toggle.js') }}"></script>
    <script src="{{ asset('assets/js/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/doc/script.js') }}"></script>
     // <script>
     //    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     //     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     //     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     //     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     //     ga('create', 'UA-55669452-1', 'auto');
     //     ga('send', 'pageview');
     // </script>


</body>

</html>
