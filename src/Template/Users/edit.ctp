<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">

    <div class="col-md-6 col-md-offset-3">
       
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Editar suario') ?></legend>
            <?php
                echo $this->Form->control('usuario',['Usuario']);
                echo $this->Form->control('role',['options' => ['admin' => 'admin', 'user' => 'user']]);
                echo $this->Form->control('passwor',['fbsql_password(link_identifier)']);
                echo $this->Form->control('active');
            ?>
        </fieldset>
        <div>
            <?= $this->Form->button(__('Guardar', ['class' => 'btn btn-sm btn-info'])) ?>
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
        </div>
        <?= $this->Form->end() ?>


    </div>
</div>






