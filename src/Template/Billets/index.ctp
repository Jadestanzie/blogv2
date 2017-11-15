<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billet[]|\Cake\Collection\CollectionInterface $billets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Billet'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billets index large-9 medium-8 columns content">
    <h3><?= __('Billets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_billet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billets as $billet): ?>
            <tr>
                <td><?= $this->Number->format($billet->id) ?></td>
                <td><?= $this->Number->format($billet->id_billet) ?></td>
                <td><?= h($billet->date) ?></td>
                <td><?= h($billet->titre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $billet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billet->id)]) ?>
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
