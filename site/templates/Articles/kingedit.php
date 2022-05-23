<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">

    <?= $this->Form->create($article, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Bewerk item') ?></legend>
        <div class="mb-3">
            <?= $this->Form->control('title', ['class' => 'form-control', 'label' => __('Benaming')]) ?>
        </div>
        <div class="mb-3">
            <script
                src="https://cdn.tiny.cloud/1/qn6n1xx45kndce2h6s1qhbbtsmj3h2nn6c01ps0bwb4f103c/tinymce/5/tinymce.min.js"
                referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#bodyfield'
                });
            </script>
            <?= $this->Form->control('body', ['id' => 'bodyfield', 'class' => 'form-control', 'label' => __('Omschrijving')]) ?>

        </div>
        <div class="mb-3">
            <?= $this->Form->control('photo', ['type' => 'file', 'class' => 'form-control', 'label' => __('Foto')]) ?>
            <?php if ($article->photo) { ?>
                <div class="col-12 mt-3">
                    <img
                        src="/site/files/articles/photo/<?= h($article->photo_dir) ?>/portrait_<?= h($article->photo) ?>">
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('tag_string', ['type' => 'text', 'class' => 'form-control', 'label' => __('Trefwoord')]) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('published', ['label' => __('Openbaar'), 'class' => 'me-2']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('approved', ['label' => __('Aanvaard'), 'class' => 'me-2']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->button(__('Bewerk'), ['class' => 'btn btn-primary mb-3']) ?>
        </div>


        <?= $this->Form->end() ?>

</div>
