<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($arbitro,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Editar árbitro') ?></legend>
            <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('direccion');
            echo $this->Form->control('poblacion');
            echo $this->Form->control('dni');
            echo $this->Form->control('telefono');
            echo $this->Form->control('nacionalidad');
            echo $this->Form->control('f_nacimiento');
            
            
            echo $this->Form->control('photo',['type' => 'file','class' => 'filestyle','data-buttonName' => 'btn-primary','data-buttonText' => 'Examinar']);
            ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        
        <?= $this->Form->button('Editar') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arbitro->id],
                ['class' => 'btn btn-sm btn-info'],
                ['confirm' => __('Eliminar el árbitro # {0}?', $arbitro->id)]
            )
        ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>



