<!doctype html>
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

    <title>About Helping Hands Blood Bank</title>
</head>

<body style="background-color:gainsboro;">
<?php
    include "topbar.php";
  ?>

    <section class="section-appointment">

    <div class="container wow fadeInUp">

        <div class="row">

            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

                <figure class="appointment-img">
                    <img src="bb1.jpg" alt=" ">
                </figure>
            </div> <!--  end col-lg-6  -->


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading"> Blood Banks</h3>
                    <form class="appoinment-form" action="bloodbank.php">
                        
                        <!-- <div class="form-group col-md-6">
                        <input id="your_email" class="form-control" placeholder="Email" type="email">
                    </div>-->
                        

                        

                        <div class="form-group col-md-6">
                            <div class="select-style">
                                
                                <select class="form-control" name="BloodType">
                                    <option selected>Your blood type...</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option  value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
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
                            <button id="btn_submit" name="Search" class="btn-submit" type="submit" style="color:blue;">Search </button>
                            <!-- <input type="submit" name="Submit" value="Submit"> -->
                        </div>

                    </form>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Blood Type</th>
                            <th scope="col">Units Avaliable</th>
                            <th scope="col">Cost</th>
                            <th scope="col">City</th>
                            </tr>
                        </thead>

                    <?php
                        if(isset($_REQUEST["Search"])){
                            if(isset($_REQUEST["bankLocation"]) and isset($_REQUEST["BloodType"])){
                                // echo $_REQUEST["BloodType"];
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
                                    echo "<tr><th>";
                                    echo $i['bloodtype'];
                                    echo "</th><th>";
                                    echo $i['units'];
                                    echo "</th><th>";
                                    echo $i['cost'];
                                    echo "</th><th>";
                                    echo $i['bankLocation'];
                                    echo "</th><tr>";
                                }}}}
                            }
           
                        ?>
                        </table>
                </div> <!-- end .appointment-form-wrapper  -->

            </div> <!--  end .col-lg-6 -->

        </div> <!--  end .row  -->

    </div> <!--  end .container -->

</section> <!--  end .appointment-section  -->



</body>

</html>