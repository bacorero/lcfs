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
                ['action' => 'delete', $partido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Arbitros'), ['controller' => 'Arbitros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arbitro'), ['controller' => 'Arbitros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actas'), ['controller' => 'Actas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Acta'), ['controller' => 'Actas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jornadas'), ['controller' => 'Jornadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jornada'), ['controller' => 'Jornadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partidos form large-9 medium-8 columns content">
    <?= $this->Form->create($partido) ?>
    <fieldset>
        <legend><?= __('Edit Partido') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('local');
            echo $this->Form->control('visitante');
            echo $this->Form->control('fecha');
            echo $this->Form->control('hora');
            echo $this->Form->control('arbitro_id', ['options' => $arbitros]);
            echo $this->Form->control('campo');
            echo $this->Form->control('acta_id', ['options' => $actas]);
            echo $this->Form->control('team_id_l');
            echo $this->Form->control('team_id_v');
            echo $this->Form->control('jornada_id', ['options' => $jornadas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
