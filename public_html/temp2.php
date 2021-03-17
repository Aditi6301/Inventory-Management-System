<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>How to autocomplete data on multiple fields with jQuery and AJAX</title>

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
    <div class="container">
        <form class="container" autocomplete="off" method="post" >
        <input type="text"  name="name" class="name" id="name" placeholder="Enter name">
        <div class="HideLater">
            <div>
              <input type="text"  name="registeredname" class="name" id="registeredname" placeholder="Enter name">
              <input type="radio" value="builder" id="radio_1" name="segment"/>
              <label for="radio_1" class="radio"><span>Builder</span></label>
            
              <input  type="radio" value="trader" id="radio_2" name="segment"/>
              <label for="radio_2" class="radio"><span>Trader</span></label>
            
              <input  type="radio" value="contractor" id="radio_3" name="segment"/>
              <label for="radio_3" class="radio"><span>Contractor</span></label>
            
              <input  type="radio" value="retailer" id="radio_4" name="segment"/>
              <label for="radio_4" class="radio"><span>Retailer</span></label>
          </div>
        <div> <input type="text"  name="phone" class="phone" id='phone' placeholder="phone"> </div>
        <div><input type="text"  name="address" class="address" id='address' placeholder="address"> </div>
              
              <div>
              <input type="radio" value="cash" id="radio_5" name="payment"/>
              <label for="radio_5" class="radio"><span>Cash</span></label>
            
              <input  type="radio" value="credit" id="radio_6" name="payment"/>
              <label for="radio_6" class="radio"><span>Credit</span></label>

          </div>
            
            <br><br>
              <div>
              <input type="radio" value="MM to MM" id="radio_7" name="calculation"/>
              <label for="radio_7" class="radio"><span>MM to MM</span></label>
            
              <input  type="radio" value="INCH to INCH" id="radio_8" name="calculation"/>
              <label for="radio_8" class="radio"><span>INCH to INCH</span></label>
            
              <input type="radio" value="Trader INCH to INCH" id="radio_9" name="calculation"/>
              <label for="radio_9" class="radio"><span>Trader INCH to INCH</span></label>
            
              <input type="radio" value="Trader regular" id="radio_10" name="calculation"/>
              <label for="radio_10" class="radio"><span>Trader regular</span></label>
           
              <input type="radio" value="Retail" id="radio_11" name="calculation"/>
              <label for="radio_11" class="radio"><span>Retail</span></label>
            
              <input type="radio" value="Stone" id="radio_12" name="calculation"/>
              <label for="radio_12" class="radio"><span>Stone</span></label>
          </div>
               <div>
               <button type="submit" value="Submit" name="Registered_Client" id="Registered_Client">Next</button>
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
            
              <input  type="radio" value="trader" id="radio_2" name="inputsegment"/>
              <label for="radio_2" class="radio"><span>Trader</span></label>
            
              <input  type="radio" value="contractor" id="radio_3" name="inputsegment"/>
              <label for="radio_3" class="radio"><span>Contractor</span></label>
            
              <input  type="radio" value="retailer" id="radio_4" name="inputsegment"/>
              <label for="radio_4" class="radio"><span>Retailer</span></label>
          </div>
        
        <div><input type="text"  name="inputphone" class="phone" id='inputphone' placeholder="phone"></div>
        <div><input type="text"  name="inputaddress" class="inputaddress" id='address' placeholder="address"></div>
              <div>
              <input type="radio" value="cash" id="radio_5" name="inputpayment"/>
              <label for="radio_5" class="radio"><span>Cash</span></label>
            
              <input  type="radio" value="credit" id="radio_6" name="inputpayment"/>
              <label for="radio_6" class="radio"><span>Credit</span></label>
          </div>
            
            <br><br>
              <div>
              <input type="radio" value="MM to MM" id="radio_7" name="inputcalculation"/>
              <label for="radio_7" class="radio"><span>MM to MM</span></label>
            
              <input  type="radio" value="INCH to INCH" id="radio_8" name="inputcalculation"/>
              <label for="radio_8" class="radio"><span>INCH to INCH</span></label>
            
              <input type="radio" value="Trader INCH to INCH" id="radio_9" name="inputcalculation"/>
              <label for="radio_9" class="radio"><span>Trader INCH to INCH</span></label>
            
              <input type="radio" value="Trader regular" id="radio_10" name="inputcalculation"/>
              <label for="radio_10" class="radio"><span>Trader regular</span></label>
           
              <input type="radio" value="Retail" id="radio_11" name="inputcalculation"/>
              <label for="radio_11" class="radio"><span>Retail</span></label>
            
              <input type="radio" value="Stone" id="radio_12" name="inputcalculation"/>
              <label for="radio_12" class="radio"><span>Stone</span></label>
          </div>
            <div>
            <button type="submit" value="Submit" name="client_register" id="client_register">Register Client</button>
        </div>
    </form>

    </div>
</body>
</html>

