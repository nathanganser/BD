<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VaisseauClasse $vaisseauClasse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vaisseau Classe'), ['action' => 'edit', $vaisseauClasse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vaisseau Classe'), ['action' => 'delete', $vaisseauClasse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaisseauClasse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vaisseau Classe'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaisseau Classe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vaisseauClasse view large-9 medium-8 columns content">
    <h3><?= h($vaisseauClasse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Classe') ?></th>
            <td><?= h($vaisseauClasse->classe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($vaisseauClasse->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vaisseauClasse->id) ?></td>
        </tr>
    </table>
</div>
