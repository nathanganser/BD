<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaisseau[]|\Cake\Collection\CollectionInterface $vaisseau
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vaisseau'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Constructeur'), ['controller' => 'Constructeur', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Constructeur'), ['controller' => 'Constructeur', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vaisseau index large-9 medium-8 columns content">
    <h3><?= __('Vaisseau') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom_classe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longueur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('boucliers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MGLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hyperdrive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hyperdrive_classe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('constructeur_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vaisseau as $vaisseau): ?>
            <tr>
                <td><?= $this->Number->format($vaisseau->id) ?></td>
                <td><?= h($vaisseau->nom_classe) ?></td>
                <td><?= $this->Number->format($vaisseau->longueur) ?></td>
                <td><?= h($vaisseau->prix) ?></td>
                <td><?= $this->Number->format($vaisseau->equipage) ?></td>
                <td><?= h($vaisseau->boucliers) ?></td>
                <td><?= h($vaisseau->MGLT) ?></td>
                <td><?= h($vaisseau->hyperdrive) ?></td>
                <td><?= $this->Number->format($vaisseau->hyperdrive_classe) ?></td>
                <td><?= $vaisseau->has('vaisseau_classe') ? $this->Html->link($vaisseau->vaisseau_classe->id, ['controller' => 'VaisseauClasse', 'action' => 'view', $vaisseau->vaisseau_classe->id]) : '' ?></td>
                <td><?= $vaisseau->has('constructeur') ? $this->Html->link($vaisseau->constructeur->id, ['controller' => 'Constructeur', 'action' => 'view', $vaisseau->constructeur->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vaisseau->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vaisseau->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vaisseau->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaisseau->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
