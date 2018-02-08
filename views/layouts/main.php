<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>塞尔达传说：荒野之息<?=$this->title!=''?' _ '.Html::encode($this->title):'' ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<section>
    <?=$this->render('side_nav')?>
    <div class="main-content" ><!--
        <?/*=$this->render('_header')*/?>
        -->
        <?/*=$this->render('page_head')*/?>
        <div class="wrapper">
            <?=$content?>
        </div><!--
        <?/*=$this->render('_footer')*/?>
    --></div>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
