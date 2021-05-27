<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planete[]|\Cake\Collection\CollectionInterface $planete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Planete'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planete index large-9 medium-8 columns content">
    <h3><?= __('Planete') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planete as $planete): ?>
            <tr>
                <td><?= $this->Number->format($planete->id) ?></td>
                <td><?= h($planete->nom) ?></td>
                <td><?= $this->Number->format($planete->type) ?></td>
                <td><?= $this->Number->format($planete->region) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $planete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planete->id)]) ?>
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
