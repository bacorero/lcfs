<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inicios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inicios form large-9 medium-8 columns content">
    <?= $this->Form->create($inicio) ?>
    <fieldset>
        <legend><?= __('Edit Inicio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
