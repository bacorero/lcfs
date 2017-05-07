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
            <h2>Spónsores</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>       
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sponsors as $sponsor): ?>
            <tr>
                <td><?= h($sponsor->nombre) ?></td>
                <!-- <td><?= h($sponsor->active) ?></td> -->
                <?php if($sponsor->active == 1): ?>
                    <td><?php echo "PUBLICADO" ?></td>
                <?php else: ?>
                    <td><?php echo "NO PUBLICADO" ?></td>
                <?php endif; ?>

                <td>
                </td> 
                

                <td><?= $this->Html->image('../files/sponsors/photo/'. $sponsor->photo_dir .
                        '/portrait_' . $sponsor->photo, ['alt' => $sponsor->nombre, 'class' => 'img-responsive img-thumnail center-block']) ?> </td>
                <td><?= $this->Html->link('Ver', ['action' => 'view', $sponsor->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $sponsor->id], ['confirm' => 'Eliminar jugador ?', 'class' => 'btn btn-sm btn-danger']) ?>
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

    <?php endif; ?>
    </div>
    </div>
</div>
























<!--   -->

