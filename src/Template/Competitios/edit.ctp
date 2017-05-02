<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competitio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competitio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competitios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitios form large-9 medium-8 columns content">
    <?= $this->Form->create($competitio) ?>
    <fieldset>
        <legend><?= __('Edit Competitio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('temporada');
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
