<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row" style="margin-top:20px">
    <div class="col-md-12">

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
                <!-- Mostramos la Web embebida en un objeto <object> -->
                 <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="<?php echo $contenido; ?>"></iframe>
                </div>

                </div>

    </div>

</div>