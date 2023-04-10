<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerJsFile("@web/js/main.js");

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<h2>Login</h2>
<div class="body-content">
        <?php $form = ActiveForm::begin(['id' => 'formId']); ?>
        
        <div class="row">
                <?= $form->field($model, 'email') ?>
        </div>
        <div class="row">
                <?= $form->field($model, 'password')->passwordInput(); ?>
                
        </div>
      
        <div class="row" style="margin-top:20px;">

        <?= Html::submitButton('Submit', ['onclick' => 'authenticateUser()','class' => 'btn btn-primary','style'=>'width:5rem;']) ?>

        </div>

        <?php ActiveForm::end(); ?>
</div>