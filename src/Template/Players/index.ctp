<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="players index large-9 medium-8 columns content">
    <h3><?= __('Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pablacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('g_recibidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('t_amarillas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('t_rojas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('t_acumuladas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('p_jugados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('p_sancionados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dorsal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->id) ?></td>
                <td><?= h($player->nombre) ?></td>
                <td><?= h($player->apellido) ?></td>
                <td><?= h($player->direccion) ?></td>
                <td><?= h($player->pablacion) ?></td>
                <td><?= h($player->telefono) ?></td>
                <td><?= h($player->nacionalidad) ?></td>
                <td><?= h($player->f_nacimiento) ?></td>
                <td><?= h($player->observaciones) ?></td>
                <td><?= $this->Number->format($player->g_recibidos) ?></td>
                <td><?= $this->Number->format($player->t_amarillas) ?></td>
                <td><?= $this->Number->format($player->t_rojas) ?></td>
                <td><?= $this->Number->format($player->t_acumuladas) ?></td>
                <td><?= $this->Number->format($player->goles) ?></td>
                <td><?= $this->Number->format($player->p_jugados) ?></td>
                <td><?= $this->Number->format($player->p_sancionados) ?></td>
                <td><?= $this->Number->format($player->dorsal) ?></td>
                <td><?= h($player->photo) ?></td>
                <td><?= h($player->photo_dir) ?></td>
                <td><?= h($player->created) ?></td>
                <td><?= h($player->modified) ?></td>
                <td><?= $player->has('team') ? $this->Html->link($player->team->id, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
