<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($team,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Editar equipo') ?></legend>
            <?php
                echo $this->Form->control('nombre');
                echo $this->Form->control('contacto');
                echo $this->Form->control('direccion');
                echo $this->Form->control('poblacion');
                echo $this->Form->control('telefono');
                echo $this->Form->control('categoria_id');
                
                echo $this->Form->control('photo',['type' => 'file','class' => 'filestyle','data-buttonName' => 'btn-primary','data-buttonText' => 'Examinar']);
            ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        <?= $this->Form->button('Editar') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->id],
                ['class' => 'btn btn-sm btn-info'],
                ['confirm' => __('Eliminar el equipo # {0}?', $team->id)]
            )
        ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>



<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Edit Team') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('contacto');
            echo $this->Form->control('direccion');
            echo $this->Form->control('poblacion');
            echo $this->Form->control('telefono');
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_dir');
            echo $this->Form->control('categoria_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
-->