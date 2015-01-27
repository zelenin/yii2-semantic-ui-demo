<?php
/**
 * @var View $this
 * @var string $content
 */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\View;

AppAsset::register($this);

/** @var Controller $controller */
$controller = $this->context;
$module = $controller->module;

$this->beginPage();
?>
    <!doctype html>
    <html>
    <head>
        <?php
        echo Html::csrfMetaTags();
        echo Html::tag('title', Html::encode($this->title)) . "\n";
        $this->registerMetaTag(['charset' => Yii::$app->charset]);
        $this->registerMetaTag(['name' => 'description', 'content' => '']);
        $this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1']);
        $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1']);
        $this->registerMetaTag(['name' => 'SKYPE_TOOLBAR', 'content' => 'SKYPE_TOOLBAR_PARSER_COMPATIBLE']);
        $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => '/favicon.ico']);
        $this->head();
        ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <?= $controller->renderPartial('@app/modules/demo/views/layouts/_topmenu') ?>

    <div class="ui centered padded stackable grid">
        <div class="three wide column"><?= $controller->renderPartial('@app/modules/demo/views/layouts/_menu') ?></div>
        <div class="ten wide column" id="content"><?= $content ?></div>
    </div>

    <?= $controller->renderPartial('@app/modules/demo/views/layouts/_ga') ?>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php
$this->endPage();
