<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'formupdateId']); ?>
    <div class="row">
        <?= $form->field($user, 'Name') ?>
    </div>
    <div class="row">
        <?= $form->field($user, 'email') ?>
    </div>
    <div class="row">
        <?= $form->field($user, 'password') ?>
    </div>
    <div class="row">
        <?= $form->field($user, 'rpassword') ?>

    </div>
    <div class="row">

        <?php $items = ['admin' => 'admin', 'superadmin' => ' superadmin', 'user' => ' user']; ?>
        <?= $form->field($user, 'role')->dropDownList($items, ['prompt' => 'select']); ?>
    </div>

    <div class="row" style="margin-top:20px;">
    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'onclick' => "updateUserdata(this.id)",'id' => $user->id]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>