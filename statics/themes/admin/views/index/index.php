<?php

/* @var $this yii\web\View */

$this->title = '系统信息';
$this->params['breadcrumbs'][] = '系统信息';
Yii::$app->db->open();
?>
<div class="index-index">

        <header class="panel-heading">系统信息</header>
        <div class="panel-body">
        <table class="table table-bordered table-hover">
            <tbody>
            <tr>
                <td>Yii版本</td>
                <td><?=Yii::getVersion();?></td>
            </tr>
            <tr>
                <td>操作系统</td>
                <td><?=php_uname('s').' '.php_uname('r');?></td>
            </tr>
            <tr>
                <td>PHP版本</td>
                <td><?=PHP_VERSION;?></td>
            </tr>
            <tr>
                <td>PHP运行环境</td>
                <td><?=apache_get_version();?></td>
            </tr>
            <tr>
                <td>PHP运行方式</td>
                <td><?=PHP_SAPI;?></td>
            </tr>
            <tr>
                <td>MySQL版本</td>
                <td><?=Yii::$app->db->pdo->getAttribute(PDO::ATTR_SERVER_VERSION);?></td>
            </tr>
            <tr>
                <td>上传附件限制</td>
                <td><?=ini_get('upload_max_filesize');?></td>
            </tr>
            <tr>
                <td>执行时间限制</td>
                <td><?=ini_get('max_execution_time');?>秒</td>
            </tr>

            </tbody>
        </table>
        </div>
</div>
