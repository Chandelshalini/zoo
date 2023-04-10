<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\db\Query;
// $this->registerCssFile("@web/css/dashboard.css");
// $this->registerJsFile("@web/js/animals.js");
// $this->registerJsFile("@web/js/zoo.js");
// $this->registerJsFile("@web/js/user.js");

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="site-index">

   
        <div class="first">
            <!-- <h1 style="margin-top:20px;">User Count:<?php echo $userCount?></h1> -->
           <h2>User Count:<?php echo $userCount?></h2>
            <div class="center">
            <button onclick="showUser()" class="btn">Click Here</button>
            </div>

        </div>
        <div class="second">
            <!-- <h1 style="margin-top:20px;">Animal Count:<?php echo $animalCount?></h1> -->
            <h2>Animal Count:<?php echo $animalCount?></h2>
            <div class="center">
            <button onclick="showAnimals()" class="btn">Click Here</button></a>
            </div>

        </div>
        <div class="third">
            <!-- <h1 style="margin-top:20px;">Zoo Count:<?php echo $zooCount?></h1> -->
            <h2>Zoo Count:<?php echo $zooCount?></h2>
            <div class="center">
            <button onclick="showZoo()" class="btn">Click Here</button>
            </div>

       
    </div>
    <div id=data>
    </div>