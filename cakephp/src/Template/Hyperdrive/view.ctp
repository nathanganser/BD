<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hyperdrive $hyperdrive
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hyperdrive'), ['action' => 'edit', $hyperdrive->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hyperdrive'), ['action' => 'delete', $hyperdrive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hyperdrive->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hyperdrive'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hyperdrive'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hyperdrive view large-9 medium-8 columns content">
    <h3><?= h($hyperdrive->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hyperdrive->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classe') ?></th>
            <td><?= $this->Number->format($hyperdrive->classe) ?></td>
        </tr>
    </table>
</div>
