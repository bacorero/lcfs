<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-12">
    <?php if(isset ($_SESSION['usuario']) and $_SESSION['rol'] == "admin"): ?>
        <div class="page-header">
            <h2>Equipos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>      
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>-->
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= h($team->nombre) ?></td>
                <td><?= h($team->apellido) ?></td>
                <td><?= h($team->pablacion) ?></td>
                <td><?= h($team->nacionalidad) ?></td>
                <td><?= $this->Html->image('../files/teams/photo/'. $team->photo_dir .
                        '/portrait_' . $team->photo, ['alt' => $team->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?> </td>
                <td><?= $team->has('team') ? $this->Html->link($team->team->id, ['controller' => 'Teams', 'action' => 'view', $team->team->id]) : '' ?></td>
                <td><?= $this->Html->link('Ver', ['action' => 'view', $team->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $team->id], ['confirm' => 'Eliminar jugador ?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table>

            <?php echo $_SESSION['rol'] ?>
            <?php echo $_SESSION['usuario'] ?>
            <?php echo $_SESSION['password'] ?>
            <?php echo $_SESSION['user'] ?>
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
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    
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

<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teams index large-9 medium-8 columns content">
    <h3><?= __('Teams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= $this->Number->format($team->id) ?></td>
                <td><?= h($team->nombre) ?></td>
                <td><?= h($team->contacto) ?></td>
                <td><?= h($team->direccion) ?></td>
                <td><?= h($team->telefono) ?></td>
                <td><?= h($team->photo) ?></td>
                <td><?= h($team->photo_dir) ?></td>
                <td><?= h($team->created) ?></td>
                <td><?= h($team->modified) ?></td>
                <td><?= $this->Number->format($team->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $team->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
-->
