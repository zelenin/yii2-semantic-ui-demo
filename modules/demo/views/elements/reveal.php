<?php

use yii\helpers\Html;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Reveal';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::reveal(
        Html::img('/images/invention.jpg', ['class' => 'visible content']) .
        Html::img('/images/title.png', ['class' => 'hidden content']),
        ['class' => 'fade']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::reveal(
    Html::img('/images/invention.jpg', ['class' => 'visible content']) .
    Html::img('/images/title.png', ['class' => 'hidden content']),
    ['class' => 'fade']
);
PHP
]) ?>
