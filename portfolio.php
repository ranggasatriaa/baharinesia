<?php
include('menu-header.php');
?>

<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Portfolio - no space + 3 columns</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Portfolio - no space + 3 columns</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">
    <section class="bar">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <h2>Portfolio</h2>
          </div>
          <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
      </div>

      <div class="row portfolio text-center no-space">
        <?php
        foreach ($html->find('div.team-member') as $group) {
          foreach ($group->find('img') as $img) {
            $image_src = $img->src;
            $link = $a->plaintext;
          }
            ?>
            <div class="col-md-4">
              <div class="box-image">
                <div class="image">
                  <img src="img/portfolio-1.jpg" alt="" class="img-fluid">
                  <div class="overlay d-flex align-items-center justify-content-center">
                    <div class="content">
                      <div class="name">
                        <h3><a href="<?=$image_src?>" class="color-white">Portfolio item</a></h3>
                      </div>
                      <div class="text">
                        <p class="d-none d-sm-block">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                        <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>
</div>
<section class="bar background-pentagon no-mb">
  <div class="container">
    <div class="row showcase text-center">
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify"></i></div>
          <h4><span class="h1 counter">580</span><br> Websites</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
          <h4><span class="h1 counter">100</span><br>Satisfied Clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-copy"></i></div>
          <h4><span class="h1 counter">320</span><br>Projects</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font"></i></div>
          <h4><span class="h1 counter">923</span><br>Magazines and Brochures</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bar bg-gray">
  <div class="container">
    <div class="heading text-center">
      <h2>Our Clients</h2>
    </div>
    <ul class="list-unstyled owl-carousel customers no-mb">
      <li class="item"><img src="img/customer-1.png" alt="" class="img-fluid"></li>
      <li class="item"><img src="img/customer-2.png" alt="" class="img-fluid"></li>
      <li class="item"><img src="img/customer-3.png" alt="" class="img-fluid"></li>
      <li class="item"><img src="img/customer-4.png" alt="" class="img-fluid"></li>
      <li class="item"><img src="img/customer-5.png" alt="" class="img-fluid"></li>
      <li class="item"><img src="img/customer-6.png" alt="" class="img-fluid"></li>
    </ul>
  </div>
</section>
</div>
<!-- GET IT-->
<div class="get-it">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-center p-3">
        <h3>Do you want cool website like this one?</h3>
      </div>
      <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
    </div>
  </div>
</div>
<!-- FOOTER -->
<footer class="main-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h4 class="h6">About Us</h4>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <hr>
        <h4 class="h6">Join Our Monthly Newsletter</h4>
        <form>
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
              <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
            </div>
          </div>
        </form>
        <hr class="d-block d-lg-none">
      </div>
      <div class="col-lg-3">
        <h4 class="h6">Blog</h4>
        <ul class="list-unstyled footer-blog-list">
          <li class="d-flex align-items-center">
            <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
            <div class="text">
              <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
            <div class="text">
              <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
            <div class="text">
              <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
            </div>
          </li>
        </ul>
        <hr class="d-block d-lg-none">
      </div>
      <div class="col-lg-3">
        <h4 class="h6">Contact</h4>
        <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
        <hr class="d-block d-lg-none">
      </div>
      <div class="col-lg-3">
        <ul class="list-inline photo-stream">
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
          <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center-md">
          <p>&copy; 2018. Your company / name goes here</p>
        </div>
        <div class="col-lg-8 text-right text-center-md">
          <p>Template design by <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- Javascript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>
