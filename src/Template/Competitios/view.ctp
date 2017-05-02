<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competitio'), ['action' => 'edit', $competitio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competitio'), ['action' => 'delete', $competitio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competitio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competitio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitios view large-9 medium-8 columns content">
    <h3><?= h($competitio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($competitio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temporada') ?></th>
            <td><?= h($competitio->temporada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $competitio->has('categoria') ? $this->Html->link($competitio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $competitio->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competitio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($competitio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($competitio->modified) ?></td>
        </tr>
    </table>
</div>
