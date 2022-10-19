<nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>M & G <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mt-3 mb-2" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
              <?php if(isset($_SESSION['email'])) { ?>
                <a class="nav-link btn btn-warning" href="logout.php"><?php echo($_SESSION['name'])?> &nbsp - &nbsp Log Out</a>
              <?php } else {  ?>               
              <a class="nav-link btn btn-info" href="login.php">Login Here</a>
              <?php } ?>
              </li>
            </ul>
          </div>
        </div>
        <br>
      <br>
      </nav>
      