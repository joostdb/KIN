<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
        <div class="col">

            <?php
            $check = "checked";
            if($user->contract!=1){
echo "<div class='alert alert-danger m-2'>". __('Je items zijn enkel zichtbaar indien je akkoord gaat met de algemene voorwaarden en de GPDR wetgeving.') ."</div>";
$check = "unchecked";
            }
            ?>
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Mijn gegevens') ?></legend>
                <div class="mb-3">
                <?= $this->Form->control('email',['class' => 'form-control', 'label' => __('E-mail')]) ?>
                </div>
                <div class="mb-3">
                <?= $this->Form->control('name',['class' => 'form-control', 'label' => __('Achternaam')]) ?>
                </div>
                <div class="mb-3">
                <?= $this->Form->control('first_name',['class' => 'form-control', 'label' => __('Voornaam')]) ?>
                </div>
                <div class="mb-3">

                    <?= $this->Form->control('contract', ['type' => 'checkbox','class' => 'me-2', 'label' => __('Ik ga akkoord met de algemene voorwaarden & GPDR'), $check]) ?>
                    <iframe src="privacy" style="width:100%; max-height: 60px" class="mt-2"></iframe>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Bewerk'),['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
</div>
