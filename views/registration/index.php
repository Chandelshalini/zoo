<?php

use app\models\Registration;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'My Yii Application';
?>
<div class="site-index">

  <div class="jumbotron text-center bg-transparent">
    <h1 class="display-4">Details</h1>
  </div>


  <div class="col-lg-12">
    <?php if (Yii::$app->session->hasFlash('message')) : ?>

      <div class="alert alert-success" role="alert">
        <?= Yii::$app->session->getFlash('message'); ?>
      </div>
  </div>
<?php endif; ?>
</div>

<div class="row">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:5rem;" onclick="addUser()">
    +create
  </button>

  <!-- Modal for create -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="height:40rem;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modalBody">

        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
    </div>
  </div>
</div>



<div class="body-content" style="margin-top:20px;">

  <div class="row">
    <table class="table">

      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <!-- <th scope="col">password</th>
          <th scope="col">rpassword</th> -->
          <th scope="col">role</th>

          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($user) > 0) : ?>
          <?php foreach ($user as $val) : ?>
            <tr>
              <th scope="row"><?php echo $val->id; ?></th>
              <td><?php echo $val->Name; ?></td>
              <td><?php echo $val->email; ?></td>
              <!-- <td><?php echo $val->password; ?></td>
              <td><?php echo $val->rpassword; ?></td> -->
              <td><?php echo $val->role; ?></td>
              <td>
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#example1Modal" onclick='updateUser(this.id)' id="<?= $val->id ?>">
                  update
                </button>
                <!-- Modal -->
                <div class="modal fade" id="example1Modal" tabindex="-1" aria-labelledby="example1ModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="example1ModalLabel">Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" id="modalupdateBody">

                      </div>

                    </div>
                  </div>
                </div>

                <span> <?= Html::button('delete', ['onclick' => 'deleteUser(this.id)', 'class' => 'btn btn-danger', 'id' => $val->id]) ?></span></td>


            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="5">No data found.</td>
          </tr>
        <?php endif; ?>

      </tbody>

    </table>

  </div>
</div>