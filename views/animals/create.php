<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<!-- <h1 class="display-4" style="margin-top:60px;"><b>Create</b></h1> -->



<div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'formId','options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="row">
    <?= $form->field($animal, 'name') ?>
       
    </div>

    <div class="row">

        <?= $form->field($animal, 'breed') ?>
    </div>

    <div class="row">

        <?= $form->field($animal, 'cagenumber') ?>
    </div>
    <div class="row">

        <?php $items = ['Male' => 'Male', 'Female' => ' Female']; ?>
        <?= $form->field($animal, 'gender')->dropDownList($items, ['prompt' => 'select']); ?>
    </div>

    <div class="row">
        <?php $items = ['Mysore Zoo' => 'Mysore zoo', 'Alipore Zoological Gardens' => ' Alipore Zoological Gardens', 'Zoo' => 'zoo']; ?>
        <?= $form->field($animal, 'zallocated')->dropDownList($items, ['prompt' => 'select']); ?>
    </div>

    
    <div class="row">
        <div class="form-group">
           
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'onclick' => "submitAnimaldata()"]) ?>
        
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>