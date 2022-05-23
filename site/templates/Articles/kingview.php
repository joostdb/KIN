<div class="row">
    <div class="nav m-4">
            <?= $this->Html->link(__('Bewerk'), ['action' => 'kingedit', $article->id], ['class' => 'nav-link']) ?>
            <?= $this->Form->postLink(__('Verwijder'), ['action' => 'delete', $article->id], ['confirm' => __('Ben je zeker dat je # {0} wil verwijderen?', $article->id), 'class' => 'nav-link']) ?>
            <?= $this->Html->link(__('Alle items'), ['action' => 'index'], ['class' => 'nav-link']) ?>
            <?= $this->Html->link(__('Nieuw item'), ['action' => 'add'], ['class' => 'nav-link']) ?>
        </div>
<hr>

        <div class="col-md-6">
            <h3><?= h($article->title) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Gebruiker') ?></th>
                    <td><?= $this->Html->link($article->user_id, ['controller' => 'Users', 'action' => 'view', $article->user_id]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titel') ?></th>
                    <td><?= h($article->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($article->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aangemaakt') ?></th>
                    <td><?= h($article->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bewerkt') ?></th>
                    <td><?= h($article->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Openbaar') ?></th>
                    <td><?= $article->published ? __('Ja') : __('Nee'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Goedgekeurd') ?></th>
                    <td><?= $article->approved ? __('Ja') : __('Nee'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Omschrijving') ?></strong>
                <blockquote>
                    <?= $article->body; ?>
                </blockquote>
                <p><b>Tags:</b> <?= h($article->tag_string) ?></p>

            </div>
            <div class="related">
                <h4><?= __('Gerelateerde Tags') ?></h4>
                <?php if (!empty($article->tags)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($article->tags as $tags) : ?>
                        <tr>
                            <td><?= h($tags->id) ?></td>
                            <td><?= h($tags->title) ?></td>
                            <td><?= h($tags->created) ?></td>
                            <td><?= h($tags->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/site/files/articles/photo/<?= $article->photo_dir ?>/mobile_<?= $article->photo ?>">
        </div>
    </div>

