<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Work */

$this->title = 'Update Work: ' . ' ' . $model->kpi;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi, 'url' => ['view', 'kpi' => $model->kpi, 'prov' => $model->prov]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
