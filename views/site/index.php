<?php

/* @var $this yii\web\View */

$this->title = 'News';

//$this->params['breadcrumbs'][] = $this->title;
//$this->params['breadcrumbs'][] = '';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row" >
            <?php foreach ($news as $news_one) { ?>
                <div class="col-lg-12 news-item" data-news-id="<?=$news_one->news_id?>">
                    <h2><?=$news_one->news_name;?></h2 >
                    <p> <?=substr($news_one->news_text, 0, 500) . '...';?></p>
                    <p><a class="btn btn-default" href = "<?=Yii::$app->homeUrl?>site/news/<?=$news_one->news_id;?>">Read more</a></p>
                </div >
            <?php }?>
        </div >
    </div>
</div>
