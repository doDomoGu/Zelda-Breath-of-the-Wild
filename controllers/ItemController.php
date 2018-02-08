<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\Item;
use yii\data\Pagination;

use yii\web\Response;

class ItemController extends Controller
{
    public function actionIndex()
    {
        $record = Item::find();

        $pages = new Pagination(['totalCount' =>$record->count(), 'pageSize' => '20']);
        $list = $record->offset($pages->offset)->limit($pages->limit)->all();

        $params['list'] = $list;
        $params['pages'] = $pages;


        return $this->render('index',$params);
    }

}
