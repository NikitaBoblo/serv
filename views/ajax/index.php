<?php
/* @var $this yii\web\View */
//\yii\web\JqueryAsset::register($this);
//$this->registerJsFile('/js/ajaxnews.js');
$this->registerJsFile('/js/ajaxnews.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>

<div class="site-index">
    <div class="body-content">
        <div class="row news-box">

        </div >
    </div>
</div>