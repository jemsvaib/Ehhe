<style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 750px;
                height: 500px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
        
        <!-- 
            You need to include this script tag on any page that has a Google Map.

            The following script tag will work when opening this example locally on your computer.
            But if you use this on a localhost server or a live website you will need to include an API key. 
            Sign up for one here (it's free for small usage): 
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key

            After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuoGE1aFkyY04NXAUcAaH6v_fHk8wvmi8"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(48.8664041, 2.3327394), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"elementType":"labels","stylers":[{"visibility":"off"},{"color":"#f49f53"}]},{"featureType":"landscape","stylers":[{"color":"#f9ddc5"},{"lightness":-7}]},{"featureType":"road","stylers":[{"color":"#813033"},{"lightness":43}]},{"featureType":"poi.business","stylers":[{"color":"#645c20"},{"lightness":38}]},{"featureType":"water","stylers":[{"color":"#1994bf"},{"saturation":-69},{"gamma":0.99},{"lightness":43}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#f19f53"},{"weight":1.3},{"visibility":"on"},{"lightness":16}]},{"featureType":"poi.business"},{"featureType":"poi.park","stylers":[{"color":"#645c20"},{"lightness":39}]},{"featureType":"poi.school","stylers":[{"color":"#a95521"},{"lightness":35}]},{},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#813033"},{"lightness":38},{"visibility":"off"}]},{},{},{},{},{},{},{},{},{},{},{},{"elementType":"labels"},{"featureType":"poi.sports_complex","stylers":[{"color":"#9e5916"},{"lightness":32}]},{},{"featureType":"poi.government","stylers":[{"color":"#9e5916"},{"lightness":46}]},{"featureType":"transit.station","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","stylers":[{"color":"#813033"},{"lightness":22}]},{"featureType":"transit","stylers":[{"lightness":38}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#f19f53"},{"lightness":-10}]},{},{},{}]
                };

              
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                var images = {"fujita" : "https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Ffu.png?1524409638567",
                              "kodawari" : "https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Fko.png?1524411018616",
                              "ippudo" : "https://cdn.glitch.com/3baabecb-8029-4432-a258-1f2c694a0bbe%2Fi.png?1524411352615"};

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                	icon: images['fujita'],
                    position: new google.maps.LatLng(48.866410, 2.332831),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    // label: "sushi",
                    title: 'FOUJITA'
                });
                
              
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                	icon: images['kodawari'],
                    position: new google.maps.LatLng(48.854643, 2.338069),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    // label: "sushi",
                    title: 'KODAWARI'
                });
              
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                	icon: images['ippudo'],
                    position: new google.maps.LatLng(48.864610, 2.344677),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    // label: "sushi",
                    title: 'IPPUDO'
                });
              
                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });
                

				console.log(images['fujita']);
            }
        </script>

<div class="container">
  
  <div id="map"></div>
  <br><br>
  <p>
    
    <?php
    
      foreach ($rests as $key => $tag ) {
        
        if(isset($restsinf[$rests[$key]]['type'])){
          
          $type = $restsinf[$rests[$key]]['type'];
          
          if($type=="1"){
            
            $keylist = $key+1;
            
            echo $keylist." - ";
            echo "sushi restaurent ";
          
          }
        
        }
        
        $name = $restsinf[$rests[$key]]['name'];
        $icon = $restsinf[$rests[$key]]['icon'];
        
        echo "<img src='".$icon."' height='24'> ".$name."<br>";
      
      }
    
    ?>
    
  </p>
</div>