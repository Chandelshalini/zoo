<?php
use yii\helpers\Html;
$this->registerCssFile("@web/css/index.css");
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!-- <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="body-content">
       <?= Html::img('@web/uploads/img4.jpeg', ['alt'=>'some', 'class'=>'image']);?>
       <div class="sub-content">
          <h1 class="h1">Visit to a Zoo</h1>
          <h3 class="h3">A visit to a zoo offers us an opportunity to see the wild animals.</h3>
          <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">CLick here to Login</a></p>
        </div>
</div>

    </div>
</div>
