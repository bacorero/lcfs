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
                ['action' => 'delete', $player->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('direccion');
            echo $this->Form->control('pablacion');
            echo $this->Form->control('dni');
            echo $this->Form->control('telefono');
            echo $this->Form->control('nacionalidad');
            echo $this->Form->control('f_nacimiento');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('g_recibidos');
            echo $this->Form->control('t_amarillas');
            echo $this->Form->control('t_rojas');
            echo $this->Form->control('t_acumuladas');
            echo $this->Form->control('goles');
            echo $this->Form->control('p_jugados');
            echo $this->Form->control('p_sancionados');
            echo $this->Form->control('dorsal');
            echo $this->Form->control('photo',['type' => 'file']);
            
            echo $this->Form->control('team_id', ['options' => $teams]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
