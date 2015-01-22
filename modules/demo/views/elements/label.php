<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Label';
?>

<?= Elements::header('Label') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::label(Elements::icon('mail') . '23'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::label(Elements::icon('mail') . '23');
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::label('Dogs<div class="detail">214</div>'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::label('Dogs<div class="detail">214</div>');
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::label('Witty' . Elements::icon('close')),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::label('Witty' . Elements::icon('close'));
PHP
]) ?>
