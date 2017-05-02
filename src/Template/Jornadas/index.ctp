<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jornada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jornadas index large-9 medium-8 columns content">
    <h3><?= __('Jornadas') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jornadas as $jornada): ?>
            <tr>
                <td><?= $this->Number->format($jornada->id) ?></td>
                <td><?= h($jornada->nombre) ?></td>
                <td><?= h($jornada->local) ?></td>
                <td><?= h($jornada->visitante) ?></td>
                <td><?= h($jornada->fecha) ?></td>
                <td><?= h($jornada->hora) ?></td>
                <td><?= $jornada->has('arbitro') ? $this->Html->link($jornada->arbitro->id, ['controller' => 'Arbitros', 'action' => 'view', $jornada->arbitro->id]) : '' ?></td>
                <td><?= h($jornada->campo) ?></td>
                <td><?= $jornada->has('acta') ? $this->Html->link($jornada->acta->id, ['controller' => 'Actas', 'action' => 'view', $jornada->acta->id]) : '' ?></td>
                <td><?= h($jornada->created) ?></td>
                <td><?= h($jornada->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jornada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jornada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jornada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jornada->id)]) ?>
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
