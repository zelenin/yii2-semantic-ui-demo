<?php

use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Button';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::button('Follow'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::button('Follow');
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::button('Save', ['class' => 'primary']) . Elements::button('Discard'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::button('Save', ['class' => 'primary']);
echo Elements::button('Discard');
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::button(Elements::icon('pause') . 'Pause', ['class' => 'labeled icon']) . Elements::button(Elements::icon('right arrow') . 'Next', ['class' => 'right labeled icon']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::button(Elements::icon('pause') . 'Pause', ['class' => 'labeled icon']);
echo Elements::button(Elements::icon('right arrow') . 'Next', ['class' => 'right labeled icon']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::buttonsGroup(Elements::button('One') . Elements::button('Two') . Elements::button('Three')),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::buttonsGroup(
    Elements::button('One') .
    Elements::button('Two') .
    Elements::button('Three')
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::buttonsGroup(Elements::button('Cancel') . '<div class="or"></div>' . Elements::button('Save', ['class' => 'positive'])),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::buttonsGroup(
    Elements::button('Cancel') .
    '<div class="or"></div>' .
    Elements::button('Save', ['class' => 'positive'])
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::button('Save', ['class' => 'loading']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::button('Save', ['class' => 'loading']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::button('Save', ['class' => 'small']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::button('Save', ['class' => 'small']);
PHP
]) ?>
