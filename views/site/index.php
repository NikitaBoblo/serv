<?php

/* @var $this yii\web\View */

$this->title = 'Market';

//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = '';
?>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->

<!--    <div class="body-content">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        -->
    <div class="body-content">

        <div class="row" >
            <?php foreach ($products as $product) {
                $ph = $product->product_img;?>
                <div class="col-lg-4">
<!--                <div class="col-lg-4" style="border: 1px solid black">-->
                    <img src="<?=\yii\helpers\Url::to("@web/uploads/imgs/{$ph[strlen($ph)-1]}/{$ph[strlen($ph)-2]}/{$ph}.jpg") ?>"
                         class="img-rounded" style="width: 100%; margin: 25px 0 0 0">
                    <h2><?=$product->product_name;?></h2 >
                    <p> <?=substr($product->product_descr, 0, 200) . '...';?></p>
                    <p><a class="btn btn-default" href = "http://market.loc/site/prod/<?=$product->id;?>">Read more</a></p>
                </div >
            <?php }?>
        </div >
    </div>
</div>
