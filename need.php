<!DOCTYPE html>
<html lang="en">
<?php
require_once('config.php');
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Urgent need of blood</title>
</head>

<body>

    <body style="background-color:gainsboro;">
    <?php
    include "topbar.php";
  ?>


        <section class="section-appointment">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

                        <figure class="appointment-img">
                            <img src="a2.jpg" alt=" ">
                        </figure>
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="appointment-form-wrapper text-center clearfix">
                            <h2 class="join-heading">Need blood</h2>
                            <form class="appoinment-form" action="need.php">
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" name="Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_phone" class="form-control" placeholder="Contact no" type="text" name="Contact">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">
                                        <select class="form-control" name="BloodType">
                                            <option selected>Your blood type...</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                            <div class="select-style">
                                <select class="form-control" name="bankLocation">
                                    <option selected>Search blood bank...</option>
                                    <option value='Bhopal'>Bhopal</option>
                                    <option value='Indore'>Indore</option>
                                    <option value='Jalandhar'>Jalandhar</option>
                                    <option value='Mumbai'>Mumbai</option>
                                    <option value='Delhi'>Delhi</option>
                                </select>
                            </div>
                        </div>

                                <div class="form-group col-md-6">
                                    <input id="your_date" class="form-control" placeholder="Doctor's Name" type="text" name="doctor">
                                </div>


                                <div class="form-group col-md-6">
                                    <input id="your_time" class="form-control" placeholder="Hospital Name" type="text" name="hospital">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="Submit">Request Blood</button>
                                </div>

                            </form>
                            <?php
                            if(isset($_REQUEST["Submit"])){
                                if(isset($_REQUEST["bankLocation"]) and isset($_REQUEST["BloodType"]) and isset($_REQUEST["Contact"]) and isset($_REQUEST["Name"])){
                                    $Name = $_REQUEST["Name"];
                                    $Contact = $_REQUEST["Contact"];
                                    $bankLocation = $_REQUEST["bankLocation"];
                                    $bloodType = $_REQUEST["BloodType"];
                                    $hospital = $_REQUEST["hospital"];
                                    $doctor = $_REQUEST["doctor"];
                                    $query = "INSERT INTO bloodrequest (name,contact,bloodtype,city,hospital,doctor) VALUES ('$Name','$Contact','$bloodType','$bankLocation','$hospital','$doctor')";
                                     $output = mysqli_query($conn,$query);
                                     if(!$output){
                                         echo "Failure";
                                         $error = mysqli_error($conn);
                                         echo $error;
                                     }else{
                                        ?>
                                        <h3 class="join-heading"> Raised a Request for Blood Donation </h3> 
                                        <?php
                                }}}
                                    
                            ?>

                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->

            </div> <!--  end .container -->

        </section> <!--  end .appointment-section  -->


    </body>

</html>