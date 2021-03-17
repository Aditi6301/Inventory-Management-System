<?php 
include('createorder.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    html{
    	font-size: 15px;
    }
  .box{
  width: 200px;
  height: 50px;
  margin-left: 900px;
  text-align: center;
 /*padding: 13px 0px 0px 0px;*/
 font-weight: bold;
 font-size: 15px;
}
 .box1{
  width: 200px;
  height: 50px;
  margin-left: 450px;
  text-align: center;
 /*padding: 13px 0px 0px 0px;*/
 font-weight: bold;
 font-size: 20px;
}
.scrollit {
    overflow: auto;
}
li{
            list-style: none;
        }

    </style>
</head>
<body id="page-top">
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

                    <ul class="navbar-nav ml-auto">

                      


                        <!-- Nav Item - User Information -->
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
                                
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Product Categories
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                      <p style="text-align:center;"><h2>Order Details</h2></p>
                        <!-- <h1 class="h3 mb-0 text-gray-800">Order Details</h1> -->
                       
                    </div>
                    

                     
	<div class="container">

		<p><h5>Order id:<?php echo $_SESSION['ORDER_ID']?></h5></p>
    <p><h3>Cutting details</h3></p>
      <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	    <thead>
	      <tr>
	        <th>Product name</th>
	        <th>Category name</th>
	        <th>Measurements</th>
	        <th>Length</th>
	        <th>Width</th>
	        <th>No of pieces</th>
	        <th>Price</th>
	        <th>Calculated Price</th>
	        <th>Edit</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php
             $order_id= $_SESSION['ORDER_ID'];
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $strSQL="SELECT * from ordered_product WHERE order_id = '$order_id'";
             $rs = mysqli_query($db, $strSQL);
             while( $row = mysqli_fetch_assoc($rs) ) 
             {
             	$product_id = $row['product_id'];
             	$category_id = $row['category_id'];

	            $getProdName="SELECT product_name from products WHERE product_id = '$product_id'";
	            $nameResult = mysqli_query($db, $getProdName);
	            $pname = mysqli_fetch_assoc($nameResult);

	            $getCatName="SELECT product_category from product_categories WHERE category_id = '$category_id'";
	            $CatResult = mysqli_query($db, $getCatName);
	            $cname = mysqli_fetch_assoc($CatResult);
	            
             	echo '<tr>';
             	echo '<td>'.$pname['product_name'].'</td>';
             	echo '<td>'.$cname['product_category'].'</td>';
             	echo '<td>'.$row['Measurements'].'</td>';
             	echo '<td>'.$row['product_length'].'</td>';
             	echo '<td>'.$row['product_width'].'</td>';
             	echo '<td>'.$row['no_of_pieces'].'</td>';
             	echo '<td>'.$row['product_price'].'</td>';
             	echo '<td>'.$row['calculated_price'].'</td>';
             	echo "<td><a href='editProduct.php?product_id=$product_id'><button type='button' class='btn btn-info'>Edit</button></a></td>";
             	echo "<td><a href='deleteProduct.php?product_id=$product_id&category_id=$category_id'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
             	echo '</tr>';
             }


	       ?>
	    </tbody>
  </table>
         
</div>
<!-- </div> -->

  
<a href="print_cutting.php"><button type='button' class='btn btn-info'>Cutting Details PDF</button></a>  
<div class="box">
  <!-- <p style="margin-right: 80px; margin-top: 10px;">Total Cutting Amount:</p> -->
<?php
             $order_id= $_SESSION['ORDER_ID'];
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $result = "SELECT SUM(calculated_price) AS total_cutting_amount  FROM ordered_product WHERE order_id = '$order_id'"; 
              $rs = mysqli_query($db, $result);
              while( $row = mysqli_fetch_assoc($rs))
              {
                $total_cutting_amount=$row['total_cutting_amount'];
              }
              
 ?> 
    <p style="margin-right: 120px;">Total Amount:   <?php echo round($total_cutting_amount,3);?> </p>
 </div>  
<!-- //?order_id='$order_id' -->

  <div class="container">
    
    <p><h3>Moulding details</h3></p>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th colspan="1" style="border-bottom:hidden; text-align: center;">Product name</th>
          <th colspan="1" style="border-bottom:hidden; text-align: center;">Moulding Type</th>
          <th colspan="4" style="text-align: center;">Edges</th>
          <th colspan="4" style="text-align: center;">Calculated Price</th>
          <th colspan="4"style="text-align: center;">No</th>
          <th colspan="4"style="text-align: center;">Price</th>
          <tr>
            <th colspan="1" style="border-top: none; "></th>
            <th colspan="1" style="border-top: none; "></th>
            <th>Full Round</th>
            <th>Half Round</th>
            <th>Step Half</th>
            <th>Edge Polish</th>
            <th>Full Round</th>
            <th>Half Round</th>
            <th>Step Half</th>
            <th>Edge Polish</th>
            <th>Sink Type</th>
            <th>Sink </th>
            <th>Hole</th>
            <th>Ferma</th>
            <th>Sink</th>
            <th>Hole</th>
            <th>Ferma</th>

          </tr>


          <!-- <th>Product Name</th>
          <th>Moulding Type</th>
          <th>Full Round Edges</th>
          <th>Full Round Calcp</th>
          <th>Half Round Edges</th>
          <th>Half Round Calcp</th>
          <th>Step Half Round Edges</th>
          <th>Step Half Round Calcp</th>
          <th>Edge Polish Edges</th>
          <th>Edge Polish Calcp</th>
          <th>Sink Cutting Type</th>
          <th>Sink Cutting No.</th>
          <th>Sink Cutting price</th>
          <th>Hole Cutting No.</th>
          <th>Hole Cutting price</th>
          <th>Ferma Cutting No.</th>
          <th>Ferma Cutting price</th> -->
          <!-- <th>Edit</th>
          <th>Delete</th> -->
        </tr>
      </thead>
      <tbody>

        <?php
             $order_id= $_SESSION['ORDER_ID'];
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $strSQL="SELECT * from moulding_list WHERE order_id = '$order_id'";
             $rs = mysqli_query($db, $strSQL);
             while( $row = mysqli_fetch_assoc($rs) ) 
             {
              $product_id = $row['product_id'];
             // $category_id = $row['category_id'];

              $getProdName="SELECT product_name from products WHERE product_id = '$product_id'";
              $nameResult = mysqli_query($db, $getProdName);
              $pname = mysqli_fetch_assoc($nameResult);

              echo '<tr>';
              echo '<td>'.$pname['product_name'].'</td>';
              echo '<td>'.$row['MouldingType'].'</td>';
              echo '<td>'.$row['FullRoundEdges'].'</td>';
              echo '<td>'.$row['HalfRoundEdges'].'</td>';
              echo '<td>'.$row['StepHalfRoundEdges'].'</td>';
              echo '<td>'.$row['EdgePolishEdges'].'</td>';

              echo '<td>'.$row['FullRoundCalcP'].'</td>';
              echo '<td>'.$row['HalfRoundCalcP'].'</td>';
              echo '<td>'.$row['StepHalfRoundCalcP'].'</td>';
              echo '<td>'.$row['EdgePolishCalcP'].'</td>';

              echo '<td>'.$row['SinkCuttingType'].'</td>';
              echo '<td>'.$row['SinkCuttingNo'].'</td>';
              echo '<td>'.$row['HoleCuttingNo'].'</td>';
              echo '<td>'.$row['FermaCuttingNo'].'</td>';

              echo '<td>'.$row['SinkCuttingPrice'].'</td>';
              echo '<td>'.$row['HoleCuttingPrice'].'</td>';
              echo '<td>'.$row['FermaCuttingPrice'].'</td>';
              echo '</tr>';
             }


         ?>
      </tbody>
  </table>
</div>
</div>


<a href="print_moulding.php"><button type='button' class='btn btn-info'>Moulding Details PDF</button></a> <br/><br/> 

 </div>
          </div>

</div>

<br/><br>
  

  <div class="box">
  <!-- <p style="margin-right: 80px; margin-top: 10px;">Total Cutting Amount:</p> -->
<?php
             $order_id= $_SESSION['ORDER_ID'];
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $result = "SELECT SUM(TotalMouldingPrice) AS total_moulding_amount  FROM moulding_list WHERE order_id = '$order_id'"; 
            $rs = mysqli_query($db, $result);
              while( $row = mysqli_fetch_assoc($rs))
              {
                $total_moulding_amount=$row['total_moulding_amount'];
              }
              
 ?> 
    <p style="margin-right: 200px;">Total Amount:   <?php echo round($total_moulding_amount,3);?> </p>
 </div>  


  <a href='addNewProduct.php'><button type='button' class='btn btn-info'>Add Product</button></a>
  <a href='GenerateBill.php'><button type='button' class='btn btn-info'>Generate Bill</button></a>
  <div class="box1">
  <!-- <p style="margin-right: 80px; margin-top: 10px;">Total Cutting Amount:</p> -->
<?php
             $order_id= $_SESSION['ORDER_ID'];
             $db = mysqli_connect('localhost', 'root', '', 'inv');
             $result = "SELECT Total_amount FROM order_summary WHERE order_id = '$order_id'"; 
            $rs = mysqli_query($db, $result);
              while( $row = mysqli_fetch_assoc($rs))
              {
                $Total_amount=$row['Total_amount'];
              }
              
 ?> 
    <p >Total Amount:   <?php echo $Total_amount;?> </p>
 </div>  


	</div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Branapps Entertainment Pvt Ltd 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            
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
                     <select class="form-control custom-select" name="type" data-toggle="tooltip" data-placement="top" title="Production Type">
                        <option value="" selected disabled>Client Segment</option>
                        <option value="In_Film">Builder</option>
                        <option value="cobrand_with_movie">Retailer</option>
                        <option value="In_Series">Trader</option>
                        <option value="cobrand_with_series">Blah</option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Blah">
                    </div>
                    <div class="form-group">
                      <textarea type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Blah"></textarea>
                    </div>
                    
                     <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Delivery Date">
                    </div>
                  
                  
                    </ul>     
                <button class="btn btn-primary" data-dismiss="modal" type="button">Add New Title</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
            
            
            
            
            <div class="portfolio-modal modal fade" id="AddNewModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                     <select class="form-control custom-select" name="type" data-toggle="tooltip" data-placement="top" title="Order Material">
                        <option value="" selected disabled>Material</option>
                        <option value="In_Film">Builder</option>
                        <option value="cobrand_with_movie">Retailer</option>
                        <option value="In_Series">Trader</option>
                        <option value="cobrand_with_series">Blah</option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Blah">
                    </div>
                    <div class="form-group">
                      <textarea type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Blah"></textarea>
                    </div>
                    
                     <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Delivery Date">
                    </div>
                  
                  
                    </ul>     
                <button class="btn btn-primary" data-dismiss="modal" type="button">Add New Title</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="js/jquery-latest.min.js"></script>

</body>
</html>