<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ItemSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_cn',
//            'name_en',
//            'name_jp',
            //'category_id',
            [
                'attribute' => 'category_id',
                'label'=>'类型',
                'value' => function ($model) {
                    return ItemSearch::dropDown('category_id', $model->category_id);
                },
                'filter' => ItemSearch::dropDown('category_id'),
            ],
            'img_url:image',
            'describe_cn',
//            'describe_en',
//            'describe_jp',
//            'status',
//            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
