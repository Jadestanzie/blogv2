<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billet $billet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Billets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="billets form large-9 medium-8 columns content">
    <?= $this->Form->create($billet) ?>
    <fieldset>
        <legend><?= __('Edit Billet') ?></legend>
        <?php
            echo $this->Form->control('id_billet');
            echo $this->Form->control('date');
            echo $this->Form->control('titre');
            echo $this->Form->control('contenu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
