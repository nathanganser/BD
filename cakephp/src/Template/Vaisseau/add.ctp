<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaisseau $vaisseau
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vaisseau'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaisseau Classe'), ['controller' => 'VaisseauClasse', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Constructeur'), ['controller' => 'Constructeur', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Constructeur'), ['controller' => 'Constructeur', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vaisseau form large-9 medium-8 columns content">
    <?= $this->Form->create($vaisseau) ?>
    <fieldset>
        <legend><?= __('Add Vaisseau') ?></legend>
        <?php
            echo $this->Form->control('nom_classe');
            echo $this->Form->control('longueur');
            echo $this->Form->control('prix');
            echo $this->Form->control('equipage');
            echo $this->Form->control('boucliers');
            echo $this->Form->control('MGLT');
            echo $this->Form->control('hyperdrive');
            echo $this->Form->control('hyperdrive_classe');
            echo $this->Form->control('classe_id', ['options' => $vaisseauClasse]);
            echo $this->Form->control('constructeur_id', ['options' => $constructeur]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
