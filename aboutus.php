<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
<title>About- Happy Feet Project Afrika</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #backgroundimage1{
    background-image: url("images/bill.png");
    background-position: right bottom, left top;
    background-repeat: no-repeat;
    padding: 100px;
    text-align: center;
  }

  /* Add a gray background color and some padding to the footer */
   
  /*  .carousel-inner img {
      width: 100%; /* Set width to 100% */
    /*    max-height: 500px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    /* @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
          } */
  </style>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
    
<?php include 'menu.php'; ?>

 <header>     
 <div id="backgroundimage1"><h1><strong>About Us</strong></h1>
 </div>
</header>  
      

<br />
<div class="content">
	<div class="container text-center">
	  <p><em>Happy Feet Project Afrika</em> started in 2017, and has involved youth, institutions and networks in its elaboration. Since Africa is so big, we decided to to start in the East African region and Uganda is the pilot phase of our programme, and to do so with specific attention to the challenges faced by children without shoes in the rural areas. But the objective is to replicate and extend the initiative to the whole continent after the successful conclusion of this pilot initiative. We have already completed an initial training programme for professors and tutors who will have an important role in the project.</p>
	<br>
	<h3>THE TEAM </h3>
	<div class="row">
    <div class="col-sm-3">
      <h4><p class="text-center"><strong>Peace Sabano</strong></p></h4><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/peace.jpg" class="img-circle person" alt="Peace" width="200" height="200">
      </a>
      <div id="demo" class="collapse">
        <p>Founder </p>
        <p>Loves children </p>
        <p>Peace Sabano</p>
      </div>
    </div>
    <div class="col-sm-3">
      <h4><p class="text-center"><strong>Priscilla Logose</strong></p></h4><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/Priscilla.jpg" class="img-circle person" alt="Priscilla" width="200" height="200">
      </a>
      <div id="demo2" class="collapse">
        <p>CEO</p>
        <p>Loves dancing</p>
        <p>Priscilla Logose</p>
      </div>
    </div>
    <div class="col-sm-3">
      <h4><p class="text-center"><strong>Shamirah Kasule</strong></p></h4><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/shamie.jpg" class="img-circle person" alt="Shamirah" width="200" height="200">
      </a>
      <div id="demo3" class="collapse">
        <p>Project Director</p>
        <p>Loves singing</p>
        <p>Shamirah Kasule</p>
      </div>
    </div>
    <div class="col-sm-3">
      <h4><p class="text-center"><strong>Phyllis Nabangi</strong></p></h4><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="images/phyllis.jpg" class="img-circle person" alt="Phyllis" width="200" height="200">
      </a>
      <div id="demo4" class="collapse">
        <p>CFO</p>
        <p>Loves math</p>
        <p>Phyllis Nabangi</p>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</body>
</div>

      <?php include 'footer.php'; ?>	
</html>