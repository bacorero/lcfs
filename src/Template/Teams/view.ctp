<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin:20px;">
            <?= $this->Html->image('../files/teams/photo/'. $team->photo_dir .
                        '/square_' . $team->photo, ['alt' => $team->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?>
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $team->id], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos del Jugador <?php echo $team->nombre; ?></div>
              

              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Nombre - <?php echo $team->nombre; ?></li>
                <li class="list-group-item">Contacto - <?php echo $team->contacto; ?></li>
                <li class="list-group-item">Direccion - <?php echo $team->direccion; ?></li>
                <li class="list-group-item">Poblacion - <?php echo $team->pablacion; ?></li>
                <li class="list-group-item">Telefono - <?php echo $team->telefono; ?></li>
               
                <li class="list-group-item">Photo - <?php echo $team->Photo; ?></li>
                
                <li class="list-group-item">Fecha de creación - <?php echo $team->created; ?></li>
                <li class="list-group-item">Fecha última modificación - <?php echo $team->modified; ?></li>
                <li class="list-group-item"><?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $team->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
        </div>
    </div>
</div>

