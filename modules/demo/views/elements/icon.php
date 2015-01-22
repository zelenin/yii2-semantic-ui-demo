<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Icon';
?>

<?= Elements::header('Icon') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::icon('alarm'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::icon('alarm');
PHP
]) ?>
