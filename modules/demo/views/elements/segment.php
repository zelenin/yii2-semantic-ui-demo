<?php

use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Segment';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment('Content'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment('Content');
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        Elements::segment('Content', ['class' => 'vertical']) .
        Elements::segment('Content', ['class' => 'vertical']) .
        Elements::segment('Content', ['class' => 'vertical'])
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    Elements::segment('Content', ['class' => 'vertical']) .
    Elements::segment('Content', ['class' => 'vertical']) .
    Elements::segment('Content', ['class' => 'vertical'])
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment('Content', ['class' => 'tall stacked']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment('Content', ['class' => 'tall stacked']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment('Content', ['class' => 'loading']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment('Content', ['class' => 'loading']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment('Content', ['class' => 'top attached']) .
        Elements::segment('Content', ['class' => 'attached']) .
        Elements::segment('Content', ['class' => 'bottom attached']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment('Content', ['class' => 'top attached']) .
    Elements::segment('Content', ['class' => 'attached']) .
    Elements::segment('Content', ['class' => 'bottom attached']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment('Content', ['class' => 'blue inverted']) .
        Elements::segment('Content', ['class' => 'orange inverted']) .
        Elements::segment('Content', ['class' => 'green inverted']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment('Content', ['class' => 'blue inverted']) .
    Elements::segment('Content', ['class' => 'orange inverted']) .
    Elements::segment('Content', ['class' => 'green inverted']);
PHP
]) ?>
