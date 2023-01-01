<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body>
  <!-- =========================== -->
<header class="container-fluid slider">
  <div class="row">

  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

  <?php 
  $x=0;
  while(have_posts()){the_post();
    $x++;
  ?>

    <div class="carousel-item <?=($x==1)?'active' : ''?>">
    <?php the_post_thumbnail(); ?>
     
    </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  </div>
</header>


<!-- ======================== -->

<section class="container-fluid">
  <div class="row logo pt-2">
    <div class="col-sm-6 Llogo">
      <?php the_custom_logo(); ?>
    </div>
    <div class="col-sm-6 Rlogo text-end">
    <?php dynamic_sidebar( 'rightlogo' ); ?>
    </div>
  </div>
</section>
<!-- ================================= -->


<section class="container-fluid">
 <div class="container  navbar-expand d-flex justify-content-center menu_1">
 <?php
  wp_nav_menu(array(
    'theme_location'       => 'TM',
    'menu_class'           => 'menu navbar-nav',
  ));
  ?>
 </div>
</section>



<!-- ============================= -->

<section class="container mt-5 hero">
  <div class="row">
  <?php dynamic_sidebar( 'herotext' ); ?>
  </div>

</section>

<!-- ================= -->

<section class="container mt-5 d-flex justify-content-center">
  <div class="row hbhero text-center">
<div class="col-sm-4">

<div class="card" style="width: 15rem;">
<?php dynamic_sidebar( 'hbimg1' ); ?>
  <div class="card-body">
  <?php dynamic_sidebar( 'hbbody1' ); ?>
  </div>
</div>



</div>
<div class="col-sm-4">
<div class="card" style="width: 15rem;">
<?php dynamic_sidebar( 'hbimg2' ); ?>
  <div class="card-body">
  <?php dynamic_sidebar( 'hbbody2' ); ?>
  </div>
</div>



</div>
<div class="col-sm-4">
<div class="card" style="width: 15rem;">
<?php dynamic_sidebar( 'hbimg3' ); ?>
  <div class="card-body">
  <?php dynamic_sidebar( 'hbbody3' ); ?>
  </div>
</div>
</div>

  </div>
</section>

<!-- ================= -->
<section class="container-fluid mt-5  d-flex justify-content-center">
  <div class="row line">
    <div class="col-sm-5">
    <?php dynamic_sidebar( 'lline' ); ?>
    </div>
    <div class="col-sm-2">
    <?php dynamic_sidebar( 'hblinetext' ); ?>
    </div>
    <div class="col-sm-5">
    <?php dynamic_sidebar( 'rline' ); ?>
    </div>
  </div>
</section>

<!-- ============================== -->





<section class="container mt-5">
  <div class="row herophoto">
    <div class="col-sm-3">



                <div class="card" style="width: 15rem;">
                <?php dynamic_sidebar( 'cdphoto1' ); ?>
              <div class="card-body">
              <?php dynamic_sidebar( 'bodyhero' ); ?>
              </div>
            </div>



    </div>
    <div class="col-sm-3">

    <div class="card" style="width: 15rem;">
                <?php dynamic_sidebar( 'cdphoto2' ); ?>
              <div class="card-body">
              <?php dynamic_sidebar( 'bodyhero' ); ?>
              </div>
            </div>
    
    </div>
    <div class="col-sm-3">

    <div class="card" style="width: 15rem;">
                <?php dynamic_sidebar( 'cdphoto3' ); ?>
              <div class="card-body">
              <?php dynamic_sidebar( 'bodyhero' ); ?>
              </div>
            </div>

    </div>
    <div class="col-sm-3">

    <div class="card" style="width: 15rem;">
                <?php dynamic_sidebar( 'cdphoto4' ); ?>
              <div class="card-body">
              <?php dynamic_sidebar( 'bodyhero' ); ?>
              </div>
            </div>


    </div>


  </div>
</section>





<!-- ======================================= -->
<section class="container-fluid mt-5  d-flex justify-content-center">
  <div class="row line">
    <div class="col-sm-5">
    <?php dynamic_sidebar( 'lline' ); ?>
    </div>
    <div class="col-sm-2">
    <?php dynamic_sidebar( 'hblinetext' ); ?>
    </div>
    <div class="col-sm-5">
    <?php dynamic_sidebar( 'rline' ); ?>
    </div>


<!-- ============================ -->
    <div class="row newsbuttom">

    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

  <?php 
  $x=0;
  while(have_posts()){the_post();
    $x++;
  ?>

    <div class="carousel-item <?=($x==1)?'active' : ''?>">
    <?php the_title(); ?>
     
    </div>
    <?php } ?>
  </div>

  
  </div>

<!-- ================= -->

  </div>
</section>

<!-- ========================== -->

<section class="container-fluid mt-5 ft">
  <div class="row ">
    <div class="col-sm-6 text-center lrftft">

<ul>
<h6>CONTACT US</h6> <br>
  <li>
    <p>Address: Office of the Project Director <br> Padma Multipurpose Bridge Project <br>
      4th floor, Setu Bhaban, New Airport <br> Road, Banani, Dhaka-1212</p>
  </li>
  <li>
    <p>  <?php dynamic_sidebar( 'futim' ); ?></p>
  </li>
  <li>
    <p>Fax: +880 2 55040477</p>
  </li>
  <li>
    <p>Email: <a href="#"> padmabridgeweb@gmail.com</a></p>
  </li>
</ul>
    </div>
    <div class="col-sm-6 toplink">
     
      <ul>
      <h6>IMPORTANT LINKS</h6> <br>
        <li><a href="">Prime Minister's Office</a></li>
        <li><a href="">PMIS</a></li>
        <li><a href="">Bangladesh Bridge Authority</a></li>
        <li><a href="">Bridges Division</a></li>
        <li><a href="">Roads and Highways Department</a></li>
        <li><a href="">Cabinet Division</a></li>
        <li><a href="">Ministry of Public Administration</a></li>
        <li><a href="">National Web Portal</a></li>
      </ul>
    </div>

  </div>
  <div class="container cp mt-5">
    <div class="row ">
      <div class="col-sm-6 text-center "><a href="">POWERED BY SOLUTION ART LTD</a></div>
      <div class="col-sm-6 text-center"><a href="">COPYRIGHT © 2023.MD:JAHIDUL ISLAM JOY.</a></div>
    </div>
    </div>
</section>
<!-- ============== -->



<?php wp_footer(); ?>
</body>
</html>