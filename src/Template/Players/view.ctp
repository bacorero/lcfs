<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin:0px;">
            <?= $this->Html->image('../files/players/photo/'. $player->photo_dir .
                        '/square_' . $player->photo, ['alt' => $player->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?>
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $player->id], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos del Jugador <?php echo $player->nombre; ?></div>
              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Nombre - <?php echo $player->nombre; ?></li>
                <li class="list-group-item">Apellido - <?php echo $player->apellido; ?></li>
                <li class="list-group-item">Direccion - <?php echo $player->direccion; ?></li>
                <li class="list-group-item">Poblacion - <?php echo $player->pablacion; ?></li>
                <li class="list-group-item">Telefono - <?php echo $player->telefono; ?></li>
                <li class="list-group-item">Nacionalidad - <?php echo $player->nacionalidad; ?></li>
                <li class="list-group-item">Observaciones - <?php echo $player->observaciones; ?></li>
                <li class="list-group-item">Equipo - <?php echo $equipo->nombre; ?></li>
                <li class="list-group-item">
                    <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $player->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Html->link('Fichar', ['action' => 'fichar', $player->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-default"></div>
              <!-- Default panel contents -->
              <ul class="list-group">
                <li class="list-group-item">Goles Recibidos - <?php echo $player->g_recibidos; ?></li>
                <li class="list-group-item">Tarjetas Amarillas - <?php echo $player->t_amarillas; ?></li>
                <li class="list-group-item">Tarjetas Rojas - <?php echo $player->t_rojas; ?></li>
                <li class="list-group-item">Tarjetas Acumuladas - <?php echo $player->t_acumuladas; ?></li>
                <li class="list-group-item">Goles - <?php echo $player->goles; ?></li>
                <li class="list-group-item">Partidos Jugados - <?php echo $player->p_jugados; ?></li>
                <li class="list-group-item">Partidos Sancionados - <?php echo $player->p_sancionados; ?></li>
                <li class="list-group-item">Dorsal - <?php echo $player->dorsal; ?></li>
                <li class="list-group-item">Fecha Nacimiento - <?php echo $player->f_nacimiento; ?></li>
                <li class="list-group-item">Fecha de creación - <?php echo $player->created; ?></li>
                <li class="list-group-item">Fecha última modificación - <?php echo $player->modified; ?></li>
              </ul>
        </div>
    </div>
</div>
