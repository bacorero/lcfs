<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($team,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Crear equipo') ?></legend>
            <?php
                echo $this->Form->control('nombre');
                echo $this->Form->control('contacto');
                echo $this->Form->control('direccion');
                echo $this->Form->control('poblacion');
                
            
            echo $this->Form->input('photo',['type' => 'file','class' => 'filestyle','data-buttonName' => 'btn-primary','data-buttonText' => 'Examinar']);
            ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
    <?php
         echo $this->Form->control('telefono');
         echo $this->Form->control('categoria_id'); ?>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>

