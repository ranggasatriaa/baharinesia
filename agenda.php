<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
if (isset($_GET['link'])) {
  $html= file_get_html($_GET['link']);
}else{
  $html = file_get_html('http://kkp.go.id//kategori/4-Agenda');
}

include('menu-header.php');
?>
<!-- Navbar End-->

<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Acara</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Acara</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">
    <div class="row bar">
      <div id="blog-listing-medium" class="col-md-12">
        <?php
        //penanda untuk pindah grid ke bawah
        foreach($html->find('div.media-body') as $body){
          ?>
          <section class="post" >
            <div class="row">
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
            </div>
          </section>
          <?php
        }
        ?>

        <!-- <ul class="pager d-flex align-items-center justify-content-between list-unstyled">
        <li class="previous"><a href="#" class="btn btn-template-outlined">← Older</a></li>
        <li class="next disabled"><a href="#" class="btn btn-template-outlined">Newer →</a></li>
      </ul> -->
    </div>
  </div>
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
                  <a href="agenda.php?link=<?=$a->href?>" class="page-link"><?=$a->plaintext?></a>
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
</div>
<?php
include('menu-footer.php') ?>
