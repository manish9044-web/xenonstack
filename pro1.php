<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Brandon Shoes</title> <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

   
   
    <header class="">
    <?php include('nav.php');?>
    </header>
    <br>
    
    <br><br><br><br><br><br>
    <div class="container">
    <div class="card text-center">
        <div class="card-header">
            <img src="assets/images/product_01.jpg" class="card-img-top" alt="..." style="width: 30%;">
            
        </div>
        <div class="card-body">
            
            <h4>Brandon Shoes</h4>
                          <h6>$18.25</h6>
                          <br>
                          <p>Celebrating 30 years of Italian Craftsmanship</p>
                          <p>Since its inception in 1988, Brando Shoes pursued its vision refining the heritage of Italian craftsmanship. Rocco Mascitelli founded his shoe company in 1988, after spending many years in the shoemaking region of Marche, Italy where he came in contact with premium materials and fell in love with the artisanal process of making shoes.</p>
        </div>
        <div class="card-footer text-muted">
            <form action="prodPay.php" method="post">
            <button name="pay6" class="btn btn-info" type="submit">Add to Cart</button>  
            <button name="pay6" class="btn btn-success" type="submit">Buy Now</button>
            </form>
        </div>
    </div>
    </div>
    
        <?php include('footer.php');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>