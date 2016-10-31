function initialize() {
  var pyrmont = new google.maps.LatLng(50.631482, 3.059175);

  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 12,
    scrollwheel: false
  });

  var myLatLng = new google.maps.LatLng(50.631482,3.059175);
  var myLatLng1 = new google.maps.LatLng(50.63,3.07);
  var myLatLng2 = new google.maps.LatLng(50.6,3.06);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3>Livraison</h3>'+
      '<div id="bodyContent">'+
      '<p><b>Ceci est le premier emplacement du site</b>, Vous pouvez livrer un restaurant à cet endroit, ' +
      ' il y en a 3 dans les environs: le <a>Restaurant A</a>, le <a>Restaurant B</a> et le <a>Restaurant C</a></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!',
          icon : 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
        });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  marker.setMap(null);

  var marker1 = new google.maps.Marker({
          map: map,
          position: myLatLng1,
          title: 'Hello World!',
          icon : 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
        });
    marker1.setMap(null);

  var marker2 = new google.maps.Marker({
          map: map,
          position: myLatLng2,
          title: 'Hello World!',
          icon : 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
        });
  marker2.setMap(null);

 document.getElementById('emplacement').onclick = function(){
    marker.setMap(map);
    marker1.setMap(null);
    marker2.setMap(null);
  };
  document.getElementById('restaurant').onclick = function(){
      marker.setMap(null);
      marker1.setMap(map);
      marker2.setMap(null);
  };
  document.getElementById('agriculteur').onclick = function(){
      marker.setMap(null);
      marker1.setMap(null);
      marker2.setMap(map);
  };

}

google.maps.event.addDomListener(window, 'load', initialize);
// function initCarte(){
//   // init
//   var i, posLat = 43.5, posLng = 0.6, nb = 600;
//   var allMarkers = [], oMap, oMarker;
//   // creation de la carte
//   oMap = new google.maps.Map(document.getElementById('map-canvas'),{
//       'backgroundColor': '#fff',
//       'mapTypeControl':  false,
//       'streetViewControl': false,
//       'zoomControlOptions': {
//         style: google.maps.ZoomControlStyle.SMALL
//       },
//       'zoom': 6,
//       'center': new google.maps.LatLng( 46.80, 1.75),
//       'mapTypeId': google.maps.MapTypeId.ROADMAP
//     });
//   // creation des marqueurs
//   for( i=0; i <nb; i++){
//     oMarker = new google.maps.Marker({
//       'position' : new google.maps.LatLng( posLat, posLng),
//       'map' : oMap
//     });
//     // décalage
//     posLat += 0.01;
//     posLng += 0.01;
//     // stockage du marker
//     allMarkers.push( oMarker);
//   }
//   // affectation des actions au boutons
//   document.getElementById('btn_hide').onclick = function(){
//     for( i=0; i< allMarkers.length; i++){
//       allMarkers[i].setMap(null);
//     }
//   };
//   document.getElementById('btn_show').onclick = function(){
//     for( i=0; i< allMarkers.length; i++){
//       allMarkers[i].setMap( oMap);
//     }
//   };
// }
// // init lorsque la page est chargee
// google.maps.event.addDomListener(window, 'load', initCarte);