<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($categoria) ?>
        <fieldset>
            <legend><?= __('Editar Categoría') ?></legend>
            <?php
            echo $this->Form->control('nombre'); ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        
        <?= $this->Form->button('Editar') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoria->id],
                ['class' => 'btn btn-sm btn-info'],
                ['confirm' => __('Eliminar el categoria # {0}?', $categoria->id)]
            )
        ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>
