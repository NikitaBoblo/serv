<?php $ph = $product->product_img;
\yii\helpers\Html::img(Yii::$app->request->baseUrl . "/web/uploads/imgs/{$ph[strlen($ph)-1]}/{$ph[strlen($ph)-2]}/{$ph}.jpg");
?>


<div class="body-content">

    <div class="row" >
        <div class="col-lg-12" >
            <h1 align="center"><?=$product->product_name;?></h1>
            <p><?=$product->product_descr;?></p>
            <img src="<?=\yii\helpers\Url::to("@web/uploads/imgs/{$ph[strlen($ph)-1]}/{$ph[strlen($ph)-2]}/{$ph}.jpg") ?>"
                 style="width: 100%; margin: 0 0 15px 0;" class="img-rounded">
            <?php

//            \yii\helpers\Html::img("@web/uploads/imgs/{$ph[strlen($ph)-1]}/{$ph[strlen($ph)-2]}/{$ph}.jpg");

            ?>
<!--                    style="width: 100%; margin: 0 0 15px 0;"-->
<!--                    class="img-rounded">-->
            <p><a class="btn btn-default" href = "<?=Yii::$app->homeUrl;?>">Home</a></p>
        </div >
    </div>
</div>

