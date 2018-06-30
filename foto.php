<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://kkp.go.id/galeri');
// echo $html;

include('menu-header.php');
?>

<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Foto</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Foto</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">
    <section class="bar">
      <div class="row portfolio text-center no-space">

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h2>Portfolio</h2>
            </div>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
          </div>
        </div>  -->

        <?php
        foreach($html->find('div.team-member') as $group){
          ?>
          <div class="col-md-4">
            <div class="box-image">
              <div class="image">
                <?php
                foreach($group->find('img') as $image){
                  echo '<img src="'.$image->src.'" alt="'.$image->alt.'" class="img-fluid">';
                  echo 'saya';
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
        ?>
      </div>
    </section>
  </div>
</div>
<?php include('menu-footer.php') ?>
