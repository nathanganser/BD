<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VaisseauClasse $vaisseauClasse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vaisseauClasse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vaisseauClasse->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vaisseau Classe'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vaisseauClasse form large-9 medium-8 columns content">
    <?= $this->Form->create($vaisseauClasse) ?>
    <fieldset>
        <legend><?= __('Edit Vaisseau Classe') ?></legend>
        <?php
            echo $this->Form->control('classe');
            echo $this->Form->control('Description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
