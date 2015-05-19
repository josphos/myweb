<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รวมตัวชี้วัด';
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
            'content' => $this->render('kpi_prov',[
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel,
            ]),
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



