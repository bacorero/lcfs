<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="container">
<div class="row">
    <div class="col-md-12">
    <?php if(isset ($_SESSION['usuario']) and $_SESSION['rol'] == "admin"): ?>
        <div class="page-header">
            <h2>Jugadores</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th> Equipo </th>         
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= h($player->nombre) ?></td>
                <td><?= h($player->apellido) ?></td>

                <td>
                </td> 
                <td><?php echo "Equipo";//S$equipo->nombre; ?></td> 

                <td><?= $this->Html->image('../files/players/photo/'. $player->photo_dir .
                        '/portrait_' . $player->photo, ['alt' => $player->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?> </td>
                <!--<td><?= h($player->photo) ?></td>-->
                <!--<td><?= h($player->photo_dir) ?></td>-->
                <!--<td><?= $player->has('team') ? $this->Html->link($player->team->id, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>-->
                <td><?= $this->Html->link('Ver', ['action' => 'view', $player->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $player->id], ['confirm' => 'Eliminar jugador ?', 'class' => 'btn btn-sm btn-danger']) ?>
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
</div>











