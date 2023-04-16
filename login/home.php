<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahaayak</title>
    <link rel="stylesheet" href="styletest.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.0/mapbox-gl.js"></script>
    
    <link rel="stylesheet" href="home.css" />

    </head>
  <body>
    
    <main class="bck-img">
      <div class="header-background">
        <header class="header container">
          <div class="logo-wrapper">
            <a class="logo" href="test.html"
              ><img class="limg" src="IMAGES\SS2.png" alt="SAHAYAK"
            /></a>
          </div>

          <nav class="nav">
            <a href="home.php">HOME</a>
            <a href="shgindex.php">SAHAYAKS</a>
            <a href="profile.php">PROFILE</a>
            <a href="about.php">ABOUT</a>
            <a href="logout.php">LOGOUT</a>
          </nav>
        </header>
      </div>

      <!-- mob  -->

      <div class="mob-menu">
        <img
          class="mob-open"
          src="IMAGES\icons8-hamburger-menu-24.png"
          alt="openSvg"
        />
        <div class="mob-wrapper close">
          <img
            src="IMAGES\icons8-hamburger-menu-24.png"
            class="mob-close"
            alt="closeSvg"
          />
          <div class="mob-list">
            <a href="#" class="mob-list__item"
              ><img src="IMAGES\90x160.png" alt="SAHAYAK"
            /></a>
            <a href="home.php" class="mob-list__item">HOME</a>
            <a href="shgindex.php" class="mob-list__item">SAHAYAKS</a>
            <a href="profile.php" class="mob-list__item">PROFILE</a>
            <a href="about.php" class="mob-list__item">ABOUT</a>
            <a href="logout.php" class="mob-list__item">LOGOUT</a>
          </div>
        </div>
      </div>
    </main>

    <div class="btn">
      <button class="help_button">I need help</button>
    </div>
    
    <div id="map"></div>
    <script>
	    // TO MAKE THE MAP APPEAR YOU MUST
	    // ADD YOUR ACCESS TOKEN FROM
	    // https://account.mapbox.com
	    mapboxgl.accessToken = 'pk.eyJ1IjoibmlnbXUiLCJhIjoiY2xmdHh5YjIxMDVoajNlbzR4bXJtOHJsYSJ9.Ujk9DdvspFMAqFJxv4ijDw';
      const map = new mapboxgl.Map({
      container: 'map', // container ID
      // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
      style: 'mapbox://styles/mapbox/streets-v12', // style URL
      center: [-24, 42], // starting center in [lng, lat]
      zoom: 1 // starting zoom
      });
      
      // Add geolocate control to the map.
      map.addControl(
      new mapboxgl.GeolocateControl({
      positionOptions: {
      enableHighAccuracy: true
      },
      // When active the map will receive updates to the device's location as it changes.
      trackUserLocation: true,
      // Draw an arrow next to the location dot to indicate which direction the device is heading.
      showUserHeading: true
      })
      );
    </script>

    <script src="javascripttest.js"></script>
  </body>
</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>