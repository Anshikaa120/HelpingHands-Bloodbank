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

    <title>ContactUs</title>
</head>

<body>
<?php
    include "topbar.php";
  ?>


    <div class="container my-4">
        <h2>Contact Us</h2>
        <form action="contact.php">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            
           
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tell us about yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="yourself" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Elaborate Your Concern</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" name="concern" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" name="Submit">Submit</button>
        </form>
        <?php
            if(isset($_REQUEST["Submit"])){
                $email = $_REQUEST["email"];
                $concern = $_REQUEST["concern"];
                $yourself = $_REQUEST["yourself"];
                $query = "INSERT INTO contactus (email,concern,yourself) VALUES ('$email','$concern','$yourself')";
                 $output = mysqli_query($conn,$query);
                 if(!$output){
                     echo "Failure";
                     $error = mysqli_error($conn);
                     echo $error;
                 }else{
                    ?>
                    <h3 class="join-heading"> Raised a Request </h3> 
                    <?php
            }

            }
            ?>
    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 Helping Hands, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>