<?php

use yii\grid\GridView;
use yii\helpers\Html;
use app\models\Cchangwat;
use app\models\TbKpi;
?>
<div class="work-index">

    <br>
    <p>
        <?= Html::a('เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'kpi',
                'value' => function($model) {

                    $code = $model->kpi;
                    $data = TbKpi::find()->where(['id' => $code])->one();
                    return $code . "-" . $data->topic;
                }
                    ],
                    [
                        'attribute' => 'prov',
                        'value' => function($model) {

                            $code = $model->prov;
                            $data = Cchangwat::find()->where(['code' => $code])->one();
                            return $code . "-" . $data->name;
                        }
                            ],
                            'target',
                            'result',
                            [
                                'label' => 'ร้อยละ',
                                'value' => function($model) {
                                    return number_format($model->result / $model->target * 100, 2);
                                }
                            ],
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>

</div>