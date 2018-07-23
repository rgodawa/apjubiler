$(function () {
        var myGo = false; 
        
        $(document).on("click","ul.gallery li a",function(e) { 
          e.preventDefault();
          myGo = true;
          $("ul.gallery li a").removeClass('active');
          $(this).addClass("active");    
          $('#gallery').nanogallery2('displayItem', $(this).data('albumid')+'');
        });
     
        
        function myProcessData(item, kind, sourceData) {
          //console.log(item.thumbSizes.url_m);
          //console.log(Object.keys(item.thumbSizes));
          //item.thumbSizes.url_m = 'https://res.cloudinary.com/rall/image/fetch/' + item.thumbSizes.url_m; 
        }
        
        function OpenFlip(item) {
          console.log(Object.keys(item));
        }
        
        function HoverFlip($elt, item, data) {
          console.log($elt);
          //console.log(Object.keys(item));
        }
        
        $("#cert-gallery").nanogallery2({
          "thumbnailWidth": "300",
          "thumbnailHeight": "300",
          "thumbnailGutterWidth": 8,
          "thumbnailGutterHeight": 12,
          "thumbnailLabel": {
            "displayDescription": true,
            "titleMultiLine": true
          },
          "thumbnailHoverEffect2": "imageScaleIn80|imageSepiaOff|labelAppear75",
          "galleryDisplayMode": "pagination",
          "galleryDisplayMode": "rows",
          "galleryMaxRows": 1,
          "thumbnailAlignment": "center",
          "displayBreadcrumb": false,
          "galleryPaginationMode": "rectangles",
          "galleryTheme": "light",
          "locationHash": false,
          //fnThumbnailOpen:  OpenFlip,
          //fnThumbnailHover:  HoverFlip
        });
        
        
        $("#gallery").nanogallery2({        
          "userID": "156294542@N07",
          "kind": "flickr",
          "blackList": "Certyfikaty|OMnie",
          "thumbnailWidth": "300",
          "thumbnailHeight": "300",
          "thumbnailGutterWidth": 8,
          "thumbnailGutterHeight": 8,
          "thumbnailLabel": {
            "titleMultiLine": true
          },
          "thumbnailHoverEffect2": "imageScaleIn80|imageSepiaOff|labelAppear75",
          "galleryDisplayMode": "pagination",
          "thumbnailAlignment": "center",
          "displayBreadcrumb": false,
          "galleryPaginationMode": "rectangles",
          "galleryTheme": "light",
          "locationHash": false,
          //fnProcessData: myProcessData     
        });
        
        $("#gallery").on( 'galleryObjectModelBuilt.nanogallery2', function() {
          let instance=$("#gallery").nanogallery2('instance');
          let newItem = NGY2Item.New(instance, 'Duplex efekt końcowy', '', '0', '72157691925180142', 'image', '' );
          
          newItem.thumbSet('//farm1.staticflickr.com/789/41096964461_f8ed8a2dac_n.jpg', 300, 300);
          newItem.src = 'www.flickr.com/photos/156294542@N07/41096964461/in/dateposted-public/';
          newItem.mediaKind = 'iframe';
          newItem.mediaMarkup = '<a data-flickr-embed="true"  href="https://www.flickr.com/photos/156294542@N07/41096964461/in/dateposted-public/" title="Duplex efekt końcowy"><img src="https://farm1.staticflickr.com/789/41096964461_f8ed8a2dac_n.jpg" width="1280" height="720" alt="Duplex efekt końcowy"></a>' + '<script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"><' + '/script>';
          return false;
        });
        
        $("#gallery").on( 'galleryRenderEnd.nanogallery2', function() {
          if (myGo) {
            if (isMobile.any()) {
              window.location.href = '#gallery';
              }
            if (window.location.href.slice(-2) == '/#') {
              window.location.href = '#portfolio';
              }
            myGo = false;
          }
          return false;
        }); 
});