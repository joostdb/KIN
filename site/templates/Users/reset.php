<?php
$this->assign('title', 'Reset');
?>
<div class="row">

            <h4 class="heading"><?= __('Vernieuw je wachtwoord') ?></h4>

    <div class="col-6 mb-2">

            <?= $this->Form->create() ?>
        <div class="mb-3">
            <?= $this->Form->control('email',['class' => 'form-control', 'label'  => __('E-mail')]) ?>
        </div>
        <?= $this->Form->button(__('Verstuur'),['class' => 'btn btn-primary', 'label'  => __('Verstuur')]) ?>
            <?= $this->Form->end() ?>
        </div>
    <div class="col-md-6 bg-light p-5 mb-2">
        <span class="d-block h5 lh-base">
        Door in dit veld je e-mail adres in te voeren kan je je login-gegevens herstellen. Je ontvangt dan een automatische mail met je login én wachtwoord. Hou deze persoonlijke gegevens goed bij.
        </span>
    </div>
    </div>

