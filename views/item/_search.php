<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_cn') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'name_jp') ?>

    <?= $form->field($model, 'category_id') ?>

<!--    --><?php // echo $form->field($model, 'img_url') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'describe_cn') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'describe_en') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'describe_jp') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'status') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'created_at') ?>
<!---->
<!--    --><?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
