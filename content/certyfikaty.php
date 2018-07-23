<?php
function link_to_cert($photo) {
  return '<a href="' . $photo['url_m'] . '" data-ngthumb="' . $photo['cloud_url'] . $photo['url_m'] . '" data-ngdesc="' . $photo['description'] . '">' . $photo['title'] . '</a>';
}
$photos = $flickr->getPhotos('72157667467102078');
?>
<!-- Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Section header -->
<div class="section-header text-center">
<h2 class="title">Certyfikaty</h2>
</div>
<div class="col-md-12">
<div id="cert-gallery">
<?php foreach($photos as $photo) {
        echo link_to_cert($photo);        
} ?>
</div>
</div>
</div>
<!-- /Row -->
</div>
<!-- /Container -->