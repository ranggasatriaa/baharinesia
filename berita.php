<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
if (isset($_GET['link'])) {
  $html= file_get_html($_GET['link']);
}else{
  $html = file_get_html('http://kkp.go.id//kategori/1-Berita');
}

include('menu-header.php');
?>
<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Berita</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Berita</li>
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
    foreach($html->find('div.news') as $group){
      //mengambil gambar
      foreach($group->find('div.news-image') as $group_image){
        foreach($group_image->find('img') as $img){
          $image_src = $img->src;
        }
      }
      //mengambil judul link dan deskripsi
      foreach($group->find('div.news-title') as $group_title){
        foreach($group_title->find('a') as $a){
          $title = $a->plaintext;
          $title_href = $a->href;
          $description = $a->plaintext;
        }
      }
      //mengambil tanggal
      foreach($group->find('div.news-time') as $p){
        $time = $p->plaintext;
      }
      //menampilkan di halaman
      ?>
      <div class="col-lg-3">
        <div class="home-blog-post">
          <div class="image">
            <img src="<?=$image_src?>" alt="..." class="img-fluid">
            <div class="overlay d-flex align-items-center justify-content-center"><a href="berita-detail.php?link=<?=$title_href?>&date=<?=$time?>" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Selengkapnya</a></div>
          </div>
          <div class="text">
            <h4 style="text-align:justify"><a href="berita-detail.php?link=<?=$title_href?>&date=<?=$time?>"><?=$title?> </a></h4>
            <p class="author-category"><a href="berita-detail.php?link=<?=$title_href?>&date=<?=$time?>"><i class="fa fa-clock-o fa-before"></i> <?=$time?></a></p>
            <p class="intro"><?=$description?></p><a href="berita-detail.php?link=<?=$title_href?>&date=<?=$time?>" class="btn btn-template-outlined">Lanjutkan Membaca</a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <br><br>
  <div class="row">
    <div class="col-lg-12">
      <div id="pagination" class="wp-example" >
        <nav aria-label="Page navigation example" style="margin:auto">
          <ul class="pagination pagination-lg">
            <?php
            foreach ($html->find('ul.pagination-sm') as $ul) {
              foreach ($ul->find('a') as $a) {
                ?>
                <li class="page-item <?=$a->href=='#' ? 'active' : ''?>">
                  <a href="berita.php?link=<?=$a->href?>" class="page-link"><?=$a->plaintext?></a>
                </li>
                <?php
              }
            }
            ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
</section>

<?php include('menu-footer.php') ?>
