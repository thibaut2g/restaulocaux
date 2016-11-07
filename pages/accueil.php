<style>
	 #map-canvas { height: 500px; }
</style>

<div class="top"></div>
<div class="container">
    <h5 style="display: inline-block"><b>Je cherche :</b></h5>
   <button class="btn" id="emplacement">Un emplacement de livraison</button>
   <button class="btn" id="restaurant">Un restaurant</button>
   <button class="btn" id="agriculteur">Un agriculteur</button>

	 
</div>
<div ng-controller = "MapCtrl">
  <div id="map-canvas"></div>
</div>