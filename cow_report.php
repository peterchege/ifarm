<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>G-farm system</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/dashboard.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


         <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    <b>G-Farm managment system</b>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="new_entry.php">
                        <i class="pe-7s-note2"></i>
                        <p>New Entry</p>
                    </a>
                </li>
                <li>
                    <a href="milk_entry.php">
                        <i class="pe-7s-user"></i>
                        <p>Milk Records</p>
                    </a>
                </li>
                <li>
                    <a href="sell_cow.php">
                        <i class="pe-7s-science"></i>
                        <p>Sell animal</p>
                    </a>
                </li>
                <li>
                    <a href="cow_health.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>animal Health</p>
                    </a>
                </li>
                <li class="active">
                    <a href="cow_report.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>animal Reports</p>
                    </a>
                </li>
                <li>
                    <a href="milk_reports.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Milk Reports</p>
                    </a>
                </li>
                <li>
                    <a href="purchase_report.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Purchase Reports</p>
                    </a>
                </li>
                <li>
                    <a href="health_reports.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Health Reports</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="login.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Animal Records</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Animal Reports</h4>
                                <p class="category">This table contains the data for the all the animals</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Cow Name</th>
                                        <th>Date</th>
                                        <th>Cow Tag</th>
                                        <th>Breed</th>
                                    	<th>Weight</th>
                                        <th>Category</th>
                                        
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                            <td>Dakota</td>
                                            <td>2/11/2018</td>
                                        	<td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                
                                        <!-- Button trigger modal -->
                                       <td> <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                            update
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                            <div clas="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></td>
                                            <td><button name="mimi" class="btn prime2">delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dakota</td>
                                            <td>12/10/2018</td>
                                            <td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                        
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                                    update
                                                </button>
                                        
                                                <!-- Modal -->
                                                <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div clas="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                        
                                        
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button name="mimi" class="btn prime2">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dakota</td>
                                            <td>1/11/2018</td>
                                            <td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                        
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                                    update
                                                </button>
                                        
                                                <!-- Modal -->
                                                <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div clas="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                        
                                        
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button name="mimi" class="btn prime2">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dakota</td>
                                            <td>22/10/2018</td>
                                            <td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                        
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                                    update
                                                </button>
                                        
                                                <!-- Modal -->
                                                <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div clas="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                        
                                        
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button name="mimi" class="btn prime2">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Dakota</td>
                                            <td>1/11/2018</td>
                                            <td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                        
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                                    update
                                                </button>
                                        
                                                <!-- Modal -->
                                                <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div clas="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                        
                                        
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button name="mimi" class="btn prime2">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Dakota</td>
                                            <td>19/10/2018</td>
                                            <td>3695</td>
                                            <td>freshian</td>
                                            <td>50kg</td>
                                            <td>Heifer</td>
                                        
                                            <!-- Button trigger modal -->
                                            <td>
                                                <button type="button" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                                    update
                                                </button>
                                        
                                                <!-- Modal -->
                                                <div class="modal fade" id="mimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">firstName</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Last Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Phone Number</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput">Id No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac Name</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                                                    <div clas="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label" for="formGroupExampleInput2">Ac No</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                        
                                        
                                        
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button name="mimi" class="btn prime2">delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
