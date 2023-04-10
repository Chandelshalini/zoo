<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<!-- <h1 class="display-4" style="margin-top:60px;"><b>Create</b></h1> -->



<div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'formId']); ?>
   
    <div class="row">
        <?= $form->field($zoo, 'name') ?>
    </div>
    <div class="row">

        <?php $items = ['Chandigarh' => 'Chandigarh', 'Mysore' => ' Mysore', 'Delhi' => 'Delhi']; ?>
        <?= $form->field($zoo, 'location')->dropDownList($items, ['prompt' => 'select']); ?>

    </div>
    <div class="row">

        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'onclick' => "submitZoodata()"]) ?>

    </div>

<?php ActiveForm::end(); ?>
</div>