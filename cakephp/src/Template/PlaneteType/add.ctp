<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaneteType $planeteType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Planete Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="planeteType form large-9 medium-8 columns content">
    <?= $this->Form->create($planeteType) ?>
    <fieldset>
        <legend><?= __('Add Planete Type') ?></legend>
        <?php
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
