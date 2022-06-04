<!--donorId name dob contact no-->
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
                            <img src="n2.jpg" alt=" ">
                        </figure>
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="appointment-form-wrapper text-center clearfix">
                            <h3 class="join-heading"> Want to become donor to save life</h3>
                            <form class="appoinment-form" action="donate.php">
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <!-- <div class="form-group col-md-6">
                                <input id="your_email" class="form-control" placeholder="Email" type="email">
                            </div>-->
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
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" name="Donate" type="submit" style="color:blue;">Donate
                                        Blood</button>
                                </div>

                            </form>
                            <?php
                        if(isset($_REQUEST["Donate"])){
                            if(isset($_REQUEST["bankLocation"]) and isset($_REQUEST["BloodType"]) and isset($_REQUEST["Contact"]) and isset($_REQUEST["Name"])){
                                $Name = $_REQUEST["Name"];
                                $Contact = $_REQUEST["Contact"];
                                $bankLocation = $_REQUEST["bankLocation"];
                                $bloodType = $_REQUEST["BloodType"];
                                $query = "SELECT * FROM bloodstorage WHERE bankLocation = '$bankLocation' AND  bloodtype = '$bloodType' ";
                                $output = mysqli_query($conn,$query);
                                if(!$output){
                                    // echo "Failure";
                                    // $error = mysqli_error($conn);
                                    // echo $error;
                                }else{
                                    if(mysqli_num_rows($output)>0){
                                    while($i = mysqli_fetch_assoc($output)){

                                    $units =  $i['units'];
                                    
                                }
                                $newunits = $units + 1;
                                $query = "UPDATE bloodstorage SET units = $newunits WHERE  bankLocation = '$bankLocation' AND  bloodtype = '$bloodType'";
                                $output = mysqli_query($conn,$query);
                                if(!$output){
                                    // echo "Failure";
                                    // $error = mysqli_error($conn);
                                    // echo $error;
                                }else{
                                    ?>
                                    <h3 class="join-heading"> You Have Successfully Donated Blood </h3> 
                                    <?php
                                   
                                     $query = "INSERT INTO donardata (name,contact,bloodtype,bankLocation) VALUES ('$Name','$Contact','$bloodType','$bankLocation')";
                                     $output = mysqli_query($conn,$query);
                                     if(!$output){
                                         echo "Failure";
                                         $error = mysqli_error($conn);
                                         echo $error;
                                     }else{
                                        ?>
                                        <h3 class="join-heading"> In <?php echo $bankLocation?> </h3> 
                                        <?php
                                     }

                                }
                            
                            }}}
                               }
                            
           
                        ?>
                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->

            </div> <!--  end .container -->

        </section> <!--  end .appointment-section  -->


        
            


    </body>

</html>