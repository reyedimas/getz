<div class="section" id="carousel" style="padding: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto" style="max-width: 100%;flex: 100%;">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                <?php $key=0; $active='';foreach($slide as $data) {
                   if ($key==0) 
                   {
                     $active='active';
                   } 
                   else
                   {
                     $active='';
                   } ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key?>" class="<?php echo $active?>"></li>
                  <?php $key++;}?>
                </ol>
                <div class="carousel-inner">
                <?php $key=0; $active='';foreach($slide as $data) {
                   if ($key==0) 
                   {
                     $active='active';
                   } 
                   else
                   {
                     $active='';
                   } ?>
                  <div class="carousel-item <?php echo $active?>">
                    <img class="d-block w-100" src="<?php echo base_url('/assets/img/').$data->foto?>">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <?php echo $data->nama_slide?>
                      </h4>
                    </div>
                  </div>
                <?php $key++;}?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
 
 <div id="images">
          <div class="title">
            <h2 align="center">Product</h2>
          </div>
          <br>
          <div class="row">
            <?php foreach( $record as $r) {?>
            <div class="col-md-4">
              <div align="center"><h4><?php echo $r->nama_product?></h4></div>
              <div class="hvrbox" style="margin-bottom:20px; margin-top:-25px;"> 
                <img style="width:100%; height:200px;" src="<?php echo base_url('assets/img/').$r->foto?>" alt="Product Getz" class="img-raised rounded img-fluid">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                  <div class="hvrbox-text"><?php echo $r->deskripsi?> </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          
          <div class="row">
          <div style="margin-top:40px;" class="col-md-12">
            <div>
              <iframe width="100%" height="500" src="https://www.youtube.com/embed/ddewdIL5fiQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
            </div>
            </div>
            <div class="col-md-12">
              <div id="map"></div>
            </div>
         </div>
    </div>

<script>
  loadMapBox();
  function loadMapBox(){
        L.mapbox.accessToken = 'pk.eyJ1IjoiZGltYXNrcmlzdGl5YW50byIsImEiOiJjanFnOHZyeWMwODlhNDlsMnBraXcxZGlpIn0._kl1ZqFBBJ-bQYog7Fsd4w';
        var map = L.mapbox.map('map', 'mapbox.streets');
        
        map.setView([-7.766504, 110.344229],19);
        L.marker([-7.766504, 110.344229], {
          icon: L.mapbox.marker.icon({
            'marker-size': 'large',
            'marker-symbol': 'marker',
            'marker-color': '#f44242'
            }),
          title : 'Getz Seat Cover'
        }).addTo(map)
  }
</script>