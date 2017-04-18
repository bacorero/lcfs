<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($player->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($player->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($player->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pablacion') ?></th>
            <td><?= h($player->pablacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($player->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidad') ?></th>
            <td><?= h($player->nacionalidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($player->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($player->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($player->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $player->has('team') ? $this->Html->link($player->team->id, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('G Recibidos') ?></th>
            <td><?= $this->Number->format($player->g_recibidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T Amarillas') ?></th>
            <td><?= $this->Number->format($player->t_amarillas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T Rojas') ?></th>
            <td><?= $this->Number->format($player->t_rojas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T Acumuladas') ?></th>
            <td><?= $this->Number->format($player->t_acumuladas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goles') ?></th>
            <td><?= $this->Number->format($player->goles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('P Jugados') ?></th>
            <td><?= $this->Number->format($player->p_jugados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('P Sancionados') ?></th>
            <td><?= $this->Number->format($player->p_sancionados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dorsal') ?></th>
            <td><?= $this->Number->format($player->dorsal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Nacimiento') ?></th>
            <td><?= h($player->f_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($player->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($player->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Dni') ?></h4>
        <?= $this->Text->autoParagraph(h($player->dni)); ?>
    </div>
</div>
