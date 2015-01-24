<?php

use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Loader';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        'Content' . Elements::dimmer(Elements::loader(), ['class' => 'active'])
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    'Content' . Elements::dimmer(Elements::loader(), ['class' => 'active'])
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        'Content' . Elements::dimmer(Elements::loader('Loading', ['class' => 'text']), ['class' => 'active']),
        ['style' => 'min-height:100px;']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    'Content' . Elements::dimmer(Elements::loader('Loading', ['class' => 'text']), ['class' => 'active']),
    ['style' => 'min-height:100px;']
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        'Content' . Elements::loader('', ['class' => 'active'])
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    'Content' . Elements::loader('', ['class' => 'active'])
);
PHP
]) ?>
