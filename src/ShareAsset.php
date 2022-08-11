<?php

namespace ityakutia\share;

use yii\web\AssetBundle;

class ShareAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/share/assets';
    
    public $css = [
        'widget.css',
    ];
    public $js = [
        '//cdn.jsdelivr.net/npm/share-buttons/dist/share-buttons.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
