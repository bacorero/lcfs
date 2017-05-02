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
                ['action' => 'delete', $acta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $acta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actas form large-9 medium-8 columns content">
    <?= $this->Form->create($acta) ?>
    <fieldset>
        <legend><?= __('Edit Acta') ?></legend>
        <?php
            echo $this->Form->control('goles_local');
            echo $this->Form->control('goles_visitante');
            echo $this->Form->control('t_amarillas');
            echo $this->Form->control('t_rojas');
            echo $this->Form->control('incidencias');
            echo $this->Form->control('campo');
            echo $this->Form->control('localidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
