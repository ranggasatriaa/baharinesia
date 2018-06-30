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
        <?php
        foreach($html->find('div.news-title') as $title){
          // echo '<h3>'.$title->plaintext.'</h3>';
          echo '<h1 class="h2">'.$title->plaintext.'</h1>';
        }
        ?>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="berita.php">Berita</a></li>
          <li class="breadcrumb-item active">Detail Berita</li>
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
          <p class="text-muted text-uppercase mb-small text-right text-sm"><?=$_GET['date']?></p>
          <?php
          foreach($html->find('div.description') as $description){
            foreach ($description->find('p') as $p) {
              foreach ($p->find('img') as $image) {
                echo '<a href="'.$image->src.'"><img src="'.$image->src.'" alt="'.$image->alt.'" width="'.$image->width.'" ></a>';
              }
              echo '<p class="lead" style="text-align:justify; margin:0px">'.$p->plaintext.'</p>';

            }
          }
          ?>
          <a href="<?=$link?>">Artikel Asli</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('menu-footer.php');
  ?>
