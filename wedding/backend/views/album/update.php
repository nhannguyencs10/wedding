<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Album */

$this->title = 'Update Album: ' . ' ' . $model->id_album;
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_album, 'url' => ['view', 'id' => $model->id_album]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="album-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
