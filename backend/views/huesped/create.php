<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Huesped */

$this->title = 'Crear Huesped';
$this->params['breadcrumbs'][] = ['label' => 'Huespedes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huesped-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
