<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($sponsor,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Editar Spónsor') ?></legend>
            <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('telefono');
            echo $this->Form->control('active');
            
            echo $this->Form->control('photo',['type' => 'file','class' => 'filestyle','data-buttonName' => 'btn-primary','data-buttonText' => 'Examinar']);
            ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        
        <?= $this->Form->button('Editar') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sponsor->id],
                ['class' => 'btn btn-sm btn-info'],
                ['confirm' => __('Eliminar el jugador # {0}?', $sponsor->id)]
            )
        ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>


