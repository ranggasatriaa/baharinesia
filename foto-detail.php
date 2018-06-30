<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$link = $_GET['link'];
$html = file_get_html($link);

include('menu-header.php');
?>

<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <?php
        foreach($html->find('div.underlined-title') as $title){
          echo '<h1 class="h2">'.$title->plaintext.'</h1>';
        }
        ?>


      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="foto.php">Foto</a></li>
          <li class="breadcrumb-item active">Foto detail</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">

    <section>
      <div class="project owl-carousel">
        <?php
        foreach($html->find('div.gallery-thumb') as $group){
          foreach($group->find('img') as $image){
            echo '<div class="item"><img src="'.$image->src.'" alt="" class="img-fluid"></div>';
          }
        }
        ?>
      </div>
    </section>
    <section class="no-mb bar">
      <div class="row">
        <div class="col-md-12">
          <?php
          // foreach($html->find('p') as $p){
            foreach($html->find('span') as $span){
              if ($span->plaintext!=' Indonesia  ' && $span->plaintext!='| ' && $span->plaintext!=' English  ' && $span->plaintext!=' Saran Dan Pengaduan  ') {
                // code...
                echo '<p class="lead no-mb" style="text-align:justify">'.$span->plaintext.'</p>';
              }
            }
          // }

          ?>

        </div>
      </div>
    </section>


  </div>
</div>
<?php
include('menu-footer.php');
?>
