<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Flag';
?>

<?= Elements::header('Flag') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::flag('us'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::flag('us');
PHP
]) ?>
