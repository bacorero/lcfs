<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="row" style="margin-top:20px">
    <div class="col-md-12">
      <div class="row">
          <!-- cuadro de los sponsores -->
            <div class="col-xs-12 col-sm-3 col-md-3">
                      <h3>PATROCINADORES</h3>
                          <?php foreach ($sponsor as $key): ?>
                              <div class="sponsores">
                                  <?php if($key->active == 1): ?>
                                      <?= $this->Html->image('../files/sponsors/photo/'. $key->photo_dir .
                                      '/square_' . $key->photo, ['alt' => $key->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?>
                                      <hr>
                                  <?php endif; ?>
                              </div>
                          <?php endforeach; ?>
            </div>

              <!-- Cuadro de los anuncios púplicos -->
            <div align="center" class="col-xs-12 col-sm-9 col-md-9  publico">
            <h1>Liga Fútbol Sala Alcoy</h1>
                <!-- Mostramos el Slideshow -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicadores -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel" data-slide-to="1"></li>
                      <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                  <!-- Contenedor de los Slices -->
                    <div class="carousel-inner" role="listbox">
                    <!-- Slice 1 -->
                      <div class="item active">
                        <img src="webroot/files/noticias/placeimg_640_200_tech.jpg" class="img-responsive" alt="...">
                        <div class="carousel-caption">
                          <h3>Noticia 1</h3>
                      </div>
                    </div>
                    <!-- Slice 2 -->
                    <div class="item">
                        <img src="webroot/files/noticias/placeimg_640_200_nature.jpg" class="img-responsive" alt="...">
                        <div class="carousel-caption">
                          <h3>Noticia 2</h3>
                      </div>
                    </div>
                    <!-- Slice 3 -->
                    <div class="item">
                        <img src="webroot/files/noticias/placeimg_640_200_arch.jpg" class="img-responsive" alt="...">
                        <div class="carousel-caption">
                          <a href="#" ><h3>Noticia 3</h3></a>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
                <!-- fin del Sliceshow -->
            </div>
      </div>
    </div>
</div>

   

