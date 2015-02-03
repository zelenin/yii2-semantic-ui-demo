<?php

use app\modules\demo\widgets\Example;
use yii\helpers\Html;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Input';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Elements::input(Html::input('text', null, null, ['placeholder' => 'Search…'])),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::input(Html::input('text', null, null, ['placeholder' => 'Search…']));
PHP
]) ?>

<?= Example::widget([
    'demo' => Elements::input(
        Html::input('text', null, null, ['placeholder' => 'Search…']) . Elements::icon('search'),
        ['class' => 'left icon loading']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::input(
    Html::input('text', null, null, ['placeholder' => 'Search…']) . Elements::icon('search'),
    ['class' => 'left icon loading']
);
PHP
]) ?>

<?= Example::widget([
    'demo' => Elements::input(Html::input('text', null, null, ['placeholder' => 'Search…']), ['class' => 'error']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::input(Html::input('text', null, null, ['placeholder' => 'Search…']), ['class' => 'error']);
PHP
]) ?>

<?= Example::widget([
    'demo' => Elements::input(
        Elements::button(
            Elements::icon('cart') . 'Checkout',
            ['class' => 'teal labeled icon']
        ) . Html::input('text', null, '$52.03'),
        ['class' => 'left action']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::input(
    Elements::button(
        Elements::icon('cart') . 'Checkout',
        ['class' => 'teal labeled icon']
    ) . Html::input('text', null, '$52.03'),
    ['class' => 'left action']
);
PHP
]) ?>

<?= Example::widget([
    'demo' => Elements::input(
        Html::input('text', null, null, ['placeholder' => 'Search…']) . Elements::icon('search'),
        ['class' => 'mini fluid icon']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::input(
    Html::input('text', null, null, ['placeholder' => 'Search…']) . Elements::icon('search'),
    ['class' => 'mini fluid icon']
);
PHP
]) ?>
