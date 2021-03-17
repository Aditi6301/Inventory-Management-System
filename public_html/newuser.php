<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Order - New User</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href='jquery-ui.min.css' type='text/css' rel='stylesheet' >
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #FFF;
  border-radius: 10px;

}
input[type=text]:hover{
   border-color: #4e73df;
}
  
</style>
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

    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="jquery-ui.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href='jquery-ui.min.css' type='text/css' rel='stylesheet' >
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="jquery-ui.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".HideFirst").hide();
            $(document).on('keydown', '.name', function() {
                
                var id = this.id;
                var splitid = id.split('_');
                var index = splitid[1];

                $( '#'+id ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "getDetails.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                if(data.length===0){
                                    alert("Not found");
                                    console.log("Not found");
                                    response("not found");
                                }
                                else{
                                    console.log(data);
                                    response( data );
                                }
                                
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var userid = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'getDetails.php',
                            type: 'post',
                            data: {userid:userid,request:2},
                            dataType: 'json',
                            success:function(response){
                                
                                var len = response.length;

                                if(len > 0){
                                    var id = response[0]['id'];
                                    var name = response[0]['name'];
                                    var phone = response[0]['phone'];
                                    var segment = response[0]['segment'];
                                    var address = response[0]['address'];
                                    var calculation = response[0]['calculation'];

                                    document.getElementById('registeredname').value = name;
                                    document.getElementById('phone').value = phone;
                                    document.getElementById('address').value = address;
                                    $('input[name="segment"][value="' + response[0]['segment'] + '"]').prop('checked', true);
                                    $('input[name="payment"][value="' + response[0]['payment'] + '"]').prop('checked', true);
                                    $('input[name="calculation"][value="' +calculation + '"]').prop('checked', true);
                                    
                                }
                                
                            }
                        });

                        return false;
                    },
                    change: function(event, ui) {
                        console.log(this.value);
                        if (ui.item == null || event.which ==13) {
                            event.preventDefault();
                            $(".HideLater").hide();
                            $(".HideFirst").show();
                            document.getElementById('inputname').value = this.value;
                        } 
                        
                    }
                });
            });

            $('.name').keypress(function (e) {
                 var key = e.which;
                 if(key == 13)  // the enter key code
                  {
                    e.preventDefault();
                    $(".HideLater").hide();
                    $(".HideFirst").show();
                    document.getElementById('inputname').value = this.value;
                  }
                }); 
        });

    </script>
</head>
<body>
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
            <li class="nav-item">
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
                                aria-labelledby="userDropdown">
                                
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
                        <h1 class="h3 mb-0 text-gray-800">Client Information</h1>
                       
                    </div>

      <div class="container">
        <form class="container" autocomplete="off" method="post" >
        <input type="hidden"  name="name" class="name" id="name" placeholder="Enter name" required>
        <div class="HideLater"><br>
            <div>
              <input type="text"  name="registeredname" class="name" id="registeredname" placeholder="Enter name" required ><br>
              <br>
              <input type="radio" value="builder" id="radio_1" name="segment" />
              <label for="radio_1" class="radio-inline"><span>Builder</span></label>
              <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="trader" id="radio_2" name="segment" />
              <label for="radio_2" class="radio-inline"><span>Trader</span></label>
               <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="contractor" id="radio_3" name="segment" />
              <label for="radio_3" class="radio-inline"><span>Contractor</span></label>
               <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="retailer" id="radio_4" name="segment" required/>
              <label for="radio_4" class="radio-inline"><span>Retailer</span></label>
               <span style="display:inline-block; width: 100px;"></span>
          </div><br>
        <div> <input type="text"  name="phone" class="phone" id='phone' placeholder="phone" required disabled> </div><br>
        <div><input type="text"  name="address" class="address" id='address' placeholder="address" required disabled> </div><br>
              
              <div>
              <input type="radio" value="cash" id="radio_5" name="payment"/>
              <label for="radio_5" class="radio"><span>Cash</span></label>
               <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="credit" id="radio_6" name="payment"/>
              <label for="radio_6" class="radio"><span>Credit</span></label>
               <span style="display:inline-block; width: 100px;"></span>

          </div>
            
            <br><br>
              <div>
              <input type="radio" value="MM to MM" id="radio_7" name="calculation"/>
              <label for="radio_7" class="radio"><span>MM to MM</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input  type="radio" value="INCH to INCH" id="radio_8" name="calculation"/>
              <label for="radio_8" class="radio"><span>INCH to INCH</span></label>
               <span style="display:inline-block; width: 40px;"></span>

              <input type="radio" value="Trader INCH to INCH" id="radio_9" name="calculation"/>
              <label for="radio_9" class="radio"><span>Trader INCH to INCH</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input type="radio" value="Trader regular" id="radio_10" name="calculation"/>
              <label for="radio_10" class="radio"><span>Trader regular</span></label>
               <span style="display:inline-block; width: 40px;"></span>
           
              <input type="radio" value="Retail" id="radio_11" name="calculation"/>
              <label for="radio_11" class="radio"><span>Retail</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input type="radio" value="Stone" id="radio_12" name="calculation"/>
              <label for="radio_12" class="radio"><span>Stone</span></label>
               <span style="display:inline-block; width: 40px;"></span>
          </div>
          <br>
               <div>
               <button type="submit" value="Submit" name="Registered_Client" id="Registered_Client" style="padding: 5px 30px; background:#4e73df; color: white; font-weight: bold;">Next</button>
           </div>
            </div>

            
    </form>
        <br>
    </div>

    <div class="HideFirst">
        <p>Register new client</p>
        <form  autocomplete="off" method="post" >
        <input type="text"  name="inputname" class="inputname" id="inputname" placeholder="Name">
              <div>
              <input type="radio" value="builder" id="radio_1" name="inputsegment"/>
              <label for="radio_1" class="radio"><span>Builder</span></label>
              <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="trader" id="radio_2" name="inputsegment"/>
              <label for="radio_2" class="radio"><span>Trader</span></label>
              <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="contractor" id="radio_3" name="inputsegment"/>
              <label for="radio_3" class="radio"><span>Contractor</span></label>
              <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="retailer" id="radio_4" name="inputsegment"/>
              <label for="radio_4" class="radio"><span>Retailer</span></label>
              <span style="display:inline-block; width: 100px;"></span>
          </div>
        
        <div><input type="text"  name="inputphone" class="phone" id='inputphone' placeholder="phone"></div>
        <div><input type="text"  name="inputaddress" class="inputaddress" id='address' placeholder="address"></div>
              <div>
              <input type="radio" value="cash" id="radio_5" name="inputpayment"/>
              <label for="radio_5" class="radio"><span>Cash</span></label>
              <span style="display:inline-block; width: 100px;"></span>
            
              <input  type="radio" value="credit" id="radio_6" name="inputpayment"/>
              <label for="radio_6" class="radio"><span>Credit</span></label>
              <span style="display:inline-block; width: 100px;"></span>
          </div>
            
            <br><br>
              <div>
              <input type="radio" value="MM to MM" id="radio_7" name="inputcalculation"/>
              <label for="radio_7" class="radio"><span>MM to MM</span></label>
              <span style="display:inline-block; width: 40px;"></span>
            
              <input  type="radio" value="INCH to INCH" id="radio_8" name="inputcalculation"/>
              <label for="radio_8" class="radio"><span>INCH to INCH</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input type="radio" value="Trader INCH to INCH" id="radio_9" name="inputcalculation"/>
              <label for="radio_9" class="radio"><span>Trader INCH to INCH</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input type="radio" value="Trader regular" id="radio_10" name="inputcalculation"/>
              <label for="radio_10" class="radio"><span>Trader regular</span></label>
               <span style="display:inline-block; width: 40px;"></span>
           
              <input type="radio" value="Retail" id="radio_11" name="inputcalculation"/>
              <label for="radio_11" class="radio"><span>Retail</span></label>
               <span style="display:inline-block; width: 40px;"></span>
            
              <input type="radio" value="Stone" id="radio_12" name="inputcalculation"/>
              <label for="radio_12" class="radio"><span>Stone</span></label>
               <span style="display:inline-block; width: 40px;"></span>
          </div>
            <div>
            <button type="submit" value="Submit" name="client_register" id="client_register" style="padding: 5px 30px; background:#4e73df; color: white; font-weight: bold;">Register Client</button>
        </div>
    </form>

    </div>


      <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Branapps Entertainment Pvt Ltd 2020</span>
                    </div>
                </div>
            </footer>


     <div class="portfolio-modal modal fade" id="AddNewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">

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
    </center>
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
                      <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</center>
</div>
</div>
</div>
</div>
</body>
</html>
