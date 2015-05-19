<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbKpi */

$this->title = 'Create Tb Kpi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
