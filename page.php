<?php
require 'content/flickr.php';
$flickr = new flickr();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zegarmistrz | Andrzej Piasecki | Wrocław</title>

  <link rel='icon' href='favicon.ico?289349832' type='image/x-icon'/>
  
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	
  <!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css"> 

	<!-- Custom stlylesheet -->
  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime("css/style.css")?>">
  <!-- flipclock -->
  <link rel="stylesheet" href="css/flipclock.min.css">
  <!-- nanogallery2 -->
  <link rel="stylesheet" href="css/nanogallery2.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  
  <!-- Znaczniki JSON-LD wygenerowane przez Asystenta do oznaczania danych Google. -->
  <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "image": [
     "https://farm1.staticflickr.com/815/40376299575_45e997197f.jpg"
     ],
    "name" : "Zakład Zegarmistrzowski - Andrzej Piasecki",
    "telephone" : "+48577788892",
    "address" : {
      "@type" : "PostalAddress",
      "streetAddress" : "pl. Dominikański 3",
      "addressLocality" : "Wrocław",
      "postalCode" : "50-159",
      "addressCountry": "PL"
    },
    "url": "http://zegarmistrzostwo.com/",
    "openingHoursSpecification" : {
      "@type" : "OpeningHoursSpecification",
      "dayOfWeek" : [
        "Mon-Fri"
        ],
        "opens": "15:00",
        "closes": "19:30"
      }    
  }
  </script>
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('https://res.cloudinary.com/rall/image/fetch/http://zegarmistrzostwo.com/img/background.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="#">
							<img class="logo" src="img/logo-piasecki.png" alt="Zakład Zegarmistrzowski - Andrzej Piasecki" width="200" height="50">
							<img class="logo-alt" src="img/logo-piasecki.png" alt="Logo" width="200" height="50">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Start</a></li>
					<li><a href="#o-mnie">O mnie</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#certyfikaty">Certyfikaty</a></li>
          <li><a href="//zegarynaczas.pl" target="_blank">Sklep</a></li>
					<li><a href="#kontakt">Kontakt</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-12">
						<div class="home-content">
							<h1 class="white-text">Zegarmistrz</h1>
              <p class="white-text" style="font-size: 21px;">Wrocław</p>
              <p class="white-text" style="font-size: 18px;">Galeria Dominikańska</p>
              <p class="white-text" style="font-size: 18px;">Pon-Pt: 15:00-19:30</p>
              <p class="white-text tel-number" style="font-size: 18px;"><a href="tel:+48577788892" style="color:#D21818">tel. 577-788-892</a></p>
						</div>  
					</div>
					<!-- /home content -->

				</div>
        <div class="row">
          <div class="col-md-12">
          <div class="clock"></div>
          </div>
        </div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="o-mnie" class="section md-padding">
    <?php require 'content/about.php'; ?>
  </div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">
    <?php require 'content/portfolio.php'; ?>  
  </div>
	<!-- /Portfolio -->
  
  <!-- Certyfikaty -->
	<div id="certyfikaty" class="section md-padding">
    <?php require 'content/certyfikaty.php'; ?>
  </div>
	<!-- /Contact -->

	
  <!-- Contact -->
	<div id="kontakt" class="section md-padding bg-grey">
    <?php require 'content/contact.html'; ?>
  </div>
	<!-- /Contact -->

  

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">
    <?php require 'content/footer.html'; ?>
  </footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
 	<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.nanogallery2.min.js"></script>  
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isMobile.js"></script>  
	<script src="js/flipclock.min.js"></script>
  <script src="js/gallery.js?v=<?php echo filemtime("js/gallery.js")?>"></script>    
  <script src="js/main.js?v=<?php echo filemtime("js/main.js")?>"></script>
  <script id="cookieinfo" 
    src="/js/cookieinfo.min.js"
    data-message="Ta strona używa ciasteczek (cookies), dzięki którym nasz serwis może działać lepiej."
    data-linkmsg="Dowiedz się więcej"
    data-moreinfo="//pl.wikipedia.org/wiki/HTTP_cookie"
    data-close-text="Rozumiem">
  </script>
  <script>
    $(function () {
        var clock;
        clock = $('.clock').FlipClock({
					clockFace: 'TwentyFourHourClock'
				});
        
        $('.navbar-brand img').click(function(){
          $('body, html').animate({scrollTop: 0}, 600);
        });
        
        if ( !isMobile.any() ) {
          $(".tel-number").text("tel. 577-788-892");
          $(".tel-number-kontakt").text("577-788-892");
          $(".tel-number-kontakt a").remove();
        }
        
        $(document).on('click', isMobile.any() == true ? 'aa' : 'a', function (e) {
            e.preventDefault();
    
            var $this = $(this),
                url = $this.attr("href"),
                title = $this.text();
                
            if (url.indexOf('//zegarynaczas.pl') !== -1) {
              window.open(url, '_blank');
            }
            
            if (url.indexOf('//goo.gl/maps/') !== -1) {
              window.open(url, '_blank');
            }
            
            if (url.indexOf('//pl.wikipedia.org/') !== -1) {
              window.open(url, '_blank');
            }
            
            if (url.indexOf('poczta') !== -1) {
              title = 'e-mail';
              window.open(url, '_blank');
            }    
              
            
            history.pushState({
              url: url,
              title: title
            }
            , title
            , url);
              
            document.title = title;
            
        });
    
        $(window).on('popstate', function (e) {
            var state = e.originalEvent.state;
            if (state !== null) {
                console.log('State:' + state.title);
                document.title = state.title;
            } 
        });
    });
   
  </script>
</body>

</html>
