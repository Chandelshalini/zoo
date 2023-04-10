<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'formupdateId']); ?>
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
        <?= $form->field($animal, 'animal_image')->fileInput() ?>
    </div>

    <div class="row">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'onclick' => "updateAnimaldata(this.id)",'id' => $animal->id]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>