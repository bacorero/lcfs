<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
       
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Crear usuario') ?></legend>
            <?php
                echo $this->Form->control('usuario',['Usuario']);
                echo $this->Form->control('role',['options' => ['admin' => 'admin', 'user' => 'user']]);
                echo $this->Form->control('passwor',['fbsql_password(link_identifier)']);
                echo $this->Form->control('active');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>




