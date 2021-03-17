<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ordering Process</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script type="text/javascript" src="./js/main.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

    <style>
        li{
            list-style: none;
        }
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                
                <div class="sidebar-brand-text mx-3">Ordering Tool</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <ul>Pending Orders
                        <li><a class="collapse-item" href="CuttingPending.php">Cutting team</a></li>
                        <li><a class="collapse-item" href="MouldingPending.php">Moulding team</a></li>
                        <li><a class="collapse-item" href="DispatchPending.php">Dispatch team</a></li>
                     </ul>
                        <a class="collapse-item" href="CuttingOutput.php">Cutting team Output</a>
                        <a class="collapse-item" href="MouldingOutput.php">Moulding team Output</a>
                        <ul>Sales

                        <li><a class="collapse-item" href="SegmentWise.php">Segment Wise</a></li>
                        <li><a class="collapse-item" href="ProductWise.php">Product Wise</a></li>
                    </ul>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
          
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto"  >
                      


                        <!-- /*Nav Item - User Information*/ -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown" >
                                
                                <a class="dropdown-item" href="adminpage.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Product Categories
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>
                </div>
<?php
     $db = mysqli_connect('localhost', 'root', '', 'inv');
     $strSQL="SELECT SUM(Total_amount) as total_sales from order_summary  where cancelled='No'";
     $rs = mysqli_query($db, $strSQL);
     $row = mysqli_fetch_assoc($rs);
     $total_sales=$row['total_sales'];

     // $pendingSQL="SELECT(SELECT COUNT(cutting_status) as cutting_pending from order_summary  where cancelled='No' AND cutting_status='Pending')+(SELECT COUNT(moulding_status) as moulding_pending FROM order_summary where cancelled='No' AND moulding_status='Pending')+(SELECT COUNT(dispatch_status) as dispatch_pending FROM order_summary where cancelled='No' AND dispatch_status='Pending') as total_pending";

     // $pendingSQL="SELECT COUNT(order_id) as total_pending from order_summary  where cancelled='No' AND Moulding='Yes' AND ( cutting_status='Pending' OR moulding_status='Pending' OR dispatch_status='Pending')
     //     UNION";

$pendingSQL=" SELECT COUNT(order_id) as total_pending from order_summary  where(
  Moulding='No' AND cancelled='No' AND ( cutting_status='Pending' OR dispatch_status='Pending') OR Moulding='Yes' AND cancelled='No' AND ( cutting_status='Pending' OR moulding_status='Pending' OR dispatch_status='Pending')) AND cancelled='No' ";


     $pc = mysqli_query($db, $pendingSQL);
     $pcrow = mysqli_fetch_assoc($pc);
     $total_pending=$pcrow['total_pending'];

     $strSQL="SELECT COUNT(order_id) as total_orders from order_summary  where cancelled='No'";
     $rs = mysqli_query($db, $strSQL);
     $row = mysqli_fetch_assoc($rs);
     $total_orders=$row['total_orders'];
     $completedOrders=$total_orders-$total_pending;
     $output=(($completedOrders/$total_orders)*100);








 ?>
                    <!-- Content Row -->
                    <div class="row">


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sales</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo round($total_sales,3)?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Output                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round($output,2)?> </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                             aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                    <?php 
echo '<div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$output.'"
      aria-valuemin="0" aria-valuemax="'.$output.'" style="width:'.$output.'%">
      </div>
    </div>'; 
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Orders</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo round($total_pending,3)?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
					 <div class="col-xl-12 col-md-6 mb-4">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           			<a href="newuser.php" class="btn btn-primary ">
                                        New Order
                                    </a>
                        </div>
                         <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Order History</h6>
                         </div>
                        
                      
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Order Date</th>
                                            <th>Cutting</th>
                                            <th>Moulding</th>
                                            <th>Delivery Date</th>
                                            <th>Action</th>
                                            <th>Cutting Status</th>
                                            <th>Moulding Status</th>
                                            <th>Dispatch Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php
             
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $strSQL="SELECT * from order_summary order by order_id";
             $rs = mysqli_query($db, $strSQL);
             while( $row = mysqli_fetch_assoc($rs) ) 
             {
                $order_id = $row['order_id'];
                echo '<tr>';
                echo '<td>'.$row['order_id'].'</td>';
                echo '<td>'.$row['order_date'].'</td>';
                echo '<td>'.$row['Cutting'].'</td>';
                echo '<td>'.$row['Moulding'].'</td>';
                echo '<td>'.$row['Delivery_date'].'</td>';
                
                if($row['cancelled']=='No')
                {
                    echo "<td style='align-self: center;'><a href='deleteOrder.php?order_id=$order_id'><button style='display: block; margin: auto' type='button' class='btn btn-danger'>Cancel</button></a></td>";

                        if($row['cutting_status']=='Pending')
                    {
                         echo "<td ><a href='UpdateStatus.php?order_id=$order_id&flag=1'><button style='display: block; margin: auto' type='button' class='btn btn-dark'>Pending</button></a></td>";
                    }
                    else
                    {
                         echo "<td ><a href='#'><button style='display: block; margin: auto' type='button' class='btn btn-success'disabled>Done</button></a></td>";
                    }
                    if($row['Moulding']=='No')
                    {
                          echo "<td ><a href='#'><button style='display: block; margin: auto' type='button' class='btn btn-light'disabled>None</button></a></td>"; 
                    }
                    else
                    {
                            if($row['moulding_status']=='Pending')
                            {
                                 echo "<td ><a href='UpdateStatus.php?order_id=$order_id&flag=2'><button style='display: block; margin: auto' type='button' class='btn btn-dark'>Pending</button></a></td>";
                            }
                            else
                            {
                                 echo "<td ><a href='#'><button style='display: block; margin: auto' type='button' class='btn btn-success'disabled>Done</button></a></td>";
                            }     
                     }
                    if($row['dispatch_status']=='Pending')
                    {
                         echo "<td ><a href='UpdateStatus.php?order_id=$order_id&flag=3'><button style='display: block; margin: auto' type='button' class='btn btn-dark'>Pending</button></a></td>";
                    }
                    else
                    {
                         echo "<td ><a href='#'><button style='display: block; margin: auto' type='button' class='btn btn-success'disabled>Done</button></a></td>";
                    }
                   
                }
                else
                {
                    echo "<td><button style='display: block; margin: auto' type='button' class='btn btn-light' disabled>Cancelled</button></td>";
                    echo "<td><button style='display: block; margin: auto' type='button' class='btn btn-light' disabled>Cancelled</button></td>";
                    echo "<td><button style='display: block; margin: auto' type='button' class='btn btn-light' disabled>Cancelled</button></td>";
                    echo "<td><button style='display: block; margin: auto' type='button' class='btn btn-light' disabled>Cancelled</button></td>";
                }
                
               
                echo '</tr>';
             }

           ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Branapps Entertainment Pvt Ltd 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!-- <form id="client_info" autocomplete="on" method="post">
                
            
            <div class="portfolio-modal modal fade" id="AddNewModal" tabindex="-1" role="dialog" aria-hidden="true">
    		<div class="modal-dialog">
      		<div class="modal-content">
       	 	<div class="close-modal" data-dismiss="modal">
          	<div class="lr">
            <div class="rl"></div>
          	</div>
        	</div>
        	<div class="container">
        	<center>
          	<div class="row">
            <div class="col-lg-10 mx-auto">
            <div class="modal-body">
               <ul class="list-inline">   
                <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name">
                    </div>  
                    <div class="form-group">
                     <select class="form-control custom-select" name="segment" data-toggle="tooltip" data-placement="top" title="Production Type">
                        <option value="" selected disabled>Client Segment</option>
                        <option value="In_Film">Builder</option>
                        <option value="cobrand_with_movie">Retailer</option>
                        <option value="In_Series">Trader</option>
                        <option value="cobrand_with_series">Blah</option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <input name="phone" type="tel" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="phone">
                    </div>
                    <div class="form-group">
                      <input type="text" name="address" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="address">
                    </div>
           <div class="form-group">
                     <select class="form-control custom-select" name="payment" data-toggle="tooltip" data-placement="top" title="Production Type">
                        <option value="" selected disabled>Cash</option>
                        <option value="">Credit</option>
                    </select>
       
        
                    </div>
                    

            <div class="form-group">
                     <select class="form-control custom-select" name="calculation" data-toggle="tooltip" data-placement="top" title="Production Type">
                        <option value="" selected disabled>MM to MM</option>
                        <option value="">INCH to INCH</option>
                        <option value="">Trader INCH to INCJ=H</option>
                        <option value="">Trader Regular</option>
                        <option value="">Retail</option>
                        <option value="">Stone</option>
                    </select>
       
        
                    </div>
                 	
                    </ul>     
                <button name="submit" class="btn btn-primary" data-dismiss="modal" type="button">Add New Title</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  </form> -->
</div>

            
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
                      <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
<!-- </center> -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>