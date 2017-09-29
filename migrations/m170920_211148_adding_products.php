<?php

use yii\db\Migration;

class m170920_211148_adding_products extends Migration
{

//    private function gener($length = 1) {
//        $abc = 'abcdefghijklmnopqrstuvwxyz';
//        $gener = 'abcdefghijklmnopqrstuvwxyz .,';
//
//        $result = '';
//
//        if ($length < 26) {
//            while (strlen($result) < $length)
//                $result .= $abc[random_int(0, strlen($abc) - 1)];
////            ucfirst($result);
//        } else {
//
//            while (strlen($result) < $length) {
//                $result .= $gener[random_int(0, strlen($gener) - 1)];
//
//                if ($result[strlen($result) - 1] == '.')
//                {
//                    $result .= ' ' . ucfirst($abc[random_int(0, strlen($abc) - 1)]);
//                }
//                if ($result[strlen($result) - 1] == ',')
//                {
//                    $result .= ' ';
//                }
//            }
//        }
//
//        return $result;
//    }

    public function safeUp()
    {
        $lipsum = new joshtronic\LoremIpsum();
        $rando = random_int(20, 50);
        for ($i = 0; $i < $rando;$i++) {
            $url = "http://unsplash.it/1000/1000/?random";
//            $url = "https://unsplash.it/list";

//            $arr = [
//                'https://cameralabs.org/media/lab17/01/1-18/siena-monohrom_23.jpg',
//                'http://www.bwvision.com/wp-content/uploads/2016/02/NYC-Aerial-view.jpg',
//                'http://media.virbcdn.com/cdn_images/resize_1600x1600/78/007ddc19295f4082-DSC_0280-1-final-tumblr.jpg',
//                'https://ssl.c.photoshelter.com/img-get/I0000hzs.nq8dB1k/s/1000/Mountains-Fog-Snow-Mystical.jpg',
//                'https://www.phogro.com/wp-content/uploads/2012/07/lovebw.jpg',
//                'http://images.genius.com/bc1c77e114108af91ca19d9bbc99143a.1000x1000x1.jpg',
//                'https://ananasposter.ru/image/cache/catalog/postermax/travel/95/2008-1000x1000.jpg',
//                'https://static1.squarespace.com/static/56bf74dc86db43b5489facc9/56e5b1b3b654f908343291b7/56e5b1f22eeb8141411b7fe0/1457893887338/IMG_3313.JPG',
//                'https://static1.squarespace.com/static/563fc75be4b0ff71450b5fb9/59548b9046c3c4a781c6b7b1/59548b9b099c01adfc664697/1498713000443/Blue-ridge-mountains-film-wedding-charlottesville-photographer-4.jpg',
//                'https://i2.wp.com/www.homefortheharvest.com/wp-content/uploads/2016/07/Bellaflora-Nelson-Exterior-Container-Arrangement.jpg',
//                'http://static1.squarespace.com/static/53212406e4b09d85eb0bcdb9/532863dae4b0bea727f86bc3/59845b721e5b6c1be8a6709f/1501856627937/IMG_3837.jpg?format=1000w'
//            ];

            $filename = md5(rand(0, 9999) . microtime());
            $fnlength = strlen($filename);

            $uploaddir = Yii::$app->basePath . "/web/uploads/imgs/{$filename[$fnlength-1]}/";
            if (!is_dir($uploaddir)) $path = mkdir($uploaddir);

            $uploaddir = Yii::$app->basePath . "/web/uploads/imgs/{$filename[$fnlength-1]}/{$filename[$fnlength-2]}/";
            if (!is_dir($uploaddir)) $path = mkdir($uploaddir);

            if(is_writable($uploaddir)) {
                file_put_contents($uploaddir . $filename . '.jpg', file_get_contents($url));
                $this->insert(
                    'products',
                    [
                        'product_name' => ucfirst($lipsum->word()),
                        'product_descr' => $lipsum->sentences(50),
                        'product_img' => $filename
                    ]
                );
            } else {
                exit("Failed to write to directory { $uploaddir }");
            }
        }
    }

    public function safeDown()
    {
        $this->truncateTable('products');
    }
}
