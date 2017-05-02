<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partido'), ['action' => 'edit', $partido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partido'), ['action' => 'delete', $partido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partidos view large-9 medium-8 columns content">
    <h3><?= h($partido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($partido->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($partido->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visitante') ?></th>
            <td><?= h($partido->visitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arbitro') ?></th>
            <td><?= $partido->has('arbitro') ? $this->Html->link($partido->arbitro->id, ['controller' => 'Arbitros', 'action' => 'view', $partido->arbitro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campo') ?></th>
            <td><?= h($partido->campo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acta') ?></th>
            <td><?= $partido->has('acta') ? $this->Html->link($partido->acta->id, ['controller' => 'Actas', 'action' => 'view', $partido->acta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jornada') ?></th>
            <td><?= $partido->has('jornada') ? $this->Html->link($partido->jornada->id, ['controller' => 'Jornadas', 'action' => 'view', $partido->jornada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Id L') ?></th>
            <td><?= $this->Number->format($partido->team_id_l) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Id V') ?></th>
            <td><?= $this->Number->format($partido->team_id_v) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($partido->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($partido->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partido->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partido->modified) ?></td>
        </tr>
    </table>
</div>
