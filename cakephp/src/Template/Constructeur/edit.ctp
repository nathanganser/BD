<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Constructeur $constructeur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $constructeur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $constructeur->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Constructeur'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaisseau'), ['controller' => 'Vaisseau', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="constructeur form large-9 medium-8 columns content">
    <?= $this->Form->create($constructeur) ?>
    <fieldset>
        <legend><?= __('Edit Constructeur') ?></legend>
        <?php
            echo $this->Form->control('nom_constructeur');
            echo $this->Form->control('planete_constructeur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
