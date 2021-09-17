<?php
get_header(); ?>

<!-- MAPS ---> 
   
  <div class="MAPS contact__doctor">
     <div>
<iframe src="https://www.google.com/maps/d/embed?mid=1PEFu00eLRZ_Lnfx5iWR5ZTqM73QHqzwT" id="googlemap"></iframe>
     </div>

     <div class="container">
            <div class="row">
               <div class="col-md-5 col-lg-4">
                  <address>
                     <div itemscope="" itemtype="http://schema.org/Organization">
                        <p><?= do_shortcode( '[code var=address]' );?></p>
                        <p><i class="fas fa-mobile-alt"></i><?= do_shortcode( '[code var=phone_link]' );?></p>
                        <p><i class="fas fa-mobile-alt"></i><?= do_shortcode( '[code var=next_phone_link]' );?></p>

                        <p><i class="far fa-envelope"></i> <?= do_shortcode( '[code var=email_link]' );?></p>

                        <p class="mb-0"><?= do_shortcode( '[code var=user__instagram]' );?></p>
                        <p class="mb-0"><?= do_shortcode( '[code var=clinic__instagram]' );?></p>
                        <p itemprop="name">Врач отоларинголог, пластический хирург</p>
                     </div>
                  </address>
               </div>
            </div>
         </div>
  </div>
   
   
    
<!-- MAPS --->  


<script type="text/javascript">
  
//jQuery(document).ready(function($) {
//  
//    ymaps.ready(function () {
//      var myMap = new ymaps.Map('googlemap', {
//              center: [50.455546, 30.475328],
//              zoom: 17
//          }, {
//              searchControlProvider: 'yandex#search'
//          }),
//          myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
////              hintContent: 'Собственный значок метки',
////              balloonContent: 'Это красивая метка'
//          }, {
//              // Опции.
//              // Необходимо указать данный тип макета.
////           iconLayout: 'default#image',
//            preset: 'islands#redIcon',
//            // Своё изображение иконки метки.
//            iconImageHref: 'https://drive.google.com/uc?export=download&id=0B5x-k62opfncempfanZOWW1xR3M',
//              // Размеры метки.
//              iconImageSize: [183, 190],
//              // Смещение левого верхнего угла иконки относительно
//              // её "ножки" (точки привязки).
//              iconImageOffset: [-70, -135]
//          });
//
//      myMap.geoObjects.add(myPlacemark);
//  });
//  
//}); 
  
  
  

//	var map;
//
//	function initMap() {
//    
//      var mapOptions = {
//        zoom: 16,
//        scrollwheel: false, 
//
//        mapTypeControl: false, 
//        scrollZoom:  false,
//
//        scaleControl: false,
//        center: new google.maps.LatLng(50.455766,30.47439),
//      };
//
//
//
//     var image = 'http://rutkas.uh-vpn.org/wp-content/themes/th-001/img/new_64_64.png';
//
//
//     var beachMarker = new google.maps.Marker({
//         position: {lat: -33.890, lng: 151.274},
//         map: map,
//         icon: image
//     });
//
//    var mapElement = document.getElementById('googlemap');
//    var map = new google.maps.Map(mapElement, mapOptions);
//
//
//    var marker = new google.maps.Marker({
//      position: new google.maps.LatLng(50.455766,30.47439),
//      map: map,
//     icon: image});
//       // ПО КЛИКУ окно открывается 
//    //  marker.addListener('click', function() {
//    //   infowindow.open(map, marker);
//    // });
//       infowindow.open(map, marker);
//
//    }

</script>

<?php get_footer();