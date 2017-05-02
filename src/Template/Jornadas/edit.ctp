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
                ['action' => 'delete', $jornada->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jornada->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jornadas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jornadas form large-9 medium-8 columns content">
    <?= $this->Form->create($jornada) ?>
    <fieldset>
        <legend><?= __('Edit Jornada') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('local');
            echo $this->Form->control('visitante');
            echo $this->Form->control('fecha');
            echo $this->Form->control('hora');
            echo $this->Form->control('arbitro_id', ['options' => $arbitros]);
            echo $this->Form->control('campo');
            echo $this->Form->control('acta_id', ['options' => $actas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
