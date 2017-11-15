<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billet $billet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Billet'), ['action' => 'edit', $billet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billet'), ['action' => 'delete', $billet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="billets view large-9 medium-8 columns content">
    <h3><?= h($billet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($billet->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($billet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Billet') ?></th>
            <td><?= $this->Number->format($billet->id_billet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($billet->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Contenu') ?></h4>
        <?= $this->Text->autoParagraph(h($billet->contenu)); ?>
    </div>
</div>
