<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($team->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto') ?></th>
            <td><?= h($team->contacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($team->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($team->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($team->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($team->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria Id') ?></th>
            <td><?= $this->Number->format($team->categoria_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($team->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($team->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Poblacion') ?></h4>
        <?= $this->Text->autoParagraph(h($team->poblacion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Players') ?></h4>
        <?php if (!empty($team->players)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Pablacion') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Nacionalidad') ?></th>
                <th scope="col"><?= __('F Nacimiento') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('G Recibidos') ?></th>
                <th scope="col"><?= __('T Amarillas') ?></th>
                <th scope="col"><?= __('T Rojas') ?></th>
                <th scope="col"><?= __('T Acumuladas') ?></th>
                <th scope="col"><?= __('Goles') ?></th>
                <th scope="col"><?= __('P Jugados') ?></th>
                <th scope="col"><?= __('P Sancionados') ?></th>
                <th scope="col"><?= __('Dorsal') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->players as $players): ?>
            <tr>
                <td><?= h($players->id) ?></td>
                <td><?= h($players->nombre) ?></td>
                <td><?= h($players->apellido) ?></td>
                <td><?= h($players->direccion) ?></td>
                <td><?= h($players->pablacion) ?></td>
                <td><?= h($players->dni) ?></td>
                <td><?= h($players->telefono) ?></td>
                <td><?= h($players->nacionalidad) ?></td>
                <td><?= h($players->f_nacimiento) ?></td>
                <td><?= h($players->observaciones) ?></td>
                <td><?= h($players->g_recibidos) ?></td>
                <td><?= h($players->t_amarillas) ?></td>
                <td><?= h($players->t_rojas) ?></td>
                <td><?= h($players->t_acumuladas) ?></td>
                <td><?= h($players->goles) ?></td>
                <td><?= h($players->p_jugados) ?></td>
                <td><?= h($players->p_sancionados) ?></td>
                <td><?= h($players->dorsal) ?></td>
                <td><?= h($players->photo) ?></td>
                <td><?= h($players->photo_dir) ?></td>
                <td><?= h($players->created) ?></td>
                <td><?= h($players->modified) ?></td>
                <td><?= h($players->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
