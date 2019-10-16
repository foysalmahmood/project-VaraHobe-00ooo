<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}
else{ 
?>

<?php 
include("connection.php");
error_reporting(0)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tolet/Rent,Plot,Land List | VaraHobe.com</title>
    <link rel="icon" href="photos/title_icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/submit.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/show_post_grid_view.css">
</head>
<body>
    <header>
        <div class="topmargin"></div>

        <div class="logo">
            <img src="photos/logo.jpeg" height="50" width="50">
        </div>

        <div class="Navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">For Rent</a>
                    <ul>
                        <li><a href="family_house.php">Family House</a></li>
                        <li><a href="bacholor_mess.php">Bachelor Mess</a></li>
                        <li><a href="sublet.php">Sublet</a></li>
                        <li><a href="garage.php">Garage</a></li>
                        <li><a href="factory.php">Factory</a></li>
                        <li><a href="office.php">Office</a></li>
                    </ul>
                </li>
                <li style="background: #1abc9c;"><a href="submit.php">Submit Post</a></li>
                <li><a href="advertising_plot.php">Advertising of Plot</a></li> 
                <li><a href="rend_land.php">Rending of Land</a></li>
                <li><a href="wanted_post.php">Wanted Post</a></li>
            </ul>
        </div>

        <div class="login" session_start();>
            
            <a class="boxed" href="logout.php">
                        <?=$_SESSION['name'];?>
            </a>
        </div>
    </header>


<!-- Submit Post Portion-->

    <div id="app">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 my-2 d-none d-sm-block">
               
            </div>
        <div class="full">
            <h1 style="color: #fff">Post Your Ads</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="add_frame">
                        <div class="form-row"></br>
                            <div class="from">
                                <label for="postOffer">Select Offer Type *</label></br>
                                <select name="offertype" class="div111" >
                                    <option value =""> Select Offer Type </option>
                                    <option value ="Rent"> Rent </option>
                                    <option value ="Advertising of Plot"> Advertising of Plot </option>
                                    <option value ="Rending of Land"> Rending of Land </option>
                                    <option value ="Wanted Post"> Wanted Post </option>
                                </select> <br>
                            </div>
                            <div class="from1">
                                <label for="">Select property type*</label>
                                <div class="selectOffer">
                                    <select name="propertytype" class="div111" >
                                        <option value=""> Select proparty type -</option>
                                        <option value="Family House"> Family House </option>
                                        <option value="Bechelor Mess"> Bechelor Mess </option>
                                        <option value="Sublet"> Sublet </option>
                                        <option value="Garage"> Garage </option>
                                        <option value="Office"> Office </option>
                                        <option value="Plot"> Plot </option>
                                        <option value="Apportment"> Apportment </option>
                                        <option value="Land"> Land </option>
                                    </select>
                                </div>
                            </div>
                </div></br><br><br><br>

                        <div class="from2 form-group">
                            <label for="tilte">Title / Heading *</label>
                            <input type="text" name="ad_title" value="" class="form-control test1 form-control-lg div111" title="Keep it short!" placeholder="Title / Heading" required>
                            <div class="invalid-feedback">Enter a post title *</div>
                                                    </div>

                        <div class="form-group">
                            <label for="form_discription">description *</label>
                            <input type="text" name="ad_description" value="" class="form-control dis1 div111 " title="Details Your property *" placeholder="description*" rows="3" required></textarea>
                            <div class="invalid-feedback">Enter a post description *</div>
                                                    </div>
                                                    

                        <div class="additional-section">
                            <div class="form-row div0">
                                <div class="col-md-3 div1">
                                    <div class="form-group">
                                        <label for="inputZip">Floor Space</label></br>
                                        <input type="number" name="ad_property_size" value="" class="form-control poshytip dissty div111" title="property size Sq Ft (optional)">
                                    </div>
                                </div>
                                <div class="col-md-3 div2">
                                    <div class="form-group">
                                        <label for="ad_floor">Floor No</label><br>
                                        <select name="ad_floor_no" class="form-control poshytip-hover dissty " title="Select floor number(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="ground">Ground</option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                            <option value="5th">5th</option>
                                            <option value="5th">5th</option>
                                            <option value="6th">6th</option>
                                            <option value="7th">7th</option>
                                            <option value="8th">8th</option>
                                            <option value="9th">9th</option>
                                            <option value="10th">10th</option>
                                            <option value="11th">11th</option>
                                            <option value="12th">12th</option>
                                            <option value="13th">13th</option>
                                            <option value="14th">14th</option>
                                            <option value="15th">15th</option>
                                            <option value="16th">16th</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div3">
                                    <div class="form-group">
                                        <label for="inputCity">Bedroom</label>
                                        <select name="ad_beds" class=" div111 dissty form-control poshytip-hover" title="Select total bedroom(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">10+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div4">
                                    <div class="form-group">
                                        <label for="inputState">Bathroom</label>
                                        <select name="ad_baths" class="div111 dissty form-control poshytip-hover" title="Select total bathroom(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div></br></br></br></br>
                            <div class="form-row div10">
                                <div class="col-md-3 div11">
                                    <div class="form-group">
                                        <label for="inputState">Balconies</label>
                                        <select name="ad_balconies" class="div111  dissty form-control poshytip-hover" title="Select total balconies(optional)">
                                            <option selected value="">N/A</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">5+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group div12">
                                        <label for="inputState">Floor Type</label>
                                        <select name="ad_floor_type" class="div111 dissty form-control poshytip-hover" title="Select Floor Type*">
                                            <option selected value="" disabled>Floor Type</option>
                                            <option value="Tiled">Tiled</option>
                                            <option value="Mosaic">Mosaic</option>
                                            <option value="Marble">Marble</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div13">
                                    <div class="form-group">
                                        <label for="inputState">Dining Position</label>
                                        <select name="ad_dining_room" class="div111 dissty form-control poshytip-hover" title="Select dining position(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="Space">Space</option>
                                            <option value="Room">Room</option>
                                            <option value="No Dinig Space/Room">No dining Space/Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-groupd div14">
                                        <label for="inputState">Car Parking</label>
                                        <select name="ad_car_parking" class="div111 dissty form-control poshytip-hover" title="Select car parking(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div></br></br><br><br><br>


<h4 class="text-title"><b>Extra Facilities*<b></h4>

                         <div class="additional-section">
                            <div class="form-row div0">
                                <div class="col-md-3 div1">
                                    <div class="form-group">
                                        <label for="ad_floor">Drawing Room</label><br>
                                        <select name="drawing_room" class="form-control poshytip-hover dissty " title="Select floor number(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div2">
                                    <div class="form-group">
                                        <label for="ad_floor">LIFT</label><br>
                                        <select name="lift" class="form-control poshytip-hover dissty " title="Select floor number(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div3">
                                    <div class="form-group">
                                        <label for="inputCity">GAS</label>
                                        <select name="gas" class=" div111 dissty form-control poshytip-hover" title="Select total bedroom(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div4">
                                    <div class="form-group">
                                        <label for="inputState">GENERATOR</label>
                                        <select name="generator" class="div111 dissty form-control poshytip-hover" title="Select total bathroom(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div></br></br></br></br>
                            <div class="form-row div10">
                                <div class="col-md-3 div11">
                                    <div class="form-group">
                                        <label for="inputState">WASA CONNECTION</label>
                                        <select name="wasa_connection" class="div111  dissty form-control poshytip-hover" title="Select total balconies(optional)">
                                            <option selected value="">N/A</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group div12">
                                        <label for="inputState">COMMNUITY HALL</label>
                                        <select name="ad_floor_type" class="div111 dissty form-control poshytip-hover" title="Select Floor Type*">
                                            <option selected value="" disabled>Floor Type</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 div13">
                                    <div class="form-group">
                                        <label for="inputState">CCTV</label>
                                        <select name="cctv" class="div111 dissty form-control poshytip-hover" title="Select dining position(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="YESs">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-groupd div14">
                                        <label for="inputState">WIFI</label>
                                        <select name="wifi" class="div111 dissty form-control poshytip-hover" title="Select car parking(optional)">
                                            <option selected value="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div></br></br>



                    <!--   <div class="facilities-section mt-4 fac" name="facilities">
                            <h4 class="text-title"><b>Facilities*<b></h4>
                            <div class="form-row div31">
                                <div class="col-md-3 col-sm-6">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_drawing_room" class="custom-control-input div111" id="customControlAutosizing" value="1">
                                        <label class="custom-control-label" for="customControlAutosizing">Drawing Room</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 div32 ">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_lift" class="custom-control-input div111" id="customControlLift" value="1">
                                        <label class="custom-control-label" for="customControlLift">Lift</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 div33">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_gas" class="custom-control-input div111" id="customControlGas" value="1">
                                        <label class="custom-control-label" for="customControlGas">Gas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_generator" class="custom-control-input div111" id="customControlGenerator" value="1">
                                        <label class="custom-control-label" for="customControlGenerator">Generator</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_wasa_connection" class="custom-control-input div111" id="customControlWasa" value="1">
                                        <label class="custom-control-label" for="customControlWasa">Wasa Connection</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_community_hall" class="custom-control-input div111" id="customControlCommunity" value="1">
                                        <label class="custom-control-label" for="customControlCommunity">Community Hall</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" name="ad_cctv" class="custom-control-input div111" id="customControlCCTV" value="1">
                                        <label class="custom-control-label" for="customControlCCTV">CCTV</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                      <!--  <div class="row available" style="display: none">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="electricBill" class="mr-md-4">Electric Bill :</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="ad_electric_bill" class="custom-control-input div111" value="1">
                                        <label class="custom-control-label" for="customRadioInline1">Excluding</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="ad_electric_bill" class="custom-control-input div111" value="0">
                                        <label class="custom-control-label" for="customRadioInline2">Including</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="available">
                                <div class="form-group">
                                    <label for="inputCity">Available</label>
                                    <input type="text" name="ad_available" value="" class="ad_available form-control div111">
                                </div>
                            </div>
                        </div> -->


                        <div class="row rent">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="fields-features-value">Rent (Tk) / month *</label></br>
                                    <input type="number" name="ad_amount" class="form-control form-control-lg month div111" placeholder="Rent (Tk) /month">
                                    <div class="custom-control custom-checkbox ">
                                       <!-- <input type="checkbox" name="ad_negotiable" value="" class="  custom-control-input" id="customControlNegotiable" value="1"> 
                                        <label class="custom-control-label" for="customControlNegotiable">Negotiable</label> -->
                                    </div>
                                </div>
                            </div>
                        </div>



                     <div class="form-group mt-3 upload">
                            <h5>Upload Property Images <span id="counter"></span></h5>
                            <div  class="dropzone" id="my-dropzone">
                                <div class="dz-message">
                                    <div class="message">
                                        <p>Drop files here or Click to Upload</p>
                                    </div>
                                </div>
                                <div class="fallback  ">
                                    <input type="file" name="imgfile" value="" multiple>
                                </div>
                            </div>
                        </div>


                        
                        <div class="form-row location">
                        <h4 class="text-title mt-4 ">Property Location</h4>
                            <div class="col-md-6 location1">
                                <div class="form-group">
                                    <label for="inputCity">Districts</label></br>
                                    <select name="ad_districts" class="form-control districts div111" required>
                                        <option value="">Select District</option>
                                                                                
                                                                                    
                                                                                    <option value="RAJSHAHI">RAJSHAHI</option>
                                                                                    <option value="RANGPUR">RANGPUR</option>
                                                                                    <option value="DHAKA">DHAKA</option>
                                                                                    <option value="CHITTAGONG">CHITTAGONG</option>
                                                                                    <option value="SYLET">SYLET</option>
                                                                                    <option value="KHULNA">KHULNA</option>
                                                                                    <option value="BARISAL">BARISAL</option>
                                                                                    <option value="SYLHET">SYLHET</option>
                                                                                    
                                                                            </select>
                                    <div class="invalid-feedback">Please select districts name *</div>
                                                                    </div>
                            </div>
                            <div class="col-md-6 location2">
                                <div class="form-group">
                                    <label for="inputState">Area</label>
                                    <div class="selectArea">
                                        <select name="ad_area" class="form-control areaSearch div111 " required>
                                            <option value="">Select Area</option>
                                            <option value="Uttara">Uttara</option>
                                            <option value="Gulshan">Gulshan</option>
                                            <option value="Banani">Banani</option>
                                        </select>
                                        <div class="invalid-feedback">Please select area name *</div>
                                                                            </div>
                                </div>
                            </div>
                        </div></br></br></br></br>
                        
                        <div class=" address">
                            <label for="form_message">Address *</label>
                            <input type="text" name="ad_address" value="" class="form-control address1" placeholder="Address details *" rows="2" required></textarea>
                            <div class="invalid-feedback">Please type address details *</div>
                          </div>

                        <div class="form-row flid">
                            <div class="col-md-6 flid1">
                                <div class="form-group">
                                    <label for="form_message">Latitude </label></br></br>
                                    <input type="text" name="latitude" value="" class="form-control div111" >
                                </div>
                            </div>
                            <div class="col-md-6 flid2">
                                <div class="form-group">
                                    <label for="form_message">Longitude </label></br></br>
                                    <input type="text" name="lngnitude" value="" class="form-control div111" >
                                </div>
                            </div>
                        </div>
                       <!-- <div class="form-group">
                            <div id="map"></div>
                        </div></br></br></br></br></br>

                        <h1>Google Map</h1>
                        <div id="map" style="width:100%;height:500px; background-color: #000;"></div><br> -->

                        <div class="pull-right my-3 mr-5"> 
                            <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">
                                Post Your Add
                                <i class="fa fa-yoast"></i>
                            </button>
                        </div>
                </div>
                </form>


<?php

if($_POST['submit'])
{

    $offertype = $_POST['offertype'];
    $propertytype = $_POST['propertytype'];
    $ad_title = $_POST['ad_title'];
    $ad_description = $_POST['ad_description'];
    $ad_property_size = $_POST['ad_property_size'];
    $ad_floor_no = $_POST['ad_floor_no'];
    $ad_beds = $_POST['ad_beds'];
    $ad_baths = $_POST['ad_baths'];
    $ad_balconies = $_POST['ad_balconies'];
    $ad_floor_type = $_POST['ad_floor_type'];
    $ad_dining_room = $_POST['ad_dining_room'];
    $ad_car_parking = $_POST['ad_car_parking'];

    $ad_amount = $_POST['ad_amount'];

    //For Image
    $filename = $_FILES["imgfile"]["name"];
    $tempname = $_FILES["imgfile"]["tmp_name"];
    $folder = "UploadedImages/".$filename;
    move_uploaded_file($tempname, $folder);

    // Next values

    $ad_districts = $_POST['ad_districts'];
    $ad_area = $_POST['ad_area'];
    $ad_address = $_POST['ad_address'];
    $latitude = $_POST['latitude'];
    $lngnitude = $_POST['lngnitude'];
    $date = date('Y-m-d H:i:s');
    
    //extra facilities

    $drawing_room = $_POST['drawing_room'];
    $lift = $_POST['lift'];
    $gas = $_POST['gas'];
    $wasa_connection = $_POST['wasa_connection'];
    $ad_floor_type = $_POST['ad_floor_type'];
    $cctv = $_POST['cctv'];
    $wifi = $_POST['wifi'];

    if($offertype!="" && $propertytype!=""  && $ad_title!=""  && $ad_description!=""  && $ad_property_size!=""  && $ad_floor_no!=""  && $ad_beds!=""  && $ad_baths!=""  && $ad_balconies!=""  && $ad_floor_type!=""  && $ad_dining_room!=""  && $ad_car_parking!=""  && $ad_amount!=""  && $filename!=""  && $ad_districts!=""  && $ad_area!=""  && $ad_address!=""  && $latitude!=""  && $lngnitude!="" && $date!=""  && $drawing_room!=""  && $lift!=""  && $gas!=""  && $wasa_connection!=""  && $ad_floor_type!=""  && $cctv!="" && $wifi!="" )
    {
        $query = "INSERT INTO SUB4 VALUES ('$id', '$offertype' , '$propertytype', '$ad_title', '$ad_description', '$ad_property_size', '$ad_floor_no',  '$ad_beds', '$ad_baths' , '$ad_balconies' , '$ad_floor_type' , '$ad_dining_room' , '$ad_car_parking', '$ad_amount' , '$folder' , '$ad_districts' , '$ad_area' , '$ad_address' ,'$latitude' , '$lngnitude' , '$date',' $drawing_room', '$lift', '$gas', '$wasa_connection', '$ad_floor_type', '$ad_floor_type', '$cctv', '$wifi'

         )";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data inserte into Database";
        }
    }
    else
        echo "Fields Are Empty";
}
               

?>			
				

            </div>
            </div>
        </div>
    </div>
</div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

</body>
</html>

<?php
    }
?>