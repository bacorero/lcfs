<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-12">
    <?php if(isset ($_SESSION['usuario']) and $_SESSION['rol'] == "admin"): ?>
        <div class="page-header">
            <h2>Árbitros</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poblacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>         
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($arbitros as $arbitro): ?>
            <tr>
                <td><?= h($arbitro->nombre) ?></td>
                <td><?= h($arbitro->apellido) ?></td>
                <td><?= h($arbitro->poblacion) ?></td>
                <td><?= h($arbitro->telefono) ?></td>
                <td><?= $this->Html->image('../files/arbitros/photo/'. $arbitro->photo_dir .
                        '/portrait_' . $arbitro->photo, ['alt' => $arbitro->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?> </td>
               
                
                <td><?= $this->Html->link('Ver', ['action' => 'view', $arbitro->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $arbitro->id], ['confirm' => 'Eliminar árbitro ?', 'class' => 'btn btn-sm btn-danger']) ?>
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

