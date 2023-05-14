<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="background-color :#fbecb8">


    

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-md-9" method="post" action="login.php">
            <div class="AppForm shadow-lg">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="AppFormLeft">

                            <h1>Login</h1>
                            <div class="form-group position-relative mb-4">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="username"
                                    placeholder="Username" name="uname">
                                    <i class="fa fa-user-o"></i>
                            </div>
                            <div class="form-group position-relative mb-4">
                                <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="password"
                                    placeholder="Password" name="upass">
                                    <i class="fa fa-key"></i>

                            </div>
                            <div class="row  mt-4 mb-4">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase " name="login"> 
                                Login
                            </button>

                            <p class="text-center mt-5">
                                Don't have an account?
                                <span>
                                    Create your account
                                </span>

                            </p>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                            <h2 class="position-relative px-4 pb-3 mb-4">Welcome</h2>
                   <p>Flawless skin starts with the flawless skincare routine.</p>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","skin");
// if($conn){
//     echo "Connection Established";
// }
if (isset($_POST['login'])) {
    // echo "Inside Form";
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    $query = "SELECT * FROM login WHERE username = '$uname' && upassword = '$upass' ";
    $run = mysqli_query($conn, $query);

    if ($run) {


        header("location:http://localhost/SKIN/patient.php");
    
    } else{
        echo "failed.....";
    }
}

?>