<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planete $planete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Planete'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="planete form large-9 medium-8 columns content">
    <?= $this->Form->create($planete) ?>
    <fieldset>
        <legend><?= __('Add Planete') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('type');
            echo $this->Form->control('region');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
