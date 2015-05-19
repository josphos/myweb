<?php

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="well">
    <h1>ยินดีต้อนรับเข้าสู่ <?= Yii::$app->name ?></h1>

    <?php Pjax::begin(); ?>
    <a href=" <?=  Url::to(['site/index'])?>" id="refresh" >refresh</a>

    <p><?= $time ?></p>

    <?php Pjax::end(); ?>


</div>

<?php
$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refresh").click(); }, 1000);
});
JS;
$this->registerJs($script);
?>
test test test
