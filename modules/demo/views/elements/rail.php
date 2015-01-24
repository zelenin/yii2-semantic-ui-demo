<?php

use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Rail';

Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        Elements::rail(Elements::segment('Left content'), ['class' => 'left']) .
        Elements::rail(Elements::segment('Right content'), ['class' => 'right']),
        ['style' => 'min-height:300px;']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    Elements::rail(Elements::segment('Left content'), ['class' => 'left']) .
    Elements::rail(Elements::segment('Right content'), ['class' => 'right']),
    ['style' => 'min-height:300px;']
);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::segment(
        Elements::rail(Elements::segment('Left content'), ['class' => 'left internal']) .
        Elements::rail(Elements::segment('Right content'), ['class' => 'right internal']),
        ['style' => 'min-height:300px;']
    ),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::segment(
    Elements::rail(Elements::segment('Left content'), ['class' => 'left internal']) .
    Elements::rail(Elements::segment('Right content'), ['class' => 'right internal']),
    ['style' => 'min-height:300px;']
);
PHP
]) ?>
