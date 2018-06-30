<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://kkp.go.id/video');

include('menu-header.php');
?>
<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Video</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Video</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="bg-white bar">
  <div class="container">
    <!-- <div class="heading text-center">
    <h2>From the blog</h2>
  </div>
  <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="blog.html">Check our blog</a></p> -->
  <div class="row">
    <?php
    foreach($html->find('div.team-member') as $group){
      //mengambil gambar
      foreach($group->find('img') as $img){
        $image_src = $img->src;
      }
      //mengambil judul link dan deskripsi
      foreach($group->find('div.team-details') as $group_title){
        foreach($group_title->find('a') as $a){
          $title = $a->plaintext;
          $title_href = $a->href;
          $description = $a->plaintext;
        }
      }
      //menampilkan di halaman
      ?>
      <div class="col-lg-3">
        <div class="home-blog-post">
          <div class="image">
            <img src="<?=$image_src?>" alt="..." class="img-fluid">
            <div class="overlay d-flex align-items-center justify-content-center"><a href="video-detail.php?link=<?=$title_href?>" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Ke Video</a></div>
          </div>
          <div class="text">
            <h4 style="text-align:justify"><a href="video-detail.php?link=<?=$title_href?>"><?=$title?> </a></h4>
            <!-- <p class="author-category"><a href="video-detail.php?link=<?=$title_href?>"><i class="fa fa-clock-o fa-before"></i> <?=$time?></a></p> -->
            <!-- <p class="intro"><?=$description?></p><a href="video-detail.php?link=<?=$title_href?>" class="btn btn-template-outlined">Continue Reading</a> -->
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>
</section>

<?php include('menu-footer.php') ?>
