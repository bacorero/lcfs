<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin:0px;">
            <?= $this->Html->image('../files/sponsors/photo/'. $sponsor->photo_dir .
                        '/' . $sponsor->photo, ['alt' => $sponsor->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?>
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $sponsor->id], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos del Spónsor <?php echo $sponsor->nombre; ?></div>
              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Nombre - <?php echo $sponsor->nombre; ?></li>
                <li class="list-group-item">Telefono de contacto - <?php echo $sponsor->telefono; ?></li>
                <li class="list-group-item">
                    <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $sponsor->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Html->link('Fichar', ['action' => 'fichar', $sponsor->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
        </div>
    </div>
</div>



