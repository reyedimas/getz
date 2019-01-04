<div class="section" id="carousel" style="padding: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto" style="max-width: 100%;flex: 100%;">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <?php foreach($slide as $data) {?>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url('/assets/img/').$data->foto?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <?php echo $data->nama_slide?>
                      </h4>
                    </div>
                  </div>
                <?php }?>
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
                <img src="<?php echo base_url('assets/img/').$r->foto?>" alt="Raised Image" class="img-raised rounded img-fluid">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                  <div class="hvrbox-text"><?php echo $r->deskripsi?> </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div id="map">
            </div>
          </div>
          <div style="margin-top:20px;"class="col-md-6">
          <div>
            <iframe width="100%" height="300"  src="https://www.youtube.com/embed/OIX5qWHx_KQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>
          </div>
          <div style="margin-top:20px;"class="col-md-6">
            <div>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/OIX5qWHx_KQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>
          </div>
         </div>
    </div>

<script>
  loadMapBox();
  function loadMapBox(){

   

        L.mapbox.accessToken = 'pk.eyJ1IjoiZGltYXNrcmlzdGl5YW50byIsImEiOiJjanFnOHZyeWMwODlhNDlsMnBraXcxZGlpIn0._kl1ZqFBBJ-bQYog7Fsd4w';
        var map = L.mapbox.map('map', 'mapbox.streets');
        //var styleLayer = L.mapbox.styleLayer('mapbox://styles/mapbox/cin286r4x006safncofpcb71v').addTo(map);
        //console.log(map);
        map.setView([-7.7634266,110.3468262],15);
        L.marker([-7.7634266,110.3468262], {
          icon: L.mapbox.marker.icon({
            'marker-size': 'large',
            'marker-symbol': 'marker',
            'marker-color': '#f44242'
            }),
          title : 'Getz Seat Cover'
        }).addTo(map)
  }
</script>