<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partidos index large-9 medium-8 columns content">
    <h3><?= __('Partidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arbitro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acta_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id_l') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id_v') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partidos as $partido): ?>
            <tr>
                <td><?= $this->Number->format($partido->id) ?></td>
                <td><?= h($partido->nombre) ?></td>
                <td><?= h($partido->local) ?></td>
                <td><?= h($partido->visitante) ?></td>
                <td><?= h($partido->fecha) ?></td>
                <td><?= h($partido->hora) ?></td>
                <td><?= $partido->has('arbitro') ? $this->Html->link($partido->arbitro->id, ['controller' => 'Arbitros', 'action' => 'view', $partido->arbitro->id]) : '' ?></td>
                <td><?= h($partido->campo) ?></td>
                <td><?= $partido->has('acta') ? $this->Html->link($partido->acta->id, ['controller' => 'Actas', 'action' => 'view', $partido->acta->id]) : '' ?></td>
                <td><?= $this->Number->format($partido->team_id_l) ?></td>
                <td><?= $this->Number->format($partido->team_id_v) ?></td>
                <td><?= $partido->has('jornada') ? $this->Html->link($partido->jornada->id, ['controller' => 'Jornadas', 'action' => 'view', $partido->jornada->id]) : '' ?></td>
                <td><?= h($partido->created) ?></td>
                <td><?= h($partido->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]) ?>
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
