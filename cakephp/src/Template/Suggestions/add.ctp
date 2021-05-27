<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suggestion $suggestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Suggestions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="suggestions form large-9 medium-8 columns content">
    <?= $this->Form->create($suggestion) ?>
    <fieldset>
        <legend><?= __('Add Suggestion') ?></legend>
        <?php
            echo $this->Form->control('suggestion');
            echo $this->Form->control('email');
            echo $this->Form->control('date');
            echo $this->Form->control('pris_en_compte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
