<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbKpi */

$this->title = 'เพิ่มตัวชี้วัด';
$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kpi-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
