<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Update User: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">
    
    <?php 
    echo '<pre>';
    
    print_r($model);
    echo '</pre>';
    ?>
    
    <h1><?= Html::encode($this->title) ?></h1>

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255,'readonly'=>true]); ?>
    
    <?= $form->field($model, 'type_user')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255,'readonly'=>true]) ?>
    
    <?= $form->field($model, 'fullname')->textInput(['maxlength' => 250]) ?>



    <?= $form->field($model, 'tell')->textInput(['maxlength' => 12]) ?>

   

    <?= $form->field($model, 'info_user')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 250]) ?>

    

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    

   

    <?= $form->field($model, 'status')->hiddenInput()->label('') ?>
    
     
    <?php ActiveForm::end(); ?>

</div>
