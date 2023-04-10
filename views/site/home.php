<?php
use yii\helpers\Html;
$this->registerCssFile("@web/css/home.css");

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index"> 

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-3">Zoo Management System</h1>
    </div>
    <div class="row">
  <div class="column">
  <?= Html::img('@web/uploads/img5.jpg', ['alt'=>'some', 'class'=>'image','style'=>'width:100%;']);?>
  </div>
  <div class="column">
  <?= Html::img('@web/uploads/img5.jpg', ['alt'=>'some', 'class'=>'image','style'=>'width:100%;']);?>
  </div>
  <div class="column">
  <?= Html::img('@web/uploads/img2.jpg', ['alt'=>'some', 'class'=>'image','style'=>'width:100%;']);?>
  </div>
</div>


       
