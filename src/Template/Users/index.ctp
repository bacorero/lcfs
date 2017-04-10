<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-12">
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
    </div>
</div>








