<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jornada'), ['action' => 'edit', $jornada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jornada'), ['action' => 'delete', $jornada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jornada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jornadas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jornada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jornadas view large-9 medium-8 columns content">
    <h3><?= h($jornada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($jornada->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($jornada->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visitante') ?></th>
            <td><?= h($jornada->visitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arbitro') ?></th>
            <td><?= $jornada->has('arbitro') ? $this->Html->link($jornada->arbitro->id, ['controller' => 'Arbitros', 'action' => 'view', $jornada->arbitro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campo') ?></th>
            <td><?= h($jornada->campo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acta') ?></th>
            <td><?= $jornada->has('acta') ? $this->Html->link($jornada->acta->id, ['controller' => 'Actas', 'action' => 'view', $jornada->acta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jornada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($jornada->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($jornada->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jornada->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jornada->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Partidos') ?></h4>
        <?php if (!empty($jornada->partidos)): ?>
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
            <?php foreach ($jornada->partidos as $partidos): ?>
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
