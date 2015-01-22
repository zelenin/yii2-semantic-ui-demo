<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Image';
?>

<?= Elements::header('Image') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::image('/images/image.png', ['class' => 'small']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::image('/images/image.png', ['class' => 'small']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::image('/images/image.png', ['class' => 'medium disabled']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::image('/images/image.png', ['class' => 'medium disabled']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::image('/images/image.png', ['class' => 'medium bordered rounded centered']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::image('/images/image.png', ['class' => 'medium bordered rounded centered']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::image('/images/image.png', ['class' => 'tiny right floated']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::image('/images/image.png', ['class' => 'tiny right floated']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::imagesGroup(
        Elements::image('/images/image.png') .
        Elements::image('/images/image.png') .
        Elements::image('/images/image.png'),
        ['class' => 'tiny']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::imagesGroup(
    Elements::image('/images/image.png') .
    Elements::image('/images/image.png') .
    Elements::image('/images/image.png'),
    ['class' => 'tiny']
);
PHP
]) ?>
