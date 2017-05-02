<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin:20px;">
           
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $categoria->id], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Datos de la Categoría <?php echo $categoria->nombre; ?></div>
              

              <!-- List group -->
              <ul class="list-group">
                <li class="list-group-item">Nombre - <?php echo $categoria->nombre; ?></li>
                
                <li class="list-group-item">Fecha de creación - <?php echo $categoria->created; ?></li>
                <li class="list-group-item">Fecha última modificación - <?php echo $categoria->modified; ?></li>
                <li class="list-group-item"><?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $categoria->id], ['class' => 'btn btn-sm btn-primary']) ?> </li>
              </ul>
            </div>
        </div>
    </div>
</div>
