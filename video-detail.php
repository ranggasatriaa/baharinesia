<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$link = $_GET['link'];
$html = file_get_html($link);

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
          <li class="breadcrumb-item"><a href="video.php">Video</a></li>
          <li class="breadcrumb-item active">Detail Video</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">
    <div class="row bar">
      <div id="blog-post" class="col-md-12">
        <div id="post-content">
          <!-- <p class="text-muted text-uppercase mb-small text-right text-sm"><?=$_GET['date']?></p> -->
          <?php
          foreach($html->find('li.active') as $li){
            echo '<h2 style="text-align:justify; margin:0px">'.$li->plaintext.'</h2>';
          }
          foreach($html->find('center') as $description){
              foreach ($description->find('iframe') as $iframe) {
                echo '<iframe src="'.$iframe->src.'" width=800px height=400px></iframe>';

              }
          }
          ?>
          <br>
          <a href="<?=$link?>">Artikel Asli</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('menu-footer.php');
  ?>
