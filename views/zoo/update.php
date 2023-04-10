<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<!-- <h1 class="display-4" style="margin-top:60px;"><b>Update Details</b></h1> -->



<div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'formupdateId']); ?>
    
    <div class="row">

        <?= $form->field($zoo, 'name') ?>
    </div>

    <div class="row">
        <?php $items = ['Chandigarh' => 'Chandigarh', 'Mysore' => ' Mysore', 'Delhi' => 'Delhi']; ?>
        <?= $form->field($zoo, 'location')->dropDownList($items, ['prompt' => 'select']); ?>
    </div>

    <div class="row">

    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'onclick' => "updateZoodata(this.id)",'id' => $zoo->id]) ?>

    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>