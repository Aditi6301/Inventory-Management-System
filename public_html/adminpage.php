<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
	<meta charset="utf-8">
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

                        <li><a class="collapse-item" href="#">Segment Wise</a></li>
                        <li><a class="collapse-item" href="#">Product Wise</a></li>
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
                        <h1 class="h3 mb-0 text-gray-800">Admin Page</h1>
                       
                    </div>

	<nav class="navbar navbar-expand-md navbar-light bg-light" style="margin:20px;">
        <a href="#" class="navbar-brand"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
           <!--  <div class="navbar-nav ml-auto">
               
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            </div> -->
        </div>

    </nav>

    <div class="container">
    <div class="row">
           <div class="col-xl-12 col-md-6 mb-4">
                    <ul class="list-inline">
                       
    <form  id="AddNewCat" method="post">
        <div class="form-group col-xl-8">
                     <label style="font-weight: bold;">Add Product</label>
                    </div>
                    <div class="make-inline">
                    <div class="form-group col-xl-3">
                     <select class="form-control custom-select" name="products" id="products" name="type" data-toggle="tooltip" data-placement="top" title="Product" onchange="getCategory(this.value);"></select>
                    </div>
                     <div class="form-group col-xl-3">
                     <select class="form-control custom-select" name="categories" id="categories" name="type" data-toggle="tooltip" data-placement="top" title="Category" placeholder="Select Category"></select>
                    </div>
            </div>
             <div class="form-group col-xl-8">
                <p style="font-size: 15px; font-weight: bold;">Add category </p>
                <input type="text" name="new_category" placeholder="Category name" class="form-control" id='new_category'>
                </div>
                <div class="form-group col-xl-8">
                    <input style="padding: 5px 30px; background:#4e73df; color: white; font-weight: bold;" type="submit" value="Submit" id='submit'>
                </div>
    </form>
</ul>
</div>
</div>

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
                    <!-- <a class="btn btn-primary" href="logout.php">Logout</a> -->
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


<script type="text/javascript">
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
 
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            var html = "<option>Select Category</option>";
            for (var a = 0; a < response.length; a++) {
                html += "<option value='" + response[a].category_name + "'>";
                    html += response[a].product_category;
                html += "</option>";
            }
            document.getElementById("categories").innerHTML = html;
        }
    };
}
 $(document).on('submit','#AddNewCat',function(e){
        e.preventDefault();
        $.ajax({
        method:"POST",
        url: "insert.php",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('')
    }});
        document.getElementById("AddNewCat").reset();
});
    // Calling the above created function when page loads.
    getProducts();
</script>


</body>
</html>
