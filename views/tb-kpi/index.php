<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbKpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการตัวชี้วัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kpi-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มตัวชี้วัด', ['create'], ['class' => 'btn btn-success']) ?>
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
