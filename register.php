<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    min-height: 100vh;
}

body::-webkit-scrollbar {
    display: none;
}

.wrapper {
    max-width: 800px;
    margin: 80px auto;
    padding: 30px 45px;
    box-shadow: 5px 25px 35px #3535356b;
}

.wrapper label {
    display: block;
    padding-bottom: 0.2rem;
}

.wrapper .form .row {
    padding: 0.6rem 0;
}

.wrapper .form .row .form-control {
    box-shadow: none;
}

.wrapper .form .option {
    position: relative;
    padding-left: 20px;
    cursor: pointer;
}


.wrapper .form .option input {
    opacity: 0;
}

.wrapper .form .checkmark {
    position: absolute;
    top: 1px;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #bbb;
    border-radius: 50%;
}

.wrapper .form .option input:checked~.checkmark:after {
    display: block;
}

.wrapper .form .option:hover .checkmark {
    background: #f3f3f3;
}

.wrapper .form .option .checkmark:after {
    content: "";
    width: 10px;
    height: 10px;
    display: block;
    background: linear-gradient(45deg, #ce1e53, #8f00c7);
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark {
    background: #fff;
    transition: 300ms ease-in-out 0s;
}

.wrapper .form .option input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1);
}

#sub {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    color: #333;
}

#sub:focus {
    outline: none;
}

@media(max-width: 768.5px) {
    .wrapper {
        margin: 30px;
    }

    .wrapper .form .row {
        padding: 0;
    }
}

@media(max-width: 400px) {
    .wrapper {
        padding: 25px;
        margin: 20px;
    }
}
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container bg-white"><center><?php include('nav.php'); ?></center></div>
  
    

        <div class="container-fluid vh-500" style="margin-top:20px; margin-bottom:20px;">
        
            <div class="">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Create Account</h3>
                        </div>
                        <div class="p-4">
                        <?php include('message.php');?>
                            <form action="code.php" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-currency-dollar text-white"></i></span>
                                    <input type="number" name="account" class="form-control" placeholder="Account Balance" min="1" max="50000000">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <label>Birthday</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <label>Gender</label>
                                        <div class="d-flex align-items-center mt-2">
                                            <label class="option">
                                                <input type="radio" name="radio">Male
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="option ms-4">
                                                <input type="radio" name="radio">Female
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=" my-md-2 my-3">
                                <label>City</label>
                                <select id="sub" required>
                                    <option value="" selected hidden>Select Your City</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Patna">Patna</option>
                                </select>
                            </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-success" type="submit" name="register"><span></span> Sign up</button>
                                </div>
                                <p class="text-center mt-3">Already have an account?
                                    <span class="text-primary"><a class="btn btn-warning text-center mt-2" href="login.php">
                                    Login here </a></span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

        <center>
            <div class="container bg-white">
            <?php include('footer.php'); ?>
            </div>
            
        </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>