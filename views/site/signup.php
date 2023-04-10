<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<h2>SignUp</h2>
<div class="body-content">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <?= $form->field($model, 'Name') ?>
        </div>
        <div class="row">
                <?= $form->field($model, 'email') ?>
        </div>
        <div class="row">
                <?= $form->field($model, 'password')->passwordInput();  ?>
        </div>
        <div class="row">
                <?= $form->field($model, 'rpassword')->passwordInput();  ?>
        </div>
        <div class="row">
                <?php $items = ['admin' => 'admin', 'superadmin' => ' superadmin', 'user' => ' user']; ?>
                <?= $form->field($model, 'role')->dropDownList($items, ['prompt' => 'select']); ?>
        </div>

        <div class="row" style="margin-top:20px;">

        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary','style'=>'width:5rem;']) ?>

        </div>

        <?php ActiveForm::end(); ?>
</div>