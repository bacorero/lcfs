<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin:20px;">
            <?= $this->Html->image('../files/arbitros/photo/'. $arbitro->photo_dir .
                        '/square_' . $arbitro->photo, ['alt' => $arbitro->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?>
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $arbitro->id], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos del árbitro <?php echo $arbitro->nombre; ?></div>
              

              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Nombre - <?php echo $arbitro->nombre; ?></li>
                <li class="list-group-item">Apellido - <?php echo $arbitro->apellido; ?></li>
                <li class="list-group-item">Direccion - <?php echo $arbitro->direccion; ?></li>
                <li class="list-group-item">Poblacion - <?php echo $arbitro->poblacion; ?></li>
                <li class="list-group-item">Telefono - <?php echo $arbitro->telefono; ?></li>
                <li class="list-group-item">Nacionalidad - <?php echo $arbitro->nacionalidad; ?></li>
                
                <li class="list-group-item">Photo - <?php echo $arbitro->Photo; ?></li>
               
                <li class="list-group-item">Fecha Nacimiento - <?php echo $arbitro->f_nacimiento; ?></li>
                <li class="list-group-item">Fecha de creación - <?php echo $arbitro->created; ?></li>
                <li class="list-group-item">Fecha última modificación - <?php echo $arbitro->modified; ?></li>
                <li class="list-group-item"><?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $arbitro->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
        </div>
    </div>
</div>



<!--

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Arbitro'), ['action' => 'edit', $arbitro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Arbitro'), ['action' => 'delete', $arbitro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arbitro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Arbitros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arbitro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="arbitros view large-9 medium-8 columns content">
    <h3><?= h($arbitro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($arbitro->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($arbitro->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($arbitro->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poblacion') ?></th>
            <td><?= h($arbitro->poblacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($arbitro->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidad') ?></th>
            <td><?= h($arbitro->nacionalidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($arbitro->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($arbitro->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($arbitro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Nacimiento') ?></th>
            <td><?= h($arbitro->f_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($arbitro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($arbitro->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Dni') ?></h4>
        <?= $this->Text->autoParagraph(h($arbitro->dni)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Jornadas') ?></h4>
        <?php if (!empty($arbitro->jornadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Visitante') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Hora') ?></th>
                <th scope="col"><?= __('Arbitro Id') ?></th>
                <th scope="col"><?= __('Campo') ?></th>
                <th scope="col"><?= __('Acta Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($arbitro->jornadas as $jornadas): ?>
            <tr>
                <td><?= h($jornadas->id) ?></td>
                <td><?= h($jornadas->nombre) ?></td>
                <td><?= h($jornadas->local) ?></td>
                <td><?= h($jornadas->visitante) ?></td>
                <td><?= h($jornadas->fecha) ?></td>
                <td><?= h($jornadas->hora) ?></td>
                <td><?= h($jornadas->arbitro_id) ?></td>
                <td><?= h($jornadas->campo) ?></td>
                <td><?= h($jornadas->acta_id) ?></td>
                <td><?= h($jornadas->created) ?></td>
                <td><?= h($jornadas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Jornadas', 'action' => 'view', $jornadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Jornadas', 'action' => 'edit', $jornadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jornadas', 'action' => 'delete', $jornadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jornadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Partidos') ?></h4>
        <?php if (!empty($arbitro->partidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Visitante') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Hora') ?></th>
                <th scope="col"><?= __('Arbitro Id') ?></th>
                <th scope="col"><?= __('Campo') ?></th>
                <th scope="col"><?= __('Acta Id') ?></th>
                <th scope="col"><?= __('Team Id L') ?></th>
                <th scope="col"><?= __('Team Id V') ?></th>
                <th scope="col"><?= __('Jornada Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($arbitro->partidos as $partidos): ?>
            <tr>
                <td><?= h($partidos->id) ?></td>
                <td><?= h($partidos->nombre) ?></td>
                <td><?= h($partidos->local) ?></td>
                <td><?= h($partidos->visitante) ?></td>
                <td><?= h($partidos->fecha) ?></td>
                <td><?= h($partidos->hora) ?></td>
                <td><?= h($partidos->arbitro_id) ?></td>
                <td><?= h($partidos->campo) ?></td>
                <td><?= h($partidos->acta_id) ?></td>
                <td><?= h($partidos->team_id_l) ?></td>
                <td><?= h($partidos->team_id_v) ?></td>
                <td><?= h($partidos->jornada_id) ?></td>
                <td><?= h($partidos->created) ?></td>
                <td><?= h($partidos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Partidos', 'action' => 'view', $partidos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Partidos', 'action' => 'edit', $partidos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Partidos', 'action' => 'delete', $partidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partidos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
-->