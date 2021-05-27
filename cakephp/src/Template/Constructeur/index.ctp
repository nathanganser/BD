<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Constructeur[]|\Cake\Collection\CollectionInterface $constructeur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Constructeur'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="constructeur index large-9 medium-8 columns content">
    <h3><?= __('Constructeur') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom_constructeur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planete_constructeur') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($constructeur as $constructeur): ?>
            <tr>
                <td><?= $this->Number->format($constructeur->id) ?></td>
                <td><?= h($constructeur->nom_constructeur) ?></td>
                <td><?= $this->Number->format($constructeur->planete_constructeur) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $constructeur->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $constructeur->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $constructeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $constructeur->id)]) ?>
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
