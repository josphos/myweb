<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Works';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

echo Tabs::widget([
    'items' => [
        [
            'label' => 'ตัวชี้วัดระดับเขต',
            'content' => 'เขต',
            'active' => true
        ],
        [
            'label' => 'ตัวชี้วัดระดับจังหวัด',
            'content' => '',
            'headerOptions' => [],
            
        ],
        [
            'label' => 'คู่มือ',
            'content' => '',
            'headerOptions' => [],
           
        ],
    ],
]);

?>


<div class="work-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Work', ['create'], ['class' => 'btn btn-success']) ?>
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
