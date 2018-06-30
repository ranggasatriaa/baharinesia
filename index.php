<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$main = file_get_html('http://kkp.go.id/');
$berita = file_get_html('http://kkp.go.id//kategori/1-Berita');
$artikel = file_get_html('http://kkp.go.id/kategori/2-Artikel');
$agenda = file_get_html('http://kkp.go.id/kategori/4-Agenda');
$foto = file_get_html('http://kkp.go.id/galeri');
$video = file_get_html('http://kkp.go.id/video');

include('menu-header.php');
?>

<section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
  <div class="container">
    <!-- Carousel Start-->
    <div id="home" class="home-carousel">
      <div class="dark-mask mask-primary"></div>
      <div class="container">
        <div class="homepage owl-carousel">
          <?php
          foreach($main->find('.slideshow-slide') as $figure){
            //pencari link untuk menuju ke halaman asli gambar

            // ul = unordered list
            // ol = oedered list
            //nyati link
            foreach ($figure->find('a') as $a) {
              $image_href = $a->href;
            }
            // href= link ke halaman sesuatu
            // src = link untuk menampilkan gambar
            //mencari link untuk menampilkan gambar
            foreach($figure->find('img.imgsize') as $image){
              $image_src = $image->src;
            }
            ?>
            <div class="item">
              <div class="row">
                <div class="col-md-12 ">
                  <a href="berita-detail.php?link=<?=$image_href?>&date=''">
                    <img src="<?=$image_src?>" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
    <!-- Carousel End-->
  </div>
</section>
<section class="bg-white bar">
  <div class="container">
    <div class="heading text-center">
      <h2>BERITA TERKINI</h2>
    </div>
    <!-- <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="blog.html">Check our blog</a></p> -->
    <div class="row">
      <?php
      $i=1;
      foreach($berita->find('div.news') as $group){
        if ($i <= 4) {
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
        $i+=1;
      }
      ?>
    </div>
  </div>
</section>

<!-- MID SECTION -->
<section class="bar background-pentagon  text-md-center">
  <div class="container">
    <div class="heading text-center">
      <h2>Foto</h2>
    </div>
    <div class="row portfolio text-center no-space">
      <?php
      $i=1;
      foreach($foto->find('div.team-member') as $group){
        if ($i<=4) {
          ?>
          <div class="col-md-3">
            <div class="box-image">
              <div class="image">
                <?php
                foreach($group->find('img') as $image){
                  echo '<img src="'.$image->src.'" alt="'.$image->alt.'" class="img-fluid">';
                }
                ?>
                <div class="overlay d-flex align-items-center justify-content-center">
                  <div class="content">
                    <div class="text">

                      <?php
                      foreach($group->find('div.team-details') as $detail){
                        foreach($detail->find('font') as $date){
                          echo '<div class="name">';
                          echo '<h3 class="color-white">'.$date->plaintext.'</h3>';
                          echo '</div>';
                        }
                        foreach($detail->find('a') as $a){
                          echo '<p class="d-none d-sm-block">'.$a->plaintext.'</p>';
                          echo '<p class="buttons"><a href="foto-detail.php?link='.$a->href.'" class="btn btn-template-outlined-white">View</a></p>';
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        $i+=1;
      }
      ?>
    </div>
    <div class="bar">

    </div>
    <div class="heading text-center">
      <h2>Video</h2>
    </div>
    <div class="row portfolio text-center no-space">
      <?php
      $i=1;
      foreach($video->find('div.team-member') as $group){
        if ($i<=4) {
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
                <p class="intro" style="text-align: center; padding:0px 10px"><a href="video-detail.php?link=<?=$title_href?>"><?=$title?> </a></h4>
                <!-- <p class="author-category"><a href="video-detail.php?link=<?=$title_href?>"><i class="fa fa-clock-o fa-before"></i> <?=$time?></a></p> -->
                <!-- <p class="intro"><?=$description?></p><a href="video-detail.php?link=<?=$title_href?>" class="btn btn-template-outlined">Continue Reading</a> -->
              </div>
            </div>
          </div>
          <?php
        }
        $i+=1;
      }
      ?>
    </div>
  </div>
</section>

<!-- BOTTOM SECTION -->
<section class="bg-white bar">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading text-center">
          <h2>Artikel</h2>
        </div>
        <?php
        $i=1;
        //penanda untuk pindah grid ke bawah
        foreach($artikel->find('div.media-body') as $body){
          if ($i <= 4) {
            ?>
            <div class="col-md-12">
              <?php
              //detect heading / title
              foreach ($body->find('h6.media-heading') as $e) {
                $title_length = strlen($e->plaintext);
                //deteksi link artikel asli
                foreach($body->find('a') as $a){
                  // echo '<h3>'.$a->href.'</h3>';
                  $link = $a->href;
                }
                foreach ($body->find('small') as $date) {
                  $date_length = strlen($date->plaintext);
                  $date = $date->plaintext;
                  // echo '<h4>'.$e->plaintext . '</h4>';
                }
                echo '<h2 class="h3 mt-0"><a href="artikel-detail.php?link='.$link.'&date='.$date.'">'.$e->plaintext. '</a></h2>';
              }

              //panjang palintext yg harus dihilangkan
              $length = $date_length+$title_length+3;
              ?>

              <p class="intro" style="text-align:justify"><?=substr($body->plaintext,$length)?></p>
              <div class="d-flex flex-wrap justify-content-between text-xs">
                <p class="read-more text-right">
                  <a href="artikel-detail.php?link=<?=$link?>&date=<?=$date?>" class="btn btn-template-outlined">Lanjutkan Membaca</a>
                </p>
                <p class="date-comments"><a href="#"><i class="fa fa-calendar-o"></i> <?=$date?></a></p>
              </div>
            </div>
            <?php
          }
          $i+=1;
        }
        ?>
      </div>
      <div class="col-md-6">
        <div class="heading text-center">
          <h2>Agenda</h2>
        </div>
        <?php
        $i=1;
        //penanda untuk pindah grid ke bawah
        foreach($agenda->find('div.media-body') as $body){
          if ($i <= 4) {
            ?>
            <div class="col-md-12">
              <?php
              //detect heading / title
              foreach ($body->find('h6.media-heading') as $e) {
                $title_length = strlen($e->plaintext);
                //deteksi link artikel asli
                foreach($body->find('a') as $a){
                  // echo '<h3>'.$a->href.'</h3>';
                  $link = $a->href;
                }
                foreach ($body->find('small') as $date) {
                  $date_length = strlen($date->plaintext);
                  $date = $date->plaintext;
                  // echo '<h4>'.$e->plaintext . '</h4>';
                }
                echo '<h2 class="h3 mt-0"><a href="agenda-detail.php?link='.$link.'&date='.$date.'">'.$e->plaintext. '</a></h2>';
              }

              //panjang palintext yg harus dihilangkan
              $length = $date_length+$title_length+3;
              ?>

              <p class="intro" style="text-align:justify"><?=substr($body->plaintext,$length)?></p>
              <div class="d-flex flex-wrap justify-content-between text-xs">
                <p class="read-more text-right">
                  <a href="agenda-detail.php?link=<?=$link?>&date=<?=$date?>" class="btn btn-template-outlined">Lanjutkan Membaca</a>
                </p>
                <p class="date-comments"><a href="#"><i class="fa fa-calendar-o"></i> <?=$date?></a></p>
              </div>
            </div>
            <?php
          }
          $i+=1;
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php
include('menu-footer.php');
?>
