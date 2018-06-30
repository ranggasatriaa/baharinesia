<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file
// $main = file_get_html('http://kkp.go.id/');
// $berita = file_get_html('http://kkp.go.id//kategori/1-Berita');
// $artikel = file_get_html('http://kkp.go.id/kategori/2-Artikel');
// $agenda = file_get_html('http://kkp.go.id/kategori/4-Agenda');
// $foto = file_get_html('http://kkp.go.id/galeri');
// $video = file_get_html('http://kkp.go.id/video');

include('menu-header.php');
?>
<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Lembaga Terkait</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Lembaga Terkait</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container">
    <section class="bar">
      <div class="row">
        <div class="col-lg-12">
          <div class="bar">
          </div>
          <div class="heading">
            <h3>
              <a href="https://maritim.go.id/">1. Maritim Indonesia</a>
            </h3>
          </div>
          <div class="heading">
            <h3>
              <a href="http://setnas-asean.id/">2. Sekretarian Nasional Indonesia-Asean</a>
            </h3>
          </div>
          <div class="heading">
            <h3>
              <a href="http://www.kemenpar.go.id/asp/index.asp">3. Kementerian Pariwisata Indonesia</a>
            </h3>
          </div>
          <div class="heading">
            <h3>
              <a href="http://setnas-asean.id/">4. Kementterian Kelautan dan Perikanan Republik Indonesia</a>
            </h3>
          </div>
          <div class="heading">
            <h3>
              <a href="http://www.tnial.mil.id/">5. TNI Angkatan Laut</a>
            </h3>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="bar"></div>
</div>
<?php
include('menu-footer.php');
?>
