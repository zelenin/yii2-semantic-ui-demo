<?php

use Zelenin\yii\SemanticUI\Elements;

$this->title = 'List';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::listWrapper(
        Elements::listItem('Apples') .
        Elements::listItem('Pears') .
        Elements::listItem('Oranges'),
        ['class' => 'celled']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::listWrapper(
    Elements::listItem('Apples') .
    Elements::listItem('Pears') .
    Elements::listItem('Oranges'),
    ['class' => 'celled']
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::listWrapper(
        Elements::listItem('Apples', ['tag' => 'li']) .
        Elements::listItem('Pears', ['tag' => 'li']) .
        Elements::listItem('Oranges', ['tag' => 'li']),
        ['tag' => 'ol']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::listWrapper(
    Elements::listItem('Apples', ['tag' => 'li']) .
    Elements::listItem('Pears', ['tag' => 'li']) .
    Elements::listItem('Oranges', ['tag' => 'li']),
    ['tag' => 'ol']
);
PHP
]) ?>
