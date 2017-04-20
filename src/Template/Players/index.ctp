<?php
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
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>

                <th scope="col"><?= $this->Paginator->sort('pablacion') ?></th>
              
                <th scope="col"><?= $this->Paginator->sort('nacionalidad') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                
                <td><?= h($player->nombre) ?></td>
                <td><?= h($player->apellido) ?></td>
                
                <td><?= h($player->pablacion) ?></td>
                
                <td><?= h($player->nacionalidad) ?></td>
                
                
                <td><?= h($player->photo) ?></td>
                <td><?= h($player->photo_dir) ?></td>
               
                <td><?= $player->has('team') ? $this->Html->link($player->team->id, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>

                <td><?= $this->Html->link('Ver', ['action' => 'view', $player->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $player->id], ['confirm' => 'Eliminar jugador ?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table>

            <?php echo $_SESSION['rol'] ?>
            <?php echo $_SESSION['usuario'] ?>
            <?php echo $_SESSION['password'] ?>
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

    <?php endif; ?>
    </div>
</div>










