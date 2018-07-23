<?php
function link_to_carousel($photo) {
  return '<div class="owl-item"><img class="img-responsive" src="' . $photo['cloud_url'] . $photo['url_m'] . '" alt="' . $photo['title'] . '"  width="500"></div>';
}
$photos = $flickr->getPhotos('72157665568996937');
?>
<!-- Container -->
<div class="container"><!-- Row -->
  <div class="row"><!-- Section header -->
    <div class="col-md-6">
    <div class="section-header">
      <h2 class="title">Andrzej Piasecki</h2>
    </div>
    <div class="feature">
			<i class="fa fa-check"></i>
      <p>Jestem zegarmistrzem z 40-letnim doświadczeniem.</p>
    </div>
    <div class="feature">
			<i class="fa fa-check"></i>
      <p>Posiadam certyfikaty fabryk Eta i Ronda.</p>
    </div>
    <div class="feature">
			<i class="fa fa-check"></i>
      <p>Posiadam certyfikaty firm Longines, Certina, Tissot, Grovana.</p>
    </div>
    </div>
    
    <div class="col-md-6">
      <div id="about-slider" class="owl-carousel owl-theme">
      <?php foreach($photos as $photo) {
        echo link_to_carousel($photo);        
      } ?>
      </div>
    </div>
  </div><!-- /Row -->
  
  <div class="row">
    <div class="col-md-12">
    <div class="feature">
			<i class="fa fa-cogs"></i>
      <p>Oferuję Państwu profesjonalne usługi zegarmistrzowskie, od prostych czynności związanych z konserwacją mechanizmów zegarkowych, po skomplikowane czynności, związane z rekonstrukcją brakujących części i renowacją uszkodzonych elementów mechanizmu.</p>
    </div>
    <div class="feature">
			<i class="fa fa-cogs"></i>
      <p>Naprawiam zegarki naręczne, zegary stojące i wiszące oraz zegary wieżowe umieszczone na różnego rodzaju budowlach.</p>
    </div>
    <div class="feature">
			<i class="fa fa-cogs"></i>
      <p>Dzięki kooperacji z innymi firmami odnawiam tarcze i koperty w starych zegarkach.</p>
    </div>
    <div class="feature">
			<i class="fa fa-cogs"></i>
      <p>Jednym słowem można powiedzieć, że nie istnieje mechanizm zegarkowy, którego nie uda mi się naprawić lub zrekonstruować.</p>
    </div>
    </div>
  </div>  
</div><!-- /Container -->