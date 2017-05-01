<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-1">
       
        <?= $this->Form->create($player,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Crear jugador') ?></legend>
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
            
            echo $this->Form->input('photo',['type' => 'file','class' => 'filestyle','data-buttonName' => 'btn-primary','data-buttonText' => 'Examinar']);
            ?>
        </fieldset>
        
    </div>
    <div class="col-md-2 col-md-offset-1">
        <?php 
            echo $this->Form->control('g_recibidos');
            echo $this->Form->control('t_amarillas');
            echo $this->Form->control('t_rojas');
            echo $this->Form->control('t_acumuladas');
            echo $this->Form->control('goles');
            echo $this->Form->control('p_jugados');
            echo $this->Form->control('p_sancionados');
            echo $this->Form->control('dorsal');
        ?>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        <?= $this->Form->end() ?>
        
    </div>
</div>


