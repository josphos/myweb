<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>
<div class="work-index">

    <br>
    <p>
        <?= Html::a('เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kpi',
            'prov',
            'target',
            'result',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>