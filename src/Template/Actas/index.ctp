<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actas index large-9 medium-8 columns content">
    <h3><?= __('Actas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goles_local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goles_visitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('t_amarillas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('t_rojas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incidencias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actas as $acta): ?>
            <tr>
                <td><?= $this->Number->format($acta->id) ?></td>
                <td><?= $this->Number->format($acta->goles_local) ?></td>
                <td><?= $this->Number->format($acta->goles_visitante) ?></td>
                <td><?= $this->Number->format($acta->t_amarillas) ?></td>
                <td><?= $this->Number->format($acta->t_rojas) ?></td>
                <td><?= h($acta->incidencias) ?></td>
                <td><?= h($acta->campo) ?></td>
                <td><?= h($acta->localidad) ?></td>
                <td><?= h($acta->created) ?></td>
                <td><?= h($acta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $acta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acta->id)]) ?>
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
