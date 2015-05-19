<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbKpi;

/* @var $this yii\web\View */
/* @var $model app\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $items = ArrayHelper::map(TbKpi::find()->all(),'id','topic')
    ?>
    <?= $form->field($model, 'kpi')->dropDownList($items, [
        'prompt'=>'-- ตัวชี้วัด --'
    ])
    ?>

    <?= $form->field($model, 'prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target')->textInput() ?>

    <?= $form->field($model, 'result')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
