<?php
//session_start();
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-12">
    <?php if(isset ($_SESSION['usuario']) and $_SESSION['rol'] == "admin"): ?>
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario', ['Usuario']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('role',['Rol']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('passwor', ['Password']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('active', ['Activo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',['Creado']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',['Modificado']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->usuario) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->passwor) ?></td>
                <td><?= h($user->active) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
                    
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table>

        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>

    <?php else: ?>
        <div class="container">

            <div class="row" style="margin-top:20px">

            <!-- cuadro de los sponsores -->
                <div class="col-xs-3 col-sm-3 col-md-3 sponsores">
                </div>

            <!-- Cuadro de los anuncios púplicos -->
                <div class="col-xs-6 col-sm-6 col-md-6  publico">
                </div>

            <!--Cuadro de logueo -->
                <div class="col-xs-3 col-sm-3 col-md-3">
                    
                    <?= $this->Form->create() ?>
                        <fieldset>
                            <h2>Login</h2>
                            <hr class="colorgraph">
                            <div class="form-group">
                                <?= $this->Form->input('usuario', ['class' => 'form-control input-lg', 'placeholder' => 'Usuario', 'label' => false, 'required']) ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->input('passwor', ['class' => 'form-control input-lg', 'placeholder' => 'Contraseña', 'label' => false, 'required']) ?>
                            </div>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <?= $this->Form->button(__('Login')) ?>
                                </div>
                                
                            </div>
                        </fieldset>
                    <?= $this->Form->end() ?>
                </div>
            </div>

</div>
    <?php endif; ?>
    </div>
</div>








