<?php
// example of how to use basic selector to retrieve HTML contents
// memanggil file scaming javascript
include('simple_html_dom.php');

// get DOM from URL or file
// mengambil file html dari link dan memasukkannya kedalam parameter $html
$html = file_get_html('http://kkp.go.id/kategori/2-Artikel/');

echo 'find all link';
echo '<hr>';
foreach($html->find('a') as $e){
  echo $e->href . '<br>';
  //mengambil text biasa yang berada dalam tag <a>
  // echo $e->plaintext;
}

echo 'find all image';
echo '<hr>';
foreach($html->find('img') as $e){
  echo $e->src . '<br>';
}

echo 'find all image with full tag';
echo '<hr>';
foreach($html->find('img') as $e){
  echo $e->outertext . '<br>';
}

echo ' find all div tags with id=gbar';
echo '<hr>';
foreach($html->find('div#gbar') as $e){
  echo '<p>'.$e->innertext . '</p>';
}

echo ' find all span tags with class=gb1';
echo '<hr>';
foreach($html->find('span.gb1') as $e){
  echo $e->outertext . '<br>';
}

echo ' find all td tags with attribite align=center';
echo '<hr>';
foreach($html->find('td[align=center]') as $e){
  echo $e->innertext . '<br>';
}

echo ' extract text from table';
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

echo 'extract text from HTML';

echo $html->plaintext;
?>
