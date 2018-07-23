<?php
function link_to_album($item) {
  return '<li class="nav-item"><a class="nav-link" href="#"  data-albumid=' . $item['id'] . '>' . $item['title'] . '</a></li>';
}
$list = $flickr->getAlbums(['OMnie','Certyfikaty']);
?>
<div class="container">
<div class="row">
<div class="section-header text-center">
<h2 class="title">Portfolio</h2>
</div>
<div class="col-md-4">
<ul id="galleryList" class="nav flex-column gallery">
<?php foreach($list as $item) {
  echo link_to_album($item);        
} ?>
</ul>
</div>
<div class="col-md-8">
<div id="gallery"></div>
</div>
</div>
</div>