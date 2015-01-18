<?php

namespace app\modules\demo\widgets;

use app\modules\demo\widgets\assets\HiglightJsAsset;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\View;

class Example extends Widget
{
    public $titleTemplate = '<div class="ui basic top attached red inverted segment"><strong>{title}</strong></div>';
    public $demoTemplate = '<div class="ui attached segment">{demo}</div>';
    public $codeTemplate = '<div class="ui bottom attached secondary segment"><pre><code class="php">{code}</code></pre></div>';

    public $title = 'Example';
    public $demo;
    public $code;

    public function run()
    {
        $view = Yii::$app->getView();
        HiglightJsAsset::register($view);
        $view->registerJs('hljs.initHighlightingOnLoad();', View::POS_END);

        return
            strtr($this->titleTemplate, ['{title}' => $this->title]) .
            strtr($this->demoTemplate, ['{demo}' => $this->demo]) .
            strtr($this->codeTemplate, ['{code}' => Html::encode($this->code)]);
    }
}
