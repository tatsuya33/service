<!DOCTYPE html>
<html>
  <head>
    <title>Gmaps.js テスト</title>
    <script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../../assets/js/Gmaps.js"></script>
    <script type="text/javascript">
      // コントローラから渡された住所を取得
      var addressStr = "{!! $post->address  !!}";

      $(document).ready(function(){
          // Gmapsを利用してマップを生成
          var map = new GMaps({
              div: '#map',
              lat: -12.043333,
              lng: -77.028333
          });

          // 住所からマップを表示
          GMaps.geocode({
              post: addressStr.trim(),
              callback: function(results, status) {
                  if (status == 'OK') {
                      var latlng = results[0].geometry.location;
                      map.setCenter(latlng.lat(), latlng.lng());
                      map.addMarker({
                          lat: latlng.lat(),
                          lng: latlng.lng()
                      });
                  }
              }
          });
      });
    </script>
    <style>
      @charset "utf-8";
      #map {
        height: 600px;
      }
    </style>
  </head>
  <body>
    <p>住所：{{ $post->address  }}</p>
    <div id="map"></div>
  </body>
</html>
