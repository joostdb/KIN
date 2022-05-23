<?php
$this->assign('title', 'Login');
?>
<?= $this->Flash->render() ?>
<h3>Login</h3>
<div class="row">
<div class="col-md-6 mb-2">
<?= $this->Form->create() ?>
<form>
    <div class="mb-3">
        <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control', 'id' => 'InputEmail1', 'aria-describedby' => 'emailHelp', 'label' => __('E-mail adres')]) ?>
        <div id="emailHelp" class="form-text">We delen nooit je emailadres.</div>
    </div>
    <div class="mb-3">
        <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control', 'id' => 'InputPassword1', 'label' => __('Paswoord')]) ?>
    </div>
 <?= $this->Form->submit(__('Login'),['class' => 'form-btn btn btn-primary']); ?>
    <a href="reset">Paswoord vergeten?</a>
</form>
<?= $this->Form->end() ?>
</div>
    <div class="col-md-6 bg-light p-5 mb-2">
        <a href="add" type="button" class="btn btn-primary mb-3"><?= __("Nieuwe gebruiker") ?></a>
        <span class="d-block h5 lh-base">
        Wil je deel uitmaken van KIN? Leuk!
        <br>
        Via deze knop kan je je meteen registreren en je favoriete items toevoegen.
        </span>
</div>
</div>
