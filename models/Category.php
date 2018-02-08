<?php

namespace app\models;

use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static $colors = [
        1=>'','白','蓝','黄','红','绿'];

    public static $numbers = [1,1,1,2,2,3,3,4,4,5];

    public static $numbers2 = [1=>[0,1,2],2=>[3,4],3=>[5,6],4=>[7,8],5=>[9]];

}