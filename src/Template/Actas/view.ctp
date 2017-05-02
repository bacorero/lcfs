<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Acta'), ['action' => 'edit', $acta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Acta'), ['action' => 'delete', $acta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actas view large-9 medium-8 columns content">
    <h3><?= h($acta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Incidencias') ?></th>
            <td><?= h($acta->incidencias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campo') ?></th>
            <td><?= h($acta->campo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localidad') ?></th>
            <td><?= h($acta->localidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($acta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goles Local') ?></th>
            <td><?= $this->Number->format($acta->goles_local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goles Visitante') ?></th>
            <td><?= $this->Number->format($acta->goles_visitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T Amarillas') ?></th>
            <td><?= $this->Number->format($acta->t_amarillas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T Rojas') ?></th>
            <td><?= $this->Number->format($acta->t_rojas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($acta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($acta->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Jornadas') ?></h4>
        <?php if (!empty($acta->jornadas)): ?>
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
            <?php foreach ($acta->jornadas as $jornadas): ?>
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
        <?php if (!empty($acta->partidos)): ?>
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
            <?php foreach ($acta->partidos as $partidos): ?>
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
