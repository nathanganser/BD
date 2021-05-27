<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaisseau $vaisseau
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vaisseau'), ['action' => 'edit', $vaisseau->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vaisseau'), ['action' => 'delete', $vaisseau->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaisseau->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vaisseau'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaisseau'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Constructeur'), ['controller' => 'Constructeur', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Constructeur'), ['controller' => 'Constructeur', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vaisseau view large-9 medium-8 columns content">
    <h3><?= h($vaisseau->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom Classe') ?></th>
            <td><?= h($vaisseau->nom_classe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= h($vaisseau->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MGLT') ?></th>
            <td><?= h($vaisseau->MGLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaisseau Classe') ?></th>
            <td><?= $vaisseau->has('vaisseau_classe') ? $this->Html->link($vaisseau->vaisseau_classe->id, ['controller' => 'VaisseauClasse', 'action' => 'view', $vaisseau->vaisseau_classe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Constructeur') ?></th>
            <td><?= $vaisseau->has('constructeur') ? $this->Html->link($vaisseau->constructeur->id, ['controller' => 'Constructeur', 'action' => 'view', $vaisseau->constructeur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vaisseau->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur') ?></th>
            <td><?= $this->Number->format($vaisseau->longueur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipage') ?></th>
            <td><?= $this->Number->format($vaisseau->equipage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hyperdrive Classe') ?></th>
            <td><?= $this->Number->format($vaisseau->hyperdrive_classe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Boucliers') ?></th>
            <td><?= $vaisseau->boucliers ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hyperdrive') ?></th>
            <td><?= $vaisseau->hyperdrive ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
