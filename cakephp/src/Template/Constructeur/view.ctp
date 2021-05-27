<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Constructeur $constructeur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Constructeur'), ['action' => 'edit', $constructeur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Constructeur'), ['action' => 'delete', $constructeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $constructeur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Constructeur'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Constructeur'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="constructeur view large-9 medium-8 columns content">
    <h3><?= h($constructeur->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom Constructeur') ?></th>
            <td><?= h($constructeur->nom_constructeur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($constructeur->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planete Constructeur') ?></th>
            <td><?= $this->Number->format($constructeur->planete_constructeur) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vaisseau') ?></h4>
        <?php if (!empty($constructeur->vaisseau)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom Classe') ?></th>
                <th scope="col"><?= __('Longueur') ?></th>
                <th scope="col"><?= __('Prix') ?></th>
                <th scope="col"><?= __('Equipage') ?></th>
                <th scope="col"><?= __('Boucliers') ?></th>
                <th scope="col"><?= __('MGLT') ?></th>
                <th scope="col"><?= __('Hyperdrive') ?></th>
                <th scope="col"><?= __('Hyperdrive Classe') ?></th>
                <th scope="col"><?= __('Classe Id') ?></th>
                <th scope="col"><?= __('Constructeur Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($constructeur->vaisseau as $vaisseau): ?>
            <tr>
                <td><?= h($vaisseau->id) ?></td>
                <td><?= h($vaisseau->nom_classe) ?></td>
                <td><?= h($vaisseau->longueur) ?></td>
                <td><?= h($vaisseau->prix) ?></td>
                <td><?= h($vaisseau->equipage) ?></td>
                <td><?= h($vaisseau->boucliers) ?></td>
                <td><?= h($vaisseau->MGLT) ?></td>
                <td><?= h($vaisseau->hyperdrive) ?></td>
                <td><?= h($vaisseau->hyperdrive_classe) ?></td>
                <td><?= h($vaisseau->classe_id) ?></td>
                <td><?= h($vaisseau->constructeur_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vaisseau', 'action' => 'view', $vaisseau->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vaisseau', 'action' => 'edit', $vaisseau->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vaisseau', 'action' => 'delete', $vaisseau->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaisseau->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
