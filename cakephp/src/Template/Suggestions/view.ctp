<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suggestion $suggestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Suggestion'), ['action' => 'edit', $suggestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Suggestion'), ['action' => 'delete', $suggestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suggestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suggestion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="suggestions view large-9 medium-8 columns content">
    <h3><?= h($suggestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($suggestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($suggestion->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pris En Compte') ?></th>
            <td><?= $suggestion->pris_en_compte ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Suggestion') ?></h4>
        <?= $this->Text->autoParagraph(h($suggestion->suggestion)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($suggestion->email)); ?>
    </div>
</div>
