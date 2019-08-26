<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     <title>Home - Healthy Feet Afrika </title>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Add a gray background color and some padding to the footer */
   
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      max-height: 500px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
          }
  </style>
  <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: white;">

<?php include 'menu.php'; ?>
 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/bill.png" alt="Image">
          <div class="carousel-caption">
            <h3>WELCOME</h3>
            <p>To Healthy Feet </p>
          </div>
        </div>

        <div class="item">
          <img src="images/bill01.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>HEALTHY FEET</h3>
            <p>Give a Shoe! Give a Smile!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="content">
      <div class="container text-center">
        <h3>Healthy Feet Afrika</h3>
        <p><em>Give a Shoe! Give a Smile!</em></p>
        <p>Healthy Feet is a non-for profit foundation with a vision of seeing every child having shoes</p>
        <p>Footwear in Africa is extremely important in order to reduce trauma, hookworm and parasitic diseases that enter the bare foot. It is also important to minimize foot infections in the diabetic population, as well as to lower the risk for podoconiosis and Kaposi’s sarcoma.<br/>
        A recent fact from the World Bank indicates that only 24% of the rural population of Sub-Saharan Africa have access to improved sanitation, compared to 42% of the urban population. Even in cities, less than half of the population have toilet facilities that provide safe hygiene options.</p> 
        <p>In rural villages there are usually one or two public village toilets with no sewage system whatsoever. Wearing shoes instead of walking barefoot offers protection and safety by reducing the risk of exposure to parasites like hookworm, pathogens, and hazardous substances that affect public health. 
      </div>

  <br>

  <div class="col-sm-6">
      <div class="well">
       <br/>

<p><strong>MISSION: </strong> To provide footwear and Healthcare services to children and Communities that are living in              
poverty. </p>

<p><b>VISION:</b> To ensure that all children and communities have foot wear and Healthy feet.</p>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="well">
       <b><p>OUR VALUES</p></b><br />
      1. Integrity.<br/>
      2.Transparency.<br/>
      3. Quality service.<br/>
    </div>
</div>
    <hr>
    <!--contact us Section-->
     
   <div class="container" >
       <h3 class ="text-center">CONTACT US</h3>
       <p class="text-center"><em>Send us a message</em></p>

      <div class="row">
        <div class="col-sm-5">
         <p>Contact us and we'll get back to you within 24 hours.</p>
         <p><span class="glyphicon glyphicon-map-marker"></span>Kampala, UGANDA</p>
         <p><span class="glyphicon glyphicon-phone"></span>+256 705026641</p>
         <p><span class="glyphicon glyphicon-envelope"></span> <a href="#Healthyfeet.afrika@gmail.com">healthyfeet@gmail.com</a></p>
       </div>
       <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="col-sm-12form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
      </div><br>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-left" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
 </div>
</body>


  
</body> 

 <?php include 'footer.php'; ?>	  
</html>