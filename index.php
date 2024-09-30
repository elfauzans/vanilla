<html>

<head>
  <title>PRIMA COMMODITY</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="keywords" content="vanilla exporter, indonesian vanilla, indonesian spices, indonesian spices exporter,">
  <meta name="Description" content="Primacommodity has many experiences for many years plantations, curing and fermentations vanilla beans. Now primacommodity produce very strong aromatic, plum and oily vanilla beans. We have luxury vanilla beans, extract grade vanilla beans, vanilla ground powder 100% pure, and vanilla extract liquid double fold.">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>

  <?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $cm = isset($_GET['cm']) ? $_GET['cm'] : '';
  $fn = isset($_GET['fn']) ? $_GET['fn'] : '';

  ?>


</head>

<body LEFTMARGIN=0 RIGHTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

  <div class="vanilla_top">


    <div class="vanilla_top_1">
      <div class="vanilla_logo1"> <img src="http://2.bp.blogspot.com/-w5tOTIccwMo/VEXemHVo1LI/AAAAAAAAG1A/4ZPyQVEDB_o/s1600/logo.png">
      </div>
      <div class="vanilla_logo2"> PRIMA <cc2>COMMODITY</cc2><br>
        <ca3>LUXURY & GOURMET</ca3>
      </div>
      <div class="kotak2" style="width: 50px;">&nbsp;</div>
      <a href="?fn=home">
        <div class="vanilla_menu">Home</div>
      </a> <a href="?fn=about">
        <div class="vanilla_menu">About Us</div>
      </a> <a href="?fn=product">
        <div class="vanilla_menu">Product</div>
      </a> <a href="?fn=contact">
        <div class="vanilla_menu">Contact</div>
      </a>
      <div class="vanilla_top_leaf1"><img src="http://1.bp.blogspot.com/-f9a52VcuYP0/U3_gLDvKZjI/AAAAAAAADIQ/Ysg1bW-3QGw/s1600/leaf1.png"></div>
      <div class="vanilla_top_leaf2"><img src="http://1.bp.blogspot.com/-SW_eEa6AhR0/VC4dNEhDhBI/AAAAAAAAGw0/2FSOX96Y59s/s1600/vanilla_leaf.png" height="400"></div>
    </div>

  </div>

  <!--batas tengah-->

  <div class="wrapper">
    <?php
    if ($fn == "") {
      include("home.php");
    } else {
      include("content.php");
    }
    ?>
  </div>

  <!--batas tengah-->



  <!-- Footer Section -->
  <footer>
    <div class="row">
      <div class="col">

        <div class="vanilla_logo23"> PRIMA <cc2>COMMODITY</cc2><br>
          <ca3>LUXURY & GOURMET </ca3>
          
        </div>


      </div>
      <div class="col">
        <h2>Our Office <div class="undrline"><span></span></div></h2>
        <p>PRIMA COMMODITY Ltd.</p>
        <p>ARAYA B8 No. 4, Polowijen</p>
        <p>Kec. Blimbing, Kota Malang, Jawa Timur 65126</p>
      </div>
      <div class="col">
        <h2>Links <div class="undrline"><span></span></div></h2>
        <ul>
          <li><a href="?fn=home">Home</a></li>
          <li><a href="?fn=about">About Us</a></li>
          <li><a href="?fn=product">Product</a></li>
          <li><a href="?fn=contact">Contact</a></li>
        </ul>
      </div>

    </div>
    <hr>
    <p class="copyr"> &copy; 2024 PRIMA COMMODITY | All Rights Reserved. </p>
  </footer>


</body>

</html>