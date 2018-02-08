<?php

use yii\widgets\LinkPager;
$this->title = '物品';

?>
<!--<div>
    <a class="btn btn-success" target="_blank" href="/admin/site/export">导出</a>
    <br/>
    <br/>
</div>-->
<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>物品名称</th>
        <th>种类</th>
        <th>图片</th>
        <th>描述</th>
        <!--<th>设备代理</th>-->
    </tr>
    <?php foreach($list as $l){ ?>
        <tr>
            <td><?=$l->id?></td>
            <td><?=$l->name_cn?></td>
            <td><?=$l->category_id?></td>
            <td><?=$l->img_url?></td>
            <td><?=$l->describe_cn?></td>
            <!--<td><?/*=$val->user_agent*/?></td>-->
        </tr>
    <?php } ?>
</table>
<div class="text-center">
    <?=
    LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>