<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">

    <div class="col-md-6 col-md-offset-3">
       
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Usuario') ?></legend>
            <?php
                echo $this->Form->control('usuario',['Usuario']);
                echo $this->Form->control('role',['options' => ['admin' => 'admin', 'user' => 'user']]);
                echo $this->Form->control('passwor',['fbsql_password(link_identifier)']);
                echo $this->Form->control('active');
            ?>
        </fieldset>
        <div>
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
        </div>
        <?= $this->Form->end() ?>


    </div>
</div>