<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($categoria,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Crear categoría') ?></legend>
            <?php
                echo $this->Form->control('nombre'); ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        
        <?= $this->Form->button('Crear') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>



