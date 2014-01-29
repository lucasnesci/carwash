/**
 * Js for the Google Map on the sidebar region.
 */
(function ($) {
  Drupal = Drupal || {};
  Drupal.behaviors.carwash = Drupal.behaviors.carwash || {};

  Drupal.behaviors.carwash.contact_us_map = {
    init: function() {
      var lat = Drupal.settings.carwash_blocks.variables.profile_latitude;
      var lng = Drupal.settings.carwash_blocks.variables.profile_longitude;
      var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(lat, lng)
      };

      var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

      var mapsEngineLayer = new google.maps.visualization.MapsEngineLayer({
        layerId: '06673056454046135537-08896501997766553811',
        map: map
      });

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        map: map,
        title: 'Hello World!'
      });
    }
  };
  google.maps.event.addDomListener(window, 'load', Drupal.behaviors.carwash.contact_us_map.init);
}(jQuery));
