<?php
use yii\bootstrap\Html;

    //手动引入bootstrap.js
    //**由于有可能没有调用任何bootstrap组件   **使用Asset依赖注册不会重复引入js文件
    yii\bootstrap\BootstrapPluginAsset::register($this);
?>

<div class="side-nav">
    <ul class="nav nav-pills nav-stacked">
        <li class="menu-single <?=$this->context->id=='site' && $this->context->action->id=='index'?'active':''?>">
            <a href="/">
                <span class="menu-icon glyphicon glyphicon-inbox"></span>
                首页
            </a>
        </li>
        <li class="menu-list <?=$this->context->id=='item'?'nav-active':''?>">
            <a href="javascript:void(0);" class="<?=$this->context->id=='item'?'':'collapsed'?>">
                <span class="menu-icon glyphicon glyphicon-cog"></span>
                物品
                <span class="sub-menu-collapsed glyphicon glyphicon-plus"></span>
                <span class="sub-menu-collapsed-in glyphicon glyphicon-minus"></span>
            </a>
            <ul class="sub-menu-list collapse <?=$this->context->id=='item'?'in':''?>" id="system-collapse">
                <li class="<?=$this->context->id=='item' && $this->context->action->id=='index'?'active':''?>">
                    <a href="/item">
                        列表
                    </a>
                </li>
                <?php if(!Yii::$app->user->isGuest):?>
                <li class="<?=$this->context->id=='item' && $this->context->action->id=='add'?'active':''?>">
                    <a href="/item/add">
                        添加
                    </a>
                </li>
                <?php endif;?>
            </ul>
        </li>
        <?php if(!Yii::$app->user->isGuest):?>
        <li class="menu-single">
            <a href="/site/logout">
                <span class="menu-icon glyphicon glyphicon-inbox"></span>
                （<?=Yii::$app->user->identity->username?>） 退出
            </a>
        </li>
        <?php else:?>
        <li class="menu-single <?=$this->context->id=='site' && $this->context->action->id=='login'?'active':''?>">
            <a href="/site/login">
                <span class="menu-icon glyphicon glyphicon-inbox"></span>
                登录
            </a>
        </li>
        <?php endif;?>
        <!--<li class="menu-single <?/*=$this->context->id=='user'?'active':''*/?>">
            <a href="<?/*=AdminFunc::adminUrl('user')*/?>">
                <span class="menu-icon glyphicon glyphicon-refresh"></span>
                玩家
            </a>
        </li>
        <li class="menu-single <?/*=$this->context->id=='game'?'active':''*/?>">
            <a href="<?/*=AdminFunc::adminUrl('game')*/?>">
                <span class="menu-icon glyphicon glyphicon-refresh"></span>
                游戏
            </a>
        </li>
        <li class="menu-list <?/*=$this->context->id=='manage'?'nav-active':''*/?>">
            <a href="javascript:void(0);" class="<?/*=$this->context->id=='manage'?'':'collapsed'*/?>">
                <span class="menu-icon glyphicon glyphicon-cog"></span>
                网站管理
                <span class="sub-menu-collapsed glyphicon glyphicon-plus"></span>
                <span class="sub-menu-collapsed-in glyphicon glyphicon-minus"></span>
            </a>
            <ul class="sub-menu-list collapse <?/*=$this->context->id=='manage'?'in':''*/?>" id="system-collapse">
                <li class="<?/*=$this->context->id=='manage' && substr($this->context->action->id,0,3)=='sms'?'active':''*/?>">
                    <a href="<?/*=AdminFunc::adminUrl('manage/sms')*/?>">
                        手机短信
                    </a>
                </li>
                <li class="<?/*=$this->context->id=='manage' && $this->context->action->id=='verify-code'?'active':''*/?>">
                    <a href="<?/*=AdminFunc::adminUrl('manage/verify-code')*/?>">
                        验证码
                    </a>
                </li>
                <li class="<?/*=$this->context->id=='manage' && $this->context->action->id=='global-config'?'active':''*/?>">
                    <a href="<?/*=AdminFunc::adminUrl('manage/global-config')*/?>">
                        参数设置
                    </a>
                </li>
                <li class="<?/*=$this->context->id=='manage' && $this->context->action->id=='user-history'?'active':''*/?>">
                    <a href="<?/*=AdminFunc::adminUrl('manage/user-history')*/?>">
                        用户操作记录
                    </a>
                </li>
            </ul>
        </li>-->
    </ul>
</div>
