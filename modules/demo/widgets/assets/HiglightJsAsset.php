<?php

namespace app\modules\demo\widgets\assets;

use yii\web\AssetBundle;

class HiglightJsAsset extends AssetBundle
{
    public function init()
    {
        $this->css[] = '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/idea.min.css';
        $this->js[] = '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js';

        parent::init();
    }
}
