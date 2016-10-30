function initialize() {

  var pyrmont = new google.maps.LatLng(50.631482, 3.059175);

  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 12,
    scrollwheel: false
  });

  var myLatLng = new google.maps.LatLng(50.631482,3.059175);

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
          title: 'Hello World!'
        });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);
