<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Include the CesiumJS JavaScript and CSS files -->
  <script src="https://cesium.com/downloads/cesiumjs/releases/1.125/Build/Cesium/Cesium.js"></script>
  <link href="https://cesium.com/downloads/cesiumjs/releases/1.125/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
  <link rel="stylesheet" href="<?= base_url('site/')?>css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url('site/')?>css/fonts.css">
  <link rel="stylesheet" href="<?= base_url('site/')?>css/style.css">
  <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <div id="home">
        <!-- Page Header-->
        <header class="section page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="30px" data-xxl-stick-up-offset="30px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/waskita.png" alt="" width="130" height="10"/></a></div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="<?=base_url('Home')?>">Home</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?=base_url('Home#About')?>">About</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?=base_url('Home#team')?>">Team</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('Home/VectorPage'); ?>">2D</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('landing'); ?>">3D</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#news">Report</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
  <div id="cesiumContainer"></div>
  <script type="module">
    // Your access token can be found at: https://ion.cesium.com/tokens.
    // This is the default access token from your ion account

    Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI0ZjM4NmRmMi1jZTg0LTRmYzUtYTY2OS02OTliMzEwNTljNWUiLCJpZCI6MjcyODM1LCJpYXQiOjE3Mzg0Nzk4MTN9.8lqeId4dIVG3qDcJZ7eZqfaMw5xzHzWWb7_3SGfUihM';

    // Initialize the Cesium Viewer in the HTML element with the `cesiumContainer` ID.
    const viewer = new Cesium.Viewer('cesiumContainer', {
      terrain: Cesium.Terrain.fromWorldTerrain(),
    });    

    // Fly the camera to Velodrome-Manggarai at the given longitude, latitude, and height.
    viewer.camera.flyTo({
      destination: Cesium.Cartesian3.fromDegrees(106.8908, -6.1928,1300),
      orientation: {
        heading: Cesium.Math.toRadians(0.0),
        pitch: Cesium.Math.toRadians(-15.0),
      }
    });
		

    // Add Cesium OSM Buildings, a global 3D buildings layer.
    //const buildingTileset = await Cesium.createOsmBuildingsAsync();
    //viewer.scene.primitives.add(buildingTileset);   
	
	//viewer.scene.setTerrain(
	  //new Cesium.Terrain(
		//Cesium.CesiumTerrainProvider.fromIonAssetId(3035324),
	//  ),
	//);
	
	const layer = viewer.imageryLayers.addImageryProvider(
		await Cesium.IonImageryProvider.fromAssetId(3035434),
	);

  </script>
 </div>
    <script src="<?= base_url('site/')?>js/core.min.js"></script>
    <script src="<?= base_url('site/')?>js/script.js"></script>
</body>
</html>