<?php

namespace app\assets;

use yii\web\AssetBundle;

class ClientAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам
    public $css = [
        'css/list-style.css'/*,
        'css/client-style.css',
        'css/site.css'*/
    ];
    public $js = [
        'js/client-script.js',
        'js/jquery.maskedinput-1.2.2.js'
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
?>