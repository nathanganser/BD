<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hyperdrive $hyperdrive
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hyperdrive->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hyperdrive->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hyperdrive'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hyperdrive form large-9 medium-8 columns content">
    <?= $this->Form->create($hyperdrive) ?>
    <fieldset>
        <legend><?= __('Edit Hyperdrive') ?></legend>
        <?php
            echo $this->Form->control('classe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
