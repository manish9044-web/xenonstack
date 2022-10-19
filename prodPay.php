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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tito Payment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

    <body>
    
    <br>
        <div class="container-fluid">
        
            <div class="" >
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Please Fill Your Details</h3>
                        </div>
                        <div class="p-4">
                        <?php include('message.php');?>
                            <form action="thank.php" method="POST" enctype="multipart/form-data">
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
                                    <span class="input-group-text bg-primary">
                                    <i class="bi bi-calendar-date text-white"></i></span>
                                    <input type="date" name="dob" class="form-control" placeholder="date of birth">
                                </div>
                                <div class="input-group mb-3">
                                <span class="input-group-text bg-primary">
                                     &nbspGender&nbsp</span>
                                    &nbsp
                                    &nbsp
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="MALE" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        <span class="input-group-text bg-primary text-white">
                                        <i class="bi bi-gender-male"></i></span> &nbsp
                                            
                                            Male
                                        </label>
                                        </div> &nbsp
                                        &nbsp 
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="FEMALE">
                                            <label class="form-check-label" for="exampleRadios2">
                                            <span class="input-group-text bg-primary text-white">
                                            <i class="bi bi-gender-female"></i></span>
                                                Female
                                            </label>
                                        </div>
                                        &nbsp
                                        &nbsp 
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="OTHERS">
                                            <label class="form-check-label" for="exampleRadios2">
                                            <span class="input-group-text bg-primary text-white">
                                            <i class="bi bi-gender-trans"></i></span> &nbsp
                                                Other
                                            </label>
                                        </div>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-telephone-fill text-white"></i></span>
                                    <input type="number" name="phno" class="form-control" placeholder="Phone Number" >
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-building text-white"></i></span>
                                            <textarea class="form-control" name="address" rows="3" placeholder="Enter Your Address"></textarea>
                                </div>
                                
                              
                                
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-success" type="submit" name="register"><span></span> Make Payment</button>
                                </div>
                                <br>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-danger" type="button" name="saveUser" onclick = "history.go(-1)"><span></span> Back</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <center><?php include('footer.php');?></center>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>