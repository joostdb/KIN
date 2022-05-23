<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="articles index content">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <?= $this->Html->link(__('Nieuw item'), ['action' => 'add'], ['class' => 'btn btn-primary m-3']) ?>
    </div>
    <h3><?= __('Mijn items') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>

                    <th><?= $this->Paginator->sort('Benaming') ?></th>
                    <th><?= $this->Paginator->sort('Foto') ?></th>
                    <th><?= $this->Paginator->sort('Toegevoegd') ?></th>
                    <th class="actions"><?= __('Acties') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= h($article->title) ?></td>
                    <td><img src="/site/files/articles/photo/<?= $article->photo_dir ?>/small_<?= $article->photo ?>"></td>
                    <td><?= h($article->created) ?></td>
                    <td class="actions">

                        <?= $this->Html->link('<i class="fa-solid fa-eye"></i>', ['action' => 'view', $article->id],['escape' => false]) ?>
                        <?= $this->Html->link('<i class="fa-solid fa-pencil"></i>', ['action' => 'edit', $article->id],['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="fa-solid fa-trash-can"></i>', ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'escape' => false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('vorige')) ?>
            <?= $this->Paginator->prev('< ' . __('volgende')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('volgende') . ' >') ?>
            <?= $this->Paginator->last(__('laatste') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} van {{pages}}, toont {{current}} item(s) van {{count}}')) ?></p>
    </div>
</div>
