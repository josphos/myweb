<?php
use yii\grid\GridView;
use yii\helpers\Html;
use app\models\Cchangwat;
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
            
            [
                'attribute'=>'prov',
                'value'=>function($model){
                  
                    $code = $model->prov;
                    $data=Cchangwat::find()->where(['code'=>$code])->one();
                    return $code."-".$data->name;
        
                }
            ],
            'target',
            'result',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>