<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planete $planete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Planete'), ['action' => 'edit', $planete->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Planete'), ['action' => 'delete', $planete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planete->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Planete'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planete'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planete view large-9 medium-8 columns content">
    <h3><?= h($planete->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($planete->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planete->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($planete->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $this->Number->format($planete->region) ?></td>
        </tr>
    </table>
</div>
