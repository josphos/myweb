<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbKpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Kpis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kpi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Kpi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'topic',
            'note',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
