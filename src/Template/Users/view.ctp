<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-6 col-md-offset-2">

            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos de Usuario</div>
              <div class="panel-body">
                <p>Usuario <?php echo $user->usuario; ?></p>
              </div>

              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Contraseña - <?php echo $user->passwor; ?></li>
                <li class="list-group-item">Rol - <?php echo $user->role; ?></li>
                <li class="list-group-item">Activo? - <?php echo $user->active; ?></li>
                <li class="list-group-item">Fecha de creación - <?php echo $user->created; ?></li>
                <li class="list-group-item">Fecha última modificación - <?php echo $user->modified; ?></li>
                <li class="list-group-item"><?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
