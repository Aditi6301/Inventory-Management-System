<?php include('createorder.php');
// include('update.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order Details</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style type="text/css">
  .make-inline{
  display: flex;
  }
    </style>
<script type="text/javascript">
  


</script>
</head>

  <body id="page-top">

    <?php 
    $product_id = $_GET['product_id'];
    //echo $product_id;
    $order_id= $_SESSION['ORDER_ID'];
    $db = mysqli_connect('localhost', 'root', '', 'inv');
    $editProduct="SELECT `order_id`, `product_id`, `category_id`, `Measurements`, `product_length`, `product_width`, `no_of_pieces`, `product_price`, `Square_feet`, `calculated_price` FROM `ordered_product` WHERE order_id=$order_id AND product_id=$product_id";
//echo $editProduct;
    $result=mysqli_query($db,$editProduct);
    $row = mysqli_fetch_assoc($result);

    $category_id=$row['category_id'];
    $Measurements=$row['Measurements'];
    $product_length=$row['product_length'];
    $product_width=$row['product_width'];
    $no_of_pieces=$row['no_of_pieces'];
    $product_price=$row['product_price'];
    $calculated_price=$row['calculated_price'];

    //print_r($row);



      ?>

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

         

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="#">Total Sales</a>
                        <a class="collapse-item" href="#">Blah</a>
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
                        <h1 class="h3 mb-0 text-gray-800">Order Details</h1>
                       
                    </div>

        
     
     <?php

  session_start(); //Add this

  // Also you have to add your connection file before your query
  $db = mysqli_connect('localhost', 'root', '', 'inv'); 

  // SQL query
  $strSQL="SELECT name,segment,phone,address,payment,calculation FROM client WHERE name ='{$_SESSION['name']}' AND phone ='{$_SESSION['phone']}' ";

  // Execute the query (the recordset $rs contains the result)
  $rs = mysqli_query($db, $strSQL);
  while( $row = mysqli_fetch_assoc($rs) ) {
      ?>
  
    
<div class="row">
          
          
          

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Name</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['name']; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-address-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Segment</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row['segment']; ?></div>
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
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Payment</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row['payment']; ?></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Calculation</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['calculation']; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
           ?>

                    <!-- Content Row -->

                     <div class="row">
           <div class="col-xl-12 col-md-6 mb-4">
                    <ul class="list-inline">
                   <form action="update.php" method="post" autocomplete="on">
                      <div class="form-group col-xl-8 col-md-6">
                      <label>Product:</label>
                      <input value=" <?php echo $product_id;?>" name="product" type="text" class="form-control" id="product" placeholder="product">
                      <label>Category:</label>
                      <input value=" <?php echo $category_id;?>" name="categories" type="text" class="form-control" id="categories" placeholder="categories">
                    </div>
                  

      <div class="form-group col-xl-8 col-md-6">
          <label>Measurements:</label>
          <input value=" <?php echo $Measurements;?>" name="Measurements" type="text" class="form-control" id="Measurements" placeholder="Measurements">
    </div>
        
  <div class="make-inline">
    <div class="form-group col-xl-2 col-md-6 mb-4">
  <input value=" <?php echo $product_length;?>" name="length" type="text" class="form-control" id="length" placeholder="Length">
  </div>
  <div class="form-group col-xl-2 col-md-6 mb-4">
    <input value=" <?php echo $product_width;?>" name="width" type="text" name="width" class="form-control" id="width" placeholder="Width">
  </div>
  <div class="form-group col-xl-2 col-md-6 mb-4">
    <input value=" <?php echo $no_of_pieces;?>" name="pieces" type="text" class="form-control" id="pieces" placeholder="No of pieces">
  </div>
  <div class="form-group col-xl-2 col-md-6 mb-4">
    <input value=" <?php echo $product_price;?>"  name="price" type="text" class="form-control" id="price" placeholder="Enter price">
  </div>
  </div>



 <button type="submit" name="UpdateProduct" value="UpdateProduct" class="btn btn-success" id="submit">Update product 
     </button>      <!-- <span><a href="./templates/order.php" id="submit">NEXT</a></span> -->
      
  

</form>
<br>
<!-- <button onclick="myFunc()" type="submit" name="GoToOrder" value="GoToOrder" class="btn btn-success" >Go To order
          
      </button> -->
    <br>
    <br>

<div id="myDIV" style="display: none;">
  <form method="post" autocomplete="on">
    <div>
  <input name="Delivery_cost" type="text" class="form-control" id="Delivery_cost" style="width: 300px;" placeholder="Delivery cost">
  <br>
  <input name="expected" type="date" class="form-control" id="expected" style="width: 300px;" placeholder="Expected delivery date:">
  </div>
  <br>
        <button type="submit" name="PlaceOrder" value="PlaceOrder" class="btn btn-success" id="PlaceOrder">Place order
          <!-- <span><a href="./templates/order.php" id="submit">NEXT</a></span> -->
      </button>
  </form>

</div>


      
  
  <br>

 </div>
                </div>
                <!-- /.container-fluid -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

  
  <script type="text/javascript">

  function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}


 function Func() {
  // Get the checkbox
  var checkBox = document.getElementById("my");
  // Get the output text
  var text = document.getElementById("txt");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}


function halfR() {
  // Get the checkbox
  var checkBox = document.getElementById("half");
  // Get the output text
  var text = document.getElementById("halfround");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function stepR() {
  // Get the checkbox
  var checkBox = document.getElementById("step");
  // Get the output text
  var text = document.getElementById("stepround");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function edgeP() {
  // Get the checkbox
  var checkBox = document.getElementById("edge");
  // Get the output text
  var text = document.getElementById("edgepolish");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}


function sinkC() {
  // Get the checkbox
  var checkBox = document.getElementById("sink");
  // Get the output text
  var text = document.getElementById("sinkcutting");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function holeC() {
  // Get the checkbox
  var checkBox = document.getElementById("hole");
  // Get the output text
  var text = document.getElementById("holecutting");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function fermaC() {
  // Get the checkbox
  var checkBox = document.getElementById("ferma");
  // Get the output text
  var text = document.getElementById("fermacutting");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function myFunc() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  // $(function(){
  //   $(".checkme").click(function(event) {
  //     var x = $(this).is(':checked');
  //     if (x == true) {
  //       $(this).parents(".checkbox-card").find('.passport-box').show();
  //       $(this).parents(".checkbox-card").find('.apply-box').hide();
  //     }
  //     else{
  //       $(this).parents(".checkbox-card").find('.passport-box').hide();
  //       $(this).parents(".checkbox-card").find('.apply-box').show();
  //     }
  //   });
  // })





    function getProducts() {
        // Creating an AJAX object
        var ajax = new XMLHttpRequest();
 
        // A separate file is created to get orders list
        ajax.open("GET", "get-products.php", true);
 
        // Actually sending the request to get data
        ajax.send();
 
        // Callback when request status changes
        ajax.onreadystatechange = function () {
 
            // readyState = 4, when the response is received
            // status = 200, when the request is successfull
            if (this.readyState == 4 && this.status == 200) {
 
                // this.responseText will be JSON string, so we are converting it in Javascript object
                // using function JSON.parse 
                var response = JSON.parse(this.responseText);
 
                // html variable will contain all list items as String
                var html = "<option>Select Product</option>";
 
                for (var a = 0; a < response.length; a++) {
                    // Value attribute will be used to get order details
                    html += "<option value='" + response[a].product_id + "'>";
 
                        // This will be displayed to users
                        html += response[a].product_name;
                    html += "</option>";
                }
 
                // Adding items in <select> tag
                document.getElementById("products").innerHTML = html;
            }
        };
    }
    function getCategory(product_id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "get-category.php?product_id=" + product_id, true);
    ajax.send();
    // if(product_id==4 || product_id==5 || product_id==6 || product_id==7)
    // {
    //    $("#categories").hide();
    // }
    // else
    // {
      // $("#categories").show();
       ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            var html = "<option>Select Category </option>";
            for (var a = 0; a < response.length; a++) {
                html += "<option value='" + response[a].category_id + "'>";
                    html += response[a].product_category;
                html += "</option>";
            }
            document.getElementById("categories").innerHTML = html;
        }
    };

    // }
   
}
    // Calling the above created function when page loads.
    getProducts();


$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});

</script>


</body>

</html>